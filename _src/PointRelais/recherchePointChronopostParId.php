<?php

namespace Chronopost\PointRelais;

class recherchePointChronopostParId
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
     * @return \Chronopost\PointRelais\recherchePointChronopostParId
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
