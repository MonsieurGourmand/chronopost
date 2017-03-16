<?php

namespace Chronopost\Shipping;

class shippingV2Response
{

    /**
     * @var resultExpeditionValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultExpeditionValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultExpeditionValue $return
     * @return \Chronopost\Shipping\shippingV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
