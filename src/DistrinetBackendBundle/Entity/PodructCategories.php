<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PodructCategories
 *
 * @ORM\Table(name="podruct_categories")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\PodructCategoriesRepository")
 */
class PodructCategories
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
     * @ORM\Column(name="category_product_code", type="string", length=10)
     */
    private $categoryProductCode;

    /**
     * @var string
     *
     * @ORM\Column(name="category_product_name", type="string", length=60)
     */
    private $categoryProductName;


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
     * Set categoryProductCode
     *
     * @param string $categoryProductCode
     * @return PodructCategories
     */
    public function setCategoryProductCode($categoryProductCode)
    {
        $this->categoryProductCode = $categoryProductCode;

        return $this;
    }

    /**
     * Get categoryProductCode
     *
     * @return string 
     */
    public function getCategoryProductCode()
    {
        return $this->categoryProductCode;
    }

    /**
     * Set categoryProductName
     *
     * @param string $categoryProductName
     * @return PodructCategories
     */
    public function setCategoryProductName($categoryProductName)
    {
        $this->categoryProductName = $categoryProductName;

        return $this;
    }

    /**
     * Get categoryProductName
     *
     * @return string 
     */
    public function getCategoryProductName()
    {
        return $this->categoryProductName;
    }
}
