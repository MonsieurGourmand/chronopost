<?php

namespace Chronopost\Shipping;

class shippingResponse
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
     * @return \Chronopost\Shipping\shippingResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
