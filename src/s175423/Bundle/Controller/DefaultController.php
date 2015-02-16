<?php

namespace s175423\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('s175423Bundle:Default:index.html.twig', array('name' => $name));
    }
}
