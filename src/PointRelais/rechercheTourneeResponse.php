<?php

namespace Chronopost\PointRelais;

class rechercheTourneeResponse
{

    /**
     * @var tourneeResult $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tourneeResult
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param tourneeResult $return
     * @return \Chronopost\PointRelais\rechercheTourneeResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
