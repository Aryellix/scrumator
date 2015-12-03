<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Scrumator\Bundle\BackendBundle\Entity\Test1;
use Scrumator\Bundle\BackendBundle\Form\Test1Type;

/**
 * Test1 controller.
 *
 * @Route("/test1")
 */
class Test1Controller extends Controller
{

    /**
     * Lists all Test1 entities.
     *
     * @Route("/", name="test1")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrumatorBackendBundle:Test1')->findAll();

        return array(
            'entities' => $entities,
            
        );
    }
    /**
     * Creates a new Test1 entity.
     *
     * @Route("/", name="test1_create")
     * @Method("POST")
     * @Template("ScrumatorBackendBundle:Test1:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Test1();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('test1_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Test1 entity.
     *
     * @param Test1 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Test1 $entity)
    {
        $form = $this->createForm(new Test1Type(), $entity, array(
            'action' => $this->generateUrl('test1_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Test1 entity.
     *
     * @Route("/new", name="test1_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Test1();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Test1 entity.
     *
     * @Route("/{id}", name="test1_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Test1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Test1 entity.
     *
     * @Route("/{id}/edit", name="test1_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Test1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test1 entity.');
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
    * Creates a form to edit a Test1 entity.
    *
    * @param Test1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Test1 $entity)
    {
        $form = $this->createForm(new Test1Type(), $entity, array(
            'action' => $this->generateUrl('test1_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Test1 entity.
     *
     * @Route("/{id}", name="test1_update")
     * @Method("PUT")
     * @Template("ScrumatorBackendBundle:Test1:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Test1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('test1_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Test1 entity.
     *
     * @Route("/{id}", name="test1_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrumatorBackendBundle:Test1')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Test1 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('test1'));
    }

    /**
     * Creates a form to delete a Test1 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('test1_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
