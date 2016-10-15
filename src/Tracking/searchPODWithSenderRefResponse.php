<?php

namespace Chonopost\Tracking;

class searchPODWithSenderRefResponse
{

    /**
     * @var resultSearchPODWithSenderRef $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultSearchPODWithSenderRef
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultSearchPODWithSenderRef $return
     * @return \Chonopost\Tracking\searchPODWithSenderRefResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
