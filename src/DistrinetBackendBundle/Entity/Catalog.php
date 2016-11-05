<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 *
 * @ORM\Table(name="catalog")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\CatalogRepository")
 */
class Catalog
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
     * @ORM\Column(name="catalog_name", type="string", length=60)
     */
    private $catalogName;

    /**
     * @var string
     *
     * @ORM\Column(name="catalog_description", type="string", length=255)
     */
    private $catalogDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initial_date", type="datetime")
     */
    private $initialDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_date", type="datetime")
     */
    private $finalDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;


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
     * Set catalogName
     *
     * @param string $catalogName
     * @return Catalog
     */
    public function setCatalogName($catalogName)
    {
        $this->catalogName = $catalogName;

        return $this;
    }

    /**
     * Get catalogName
     *
     * @return string 
     */
    public function getCatalogName()
    {
        return $this->catalogName;
    }

    /**
     * Set catalogDescription
     *
     * @param string $catalogDescription
     * @return Catalog
     */
    public function setCatalogDescription($catalogDescription)
    {
        $this->catalogDescription = $catalogDescription;

        return $this;
    }

    /**
     * Get catalogDescription
     *
     * @return string 
     */
    public function getCatalogDescription()
    {
        return $this->catalogDescription;
    }

    /**
     * Set initialDate
     *
     * @param \DateTime $initialDate
     * @return Catalog
     */
    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;

        return $this;
    }

    /**
     * Get initialDate
     *
     * @return \DateTime 
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * Set finalDate
     *
     * @param \DateTime $finalDate
     * @return Catalog
     */
    public function setFinalDate($finalDate)
    {
        $this->finalDate = $finalDate;

        return $this;
    }

    /**
     * Get finalDate
     *
     * @return \DateTime 
     */
    public function getFinalDate()
    {
        return $this->finalDate;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Catalog
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
