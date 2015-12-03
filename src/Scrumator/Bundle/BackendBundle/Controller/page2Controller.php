<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class page2Controller extends Controller
{
    /**
     * @Route("/page2", name="page2")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

}
