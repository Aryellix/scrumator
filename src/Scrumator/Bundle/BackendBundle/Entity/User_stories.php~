<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_stories
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\User_storiesRepository")
 */
class User_stories
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="en_tant_que", type="string", length=255)
     */
    private $enTantQue;

    /**
     * @var string
     *
     * @ORM\Column(name="i_want", type="string", length=255)
     */
    private $iWant;

    /**
     * @var string
     *
     * @ORM\Column(name="pour", type="string", length=255)
     */
    private $pour;
    
     /**
     *
     * @ORM\ManyToOne(targetEntity="Points")
     */
    private $points;
    
     /**
     *
     * @ORM\ManytoOne(targetEntity="Project")
     */
    private $project;

    public function __toString() {
        return strval($this->description);
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
     * Set description
     *
     * @param string $description
     *
     * @return User_stories
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set enTantQue
     *
     * @param string $enTantQue
     *
     * @return User_stories
     */
    public function setEnTantQue($enTantQue)
    {
        $this->enTantQue = $enTantQue;

        return $this;
    }

    /**
     * Get enTantQue
     *
     * @return string
     */
    public function getEnTantQue()
    {
        return $this->enTantQue;
    }

    /**
     * Set iWant
     *
     * @param string $iWant
     *
     * @return User_stories
     */
    public function setIWant($iWant)
    {
        $this->iWant = $iWant;

        return $this;
    }

    /**
     * Get iWant
     *
     * @return string
     */
    public function getIWant()
    {
        return $this->iWant;
    }

    /**
     * Set pour
     *
     * @param string $pour
     *
     * @return User_stories
     */
    public function setPour($pour)
    {
        $this->pour = $pour;

        return $this;
    }

    /**
     * Get pour
     *
     * @return string
     */
    public function getPour()
    {
        return $this->pour;
    }

    /**
     * Set points
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\Points $points
     *
     * @return User_stories
     */
    public function setPoints(\Scrumator\Bundle\BackendBundle\Entity\Points $points = null)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return \Scrumator\Bundle\BackendBundle\Entity\Points
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set project
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\project $project
     *
     * @return User_stories
     */
    public function setProject(\Scrumator\Bundle\BackendBundle\Entity\project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Scrumator\Bundle\BackendBundle\Entity\project
     */
    public function getProject()
    {
        return $this->project;
    }
}
