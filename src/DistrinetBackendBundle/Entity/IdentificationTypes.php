<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IdentificationTypes
 *
 * @ORM\Table(name="identification_types")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\IdentificationTypesRepository")
 */
class IdentificationTypes
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
     * @ORM\Column(name="identification_title_name", type="string", length=60)
     */
    private $identificationTitleName;

    /**
     * @var string
     *
     * @ORM\Column(name="identification_title_abbreviation", type="string", length=255)
     */
    private $identificationTitleAbbreviation;


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
     * Set identificationTitleName
     *
     * @param string $identificationTitleName
     * @return IdentificationTypes
     */
    public function setIdentificationTitleName($identificationTitleName)
    {
        $this->identificationTitleName = $identificationTitleName;

        return $this;
    }

    /**
     * Get identificationTitleName
     *
     * @return string 
     */
    public function getIdentificationTitleName()
    {
        return $this->identificationTitleName;
    }

    /**
     * Set identificationTitleAbbreviation
     *
     * @param string $identificationTitleAbbreviation
     * @return IdentificationTypes
     */
    public function setIdentificationTitleAbbreviation($identificationTitleAbbreviation)
    {
        $this->identificationTitleAbbreviation = $identificationTitleAbbreviation;

        return $this;
    }

    /**
     * Get identificationTitleAbbreviation
     *
     * @return string 
     */
    public function getIdentificationTitleAbbreviation()
    {
        return $this->identificationTitleAbbreviation;
    }
}
