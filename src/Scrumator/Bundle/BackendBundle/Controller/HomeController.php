<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/accueil" , name="accueil")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrumatorBackendBundle:Project')->findAll();

        return array(
            'entities' => $entities,
        );

    }
    
    
    
    /**
     * @Route("/project_choose/{project_id}", name="project_choose")
     * @Template()
     */
    public function chooseAction($project_id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $session->set('project_id', $project_id);
        
        return $this->redirect($this->generateUrl('user_stories'));

    }
    
     /**
     * @Route("/ajaxcall", name="ajaxCall")
     */
    public function ajaxCall(Request $request) {
        
        
        return new Response("Bonjour " . $request->get('nom'));
    }
}