<?php

namespace Chronopost\PointRelais;

class tourneeResult
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
     * @var tournee $tournee
     */
    protected $tournee = null;

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
     * @return \Chronopost\PointRelais\tourneeResult
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
     * @return \Chronopost\PointRelais\tourneeResult
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return tournee
     */
    public function getTournee()
    {
      return $this->tournee;
    }

    /**
     * @param tournee $tournee
     * @return \Chronopost\PointRelais\tourneeResult
     */
    public function setTournee($tournee)
    {
      $this->tournee = $tournee;
      return $this;
    }

}
