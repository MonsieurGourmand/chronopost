<?php

namespace Chronopost\PointRelais;

class getAllChronopostAgencesResponse
{

    /**
     * @var pointChronopost[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return pointChronopost[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param pointChronopost[] $return
     * @return \Chronopost\PointRelais\getAllChronopostAgencesResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
