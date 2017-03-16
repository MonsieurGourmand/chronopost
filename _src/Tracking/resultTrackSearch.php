<?php

namespace Chronopost\Tracking;

class resultTrackSearch
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
     * @var infosPOD[] $listInfosPOD
     */
    protected $listInfosPOD = null;

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
     * @return \Chronopost\Tracking\resultTrackSearch
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
     * @return \Chronopost\Tracking\resultTrackSearch
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return infosPOD[]
     */
    public function getListInfosPOD()
    {
      return $this->listInfosPOD;
    }

    /**
     * @param infosPOD[] $listInfosPOD
     * @return \Chronopost\Tracking\resultTrackSearch
     */
    public function setListInfosPOD(array $listInfosPOD = null)
    {
      $this->listInfosPOD = $listInfosPOD;
      return $this;
    }

}
