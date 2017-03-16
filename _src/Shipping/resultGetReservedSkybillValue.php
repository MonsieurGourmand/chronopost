<?php

namespace Chronopost\Shipping;

class resultGetReservedSkybillValue
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
     * @var string $skybill
     */
    protected $skybill = null;

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
     * @return \Chronopost\Shipping\resultGetReservedSkybillValue
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
     * @return \Chronopost\Shipping\resultGetReservedSkybillValue
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybill()
    {
      return $this->skybill;
    }

    /**
     * @param string $skybill
     * @return \Chronopost\Shipping\resultGetReservedSkybillValue
     */
    public function setSkybill($skybill)
    {
      $this->skybill = $skybill;
      return $this;
    }

}
