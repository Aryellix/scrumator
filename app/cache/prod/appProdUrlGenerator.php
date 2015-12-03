<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'civilite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/civilite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/civilite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/civilite/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/civilite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/civilite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/civilite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'civilite_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\CiviliteController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/civilite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'scrumator_backend_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'scrumator_backend_default_salome' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\DefaultController::salomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/bonjour',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_choose' => array (  0 =>   array (    0 => 'project_id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\HomeController::chooseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'project_id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/project_choose',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page1' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Page1Controller::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/page1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/points/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/points/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/points/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/points',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/points',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/points',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'points_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\PointsController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/points',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/project/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/project/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/project/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\ProjectController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sprint/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sprint/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sprint/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/sprint',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/sprint',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/sprint',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sprint_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\SprintController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/sprint',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\StatusController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/task/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/task/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/task/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\TaskController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/test1/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/test1/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/test1/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/test1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/test1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/test1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test1_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\Test1Controller::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/test1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user_stories/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user_stories/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user_stories/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user_stories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user_stories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user_stories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_stories_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\User_storiesController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user_stories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Scrumator\\Bundle\\BackendBundle\\Controller\\page2Controller::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/page2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
