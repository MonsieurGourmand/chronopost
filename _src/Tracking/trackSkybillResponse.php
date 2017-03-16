<?php

namespace Chronopost\Tracking;

class trackSkybillResponse
{

    /**
     * @var resultTrackSkybill $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultTrackSkybill
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultTrackSkybill $return
     * @return \Chronopost\Tracking\trackSkybillResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
