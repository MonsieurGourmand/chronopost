<?php

namespace Chonopost\PointRelais;

class rechercheTourneeParTypeTourneeEtPosteComptableResponse
{

    /**
     * @var tourneeCompleteResult $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tourneeCompleteResult
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param tourneeCompleteResult $return
     * @return \Chonopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
