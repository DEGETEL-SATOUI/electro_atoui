<?php
namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategoryController extends Controller
{
    public function detailAction($slug)
    {
        $em       = $this->getDoctrine()->getManager();
        $category = $em->getRepository('CoreBundle:Category')->findOneBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('Page introuvable!');
        }

        $products = $category->getProducts();
        if ($products) {
            $products = $em->getRepository('CoreBundle:Product')->retrieveByPks(
                $products,
                $this->get('request')->query
            );
        }

        $pagination = $this->get('knp_paginator')->paginate(
            $products,
            $this->get('request')->query->get('page', 1),
            9
        );
        $pagination->setTemplate('FrontendBundle:Default:pagination.html.twig');
        $pagination->setSortableTemplate('FrontendBundle:Default:sortable_option.html.twig');

        return $this->render(
            'FrontendBundle:Default:products/category.html.twig',
            array(
                'category' => $category,
                'products' => $pagination,
            )
        );
    }
}
