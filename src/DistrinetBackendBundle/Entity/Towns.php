<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Towns
 *
 * @ORM\Table(name="towns")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\TownsRepository")
 */
class Towns
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="town_name", type="string", length=60)
     */
    private $townName;

    /**
     * @var int
     *
     * @ORM\Column(name="province_id", type="integer")
     */
    private $provinceId;


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
     * Set townName
     *
     * @param string $townName
     * @return Towns
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;

        return $this;
    }

    /**
     * Get townName
     *
     * @return string 
     */
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * Set provinceId
     *
     * @param integer $provinceId
     * @return Towns
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;

        return $this;
    }

    /**
     * Get provinceId
     *
     * @return integer 
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }
}
