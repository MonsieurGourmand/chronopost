<?php

namespace Chonopost\Shipping;

class rechercherContraintesEnlevementResponse
{

    /**
     * @var esdResultContraintesAgenceValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esdResultContraintesAgenceValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param esdResultContraintesAgenceValue $return
     * @return \Chonopost\Shipping\rechercherContraintesEnlevementResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
