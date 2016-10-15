<?php

namespace Chonopost\PointRelais;

class horaireOuverture
{

    /**
     * @var string $debut
     */
    protected $debut = null;

    /**
     * @var string $fin
     */
    protected $fin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDebut()
    {
      return $this->debut;
    }

    /**
     * @param string $debut
     * @return \Chonopost\PointRelais\horaireOuverture
     */
    public function setDebut($debut)
    {
      $this->debut = $debut;
      return $this;
    }

    /**
     * @return string
     */
    public function getFin()
    {
      return $this->fin;
    }

    /**
     * @param string $fin
     * @return \Chonopost\PointRelais\horaireOuverture
     */
    public function setFin($fin)
    {
      $this->fin = $fin;
      return $this;
    }

}
