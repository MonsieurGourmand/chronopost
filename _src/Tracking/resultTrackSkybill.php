<?php

namespace Chronopost\Tracking;

class resultTrackSkybill
{

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var listEvents $listEvents
     */
    protected $listEvents = null;

    /**
     * @param int $errorCode
     */
    public function __construct($errorCode)
    {
      $this->errorCode = $errorCode;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \Chronopost\Tracking\resultTrackSkybill
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \Chronopost\Tracking\resultTrackSkybill
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return listEvents
     */
    public function getListEvents()
    {
      return $this->listEvents;
    }

    /**
     * @param listEvents $listEvents
     * @return \Chronopost\Tracking\resultTrackSkybill
     */
    public function setListEvents($listEvents)
    {
      $this->listEvents = $listEvents;
      return $this;
    }

}
