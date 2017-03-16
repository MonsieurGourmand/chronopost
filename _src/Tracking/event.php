<?php

namespace Chronopost\Tracking;

class event
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var \DateTime $eventDate
     */
    protected $eventDate = null;

    /**
     * @var string $eventLabel
     */
    protected $eventLabel = null;

    /**
     * @var boolean $highPriority
     */
    protected $highPriority = null;

    /**
     * @var string $NPC
     */
    protected $NPC = null;

    /**
     * @var string $officeLabel
     */
    protected $officeLabel = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Chronopost\Tracking\event
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
      if ($this->eventDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->eventDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $eventDate
     * @return \Chronopost\Tracking\event
     */
    public function setEventDate(\DateTime $eventDate = null)
    {
      if ($eventDate == null) {
       $this->eventDate = null;
      } else {
        $this->eventDate = $eventDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getEventLabel()
    {
      return $this->eventLabel;
    }

    /**
     * @param string $eventLabel
     * @return \Chronopost\Tracking\event
     */
    public function setEventLabel($eventLabel)
    {
      $this->eventLabel = $eventLabel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHighPriority()
    {
      return $this->highPriority;
    }

    /**
     * @param boolean $highPriority
     * @return \Chronopost\Tracking\event
     */
    public function setHighPriority($highPriority)
    {
      $this->highPriority = $highPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getNPC()
    {
      return $this->NPC;
    }

    /**
     * @param string $NPC
     * @return \Chronopost\Tracking\event
     */
    public function setNPC($NPC)
    {
      $this->NPC = $NPC;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfficeLabel()
    {
      return $this->officeLabel;
    }

    /**
     * @param string $officeLabel
     * @return \Chronopost\Tracking\event
     */
    public function setOfficeLabel($officeLabel)
    {
      $this->officeLabel = $officeLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \Chronopost\Tracking\event
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

}
