<?php

namespace Tipddy\OMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TipddyOMSBundle:Default:index.html.twig', array('name' => $name));
    }
}
