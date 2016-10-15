<?php

namespace Chonopost\Shipping;

class shippingMultiParcelWithReservationV3Response
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
