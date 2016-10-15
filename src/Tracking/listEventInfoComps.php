<?php

namespace Chronopost\Tracking;

class listEventInfoComps
{

    /**
     * @var eventInfoComp[] $events
     */
    protected $events = null;

    /**
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return eventInfoComp[]
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param eventInfoComp[] $events
     * @return \Chronopost\Tracking\listEventInfoComps
     */
    public function setEvents(array $events = null)
    {
      $this->events = $events;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillNumber()
    {
      return $this->skybillNumber;
    }

    /**
     * @param string $skybillNumber
     * @return \Chronopost\Tracking\listEventInfoComps
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
