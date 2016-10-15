<?php

namespace Chronopost\PointRelais;

class rechercheTourneeParTypeTourneeEtPosteComptable
{

    /**
     * @var string $codeTournee
     */
    protected $codeTournee = null;

    /**
     * @var string $typeTournee
     */
    protected $typeTournee = null;

    /**
     * @var string $posteComptable
     */
    protected $posteComptable = null;

    
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
     * @return \Chronopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setCodeTournee($codeTournee)
    {
      $this->codeTournee = $codeTournee;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeTournee()
    {
      return $this->typeTournee;
    }

    /**
     * @param string $typeTournee
     * @return \Chronopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setTypeTournee($typeTournee)
    {
      $this->typeTournee = $typeTournee;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosteComptable()
    {
      return $this->posteComptable;
    }

    /**
     * @param string $posteComptable
     * @return \Chronopost\PointRelais\rechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setPosteComptable($posteComptable)
    {
      $this->posteComptable = $posteComptable;
      return $this;
    }

}
