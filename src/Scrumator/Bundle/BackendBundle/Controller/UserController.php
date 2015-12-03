<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use Scrumator\Bundle\BackendBundle\Form\UserType;
use Scrumator\Bundle\BackendBundle\Entity\user_project_link;

class UserController extends Controller
{
    /**
     * @Route("/user_list", name="user_list")
     * @Template()
     */
    public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();
         
         $user=  $this->getUser();
         
         if ($user==$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')){
        

        $entities = $em->getRepository('AppBundle:User')->findAll();

        
        
         }
         else {
             
             $entities = [];
             $entities[]=$user;
             
         }
         
         return array(
            'entities' => $entities,
        );
     
    }
    
    
    /**
     * @Route("/user_new", name="user_new")
     * @Template()
     */
     public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $userManager=  $this->get('fos_user.user_manager');
        $user=$userManager->createUser();
       
       $form = $this->createForm(new UserType(), $user, array(
           'action'=> $this->generateUrl('user_create'), 
           'method' => 'POST'
        ));
       $form ->add('save', 'submit', array('label' => 'Create User'));
       

        return array(
            'form' => $form->createView(),
        );
    }
    
    /**
     * @Route("/user_create", name="user_create")
     * @Template()
     */
     public function createAction(Request $request)
     {
        $userManager=  $this->get('fos_user.user_manager');
        $user=$userManager->createUser();
        
          $form = $this->createForm(new UserType(), $user);
         
          $form->handleRequest($request);
          
          if ($form->isValid()) {
              $userManager->updateUser($user);
              
              return $this->redirect($this->generateUrl('user_list'));
          }
          else{
              die('ça chie dans la colle');
          }
     }
     
     /**
     * @Route("/user_edit/{user_id}", name="user_edit")
     * @Template()
     */
     public function editAction($user_id)
     {
        $em = $this->getDoctrine()->getManager();
        $user=$em->getRepository("AppBundle:User")->find($user_id);
         
        if(!$user){
            die('Go fuck yourself !');
        }
        
        //$userManager=  $this->get('fos_user.user_manager');
        //$user=$userManager->editUser();
       
        $form = $this->createForm(new UserType(), $user, array(
           'action'=> $this->generateUrl('user_update', array('user_id'=> $user->getId())), 
           'method' => 'POST'
        ));
       $form ->add('save', 'submit', array('label' => 'Edit User'));
        
        return array(
            'form' => $form->createView(),
        );
     }
     
     /**
     * @Route("/user_update/{user_id}", name="user_update")
     * @Template()
     */
     public function updateAction(Request $request, $user_id){
         $em = $this->getDoctrine()->getManager();
        $user=$em->getRepository("AppBundle:User")->find($user_id);
          $userManager=  $this->get('fos_user.user_manager');
        
        $form = $this->createForm(new UserType(), $user, array(
           'action'=> $this->generateUrl('user_update', array('user_id'=> $user->getId())), 
           'method' => 'POST'
        ));
       $form ->add('save', 'submit', array('label' => 'Edit User'));
        
       $form->handleRequest($request);
        
         if ($form->isValid()) {
              $userManager->updateUser($user);
              
              return $this->redirect($this->generateUrl('user_list'));
          }
          else{
              die('ça chie dans la colle');
          }
     }

     /**
     * @Route("/switch_user/{user_id}", name="switch_user")
     * @Template()
     */
     public function switchAction($user_id) {
         $em = $this->getDoctrine()->getManager();
        $user=$em->getRepository("AppBundle:User")->find($user_id);
          $userManager=  $this->get('fos_user.user_manager');
       
        if(!$user){
            die('Go fuck yourself');
        }
       
        if($user->isEnabled()){
            
            $user->setEnabled(false);
            
        }
        
        else{
            $user->setEnabled(true);
        }
        
        $userManager->updateUser($user);
        
       return $this->redirect($this->generateUrl('user_list'));
         
     }
     
     
     /**
     * @Route("/switchprojectuser", name="switchProjectUser")
     */
     public function switchProjectUser(Request $request) {
       
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository("ScrumatorBackendBundle:Project")->find($request->query->get('projectId'));
        $user = $em->getRepository("AppBundle:User")->find($request->query->get('userId'));
        
        
        switch ($request->query->get('action')){
            
            
        case "add":
            $lk = new user_project_link();
            $lk->setProject($project);
            $lk->setUser($user);
            $lk->setLead(FALSE);

            $em->persist($lk);
            $em->flush();
         
            break;
        
        
        case "remove":
            
            $results = $em->getRepository("ScrumatorBackendBundle:user_project_link")->findBy(array('project'=>$project,
                                                                                               'user'=>$user));
            
            if ($results){
                
                $result=$results[0];
                $em->remove($result);
                $em->flush();
            }
            
            
            
            break;
        }
        
        return new Response();
     }
}
