<?php 

    namespace AppBundle\EventListener;

    use FOS\UserBundle\FOSUserEvents;
    use FOS\UserBundle\Event\FormEvent;
    use Symfony\Component\EventDispatcher\EventSubscriberInterface;
    

    class RegistrationListener implements EventSubscriberInterface
    {
        public static function getSubscribedEvents()
        {
            return array(
                FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
            );
        }

        public function onRegistrationSuccess(FormEvent $event)
        {

            $rolesArrAdmin = array('ROLE_ADMIN');
            $rolesArrUser  = array('ROLE_USER');
            $rolesArrDev   = array('ROLE_DEV');
            $form          = $event->getForm();
            $typeCompte    = $form['type_compte']->getData();
            if($typeCompte == 'Prothésiste' || $typeCompte == 'Dentiste'){
                $user = $event->getForm()->getData();
                $user->setRoles($rolesArrUser);
            }elseif ($typeCompte == 'Dev') {
                $user = $event->getForm()->getData();
                $user->setRoles($rolesArrDev);
            }
            else{
                  
                $user = $event->getForm()->getData();
                $user->setRoles($rolesArrAdmin);
            }

          
        }
    }