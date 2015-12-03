<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PokerController extends Controller
{
    /**
     * @Route("/display/{id}", name="display")
     * @Template()
     */
    public function displayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user_story = $em->getRepository('ScrumatorBackendBundle:User_stories')->getOne($id);
        $usersLink=$em->getRepository('ScrumatorBackendBundle:user_project_link')->findBy(array(
            'project'=> $user_story[0]->getProject())
            );
        
        return array(
            "user_story"=>$user_story[0],
            "usersLink"=>$usersLink,
                
            );    }

    /**
     * @Route("/pokerconnection", name="pokerConnection")
     * @Template()
     */
    public function pokerConnectionAction(Request $request) {
        
        var_dump($request->query->get('user_id'));
        
        return new Response();
    }
    
}
