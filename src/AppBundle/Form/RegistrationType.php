<?php
    // src/AppBundle/Form/RegistrationType.php

    namespace AppBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\HiddenType;

    class RegistrationType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        { 
            $builder->add('type_compte',  ChoiceType::class, array(
                'attr'  =>  array('class' => 'form-control'),
                'choices'  => array(
                    'Dentiste' => 'Dentiste',
                    'Prothésiste' => 'Prothésiste',
                    'STAFF' => 'STAFF',
                    'Dev' => 'Dev'
                    )
                )
        );
         
            $builder->add('first_name');
            $builder->add('last_name');
           
        }

        public function getParent()
        {
            return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        }

        public function getBlockPrefix()
        {
            return 'app_user_registration';
        }

       
        public function getName()
        {
            return $this->getBlockPrefix();
        }
    }