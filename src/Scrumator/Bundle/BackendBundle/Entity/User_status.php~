<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_status
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\User_statusRepository")
 */
class User_status
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
     * @ORM\Column(name="status_name", type="string", length=255)
     */
    private $statusName;


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
     * Set statusName
     *
     * @param string $statusName
     *
     * @return User_status
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Get statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }
}
