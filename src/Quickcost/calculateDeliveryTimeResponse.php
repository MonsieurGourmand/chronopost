<?php

namespace Chonopost\Quickcost;

class calculateDeliveryTimeResponse
{

    /**
     * @var resultCalculateDeliveryTime $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultCalculateDeliveryTime
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultCalculateDeliveryTime $return
     * @return \Chonopost\Quickcost\calculateDeliveryTimeResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
