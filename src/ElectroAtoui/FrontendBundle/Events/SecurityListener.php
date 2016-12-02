<?php
namespace ElectroAtoui\FrontendBundle\Events;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;


class SecurityListener
{
    private $security_context;
    private $session;


    public function __construct(ContainerInterface $container)
    {
        $this->router = $container->get('router');
        $this->security_context = $container->get('security.context');
    }


    public function onKernelRequest(GetResponseEvent $event)
    {
        $route = $event->getRequest()->attributes->get('_route');

        if (in_array($route, array('fos_user_security_login', 'fos_user_registration_register'))
          && $this->security_context->isGranted('IS_AUTHENTICATED_FULLY')) {
            $event->setResponse(new RedirectResponse($this->router->generate('_frontend_homepage')));
        }
    }
}