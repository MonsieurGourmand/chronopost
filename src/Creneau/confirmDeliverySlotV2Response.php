<?php

namespace Chonopost\Creneau;

class confirmDeliverySlotV2Response
{

    /**
     * @var serviceResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return serviceResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param serviceResponseV2 $return
     * @return \Chonopost\Creneau\confirmDeliverySlotV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
