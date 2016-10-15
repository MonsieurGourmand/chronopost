<?php

namespace Chonopost\Shipping;

class getShippingInformationResponse
{

    /**
     * @var resultShippingInfo $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultShippingInfo
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultShippingInfo $return
     * @return \Chonopost\Shipping\getShippingInformationResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
