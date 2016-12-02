<?php

namespace ElectroAtoui\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ElectroAtoui\CoreBundle\Entity\Contact;
use ElectroAtoui\CoreBundle\Form\ContactType;


class ContactController extends Controller
{
    public function contactAction()
    {
        $entity  = new Contact();
        $form    = $this->createForm(new ContactType(), $entity);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                $message = \Swift_Message::newInstance()
                    ->setContentType('text/plain')
                    ->setSubject($entity->getSubject())
                    ->setFrom('no_reply@electro_el_atoui.tn')
                    ->setTo($entity->getEmail())
                    ->setBody(
                        "Bonjour,\n\n"
                        ."Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.\n\n"
                        ."----------------------\n"
                        ."Votre Message:\n"
                        .$entity->getEnquiry()."\n\n"
                        ."Cordialement,\nService Client Electro El Atoui"
                    );
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.'
                );
                return $this->redirect($this->generateUrl('_contact'));
            }
        }

        return $this->render('FrontendBundle:Default:contact\contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
