<?php

namespace Chonopost\Tracking;

class resultTrackSkybillV2
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
     * @var listEventInfoComps $listEventInfoComp
     */
    protected $listEventInfoComp = null;

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
     * @return \Chonopost\Tracking\resultTrackSkybillV2
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
     * @return \Chonopost\Tracking\resultTrackSkybillV2
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return listEventInfoComps
     */
    public function getListEventInfoComp()
    {
      return $this->listEventInfoComp;
    }

    /**
     * @param listEventInfoComps $listEventInfoComp
     * @return \Chonopost\Tracking\resultTrackSkybillV2
     */
    public function setListEventInfoComp($listEventInfoComp)
    {
      $this->listEventInfoComp = $listEventInfoComp;
      return $this;
    }

}
