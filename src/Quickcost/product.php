<?php

namespace Chronopost\Quickcost;

class product
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
     * @var string $productCode
     */
    protected $productCode = null;

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
     * @return \Chronopost\Quickcost\product
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
     * @return \Chronopost\Quickcost\product
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
     * @return \Chronopost\Quickcost\product
     */
    public function setAmountTVA($amountTVA)
    {
      $this->amountTVA = $amountTVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Chronopost\Quickcost\product
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

}
