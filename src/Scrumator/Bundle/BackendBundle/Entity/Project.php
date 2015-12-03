<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\ProjectRepository")
 */
class Project
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ability", type="boolean")
     */
    private $ability;

    /**
     * @ORM\OneToMany(targetEntity="user_project_link",mappedBy="Project")
    */
    private $users_project_link;
   
   
    public function __toString() {
    
        return strval($this->name);
    }
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
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ability
     *
     * @param boolean $ability
     *
     * @return Project
     */
    public function setAbility($ability)
    {
        $this->ability = $ability;

        return $this;
    }

    /**
     * Get ability
     *
     * @return boolean
     */
    public function getAbility()
    {
        return $this->ability;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users_project_link = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add usersProjectLink
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\user_project_link $usersProjectLink
     *
     * @return Project
     */
    public function addUsersProjectLink(\Scrumator\Bundle\BackendBundle\Entity\user_project_link $usersProjectLink)
    {
        $this->users_project_link[] = $usersProjectLink;

        return $this;
    }

    /**
     * Remove usersProjectLink
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\user_project_link $usersProjectLink
     */
    public function removeUsersProjectLink(\Scrumator\Bundle\BackendBundle\Entity\user_project_link $usersProjectLink)
    {
        $this->users_project_link->removeElement($usersProjectLink);
    }

    /**
     * Get usersProjectLink
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersProjectLink()
    {
        return $this->users_project_link;
    }
}
