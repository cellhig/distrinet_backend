<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssistSaleProducts
 *
 * @ORM\Table(name="assist_sale_products")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\AssistSaleProductsRepository")
 */
class AssistSaleProducts
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
     * @ORM\Column(name="assist_sale_producs_observation", type="string", length=255)
     */
    private $assistSaleProducsObservation;

    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer")
     */
    private $productQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="assist_sale_id", type="integer")
     */
    private $assistSaleId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;


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
     * Set assistSaleProducsObservation
     *
     * @param string $assistSaleProducsObservation
     * @return AssistSaleProducts
     */
    public function setAssistSaleProducsObservation($assistSaleProducsObservation)
    {
        $this->assistSaleProducsObservation = $assistSaleProducsObservation;

        return $this;
    }

    /**
     * Get assistSaleProducsObservation
     *
     * @return string 
     */
    public function getAssistSaleProducsObservation()
    {
        return $this->assistSaleProducsObservation;
    }

    /**
     * Set productQuantity
     *
     * @param integer $productQuantity
     * @return AssistSaleProducts
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity
     *
     * @return integer 
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set assistSaleId
     *
     * @param integer $assistSaleId
     * @return AssistSaleProducts
     */
    public function setAssistSaleId($assistSaleId)
    {
        $this->assistSaleId = $assistSaleId;

        return $this;
    }

    /**
     * Get assistSaleId
     *
     * @return integer 
     */
    public function getAssistSaleId()
    {
        return $this->assistSaleId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return AssistSaleProducts
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }
}
