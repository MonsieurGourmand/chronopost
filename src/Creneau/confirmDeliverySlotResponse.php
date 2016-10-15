<?php

namespace Chronopost\Creneau;

class confirmDeliverySlotResponse
{

    /**
     * @var serviceResponse $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return serviceResponse
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param serviceResponse $return
     * @return \Chronopost\Creneau\confirmDeliverySlotResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
