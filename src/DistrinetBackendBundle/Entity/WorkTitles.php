<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkTitles
 *
 * @ORM\Table(name="work_titles")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\WorkTitlesRepository")
 */
class WorkTitles
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
     * @ORM\Column(name="work_title_name", type="string", length=60)
     */
    private $workTitleName;


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
     * Set workTitleName
     *
     * @param string $workTitleName
     * @return WorkTitles
     */
    public function setWorkTitleName($workTitleName)
    {
        $this->workTitleName = $workTitleName;

        return $this;
    }

    /**
     * Get workTitleName
     *
     * @return string 
     */
    public function getWorkTitleName()
    {
        return $this->workTitleName;
    }
}
