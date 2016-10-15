<?php

namespace Chronopost\Shipping;

class getReservedSkybillWithTypeResponse
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
     * @return \Chronopost\Shipping\getReservedSkybillWithTypeResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
