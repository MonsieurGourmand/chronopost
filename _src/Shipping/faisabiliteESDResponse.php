<?php

namespace Chronopost\Shipping;

class faisabiliteESDResponse
{

    /**
     * @var resultFaisabiliteESD $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return resultFaisabiliteESD
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param resultFaisabiliteESD $return
     * @return \Chronopost\Shipping\faisabiliteESDResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
