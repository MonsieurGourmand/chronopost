<?php

namespace Chonopost\Shipping;

class esdWithRefClientValue extends esdValue
{

    /**
     * @var boolean $ltAImprimerParChronopost
     */
    protected $ltAImprimerParChronopost = null;

    /**
     * @var int $nombreDePassageMaximum
     */
    protected $nombreDePassageMaximum = null;

    /**
     * @var string $refEsdClient
     */
    protected $refEsdClient = null;

    /**
     * @param float $height
     * @param float $length
     * @param float $width
     * @param boolean $ltAImprimerParChronopost
     * @param int $nombreDePassageMaximum
     */
    public function __construct($height, $length, $width, $ltAImprimerParChronopost, $nombreDePassageMaximum)
    {
      parent::__construct($height, $length, $width);
      $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;
      $this->nombreDePassageMaximum = $nombreDePassageMaximum;
    }

    /**
     * @return boolean
     */
    public function getLtAImprimerParChronopost()
    {
      return $this->ltAImprimerParChronopost;
    }

    /**
     * @param boolean $ltAImprimerParChronopost
     * @return \Chonopost\Shipping\esdWithRefClientValue
     */
    public function setLtAImprimerParChronopost($ltAImprimerParChronopost)
    {
      $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;
      return $this;
    }

    /**
     * @return int
     */
    public function getNombreDePassageMaximum()
    {
      return $this->nombreDePassageMaximum;
    }

    /**
     * @param int $nombreDePassageMaximum
     * @return \Chonopost\Shipping\esdWithRefClientValue
     */
    public function setNombreDePassageMaximum($nombreDePassageMaximum)
    {
      $this->nombreDePassageMaximum = $nombreDePassageMaximum;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefEsdClient()
    {
      return $this->refEsdClient;
    }

    /**
     * @param string $refEsdClient
     * @return \Chonopost\Shipping\esdWithRefClientValue
     */
    public function setRefEsdClient($refEsdClient)
    {
      $this->refEsdClient = $refEsdClient;
      return $this;
    }

}
