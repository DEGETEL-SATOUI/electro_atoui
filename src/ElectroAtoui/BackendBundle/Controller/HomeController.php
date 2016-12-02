<?php
namespace ElectroAtoui\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Default:index.html.twig', array());
    }

}
