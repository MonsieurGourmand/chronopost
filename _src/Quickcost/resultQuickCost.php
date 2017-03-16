<?php

namespace Chronopost\Quickcost;

class resultQuickCost
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
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var service[] $service
     */
    protected $service = null;

    /**
     * @var string $zone
     */
    protected $zone = null;

    /**
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     * @param int $errorCode
     */
    public function __construct($amount, $amountTTC, $amountTVA, $errorCode)
    {
      $this->amount = $amount;
      $this->amountTTC = $amountTTC;
      $this->amountTVA = $amountTVA;
      $this->errorCode = $errorCode;
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
     * @return \Chronopost\Quickcost\resultQuickCost
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
     * @return \Chronopost\Quickcost\resultQuickCost
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
     * @return \Chronopost\Quickcost\resultQuickCost
     */
    public function setAmountTVA($amountTVA)
    {
      $this->amountTVA = $amountTVA;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \Chronopost\Quickcost\resultQuickCost
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \Chronopost\Quickcost\resultQuickCost
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return service[]
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param service[] $service
     * @return \Chronopost\Quickcost\resultQuickCost
     */
    public function setService(array $service = null)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getZone()
    {
      return $this->zone;
    }

    /**
     * @param string $zone
     * @return \Chronopost\Quickcost\resultQuickCost
     */
    public function setZone($zone)
    {
      $this->zone = $zone;
      return $this;
    }

}
