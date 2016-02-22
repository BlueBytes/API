<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDataStudy
 *
 * @ORM\Table(name="user_data_study", indexes={@ORM\Index(name="user_data_study-study_id", columns={"study_id"})})
 * @ORM\Entity
 */
class UserDataStudy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="student_number", type="integer", nullable=false)
     */
    private $studentNumber = '0';

    /**
     * @var \Application\Entity\Study
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Study")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="study_id", referencedColumnName="id")
     * })
     */
    private $study;

    /**
     * @var \Application\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set studentNumber
     *
     * @param integer $studentNumber
     *
     * @return UserDataStudy
     */
    public function setStudentNumber($studentNumber)
    {
        $this->studentNumber = $studentNumber;

        return $this;
    }

    /**
     * Get studentNumber
     *
     * @return integer
     */
    public function getStudentNumber()
    {
        return $this->studentNumber;
    }

    /**
     * Set study
     *
     * @param \Application\Entity\Study $study
     *
     * @return UserDataStudy
     */
    public function setStudy(\Application\Entity\Study $study = null)
    {
        $this->study = $study;

        return $this;
    }

    /**
     * Get study
     *
     * @return \Application\Entity\Study
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     *
     * @return UserDataStudy
     */
    public function setUser(\Application\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
