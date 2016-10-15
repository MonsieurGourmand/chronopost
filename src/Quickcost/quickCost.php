<?php

namespace Chonopost\Quickcost;

class quickCost
{

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $depCode
     */
    protected $depCode = null;

    /**
     * @var string $arrCode
     */
    protected $arrCode = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepCode()
    {
      return $this->depCode;
    }

    /**
     * @param string $depCode
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setDepCode($depCode)
    {
      $this->depCode = $depCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrCode()
    {
      return $this->arrCode;
    }

    /**
     * @param string $arrCode
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setArrCode($arrCode)
    {
      $this->arrCode = $arrCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param string $weight
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
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
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Chonopost\Quickcost\quickCost
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
