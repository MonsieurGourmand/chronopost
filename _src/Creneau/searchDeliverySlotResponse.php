<?php

namespace Chronopost\Creneau;

class searchDeliverySlotResponse
{

    /**
     * @var deliverySlotResponse $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deliverySlotResponse
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deliverySlotResponse $return
     * @return \Chronopost\Creneau\searchDeliverySlotResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
