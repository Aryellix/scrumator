<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sprint_params
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\Sprint_paramsRepository")
 */
class Sprint_params
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $startDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_duration", type="integer")
     */
    private $defaultDuration;


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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Sprint_params
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set defaultDuration
     *
     * @param integer $defaultDuration
     *
     * @return Sprint_params
     */
    public function setDefaultDuration($defaultDuration)
    {
        $this->defaultDuration = $defaultDuration;

        return $this;
    }

    /**
     * Get defaultDuration
     *
     * @return integer
     */
    public function getDefaultDuration()
    {
        return $this->defaultDuration;
    }
}
