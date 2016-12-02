<?php
namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use ElectroAtoui\CoreBundle\Entity\Rate;
use ElectroAtoui\CoreBundle\Entity\Vote;


class ProductController extends Controller
{
    public function detailAction($slug)
    {
        $em      = $this->getDoctrine()->getManager();
        $product = $em->getRepository('CoreBundle:Product')->findOneBySlug($slug);

        if (!$product) {
            throw $this->createNotFoundException('Page introuvable!');
        }

        $products = $em->getRepository('CoreBundle:Product')->findRelated($product);

        return $this->render(
            'FrontendBundle:Default:products/product_detail.html.twig', array(
                'product'          => $product,
                'related_products' => $products,
        ));
    }


    public function searchAction()
    {
        $request = $this->getRequest();

        if ($request->isXMLHttpRequest()) {
            $q             = $request->query->get('query');
            $cache_manager = $this->container->get('liip_imagine.cache.manager');
            $finder        = $this->get('fos_elastica.finder.electro_el_atoui.product');

            $products = $finder->find($q);
            $src      = $cache_manager->getBrowserPath('uploads/product.png', 'product_47');

            $data = array();
            foreach($products as $product) {
                $data[] = array(
                    'id' => $product->getId(),
                    'slug' => $product->getSlug(),
                    'name' => $product->getName(),
                    'image' => $src,
                );
            }

            return new JsonResponse($data);
        }

        throw $this->createNotFoundException('Page introuvable!');
    }


    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function rateAction($slug)
    {
        $request = $this->getRequest();

        if ($request->isXMLHttpRequest()) {
            if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
                return new JsonResponse(array('error' => 'Merci de se connecter pour voter'));
            }

            $em      = $this->getDoctrine()->getManager();
            $product = $em->getRepository('CoreBundle:Product')->findOneBySlug($slug);

            if (!$product) {
                throw $this->createNotFoundException('Page introuvable!');
            }

            $comment = trim($request->request->get('comment'));
            $rating  = $request->request->get('rating');
            $user    = $this->get('security.context')->getToken()->getUser();

            if (!$comment) {
                return new JsonResponse(array('error' => 'Le champ commentaire est obligatoire!'));
            }
            if (!$rating || $rating == 'undefined' || !is_numeric($rating)) {
                return new JsonResponse(array('error' => 'Le champ Vote est obligatoire!'));
            }

            $rate = $product->getRate();
            if (!$rate) {
                $rate = new Rate($product);
                $em->persist($rate);
                $em->flush();
            }

            $vote = new Vote($rate, $user);
            $vote->setValue((int) $rating);
            $vote->setComment($comment);
            $em->persist($vote);
            $em->flush();

            return new JsonResponse(array('success' => 'Merci d\'avoir voter pour ce produit'));
        }

        throw $this->createNotFoundException('Page introuvable!');
    }
}
