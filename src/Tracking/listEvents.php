<?php

namespace Chonopost\Tracking;

class listEvents
{

    /**
     * @var event[] $events
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
     * @return event[]
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param event[] $events
     * @return \Chonopost\Tracking\listEvents
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
     * @return \Chonopost\Tracking\listEvents
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
