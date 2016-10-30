<?php

namespace DistrinetBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="employees")
 * @ORM\Entity(repositoryClass="DistrinetBackendBundle\Repository\EmployeesRepository")
 */
class Employees
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
     * @ORM\Column(name="employee_mobile_number", type="string", length=15)
     */
    private $employeeMobileNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="employee_state", type="boolean")
     */
    private $employeeState;

    /**
     * @var string
     *
     * @ORM\Column(name="work_title_id", type="integer")
     */
    private $workTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="headquarter_id", type="integer")
     */
    private $headquarterId;

    /**
     * @var int
     *
     * @ORM\Column(name="person_id", type="integer")
     */
    private $personId;



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
     * Set employeeMobileNumber
     *
     * @param string $employeeMobileNumber
     * @return Employees
     */
    public function setEmployeeMobileNumber($employeeMobileNumber)
    {
        $this->employeeMobileNumber = $employeeMobileNumber;

        return $this;
    }

    /**
     * Get employeeMobileNumber
     *
     * @return string 
     */
    public function getEmployeeMobileNumber()
    {
        return $this->employeeMobileNumber;
    }

    /**
     * Set employeeState
     *
     * @param boolean $employeeState
     * @return Employees
     */
    public function setEmployeeState($employeeState)
    {
        $this->employeeState = $employeeState;

        return $this;
    }

    /**
     * Get employeeState
     *
     * @return boolean 
     */
    public function getEmployeeState()
    {
        return $this->employeeState;
    }

    /**
     * Set workTitle
     *
     * @param integer $workTitle
     * @return Employees
     */
    public function setWorkTitle($workTitle)
    {
        $this->workTitle = $workTitle;

        return $this;
    }

    /**
     * Get workTitle
     *
     * @return integer 
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Set headquarterId
     *
     * @param integer $headquarterId
     * @return Employees
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

    /**
     * Set personId
     *
     * @param integer $personId
     * @return Employees
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }
}
