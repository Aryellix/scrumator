<?php

namespace Scrumator\Bundle\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text')
            ->add('plainPassword', 'repeated', array(
               'type' => 'password',
               'options' => array('translation_domain' => 'FOSUserBundle'),
               'first_options' => array('label' => 'form.password'),
               'second_options' => array('label' => 'form.password_confirmation'),
               'invalid_message' => 'fos_user.password.mismatch',))
            ->add('email', 'email')
            ->add('roles', 'choice', array(
                   'choices' => array('ROLE_SUPER_ADMIN' => 'Super Admin', 'ROLE_ADMIN' => 'Admin', 'ROLE_USER' => 'User'),
                   'required' => true,'multiple'=>'true'
               ))
            ->add('enabled', 'choice', array(
                   'choices' => array('0' => 'Disable', '1' => 'Anable'),
                   'required' => true,
               ))
            
           
        ;
    }

    public function getName()
    {
        return 'user';
    }
    
    public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\User',
    ));
}
}

