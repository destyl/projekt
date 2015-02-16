<?php

namespace Bartek\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($imie, $nazwisko="")
    {
        return $this->render('BartekHelloBundle:Default:index.html.twig', array('imie'=>$imie, 'nazwisko'=>$nazwisko));
    }
}
