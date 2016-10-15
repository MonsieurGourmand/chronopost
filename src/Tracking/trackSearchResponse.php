<?php

namespace Chronopost\Tracking;

class trackSearchResponse
{

    /**
     * @var resultTrackSearch $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultTrackSearch
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultTrackSearch $return
     * @return \Chronopost\Tracking\trackSearchResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
