<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssistSales
 *
 * @ORM\Table(name="assist_sales")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\AssistSalesRepository")
 */
class AssistSales
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
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="assist_sale_state_id", type="integer")
     */
    private $assistSaleStateId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return AssistSales
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set assistSaleStateId
     *
     * @param integer $assistSaleStateId
     * @return AssistSales
     */
    public function setAssistSaleStateId($assistSaleStateId)
    {
        $this->assistSaleStateId = $assistSaleStateId;

        return $this;
    }

    /**
     * Get assistSaleStateId
     *
     * @return integer 
     */
    public function getAssistSaleStateId()
    {
        return $this->assistSaleStateId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     * @return AssistSales
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
}
