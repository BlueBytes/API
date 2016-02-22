<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroup
 *
 * @ORM\Table(name="user_group", indexes={@ORM\Index(name="user_group-group_id", columns={"group_id"}), @ORM\Index(name="user_group-function_id", columns={"function_id"}), @ORM\Index(name="user_group-user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserGroup
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
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var \Application\Entity\GroupFunction
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\GroupFunction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="function_id", referencedColumnName="id")
     * })
     */
    private $function;

    /**
     * @var \Application\Entity\Group
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Group")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Application\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return UserGroup
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return UserGroup
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set function
     *
     * @param \Application\Entity\GroupFunction $function
     *
     * @return UserGroup
     */
    public function setFunction(\Application\Entity\GroupFunction $function = null)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return \Application\Entity\GroupFunction
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set group
     *
     * @param \Application\Entity\Group $group
     *
     * @return UserGroup
     */
    public function setGroup(\Application\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Application\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     *
     * @return UserGroup
     */
    public function setUser(\Application\Entity\User $user = null)
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
