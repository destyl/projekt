<?php

namespace Mickiewicz\TadeuczBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ReflectionController extends Controller
{
    public function indexAction()
    {
        return $this->render('MickiewiczTadeuczBundle:Reflection:index.html.twig', array());
    }
	public function addAction(Request $request){
	
		$reflection = new Reflection();
		$form = createForm(new ReflectionTyp(), $reflection);
	
		//return Sthis->render('MickiewiczTadeuczBundle:Reflection:add.html.twig', array('form'=>$form->vreateView()));
	}
}
