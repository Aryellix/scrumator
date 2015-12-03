<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
     /**
     * @Route("/bonjour/{name}")
     * @Template()
     */
    public function salomeAction($name)
    {
        if ($name=='salome'){
            $phrase='Bonjour';
        }
        elseif ($name=='max'){
            $phrase='Au revoir';
        }
        
        return array(
            'nom' => $name,
            'phrase' => $phrase
        );
      
        
    }
}
