<?php

namespace Chonopost\Quickcost;

class quickCostResponse
{

    /**
     * @var resultQuickCostV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultQuickCostV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultQuickCostV2 $return
     * @return \Chonopost\Quickcost\quickCostResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
