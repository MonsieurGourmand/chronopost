<?php

namespace Chronopost\Shipping;

class getReservedSkybillResponse
{

    /**
     * @var resultGetReservedSkybillValue $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultGetReservedSkybillValue
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultGetReservedSkybillValue $return
     * @return \Chronopost\Shipping\getReservedSkybillResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
