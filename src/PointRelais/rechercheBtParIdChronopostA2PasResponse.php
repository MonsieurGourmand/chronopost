<?php

namespace Chronopost\PointRelais;

class rechercheBtParIdChronopostA2PasResponse
{

    /**
     * @var bureauDeTabacAvecCoord[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return bureauDeTabacAvecCoord[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param bureauDeTabacAvecCoord[] $return
     * @return \Chronopost\PointRelais\rechercheBtParIdChronopostA2PasResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
