<?php

namespace Chronopost\PointRelais;

class rechercheBtAvecPFParIdChronopostA2Pas
{

    /**
     * @var string $id
     */
    protected $id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Chronopost\PointRelais\rechercheBtAvecPFParIdChronopostA2Pas
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
