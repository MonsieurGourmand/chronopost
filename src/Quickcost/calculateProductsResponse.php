<?php

namespace Chonopost\Quickcost;

class calculateProductsResponse
{

    /**
     * @var resultCalculateProducts $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultCalculateProducts
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultCalculateProducts $return
     * @return \Chonopost\Quickcost\calculateProductsResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
