<?php

namespace Chronopost\Quickcost;

class assurance
{

    /**
     * @var float $plafond
     */
    protected $plafond = null;

    /**
     * @var float $taux
     */
    protected $taux = null;

    /**
     * @param float $plafond
     * @param float $taux
     */
    public function __construct($plafond, $taux)
    {
      $this->plafond = $plafond;
      $this->taux = $taux;
    }

    /**
     * @return float
     */
    public function getPlafond()
    {
      return $this->plafond;
    }

    /**
     * @param float $plafond
     * @return \Chronopost\Quickcost\assurance
     */
    public function setPlafond($plafond)
    {
      $this->plafond = $plafond;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaux()
    {
      return $this->taux;
    }

    /**
     * @param float $taux
     * @return \Chronopost\Quickcost\assurance
     */
    public function setTaux($taux)
    {
      $this->taux = $taux;
      return $this;
    }

}
