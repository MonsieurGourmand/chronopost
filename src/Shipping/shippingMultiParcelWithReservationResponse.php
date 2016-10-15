<?php

namespace Chonopost\Shipping;

class shippingMultiParcelWithReservationResponse
{

    /**
     * @var resultReservationMultiParcelExpeditionValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultReservationMultiParcelExpeditionValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultReservationMultiParcelExpeditionValue $return
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
