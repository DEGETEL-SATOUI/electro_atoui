<?php
namespace ElectroAtoui\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le nom doit être compris entre 3 et 32 ​​caractères!',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('email', 'email', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Adresse E -Mail n\'est pas valide!',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('subject', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le sujet doit être compris entre 10 et 90 ​​caractères !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('enquiry', 'textarea', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le message doit être compris entre 100 et 500 ​​caractères !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'rows' => '10'
                )
            ))
        ;
    }


    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'ElectroAtoui\FrontendBundle\Entity\Contact',
        );
    }


    public function getName()
    {
        return 'front_contact';
    }
}
