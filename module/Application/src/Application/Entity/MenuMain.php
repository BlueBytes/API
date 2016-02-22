<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuMain
 *
 * @ORM\Table(name="menu_main", indexes={@ORM\Index(name="menu_main_parent-menu_main_id", columns={"Parent"})})
 * @ORM\Entity
 */
class MenuMain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="Order", type="integer", nullable=false)
     */
    private $order = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Route", type="string", length=255, nullable=false)
     */
    private $route = '';

    /**
     * @var \Application\Entity\MenuMain
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\MenuMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Parent", referencedColumnName="Id")
     * })
     */
    private $parent;



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
     * Set title
     *
     * @param string $title
     *
     * @return MenuMain
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return MenuMain
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return MenuMain
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set parent
     *
     * @param \Application\Entity\MenuMain $parent
     *
     * @return MenuMain
     */
    public function setParent(\Application\Entity\MenuMain $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Application\Entity\MenuMain
     */
    public function getParent()
    {
        return $this->parent;
    }
}
