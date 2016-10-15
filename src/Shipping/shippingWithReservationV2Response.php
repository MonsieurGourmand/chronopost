<?php

namespace Chonopost\Shipping;

class shippingWithReservationV2Response
{

    /**
     * @var resultReservationExpeditionValueV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultReservationExpeditionValueV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultReservationExpeditionValueV2 $return
     * @return \Chonopost\Shipping\shippingWithReservationV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
