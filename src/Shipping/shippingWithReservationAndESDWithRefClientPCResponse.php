<?php

namespace Chronopost\Shipping;

class shippingWithReservationAndESDWithRefClientPCResponse
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
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClientPCResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
