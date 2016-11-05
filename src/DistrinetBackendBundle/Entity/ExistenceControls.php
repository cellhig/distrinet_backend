<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExistenceControls
 *
 * @ORM\Table(name="existence_controls")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\ExistenceControlsRepository")
 */
class ExistenceControls
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
     * @var \DateTime
     *
     * @ORM\Column(name="existence_control_date", type="datetime")
     */
    private $existenceControlDate;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

    /**
     * @var int
     *
     * @ORM\Column(name="headquarter_id", type="integer")
     */
    private $headquarterId;


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
     * Set existenceControlDate
     *
     * @param \DateTime $existenceControlDate
     * @return ExistenceControls
     */
    public function setExistenceControlDate($existenceControlDate)
    {
        $this->existenceControlDate = $existenceControlDate;

        return $this;
    }

    /**
     * Get existenceControlDate
     *
     * @return \DateTime 
     */
    public function getExistenceControlDate()
    {
        return $this->existenceControlDate;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return ExistenceControls
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set headquarterId
     *
     * @param integer $headquarterId
     * @return ExistenceControls
     */
    public function setHeadquarterId($headquarterId)
    {
        $this->headquarterId = $headquarterId;

        return $this;
    }

    /**
     * Get headquarterId
     *
     * @return integer 
     */
    public function getHeadquarterId()
    {
        return $this->headquarterId;
    }
}
