<?php

namespace Chonopost\Quickcost;

class resultQuickCostV2 extends resultQuickCost
{

    /**
     * @var assurance $assurance
     */
    protected $assurance = null;

    /**
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     * @param int $errorCode
     */
    public function __construct($amount, $amountTTC, $amountTVA, $errorCode)
    {
      parent::__construct($amount, $amountTTC, $amountTVA, $errorCode);
    }

    /**
     * @return assurance
     */
    public function getAssurance()
    {
      return $this->assurance;
    }

    /**
     * @param assurance $assurance
     * @return \Chonopost\Quickcost\resultQuickCostV2
     */
    public function setAssurance($assurance)
    {
      $this->assurance = $assurance;
      return $this;
    }

}
