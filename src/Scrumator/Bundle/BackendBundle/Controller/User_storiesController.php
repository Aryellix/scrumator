<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Scrumator\Bundle\BackendBundle\Entity\User_stories;
use Scrumator\Bundle\BackendBundle\Form\User_storiesType;

/**
 * User_stories controller.
 *
 * @Route("/user_stories")
 */
class User_storiesController extends Controller
{

    /**
     * Lists all User_stories entities.
     *
     * @Route("/", name="user_stories")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $session=  $this->getRequest()->getSession();
        $project_id=$session->get('project_id');
        
        $project=$em->getRepository('ScrumatorBackendBundle:Project')->find($project_id);
        $entities = $em->getRepository('ScrumatorBackendBundle:User_stories')->findByProject($project);

        return array(
            'entities' => $entities,
            'project' => $project
        );
    }
    /**
     * Creates a new User_stories entity.
     *
     * @Route("/", name="user_stories_create")
     * @Method("POST")
     * @Template("ScrumatorBackendBundle:User_stories:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new User_stories();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_stories_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a User_stories entity.
     *
     * @param User_stories $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User_stories $entity)
    {
        $form = $this->createForm(new User_storiesType(), $entity, array(
            'action' => $this->generateUrl('user_stories_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new User_stories entity.
     *
     * @Route("/new", name="user_stories_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new User_stories();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a User_stories entity.
     *
     * @Route("/{id}", name="user_stories_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:User_stories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User_stories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing User_stories entity.
     *
     * @Route("/{id}/edit", name="user_stories_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:User_stories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User_stories entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a User_stories entity.
    *
    * @param User_stories $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User_stories $entity)
    {
        $form = $this->createForm(new User_storiesType(), $entity, array(
            'action' => $this->generateUrl('user_stories_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing User_stories entity.
     *
     * @Route("/{id}", name="user_stories_update")
     * @Method("PUT")
     * @Template("ScrumatorBackendBundle:User_stories:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:User_stories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User_stories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('user_stories_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a User_stories entity.
     *
     * @Route("/{id}", name="user_stories_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrumatorBackendBundle:User_stories')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User_stories entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user_stories'));
    }

    /**
     * Creates a form to delete a User_stories entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_stories_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
