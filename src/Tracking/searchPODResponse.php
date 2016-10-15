<?php

namespace Chonopost\Tracking;

class searchPODResponse
{

    /**
     * @var resultSearchPOD $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultSearchPOD
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultSearchPOD $return
     * @return \Chonopost\Tracking\searchPODResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
