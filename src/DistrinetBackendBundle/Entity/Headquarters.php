<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Headquarters
 *
 * @ORM\Table(name="headquarters")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\HeadquartersRepository")
 */
class Headquarters
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
     * @ORM\Column(name="headquarter_name", type="string", length=100)
     */
    private $headquarterName;

    /**
     * @var string
     *
     * @ORM\Column(name="headquarter_address", type="string", length=100)
     */
    private $headquarterAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="headquarter_phone", type="string", length=15)
     */
    private $headquarterPhone;

    /**
     * @var int
     *
     * @ORM\Column(name="town_id", type="integer")
     */
    private $townId;


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
     * Set headquarterName
     *
     * @param string $headquarterName
     * @return Headquarters
     */
    public function setHeadquarterName($headquarterName)
    {
        $this->headquarterName = $headquarterName;

        return $this;
    }

    /**
     * Get headquarterName
     *
     * @return string 
     */
    public function getHeadquarterName()
    {
        return $this->headquarterName;
    }

    /**
     * Set headquarterAddress
     *
     * @param string $headquarterAddress
     * @return Headquarters
     */
    public function setHeadquarterAddress($headquarterAddress)
    {
        $this->headquarterAddress = $headquarterAddress;

        return $this;
    }

    /**
     * Get headquarterAddress
     *
     * @return string 
     */
    public function getHeadquarterAddress()
    {
        return $this->headquarterAddress;
    }

    /**
     * Set headquarterPhone
     *
     * @param string $headquarterPhone
     * @return Headquarters
     */
    public function setHeadquarterPhone($headquarterPhone)
    {
        $this->headquarterPhone = $headquarterPhone;

        return $this;
    }

    /**
     * Get headquarterPhone
     *
     * @return string 
     */
    public function getHeadquarterPhone()
    {
        return $this->headquarterPhone;
    }

    /**
     * Set townId
     *
     * @param integer $townId
     * @return Headquarters
     */
    public function setTownId($townId)
    {
        $this->townId = $townId;

        return $this;
    }

    /**
     * Get townId
     *
     * @return integer 
     */
    public function getTownId()
    {
        return $this->townId;
    }
}
