<?php

namespace Chonopost\Tracking;

class resultCancelSkybill
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
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @param int $errorCode
     * @param int $statusCode
     */
    public function __construct($errorCode, $statusCode)
    {
      $this->errorCode = $errorCode;
      $this->statusCode = $statusCode;
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
     * @return \Chonopost\Tracking\resultCancelSkybill
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
     * @return \Chonopost\Tracking\resultCancelSkybill
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return \Chonopost\Tracking\resultCancelSkybill
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
