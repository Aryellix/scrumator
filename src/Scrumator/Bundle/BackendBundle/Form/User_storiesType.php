<?php

namespace Scrumator\Bundle\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class User_storiesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('enTantQue')
            ->add('iWant')
            ->add('pour')
            ->add('points')
            ->add('project')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Scrumator\Bundle\BackendBundle\Entity\User_stories'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrumator_bundle_backendbundle_user_stories';
    }
}
