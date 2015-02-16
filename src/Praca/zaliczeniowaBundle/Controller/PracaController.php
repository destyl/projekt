<?php

    
    namespace Praca\zaliczeniowaBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Symfony\Component\HttpFoundation\Request;

    use Praca\zaliczeniowaBundle\Helper\Journal\Journal;
    use Praca\zaliczeniowaBundle\Helper\DataProvider;
    //use Praca\zaliczeniowaBundle\Form\Type\RegisterType;
    //use Praca\zaliczeniowaBundle\Entity\Register;

    class PracaController extends Controller {
        
        /**
        *
        *@Route ("/")
        *
        *@Template
        */

        public function baseAction()
        {

            $login = $this ->createFormBuilder()
                    ->add('login', 'text', array(
                            'label' => 'User'
                        ))
                    ->add('pass', 'text', array(
                            'label' => 'Hasło'
                        ))
                    ->add('save', 'submit', array(
                            'label' => 'ZALOGUJ'
                        ))
                    ->getForm();


           return array(
                'login' =>$login->createView()
                );
        }

        /**
         * @Route(
         *      "/rejestracja",
         *      name="rejestracja"
         * )
         *
         * @Template
         */
        public function registerAction(Request $Request){
            
            $form = $this->createFormBuilder()
                    ->add('name', "text", array(
                            'label' => 'Imie i Nazwisko'
                        ))
                    ->add('email', 'email')
                    ->add('sex', 'choice', array(
                        'label' => 'Płeć',
                        'choices' =>array(

                            'm' => 'Mężczyzna',
                            'f' => 'Kobieta'
                            ),
                        'expanded' => true
                        ))
                    ->add('birthday', 'birthday', array(

                        'empty_value' => '--',
                        'empty_data' => NULL
                        ))
                    ->add('country', 'country', array(
                        'label' => 'Kraj',
                        'empty_value' => '--',
                        'empty_data' => NULL))
                    ->add('rules', 'checkbox', array(
                            'label'=> 'Akceptacja Regulaminu'
                        ))
                    ->add('save', 'submit', array(
                            'label'=> 'Zapisz'
                            ))
                    ->getForm();



            return array(
                'form' =>$form->createView()
                );

        }
    }
?>