<?php

namespace Chronopost\Shipping;

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
     * @return \Chronopost\Shipping\getShippingInformationResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
