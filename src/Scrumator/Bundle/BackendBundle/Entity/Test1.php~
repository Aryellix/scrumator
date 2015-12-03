<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test1
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\Test1Repository")
 */
class Test1
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
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;


    /**
     * @var date
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    
    
    private $birthdate;

    
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     */
    private $civilite;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;
    
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Test1
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Test1
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Test1
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }
    
 

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Test1
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set civilite
     *
     * @param \Scrumator\Bundle\BackendBundle\Entity\Civilite $civilite
     *
     * @return Test1
     */
    public function setCivilite(\Scrumator\Bundle\BackendBundle\Entity\Civilite $civilite = null)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return \Scrumator\Bundle\BackendBundle\Entity\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }
    
  

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Test1
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
