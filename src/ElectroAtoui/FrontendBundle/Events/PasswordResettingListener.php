<?php
namespace ElectroAtoui\FrontendBundle\Events;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class PasswordResettingListener implements EventSubscriberInterface
{
    private $router;


    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }


    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess',
            FOSUserEvents::CHANGE_PASSWORD_SUCCESS => 'onPasswordChangeSuccess',
        );
    }


    public function onPasswordResettingSuccess(FormEvent $event)
    {
        $url = $this->router->generate('_user_account');

        $event->setResponse(new RedirectResponse($url));
    }


    public function onPasswordChangeSuccess(FormEvent $event)
    {
        $url = $this->router->generate('fos_user_change_password');

        $event->setResponse(new RedirectResponse($url));
    }
}