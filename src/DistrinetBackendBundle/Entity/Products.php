<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\ProductsRepository")
 */
class Products
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
     * @ORM\Column(name="product_code", type="string", length=10)
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=60)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=255)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="product_image_path", type="string", length=255)
     */
    private $productImagePath;

    /**
     * @var int
     *
     * @ORM\Column(name="category_product_id", type="integer")
     */
    private $categoryProductId;


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
     * Set productCode
     *
     * @param string $productCode
     * @return Products
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string 
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Products
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     * @return Products
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string 
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set productImagePath
     *
     * @param string $productImagePath
     * @return Products
     */
    public function setProductImagePath($productImagePath)
    {
        $this->productImagePath = $productImagePath;

        return $this;
    }

    /**
     * Get productImagePath
     *
     * @return string 
     */
    public function getProductImagePath()
    {
        return $this->productImagePath;
    }

    /**
     * Set categoryProductId
     *
     * @param integer $categoryProductId
     * @return Products
     */
    public function setCategoryProductId($categoryProductId)
    {
        $this->categoryProductId = $categoryProductId;

        return $this;
    }

    /**
     * Get categoryProductId
     *
     * @return integer 
     */
    public function getCategoryProductId()
    {
        return $this->categoryProductId;
    }
}
