<?php

namespace Chronopost\Tracking;

class trackWithSenderRefResponse
{

    /**
     * @var resultTrackWithSenderRef $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultTrackWithSenderRef
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultTrackWithSenderRef $return
     * @return \Chronopost\Tracking\trackWithSenderRefResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
