<?php

namespace ElectroAtoui\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('reference')
            ->add('description')
            ->add('short_description')
            ->add('price')
            ->add('sale_price')
            ->add('for_sale')
            ->add('is_active')
            ->add('quantity')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('categories')
            ->add('rate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElectroAtoui\CoreBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'electroatoui_corebundle_product';
    }
}
