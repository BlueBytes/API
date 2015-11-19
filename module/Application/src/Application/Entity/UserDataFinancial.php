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
