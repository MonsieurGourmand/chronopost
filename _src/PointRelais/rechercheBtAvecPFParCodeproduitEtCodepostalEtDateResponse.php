<?php

namespace Chronopost\PointRelais;

class rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse
{

    /**
     * @var bureauDeTabacAvecPF[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return bureauDeTabacAvecPF[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param bureauDeTabacAvecPF[] $return
     * @return \Chronopost\PointRelais\rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
