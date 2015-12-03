<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/civilite')) {
                // civilite
                if (rtrim($pathinfo, '/') === '/admin/civilite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'civilite');
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::indexAction',  '_route' => 'civilite',);
                }
                not_civilite:

                // civilite_create
                if ($pathinfo === '/admin/civilite/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_civilite_create;
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::createAction',  '_route' => 'civilite_create',);
                }
                not_civilite_create:

                // civilite_new
                if ($pathinfo === '/admin/civilite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_new;
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::newAction',  '_route' => 'civilite_new',);
                }
                not_civilite_new:

                // civilite_show
                if (preg_match('#^/admin/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::showAction',));
                }
                not_civilite_show:

                // civilite_edit
                if (preg_match('#^/admin/civilite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::editAction',));
                }
                not_civilite_edit:

                // civilite_update
                if (preg_match('#^/admin/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_civilite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::updateAction',));
                }
                not_civilite_update:

                // civilite_delete
                if (preg_match('#^/admin/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_civilite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::deleteAction',));
                }
                not_civilite_delete:

            }

            // scrumator_backend_default_index
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrumator_backend_default_index')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\DefaultController::indexAction',));
            }

            // scrumator_backend_default_salome
            if (0 === strpos($pathinfo, '/admin/bonjour') && preg_match('#^/admin/bonjour/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrumator_backend_default_salome')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\DefaultController::salomeAction',));
            }

            // accueil
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\HomeController::indexAction',  '_route' => 'accueil',);
            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                // project_choose
                if (0 === strpos($pathinfo, '/admin/project_choose') && preg_match('#^/admin/project_choose/(?P<project_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_choose')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\HomeController::chooseAction',));
                }

                // page1
                if (0 === strpos($pathinfo, '/admin/page1') && preg_match('#^/admin/page1/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page1')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Page1Controller::indexAction',));
                }

                if (0 === strpos($pathinfo, '/admin/points')) {
                    // points
                    if (rtrim($pathinfo, '/') === '/admin/points') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_points;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'points');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::indexAction',  '_route' => 'points',);
                    }
                    not_points:

                    // points_create
                    if ($pathinfo === '/admin/points/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_points_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::createAction',  '_route' => 'points_create',);
                    }
                    not_points_create:

                    // points_new
                    if ($pathinfo === '/admin/points/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_points_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::newAction',  '_route' => 'points_new',);
                    }
                    not_points_new:

                    // points_show
                    if (preg_match('#^/admin/points/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_points_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'points_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::showAction',));
                    }
                    not_points_show:

                    // points_edit
                    if (preg_match('#^/admin/points/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_points_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'points_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::editAction',));
                    }
                    not_points_edit:

                    // points_update
                    if (preg_match('#^/admin/points/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_points_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'points_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::updateAction',));
                    }
                    not_points_update:

                    // points_delete
                    if (preg_match('#^/admin/points/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_points_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'points_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::deleteAction',));
                    }
                    not_points_delete:

                }

                if (0 === strpos($pathinfo, '/admin/project')) {
                    // project
                    if (rtrim($pathinfo, '/') === '/admin/project') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_project;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'project');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project',);
                    }
                    not_project:

                    // project_create
                    if ($pathinfo === '/admin/project/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_project_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::createAction',  '_route' => 'project_create',);
                    }
                    not_project_create:

                    // project_new
                    if ($pathinfo === '/admin/project/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_project_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::newAction',  '_route' => 'project_new',);
                    }
                    not_project_new:

                    // project_show
                    if (preg_match('#^/admin/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_project_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::showAction',));
                    }
                    not_project_show:

                    // project_edit
                    if (preg_match('#^/admin/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_project_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::editAction',));
                    }
                    not_project_edit:

                    // project_update
                    if (preg_match('#^/admin/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_project_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::updateAction',));
                    }
                    not_project_update:

                    // project_delete
                    if (preg_match('#^/admin/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_project_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::deleteAction',));
                    }
                    not_project_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/sprint')) {
                    // sprint
                    if (rtrim($pathinfo, '/') === '/admin/sprint') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sprint;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sprint');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::indexAction',  '_route' => 'sprint',);
                    }
                    not_sprint:

                    // sprint_create
                    if ($pathinfo === '/admin/sprint/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sprint_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::createAction',  '_route' => 'sprint_create',);
                    }
                    not_sprint_create:

                    // sprint_new
                    if ($pathinfo === '/admin/sprint/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sprint_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::newAction',  '_route' => 'sprint_new',);
                    }
                    not_sprint_new:

                    // sprint_show
                    if (preg_match('#^/admin/sprint/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sprint_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::showAction',));
                    }
                    not_sprint_show:

                    // sprint_edit
                    if (preg_match('#^/admin/sprint/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sprint_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::editAction',));
                    }
                    not_sprint_edit:

                    // sprint_update
                    if (preg_match('#^/admin/sprint/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sprint_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::updateAction',));
                    }
                    not_sprint_update:

                    // sprint_delete
                    if (preg_match('#^/admin/sprint/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sprint_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::deleteAction',));
                    }
                    not_sprint_delete:

                }

                if (0 === strpos($pathinfo, '/admin/status')) {
                    // status
                    if (rtrim($pathinfo, '/') === '/admin/status') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_status;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'status');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::indexAction',  '_route' => 'status',);
                    }
                    not_status:

                    // status_create
                    if ($pathinfo === '/admin/status/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_status_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::createAction',  '_route' => 'status_create',);
                    }
                    not_status_create:

                    // status_new
                    if ($pathinfo === '/admin/status/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_status_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::newAction',  '_route' => 'status_new',);
                    }
                    not_status_new:

                    // status_show
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_status_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::showAction',));
                    }
                    not_status_show:

                    // status_edit
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_status_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::editAction',));
                    }
                    not_status_edit:

                    // status_update
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_status_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::updateAction',));
                    }
                    not_status_update:

                    // status_delete
                    if (preg_match('#^/admin/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_status_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::deleteAction',));
                    }
                    not_status_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/t')) {
                if (0 === strpos($pathinfo, '/admin/task')) {
                    // task
                    if (rtrim($pathinfo, '/') === '/admin/task') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_task;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'task');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::indexAction',  '_route' => 'task',);
                    }
                    not_task:

                    // task_create
                    if ($pathinfo === '/admin/task/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_task_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::createAction',  '_route' => 'task_create',);
                    }
                    not_task_create:

                    // task_new
                    if ($pathinfo === '/admin/task/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_task_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::newAction',  '_route' => 'task_new',);
                    }
                    not_task_new:

                    // task_show
                    if (preg_match('#^/admin/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_task_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::showAction',));
                    }
                    not_task_show:

                    // task_edit
                    if (preg_match('#^/admin/task/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_task_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::editAction',));
                    }
                    not_task_edit:

                    // task_update
                    if (preg_match('#^/admin/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_task_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::updateAction',));
                    }
                    not_task_update:

                    // task_delete
                    if (preg_match('#^/admin/task/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_task_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::deleteAction',));
                    }
                    not_task_delete:

                }

                if (0 === strpos($pathinfo, '/admin/test1')) {
                    // test1
                    if (rtrim($pathinfo, '/') === '/admin/test1') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_test1;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'test1');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::indexAction',  '_route' => 'test1',);
                    }
                    not_test1:

                    // test1_create
                    if ($pathinfo === '/admin/test1/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_test1_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::createAction',  '_route' => 'test1_create',);
                    }
                    not_test1_create:

                    // test1_new
                    if ($pathinfo === '/admin/test1/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_test1_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::newAction',  '_route' => 'test1_new',);
                    }
                    not_test1_new:

                    // test1_show
                    if (preg_match('#^/admin/test1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_test1_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test1_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::showAction',));
                    }
                    not_test1_show:

                    // test1_edit
                    if (preg_match('#^/admin/test1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_test1_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test1_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::editAction',));
                    }
                    not_test1_edit:

                    // test1_update
                    if (preg_match('#^/admin/test1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_test1_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test1_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::updateAction',));
                    }
                    not_test1_update:

                    // test1_delete
                    if (preg_match('#^/admin/test1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_test1_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'test1_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::deleteAction',));
                    }
                    not_test1_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }
                not_user:

                // user_create
                if ($pathinfo === '/admin/user/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

                if (0 === strpos($pathinfo, '/admin/user_stories')) {
                    // user_stories
                    if (rtrim($pathinfo, '/') === '/admin/user_stories') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_stories;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'user_stories');
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::indexAction',  '_route' => 'user_stories',);
                    }
                    not_user_stories:

                    // user_stories_create
                    if ($pathinfo === '/admin/user_stories/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_user_stories_create;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::createAction',  '_route' => 'user_stories_create',);
                    }
                    not_user_stories_create:

                    // user_stories_new
                    if ($pathinfo === '/admin/user_stories/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_stories_new;
                        }

                        return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::newAction',  '_route' => 'user_stories_new',);
                    }
                    not_user_stories_new:

                    // user_stories_show
                    if (preg_match('#^/admin/user_stories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_stories_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_stories_show')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::showAction',));
                    }
                    not_user_stories_show:

                    // user_stories_edit
                    if (preg_match('#^/admin/user_stories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_stories_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_stories_edit')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::editAction',));
                    }
                    not_user_stories_edit:

                    // user_stories_update
                    if (preg_match('#^/admin/user_stories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_user_stories_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_stories_update')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::updateAction',));
                    }
                    not_user_stories_update:

                    // user_stories_delete
                    if (preg_match('#^/admin/user_stories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_user_stories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_stories_delete')), array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::deleteAction',));
                    }
                    not_user_stories_delete:

                }

            }

            // page2
            if ($pathinfo === '/admin/page2') {
                return array (  '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\page2Controller::indexAction',  '_route' => 'page2',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
