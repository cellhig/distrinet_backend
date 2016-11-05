<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCatalog
 *
 * @ORM\Table(name="product_catalog")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\ProductCatalogRepository")
 */
class ProductCatalog
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
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="catalog_id", type="integer")
     */
    private $catalogId;


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
     * Set productId
     *
     * @param integer $productId
     * @return ProductCatalog
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

    /**
     * Set catalogId
     *
     * @param integer $catalogId
     * @return ProductCatalog
     */
    public function setCatalogId($catalogId)
    {
        $this->catalogId = $catalogId;

        return $this;
    }

    /**
     * Get catalogId
     *
     * @return integer 
     */
    public function getCatalogId()
    {
        return $this->catalogId;
    }
}
