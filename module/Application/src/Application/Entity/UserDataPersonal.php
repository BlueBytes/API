<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDataPersonal
 *
 * @ORM\Table(name="user_data_personal")
 * @ORM\Entity
 */
class UserDataPersonal
{
    /**
     * @var string
     *
     * @ORM\Column(name="initials", type="string", length=25, nullable=false)
     */
    private $initials = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_prefix", type="string", length=25, nullable=false)
     */
    private $namePrefix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_first", type="string", length=50, nullable=false)
     */
    private $nameFirst = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_infix", type="string", length=25, nullable=false)
     */
    private $nameInfix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_last", type="string", length=50, nullable=false)
     */
    private $nameLast = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_suffix", type="string", length=25, nullable=false)
     */
    private $nameSuffix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=100, nullable=false)
     */
    private $street = '';

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=25, nullable=false)
     */
    private $number = '';

    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=25, nullable=false)
     */
    private $postalcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=100, nullable=false)
     */
    private $place = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone_mobile", type="string", length=25, nullable=false)
     */
    private $phoneMobile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone_home", type="string", length=25, nullable=false)
     */
    private $phoneHome = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

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
     * Set initials
     *
     * @param string $initials
     *
     * @return UserDataPersonal
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * Get initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Set namePrefix
     *
     * @param string $namePrefix
     *
     * @return UserDataPersonal
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;

        return $this;
    }

    /**
     * Get namePrefix
     *
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * Set nameFirst
     *
     * @param string $nameFirst
     *
     * @return UserDataPersonal
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;

        return $this;
    }

    /**
     * Get nameFirst
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * Set nameInfix
     *
     * @param string $nameInfix
     *
     * @return UserDataPersonal
     */
    public function setNameInfix($nameInfix)
    {
        $this->nameInfix = $nameInfix;

        return $this;
    }

    /**
     * Get nameInfix
     *
     * @return string
     */
    public function getNameInfix()
    {
        return $this->nameInfix;
    }

    /**
     * Set nameLast
     *
     * @param string $nameLast
     *
     * @return UserDataPersonal
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;

        return $this;
    }

    /**
     * Get nameLast
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * Set nameSuffix
     *
     * @param string $nameSuffix
     *
     * @return UserDataPersonal
     */
    public function setNameSuffix($nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * Get nameSuffix
     *
     * @return string
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return UserDataPersonal
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return UserDataPersonal
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     *
     * @return UserDataPersonal
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return UserDataPersonal
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
     * Set country
     *
     * @param string $country
     *
     * @return UserDataPersonal
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     *
     * @return UserDataPersonal
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set phoneHome
     *
     * @param string $phoneHome
     *
     * @return UserDataPersonal
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phoneHome = $phoneHome;

        return $this;
    }

    /**
     * Get phoneHome
     *
     * @return string
     */
    public function getPhoneHome()
    {
        return $this->phoneHome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserDataPersonal
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return UserDataPersonal
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     *
     * @return UserDataPersonal
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
