<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDataFinancial
 *
 * @ORM\Table(name="user_data_financial")
 * @ORM\Entity
 */
class UserDataFinancial
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=50, nullable=false)
     */
    private $place = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=30, nullable=false)
     */
    private $iban = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="string", length=10, nullable=false)
     */
    private $bic = '';

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
     * Set name
     *
     * @param string $name
     *
     * @return UserDataFinancial
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
     * Set place
     *
     * @param string $place
     *
     * @return UserDataFinancial
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return UserDataFinancial
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bic
     *
     * @param string $bic
     *
     * @return UserDataFinancial
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     *
     * @return UserDataFinancial
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
