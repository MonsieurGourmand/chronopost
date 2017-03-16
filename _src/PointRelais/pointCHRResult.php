<?php

namespace Chronopost\PointRelais;

class pointCHRResult
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
     * @var pointCHR[] $listePointRelais
     */
    protected $listePointRelais = null;

    /**
     * @var int $qualiteReponse
     */
    protected $qualiteReponse = null;

    /**
     * @var string $wsRequestId
     */
    protected $wsRequestId = null;

    /**
     * @param int $errorCode
     * @param int $qualiteReponse
     */
    public function __construct($errorCode, $qualiteReponse)
    {
      $this->errorCode = $errorCode;
      $this->qualiteReponse = $qualiteReponse;
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
     * @return \Chronopost\PointRelais\pointCHRResult
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
     * @return \Chronopost\PointRelais\pointCHRResult
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return pointCHR[]
     */
    public function getListePointRelais()
    {
      return $this->listePointRelais;
    }

    /**
     * @param pointCHR[] $listePointRelais
     * @return \Chronopost\PointRelais\pointCHRResult
     */
    public function setListePointRelais(array $listePointRelais = null)
    {
      $this->listePointRelais = $listePointRelais;
      return $this;
    }

    /**
     * @return int
     */
    public function getQualiteReponse()
    {
      return $this->qualiteReponse;
    }

    /**
     * @param int $qualiteReponse
     * @return \Chronopost\PointRelais\pointCHRResult
     */
    public function setQualiteReponse($qualiteReponse)
    {
      $this->qualiteReponse = $qualiteReponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getWsRequestId()
    {
      return $this->wsRequestId;
    }

    /**
     * @param string $wsRequestId
     * @return \Chronopost\PointRelais\pointCHRResult
     */
    public function setWsRequestId($wsRequestId)
    {
      $this->wsRequestId = $wsRequestId;
      return $this;
    }

}
