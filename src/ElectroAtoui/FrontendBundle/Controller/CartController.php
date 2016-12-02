<?php
namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use ElectroAtoui\FrontendBundle\Utils\Cart\Cart;


class CartController extends Controller
{
    public function cartAction()
    {
        $session = $this->getRequest()->getSession();

        return $this->render('FrontendBundle:Default:cart\cart.html.twig', array(
            'cart' => $session->get('cart'),
        ));
    }


    public function addAction()
    {
        $request = $this->getRequest();
        $session = $this->getRequest()->getSession();

        if ($request->isXMLHttpRequest()) {
            $id = $request->request->get('product_id');
            $qt = $request->request->get('quantity');

            $em      = $this->getDoctrine()->getManager();
            $product = $em->getRepository('CoreBundle:Product')->find($id);

            if (!$product) {
                return new JsonResponse(array(
                    'success' => false,
                ));
            }

            if (!$session->has('cart') || !$session->get('cart')) {
                $cart = new Cart();
            } else {
                $cart = $session->get('cart');
            }

            $cart->addItem($product, $qt);
            $session->set('cart', $cart);

            $this->get('session')->getFlashBag()->add(
                'success',
                "Le produit {$product->getName()} a été bien ajouté au panier"
            );

            return new JsonResponse(array(
                'success' => true,
            ));
        }

        return new JsonResponse(array(
            'success' => false,
        ));
    }


    public function updateAction()
    {
        $request = $this->getRequest();
        $session = $this->getRequest()->getSession();

        if ($request->isXMLHttpRequest() && $session->get('cart')) {
            $id = $request->request->get('product_id');
            $qt = $request->request->get('quantity');

            $cart    = $session->get('cart');
            $em      = $this->getDoctrine()->getManager();
            $product = $em->getRepository('CoreBundle:Product')->find($id);

            if (!$product) {
                return new JsonResponse(array(
                    'success' => False,
                    'delete' => False,
                ));
            }

            $cart->updateItem($product, $qt);
            $item = $cart->getItem($product);
            $session->set('cart', $cart);

            if ($item) {
                return new JsonResponse(array(
                    'success' => True,
                    'delete' => False,
                    'total_p' => $item->getQuantity() * $product->getPrice(),
                    'rest' => $product->getQuantity() - $item->getQuantity(),
                    'quantity' => $item->getQuantity(),
                    'total_g' => $cart->getTotal(),
                ));
            } else {
                return new JsonResponse(array(
                    'success' => False,
                    'delete' => True,
                ));
            }
        }

        return new JsonResponse(array(
            'success' => False,
            'delete' => False,
        ));
    }


    public function removeAction()
    {
        $request = $this->getRequest();
        $session = $this->getRequest()->getSession();

        if ($request->isXMLHttpRequest() && $session->get('cart')) {
            $id      = $request->request->get('product_id');

            $cart    = $session->get('cart');
            $em      = $this->getDoctrine()->getManager();
            $product = $em->getRepository('CoreBundle:Product')->find($id);

            if ($product) {
                $cart->removeItem($product);
                $session->set('cart', $cart);

                $this->get('session')->getFlashBag()->add(
                    'success',
                    "Le produit {$product->getName()} a été bien supprimé du panier"
                );
            }
        }

        return new JsonResponse(array());
    }


    public function clearAction(Request $request)
    {

    }

}
