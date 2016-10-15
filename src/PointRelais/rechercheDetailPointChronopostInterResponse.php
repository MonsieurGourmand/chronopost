<?php

namespace Chonopost\PointRelais;

class rechercheDetailPointChronopostInterResponse
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
     * @return \Chonopost\PointRelais\rechercheDetailPointChronopostInterResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
