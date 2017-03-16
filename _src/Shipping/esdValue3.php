<?php

namespace Chronopost\Shipping;

class esdValue3 extends esdWithRefClientValue
{

    /**
     * @var string $codeDepotColReq
     */
    protected $codeDepotColReq = null;

    /**
     * @var string $numColReq
     */
    protected $numColReq = null;

    /**
     * @param float $height
     * @param float $length
     * @param float $width
     * @param boolean $ltAImprimerParChronopost
     * @param int $nombreDePassageMaximum
     */
    public function __construct($height, $length, $width, $ltAImprimerParChronopost, $nombreDePassageMaximum)
    {
      parent::__construct($height, $length, $width, $ltAImprimerParChronopost, $nombreDePassageMaximum);
    }

    /**
     * @return string
     */
    public function getCodeDepotColReq()
    {
      return $this->codeDepotColReq;
    }

    /**
     * @param string $codeDepotColReq
     * @return \Chronopost\Shipping\esdValue3
     */
    public function setCodeDepotColReq($codeDepotColReq)
    {
      $this->codeDepotColReq = $codeDepotColReq;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumColReq()
    {
      return $this->numColReq;
    }

    /**
     * @param string $numColReq
     * @return \Chronopost\Shipping\esdValue3
     */
    public function setNumColReq($numColReq)
    {
      $this->numColReq = $numColReq;
      return $this;
    }

}
