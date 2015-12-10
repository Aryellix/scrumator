<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        
         $em = $this->getDoctrine()->getManager();
         $user_id = $request->query->get('user_id');
         $user = $em->getRepository('AppBundle:User')->find($user_id);
         $project_id = $request->query->get('project_id');
         $project = $em->getRepository('ScrumatorBackendBundle:Project')->find($project_id);
         
         if($project && $user){
             $user_project_link = $em->getRepository('ScrumatorBackendBundle:user_project_link')->findOneBy(array(
                'project'=>$project,
                'user'=>$user
            )); 
             if($user_project_link){
                 $user_project_link->setLastConnection();
                 $em->persist($user_project_link);
                 $em->flush();
             }
         }
         
         else{
             $user_project_link = NULL;
         }
         
         
         $users_project_link = $em->getRepository('ScrumatorBackendBundle:user_project_link')->findBy(array(
                'project'=>$project,
        ));
         
         $result=[];
         $today= new \DateTime('now');
         $maxInterval= new \DateInterval('PT30S');
         
        foreach ($users_project_link as $value){
            
            $connected=FALSE;
            
           if($value->getLastConnection()){
            $interval=$value->getLastConnection()->diff($today);
            
            
            
                if($interval->format('%Y%m%d%H%I%S') < $maxInterval->format('%Y%m%d%H%I%S')){
                    $connected=TRUE;
                }
            
           }
           
           else{
               $interval=NULL;
           }
           
            $result[$value->getUser()->getId()]=array(
                'lastConnection'=>$value->getLastConnection(),
                'interval'=> $interval,
                'connected'=>$connected
            ) ;
        }
        
        $reponse = new JsonResponse();
        $reponse->setData($result);
        
        return $reponse;
    }
    
}
