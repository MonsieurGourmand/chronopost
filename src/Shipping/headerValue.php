<?php

namespace Chronopost\Shipping;

class headerValue
{

    /**
     * @var int $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $idEmit
     */
    protected $idEmit = null;

    /**
     * @var string $identWebPro
     */
    protected $identWebPro = null;

    /**
     * @var int $subAccount
     */
    protected $subAccount = null;

    /**
     * @param int $accountNumber
     * @param int $subAccount
     */
    public function __construct($accountNumber, $subAccount)
    {
      $this->accountNumber = $accountNumber;
      $this->subAccount = $subAccount;
    }

    /**
     * @return int
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param int $accountNumber
     * @return \Chronopost\Shipping\headerValue
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdEmit()
    {
      return $this->idEmit;
    }

    /**
     * @param string $idEmit
     * @return \Chronopost\Shipping\headerValue
     */
    public function setIdEmit($idEmit)
    {
      $this->idEmit = $idEmit;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentWebPro()
    {
      return $this->identWebPro;
    }

    /**
     * @param string $identWebPro
     * @return \Chronopost\Shipping\headerValue
     */
    public function setIdentWebPro($identWebPro)
    {
      $this->identWebPro = $identWebPro;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubAccount()
    {
      return $this->subAccount;
    }

    /**
     * @param int $subAccount
     * @return \Chronopost\Shipping\headerValue
     */
    public function setSubAccount($subAccount)
    {
      $this->subAccount = $subAccount;
      return $this;
    }

}
