<?php

namespace Chonopost\PointRelais;

class recherchePointChronopostResponse
{

    /**
     * @var pointCHRResult $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return pointCHRResult
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param pointCHRResult $return
     * @return \Chonopost\PointRelais\recherchePointChronopostResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
