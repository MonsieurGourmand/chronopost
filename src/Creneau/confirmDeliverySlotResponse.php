<?php

namespace Chonopost\Creneau;

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
     * @return \Chonopost\Creneau\confirmDeliverySlotResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
