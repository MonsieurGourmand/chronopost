<?php

namespace Chonopost\PointRelais;

class recherchePointChronopostParIdResponse
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParIdResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
