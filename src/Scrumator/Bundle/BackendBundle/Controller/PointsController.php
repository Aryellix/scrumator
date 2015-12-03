<?php

namespace Scrumator\Bundle\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Scrumator\Bundle\BackendBundle\Entity\Points;
use Scrumator\Bundle\BackendBundle\Form\PointsType;

/**
 * Points controller.
 *
 * @Route("/points")
 */
class PointsController extends Controller
{

    /**
     * Lists all Points entities.
     *
     * @Route("/", name="points")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrumatorBackendBundle:Points')->findAllOrderedByPoints();
       
        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Points entity.
     *
     * @Route("/", name="points_create")
     * @Method("POST")
     * @Template("ScrumatorBackendBundle:Points:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Points();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('points_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Points entity.
     *
     * @param Points $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Points $entity)
    {
        $form = $this->createForm(new PointsType(), $entity, array(
            'action' => $this->generateUrl('points_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Points entity.
     *
     * @Route("/new", name="points_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Points();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Points entity.
     *
     * @Route("/{id}", name="points_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Points entity.
     *
     * @Route("/{id}/edit", name="points_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
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
    * Creates a form to edit a Points entity.
    *
    * @param Points $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Points $entity)
    {
        $form = $this->createForm(new PointsType(), $entity, array(
            'action' => $this->generateUrl('points_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Points entity.
     *
     * @Route("/{id}", name="points_update")
     * @Method("PUT")
     * @Template("ScrumatorBackendBundle:Points:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrumatorBackendBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('points_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Points entity.
     *
     * @Route("/{id}", name="points_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrumatorBackendBundle:Points')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Points entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('points'));
    }

    /**
     * Creates a form to delete a Points entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('points_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
