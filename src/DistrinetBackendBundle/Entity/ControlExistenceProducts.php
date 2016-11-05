<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlExistenceProducts
 *
 * @ORM\Table(name="control_existence_products")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\ControlExistenceProductsRepository")
 */
class ControlExistenceProducts
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
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer")
     */
    private $productQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="control_existence_id", type="integer")
     */
    private $controlExistenceId;

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
     * Set productQuantity
     *
     * @param integer $productQuantity
     * @return ControlExistenceProducts
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
     * Set controlExistenceId
     *
     * @param integer $controlExistenceId
     * @return ControlExistenceProducts
     */
    public function setControlExistenceId($controlExistenceId)
    {
        $this->controlExistenceId = $controlExistenceId;

        return $this;
    }

    /**
     * Get controlExistenceId
     *
     * @return integer 
     */
    public function getControlExistenceId()
    {
        return $this->controlExistenceId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return ControlExistenceProducts
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
