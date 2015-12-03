<?php

namespace Scrumator\Bundle\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Test1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite')    
            ->add('name')
            ->add('firstname')
            ->add('age')
            ->add('birthdate')
            ->add('ville')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Scrumator\Bundle\BackendBundle\Entity\Test1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrumator_bundle_backendbundle_test1';
    }
}
