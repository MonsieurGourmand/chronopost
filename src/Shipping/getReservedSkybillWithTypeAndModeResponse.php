<?php

namespace Chonopost\Shipping;

class getReservedSkybillWithTypeAndModeResponse
{

    /**
     * @var resultGetReservedSkybillWithTypeValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultGetReservedSkybillWithTypeValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultGetReservedSkybillWithTypeValue $return
     * @return \Chonopost\Shipping\getReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
