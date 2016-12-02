<?php
namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $last_products = $em->getRepository('CoreBundle:Product')->getLastProducts(10);
        $rand_products = $em->getRepository('CoreBundle:Product')->getLastProducts(3);

        $session = $this->getRequest()->getSession();
        $cart = $session->get('cart');

        return $this->render('FrontendBundle:Default:home.html.twig', array(
            'last_products' => $last_products,
            'rand_products' => $rand_products,
            'cart_count' => $cart != null ? $cart->getCountItems() : 0,
        ));
    }


    public function accountAction()
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        return $this->render(
            'FrontendBundle:Default:account.html.twig',
            array()
        );
    }


    public function displayCartAction()
    {
        $session = $this->getRequest()->getSession();

        return $this->render(
            'FrontendBundle:Default:cart/display_cart.html.twig',
            array('cart' => $session->get('cart'))
        );
    }


    public function navBarAction()
    {
        $session = $this->getRequest()->getSession();
        $cart = $session->get('cart');

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CoreBundle:Category')->getCategories();

        return $this->render('FrontendBundle:Default:nav_bar.html.twig', array(
            'cart_count' => $cart != null ? $cart->getCountItems() : 0,
            'categories' => $categories,
        ));
    }


    public function displayCategoriesAction()
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('CoreBundle:Category');
        $options = array(
            'decorate' => true,
            'rootOpen' => '<ul class="menu">',
            'rootClose' => '</ul>',
            'childOpen' => '<li>',
            'childClose' => '</li>',
            'nodeDecorator' => function($node) {
                return '<a href="'
                    .$this->generateUrl('_category_detail', array('slug' => $node['slug'])).'">'
                    .$node['name'].'</a>';
            }
        );

        return $this->render(
            'FrontendBundle:Default:products/display_categories.html.twig',
            array('categories' => $repo->buildTree($repo->getTree(), $options))
        );
    }


    public function displaySalesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('CoreBundle:Product')->findBy(array('for_sale' => 1));

        return $this->render(
            'FrontendBundle:Default:products/display_sales.html.twig',
            array('products' => $products)
        );
    }
}
