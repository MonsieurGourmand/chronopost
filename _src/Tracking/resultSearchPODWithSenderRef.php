<?php

namespace Chronopost\Tracking;

class resultSearchPODWithSenderRef
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
     * @var parcelPOD[] $listParcelPOD
     */
    protected $listParcelPOD = null;

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
     * @return \Chronopost\Tracking\resultSearchPODWithSenderRef
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
     * @return \Chronopost\Tracking\resultSearchPODWithSenderRef
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return parcelPOD[]
     */
    public function getListParcelPOD()
    {
      return $this->listParcelPOD;
    }

    /**
     * @param parcelPOD[] $listParcelPOD
     * @return \Chronopost\Tracking\resultSearchPODWithSenderRef
     */
    public function setListParcelPOD(array $listParcelPOD = null)
    {
      $this->listParcelPOD = $listParcelPOD;
      return $this;
    }

}
