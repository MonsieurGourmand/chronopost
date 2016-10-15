<?php

namespace Chonopost\PointRelais;

class rechercheBtParCodeproduitEtCodepostalEtDateResponse
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
     * @return \Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDateResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
