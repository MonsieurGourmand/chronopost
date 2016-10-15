<?php

namespace Chronopost\Tracking;

class trackSkybillV2Response
{

    /**
     * @var resultTrackSkybillV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultTrackSkybillV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultTrackSkybillV2 $return
     * @return \Chronopost\Tracking\trackSkybillV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
