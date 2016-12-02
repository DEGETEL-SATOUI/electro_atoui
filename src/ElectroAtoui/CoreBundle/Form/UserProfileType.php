<?php
namespace ElectroAtoui\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;


class UserProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', 'choice', array(
                'choices' => array(
                    'Monsieur' => 'Monsieur',
                    'Madame' => 'Madame'
                ),
                'placeholder' => false,
                'multiple' => false,
                'required' => false,
                'label' => false,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('first_name', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le Nom ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('last_name', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le Prénom ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('phone', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le Téléphone ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('address', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'L\'adresse ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('address_complement', null, array(
                'required' => false,
                'label' => false,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('city', null, array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'La ville ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('zip_code', 'text', array(
                'required' => false,
                'label' => false,
                'constraints' => array(
                    new NotBlank(array(
                    'message' => 'Le Code postal ne doit pas être vide !',
                )),
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElectroAtoui\CoreBundle\Entity\UserProfile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'electroatoui_corebundle_userprofile';
    }
}
