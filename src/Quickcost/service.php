<?php

namespace Chronopost\Quickcost;

class service
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $amountTTC
     */
    protected $amountTTC = null;

    /**
     * @var float $amountTVA
     */
    protected $amountTVA = null;

    /**
     * @var string $codeService
     */
    protected $codeService = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     */
    public function __construct($amount, $amountTTC, $amountTVA)
    {
      $this->amount = $amount;
      $this->amountTTC = $amountTTC;
      $this->amountTVA = $amountTVA;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Chronopost\Quickcost\service
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountTTC()
    {
      return $this->amountTTC;
    }

    /**
     * @param float $amountTTC
     * @return \Chronopost\Quickcost\service
     */
    public function setAmountTTC($amountTTC)
    {
      $this->amountTTC = $amountTTC;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountTVA()
    {
      return $this->amountTVA;
    }

    /**
     * @param float $amountTVA
     * @return \Chronopost\Quickcost\service
     */
    public function setAmountTVA($amountTVA)
    {
      $this->amountTVA = $amountTVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeService()
    {
      return $this->codeService;
    }

    /**
     * @param string $codeService
     * @return \Chronopost\Quickcost\service
     */
    public function setCodeService($codeService)
    {
      $this->codeService = $codeService;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Chronopost\Quickcost\service
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
