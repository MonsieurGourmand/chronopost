<?php

namespace Chonopost\Tracking;

class parcelPOD
{

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
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @param boolean $podPresente
     * @param int $statusCode
     */
    public function __construct($podPresente, $statusCode)
    {
      $this->podPresente = $podPresente;
      $this->statusCode = $statusCode;
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
     * @return \Chonopost\Tracking\parcelPOD
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
     * @return \Chonopost\Tracking\parcelPOD
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
     * @return \Chonopost\Tracking\parcelPOD
     */
    public function setPodPresente($podPresente)
    {
      $this->podPresente = $podPresente;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillNumber()
    {
      return $this->skybillNumber;
    }

    /**
     * @param string $skybillNumber
     * @return \Chonopost\Tracking\parcelPOD
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
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
     * @return \Chonopost\Tracking\parcelPOD
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
