<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * People
 *
 * @ORM\Table(name="people")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\PeopleRepository")
 */
class People
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
     * @ORM\Column(name="person_name", type="string", length=60)
     */
    private $personName;

    /**
     * @var string
     *
     * @ORM\Column(name="person_last_name", type="string", length=255)
     */
    private $personLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="identification_number", type="string", length=15)
     */
    private $identificationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="person_address", type="string", length=100)
     */
    private $personAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="person_phone", type="string", length=15)
     */
    private $personPhone;

    /**
     * @var int
     *
     * @ORM\Column(name="town_id", type="integer")
     */
    private $townId;

    /**
     * @var int
     *
     * @ORM\Column(name="identification_type_id", type="integer")
     */
    private $identificationTypeId;


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
     * Set personName
     *
     * @param string $personName
     * @return People
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string 
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personLastName
     *
     * @param string $personLastName
     * @return People
     */
    public function setPersonLastName($personLastName)
    {
        $this->personLastName = $personLastName;

        return $this;
    }

    /**
     * Get personLastName
     *
     * @return string 
     */
    public function getPersonLastName()
    {
        return $this->personLastName;
    }

    /**
     * Set identificationNumber
     *
     * @param string $identificationNumber
     * @return People
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }

    /**
     * Get identificationNumber
     *
     * @return string 
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * Set personAddress
     *
     * @param string $personAddress
     * @return People
     */
    public function setPersonAddress($personAddress)
    {
        $this->personAddress = $personAddress;

        return $this;
    }

    /**
     * Get personAddress
     *
     * @return string 
     */
    public function getPersonAddress()
    {
        return $this->personAddress;
    }

    /**
     * Set personPhone
     *
     * @param string $personPhone
     * @return People
     */
    public function setPersonPhone($personPhone)
    {
        $this->personPhone = $personPhone;

        return $this;
    }

    /**
     * Get personPhone
     *
     * @return string 
     */
    public function getPersonPhone()
    {
        return $this->personPhone;
    }

    /**
     * Set townId
     *
     * @param integer $townId
     * @return People
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

    /**
     * Set identificationTypeId
     *
     * @param integer $identificationTypeId
     * @return People
     */
    public function setIdentificationTypeId($identificationTypeId)
    {
        $this->identificationTypeId = $identificationTypeId;

        return $this;
    }

    /**
     * Get identificationTypeId
     *
     * @return integer 
     */
    public function getIdentificationTypeId()
    {
        return $this->identificationTypeId;
    }
}
