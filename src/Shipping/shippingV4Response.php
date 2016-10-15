<?php

namespace Chonopost\Shipping;

class shippingV4Response
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
     * @return \Chonopost\Shipping\shippingV4Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
