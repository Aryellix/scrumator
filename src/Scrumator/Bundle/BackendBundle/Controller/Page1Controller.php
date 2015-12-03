<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class Page1Controller extends Controller
{
    /**
     * @Route("/page1/{name}", name="page1")
     * @Template()
     */
    public function indexAction($name)
    {
        return array(
            'name'=>$name
        );  
    }

}
