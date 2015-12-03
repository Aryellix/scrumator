<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Scrumator\Bundle\BackendBundle\Entity\Sprint;
use Scrumator\Bundle\BackendBundle\Form\SprintType;

/**
 * Sprint controller.
 *
 * @Route("/sprint")
 */
class SprintController extends Controller
{

    /**
     * Lists all Sprint entities.
     *
     * @Route("/", name="sprint")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrumatorBackendBundle:Sprint')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Sprint entity.
     *
     * @Route("/", name="sprint_create")
     * @Method("POST")
     * @Template("ScrumatorBackendBundle:Sprint:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Sprint();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sprint_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Sprint entity.
     *
     * @param Sprint $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sprint $entity)
    {
        $form = $this->createForm(new SprintType(), $entity, array(
            'action' => $this->generateUrl('sprint_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Sprint entity.
     *
     * @Route("/new", name="sprint_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Sprint();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Sprint entity.
     *
     * @Route("/{id}", name="sprint_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Sprint')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprint entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Sprint entity.
     *
     * @Route("/{id}/edit", name="sprint_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Sprint')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprint entity.');
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
    * Creates a form to edit a Sprint entity.
    *
    * @param Sprint $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sprint $entity)
    {
        $form = $this->createForm(new SprintType(), $entity, array(
            'action' => $this->generateUrl('sprint_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Sprint entity.
     *
     * @Route("/{id}", name="sprint_update")
     * @Method("PUT")
     * @Template("ScrumatorBackendBundle:Sprint:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Sprint')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprint entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sprint_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Sprint entity.
     *
     * @Route("/{id}", name="sprint_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrumatorBackendBundle:Sprint')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sprint entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sprint'));
    }

    /**
     * Creates a form to delete a Sprint entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sprint_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
