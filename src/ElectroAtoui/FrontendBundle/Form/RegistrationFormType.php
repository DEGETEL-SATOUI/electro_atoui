<?php
namespace ElectroAtoui\FrontendBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

use ElectroAtoui\CoreBundle\Form\UserProfileType;


class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add(
            'profile',
            new UserProfileType()
        );
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => "ElectroAtoui\CoreBundle\Entity\User"
        ));
    }


    public function getName()
    {
        return 'user_registration';
    }
}
