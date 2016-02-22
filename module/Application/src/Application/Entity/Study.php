<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Study
 *
 * @ORM\Table(name="study", indexes={@ORM\Index(name="study-institude_id", columns={"institute_id"})})
 * @ORM\Entity
 */
class Study
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var \Application\Entity\Institute
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Institute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institute_id", referencedColumnName="id")
     * })
     */
    private $institute;



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
     * Set name
     *
     * @param string $name
     *
     * @return Study
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set institute
     *
     * @param \Application\Entity\Institute $institute
     *
     * @return Study
     */
    public function setInstitute(\Application\Entity\Institute $institute = null)
    {
        $this->institute = $institute;

        return $this;
    }

    /**
     * Get institute
     *
     * @return \Application\Entity\Institute
     */
    public function getInstitute()
    {
        return $this->institute;
    }
}
