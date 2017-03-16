<?php

namespace Chronopost\Shipping;

class shippingMultiParcelWithReservationV2Response
{

    /**
     * @var resultReservationMultiParcelExpeditionValueV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultReservationMultiParcelExpeditionValueV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultReservationMultiParcelExpeditionValueV2 $return
     * @return \Chronopost\Shipping\shippingMultiParcelWithReservationV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
