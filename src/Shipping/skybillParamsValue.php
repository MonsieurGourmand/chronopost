<?php

namespace Chronopost\Shipping;

class skybillParamsValue
{

    /**
     * @var string $duplicata
     */
    protected $duplicata = null;

    /**
     * @var string $mode
     */
    protected $mode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDuplicata()
    {
      return $this->duplicata;
    }

    /**
     * @param string $duplicata
     * @return \Chronopost\Shipping\skybillParamsValue
     */
    public function setDuplicata($duplicata)
    {
      $this->duplicata = $duplicata;
      return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return \Chronopost\Shipping\skybillParamsValue
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

}
