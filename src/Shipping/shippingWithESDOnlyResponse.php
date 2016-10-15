<?php

namespace Chonopost\Shipping;

class shippingWithESDOnlyResponse
{

    /**
     * @var resultReservationExpeditionValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultReservationExpeditionValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultReservationExpeditionValue $return
     * @return \Chonopost\Shipping\shippingWithESDOnlyResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
