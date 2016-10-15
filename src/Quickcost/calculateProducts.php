<?php

namespace Chonopost\Quickcost;

class calculateProducts
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
     * @var string $depCountryCode
     */
    protected $depCountryCode = null;

    /**
     * @var string $depZipCode
     */
    protected $depZipCode = null;

    /**
     * @var string $arrCountryCode
     */
    protected $arrCountryCode = null;

    /**
     * @var string $arrZipCode
     */
    protected $arrZipCode = null;

    /**
     * @var string $arrCity
     */
    protected $arrCity = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $height
     */
    protected $height = null;

    /**
     * @var string $length
     */
    protected $length = null;

    /**
     * @var string $width
     */
    protected $width = null;

    /**
     * @var string $shippingDate
     */
    protected $shippingDate = null;

    
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
     * @return \Chonopost\Quickcost\calculateProducts
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
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepCountryCode()
    {
      return $this->depCountryCode;
    }

    /**
     * @param string $depCountryCode
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setDepCountryCode($depCountryCode)
    {
      $this->depCountryCode = $depCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepZipCode()
    {
      return $this->depZipCode;
    }

    /**
     * @param string $depZipCode
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setDepZipCode($depZipCode)
    {
      $this->depZipCode = $depZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrCountryCode()
    {
      return $this->arrCountryCode;
    }

    /**
     * @param string $arrCountryCode
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setArrCountryCode($arrCountryCode)
    {
      $this->arrCountryCode = $arrCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrZipCode()
    {
      return $this->arrZipCode;
    }

    /**
     * @param string $arrZipCode
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setArrZipCode($arrZipCode)
    {
      $this->arrZipCode = $arrZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrCity()
    {
      return $this->arrCity;
    }

    /**
     * @param string $arrCity
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setArrCity($arrCity)
    {
      $this->arrCity = $arrCity;
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
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param string $height
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param string $length
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param string $width
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingDate()
    {
      return $this->shippingDate;
    }

    /**
     * @param string $shippingDate
     * @return \Chonopost\Quickcost\calculateProducts
     */
    public function setShippingDate($shippingDate)
    {
      $this->shippingDate = $shippingDate;
      return $this;
    }

}
