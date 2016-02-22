<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institute
 *
 * @ORM\Table(name="institute", uniqueConstraints={@ORM\UniqueConstraint(name="studentnumber_prefix", columns={"studentnumber_prefix"})})
 * @ORM\Entity
 */
class Institute
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
     * @var string
     *
     * @ORM\Column(name="short", type="string", length=50, nullable=false)
     */
    private $short = '';

    /**
     * @var string
     *
     * @ORM\Column(name="studentnumber_prefix", type="string", length=3, nullable=false)
     */
    private $studentnumberPrefix = '';



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
     * @return Institute
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
     * Set short
     *
     * @param string $short
     *
     * @return Institute
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set studentnumberPrefix
     *
     * @param string $studentnumberPrefix
     *
     * @return Institute
     */
    public function setStudentnumberPrefix($studentnumberPrefix)
    {
        $this->studentnumberPrefix = $studentnumberPrefix;

        return $this;
    }

    /**
     * Get studentnumberPrefix
     *
     * @return string
     */
    public function getStudentnumberPrefix()
    {
        return $this->studentnumberPrefix;
    }
}
