<?php

namespace Chonopost\Quickcost;

class calculateDeliveryTime
{

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
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $service
     */
    protected $service = null;

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
    public function getDepCountryCode()
    {
      return $this->depCountryCode;
    }

    /**
     * @param string $depCountryCode
     * @return \Chonopost\Quickcost\calculateDeliveryTime
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
     */
    public function setArrCity($arrCity)
    {
      $this->arrCity = $arrCity;
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Chonopost\Quickcost\calculateDeliveryTime
     */
    public function setService($service)
    {
      $this->service = $service;
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
     * @return \Chonopost\Quickcost\calculateDeliveryTime
     */
    public function setShippingDate($shippingDate)
    {
      $this->shippingDate = $shippingDate;
      return $this;
    }

}
