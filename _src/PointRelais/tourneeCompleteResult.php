<?php

namespace Chronopost\PointRelais;

class tourneeCompleteResult
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
     * @var tourneeComplete $tourneeComplete
     */
    protected $tourneeComplete = null;

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
     * @return \Chronopost\PointRelais\tourneeCompleteResult
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
     * @return \Chronopost\PointRelais\tourneeCompleteResult
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return tourneeComplete
     */
    public function getTourneeComplete()
    {
      return $this->tourneeComplete;
    }

    /**
     * @param tourneeComplete $tourneeComplete
     * @return \Chronopost\PointRelais\tourneeCompleteResult
     */
    public function setTourneeComplete($tourneeComplete)
    {
      $this->tourneeComplete = $tourneeComplete;
      return $this;
    }

}
