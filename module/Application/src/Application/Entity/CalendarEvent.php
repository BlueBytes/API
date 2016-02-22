<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendar_event", indexes={@ORM\Index(name="calendar_event-calendar_category_id", columns={"calendar_category_id"}), @ORM\Index(name="calendar_event-organising_group_id", columns={"organising_group_id"})})
 * @ORM\Entity
 */
class CalendarEvent
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Application\Entity\CalendarCategory
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\CalendarCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendar_category_id", referencedColumnName="id")
     * })
     */
    private $calendarCategory;

    /**
     * @var \Application\Entity\Group
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Group")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organising_group_id", referencedColumnName="id")
     * })
     */
    private $organisingGroup;



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
     * @return CalendarEvent
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
     * @return CalendarEvent
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
     * Set name
     *
     * @param string $name
     *
     * @return CalendarEvent
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
     * Set description
     *
     * @param string $description
     *
     * @return CalendarEvent
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set calendarCategory
     *
     * @param \Application\Entity\CalendarCategory $calendarCategory
     *
     * @return CalendarEvent
     */
    public function setCalendarCategory(\Application\Entity\CalendarCategory $calendarCategory = null)
    {
        $this->calendarCategory = $calendarCategory;

        return $this;
    }

    /**
     * Get calendarCategory
     *
     * @return \Application\Entity\CalendarCategory
     */
    public function getCalendarCategory()
    {
        return $this->calendarCategory;
    }

    /**
     * Set organisingGroup
     *
     * @param \Application\Entity\Group $organisingGroup
     *
     * @return CalendarEvent
     */
    public function setOrganisingGroup(\Application\Entity\Group $organisingGroup = null)
    {
        $this->organisingGroup = $organisingGroup;

        return $this;
    }

    /**
     * Get organisingGroup
     *
     * @return \Application\Entity\Group
     */
    public function getOrganisingGroup()
    {
        return $this->organisingGroup;
    }
}
