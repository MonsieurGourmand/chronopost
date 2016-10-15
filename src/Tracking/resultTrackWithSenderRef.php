<?php

namespace Chonopost\Tracking;

class resultTrackWithSenderRef
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
     * @var listEvents[] $listParcel
     */
    protected $listParcel = null;

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
     * @return \Chonopost\Tracking\resultTrackWithSenderRef
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
     * @return \Chonopost\Tracking\resultTrackWithSenderRef
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return listEvents[]
     */
    public function getListParcel()
    {
      return $this->listParcel;
    }

    /**
     * @param listEvents[] $listParcel
     * @return \Chonopost\Tracking\resultTrackWithSenderRef
     */
    public function setListParcel(array $listParcel = null)
    {
      $this->listParcel = $listParcel;
      return $this;
    }

}
