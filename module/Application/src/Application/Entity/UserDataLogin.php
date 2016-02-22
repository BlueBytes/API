<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDataLogin
 *
 * @ORM\Table(name="user_data_login")
 * @ORM\Entity
 */
class UserDataLogin
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lock_expire", type="datetime", nullable=true)
     */
    private $lockExpire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="protected", type="boolean", nullable=false)
     */
    private $protected = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password_hash", type="string", length=255, nullable=false)
     */
    private $passwordHash = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="failed_logins", type="boolean", nullable=false)
     */
    private $failedLogins = '0';

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
     * Set locked
     *
     * @param boolean $locked
     *
     * @return UserDataLogin
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set lockExpire
     *
     * @param \DateTime $lockExpire
     *
     * @return UserDataLogin
     */
    public function setLockExpire($lockExpire)
    {
        $this->lockExpire = $lockExpire;

        return $this;
    }

    /**
     * Get lockExpire
     *
     * @return \DateTime
     */
    public function getLockExpire()
    {
        return $this->lockExpire;
    }

    /**
     * Set protected
     *
     * @param boolean $protected
     *
     * @return UserDataLogin
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return boolean
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * Set passwordHash
     *
     * @param string $passwordHash
     *
     * @return UserDataLogin
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return UserDataLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set failedLogins
     *
     * @param boolean $failedLogins
     *
     * @return UserDataLogin
     */
    public function setFailedLogins($failedLogins)
    {
        $this->failedLogins = $failedLogins;

        return $this;
    }

    /**
     * Get failedLogins
     *
     * @return boolean
     */
    public function getFailedLogins()
    {
        return $this->failedLogins;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     *
     * @return UserDataLogin
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
