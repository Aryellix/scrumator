<?php

namespace Scrumator\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Scrumator\Bundle\BackendBundle\Entity\Test2Repository")
 */
class Test2
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
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation_sexuelle", type="string", length=255)
     */
    private $orientationSexuelle;

    /**
     * @var string
     *
     * @ORM\Column(name="plat_prefere", type="string", length=255)
     */
    private $platPrefere;


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
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Test2
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set orientationSexuelle
     *
     * @param string $orientationSexuelle
     *
     * @return Test2
     */
    public function setOrientationSexuelle($orientationSexuelle)
    {
        $this->orientationSexuelle = $orientationSexuelle;

        return $this;
    }

    /**
     * Get orientationSexuelle
     *
     * @return string
     */
    public function getOrientationSexuelle()
    {
        return $this->orientationSexuelle;
    }

    /**
     * Set platPrefere
     *
     * @param string $platPrefere
     *
     * @return Test2
     */
    public function setPlatPrefere($platPrefere)
    {
        $this->platPrefere = $platPrefere;

        return $this;
    }

    /**
     * Get platPrefere
     *
     * @return string
     */
    public function getPlatPrefere()
    {
        return $this->platPrefere;
    }
}
