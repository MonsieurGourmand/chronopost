<?php

namespace Chronopost\PointRelais;

class recherchePointChronopostParCoordonneesGeographiquesResponse
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
     * @return \Chronopost\PointRelais\recherchePointChronopostParCoordonneesGeographiquesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
