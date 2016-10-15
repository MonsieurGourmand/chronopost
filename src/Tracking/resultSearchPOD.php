<?php

namespace Chronopost\Tracking;

class resultSearchPOD
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
     * @var string $formatPOD
     */
    protected $formatPOD = null;

    /**
     * @var base64Binary $pod
     */
    protected $pod = null;

    /**
     * @var boolean $podPresente
     */
    protected $podPresente = null;

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @param int $errorCode
     * @param boolean $podPresente
     * @param int $statusCode
     */
    public function __construct($errorCode, $podPresente, $statusCode)
    {
      $this->errorCode = $errorCode;
      $this->podPresente = $podPresente;
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
     * @return \Chronopost\Tracking\resultSearchPOD
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
     * @return \Chronopost\Tracking\resultSearchPOD
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatPOD()
    {
      return $this->formatPOD;
    }

    /**
     * @param string $formatPOD
     * @return \Chronopost\Tracking\resultSearchPOD
     */
    public function setFormatPOD($formatPOD)
    {
      $this->formatPOD = $formatPOD;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPod()
    {
      return $this->pod;
    }

    /**
     * @param base64Binary $pod
     * @return \Chronopost\Tracking\resultSearchPOD
     */
    public function setPod($pod)
    {
      $this->pod = $pod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPodPresente()
    {
      return $this->podPresente;
    }

    /**
     * @param boolean $podPresente
     * @return \Chronopost\Tracking\resultSearchPOD
     */
    public function setPodPresente($podPresente)
    {
      $this->podPresente = $podPresente;
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
     * @return \Chronopost\Tracking\resultSearchPOD
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
