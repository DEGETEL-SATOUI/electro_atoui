<?php
namespace ElectroAtoui\FrontendBundle\Events;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

use ElectroAtoui\FrontendBundle\Utils\Cart\Cart;


class CartListener
{
    private $security_context;
    private $session;


    public function __construct(ContainerInterface $container, Session $session)
    {
        $this->session = $session;
        $this->security_context = $container->get('security.context');
    }


    public function onKernelRequest(GetResponseEvent $event)
    {
        if ($this->session->has('cart')
          && $this->security_context->isGranted('IS_AUTHENTICATED_FULLY')) {
            $cart = $this->session->get('cart');

            if ($cart && !$cart->getUser()) {
                $cart->setUser($this->security_context->getToken()->getUser());
            } elseif (!$cart) {
                $cart = new Cart($this->security_context->getToken()->getUser());
            }

            $this->session->set('cart', $cart);
        }
    }
}