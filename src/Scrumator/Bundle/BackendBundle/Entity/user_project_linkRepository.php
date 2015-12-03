<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

/**
 * user_project_linkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class user_project_linkRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUsersForOneProject($project) {
        
       $qb = $this->createQueryBuilder('lk')
                ->where('lk.project=:project')
                ->setParameter('project', $project)
                ;
        return $qb->getQuery()->getResult();
    }
}