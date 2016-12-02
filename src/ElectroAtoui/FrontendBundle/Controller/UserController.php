<?php
namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use ElectroAtoui\CoreBundle\Entity\UserProfile;
use ElectroAtoui\CoreBundle\Form\UserProfileType;


class UserController extends Controller
{
    public function profileAction()
    {
        $request = $this->getRequest();
        $user    = $this->get('security.context')->getToken()->getUser();

        if (!$user->getProfile()) {
            $profile = new UserProfile();
            $is_new  = true;
        } else {
            $profile = $user->getProfile();
            $is_new  = false;
        }

        $form = $this->createForm(new UserProfileType(), $profile);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                if ($is_new) {
                    $user->setProfile($profile);
                    $em->persist($profile);
                }
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Votre profil est bien modifié'
                );
                return $this->redirect($this->generateUrl('_user_profile'));
            }
        }

        return $this->render(
            'FrontendBundle:Default:user/profile.html.twig', array(
                'form'    => $form->createView()
        ));
    }


    public function downloadFactureAction()
    {
        $em = $this->getDoctrine()->getManager();

        $file_name = 'Facture.pdf';

        $this->container->get('FactureToPdf')
                    ->generate(
                        'FrontendBundle:Default:user/facture.html.twig',
                        array(
                            'facture' => array(),
                        )
                    )
                    ->Output('Facture.pdf', 'D');

        $response = new Response();
        $response->headers->set('Content-type' , 'application/force-download');
        $response->headers->set('Pragma' , 'no-cache');
        $response->headers->set('Cache-Control' , 'no-cache, must-revalidate');
        return $response;
    }


    public function ordersAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/orders.html.twig', array(
        ));
    }


    public function orderAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/order.html.twig', array(
        ));
    }


    public function favoriesAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/favoris.html.twig', array(
        ));
    }


    public function addFavorieAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/address.html.twig', array(
        ));
    }


    public function deleteFavorieAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/address.html.twig', array(
        ));
    }


    public function addressAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/address.html.twig', array(
        ));
    }


    public function addAddressAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/edit_address.html.twig', array(
        ));
    }


    public function updateAddressAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/edit_address.html.twig', array(
        ));
    }


    public function deleteAddressAction()
    {
        return $this->render(
            'FrontendBundle:Default:user/address.html.twig', array(
        ));
    }

}
