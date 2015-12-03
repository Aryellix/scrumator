<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user_project_link
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\user_project_linkRepository")
 */
class user_project_link
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lead", type="boolean")
     */
    private $lead;

     /**
     * @ORM\ManyToOne(targetEntity="Project")
     */
    private $project;
    
    /**
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lead
     *
     * @param boolean $lead
     *
     * @return user_project_link
     */
    public function setLead($lead)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead
     *
     * @return boolean
     */
    public function getLead()
    {
        return $this->lead;
    }
    
   

    /**
     * Set project
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\Project $project
     *
     * @return user_project_link
     */
    public function setProject(\Scrumator\Bundle\BackendBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Scrumator\Bundle\BackendBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return user_project_link
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
