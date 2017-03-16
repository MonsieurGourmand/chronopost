<?php

namespace Chronopost\Tracking;

class cancelSkybillResponse
{

    /**
     * @var resultCancelSkybill $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultCancelSkybill
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultCancelSkybill $return
     * @return \Chronopost\Tracking\cancelSkybillResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
