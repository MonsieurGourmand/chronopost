<?php

namespace Chonopost\PointRelais;

class rechercheBtAvecPFParIdChronopostA2PasResponse
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
     * @return \Chonopost\PointRelais\rechercheBtAvecPFParIdChronopostA2PasResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
