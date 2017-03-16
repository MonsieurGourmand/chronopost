<?php

namespace Chronopost\PointRelais;

class rechercheTournee
{

    /**
     * @var string $codeTournee
     */
    protected $codeTournee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodeTournee()
    {
      return $this->codeTournee;
    }

    /**
     * @param string $codeTournee
     * @return \Chronopost\PointRelais\rechercheTournee
     */
    public function setCodeTournee($codeTournee)
    {
      $this->codeTournee = $codeTournee;
      return $this;
    }

}
