<?php

namespace Chronopost\PointRelais;

class recherchePointChronopost
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
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $shippingDate
     */
    protected $shippingDate = null;

    /**
     * @var string $maxPointChronopost
     */
    protected $maxPointChronopost = null;

    /**
     * @var string $maxDistanceSearch
     */
    protected $maxDistanceSearch = null;

    /**
     * @var string $holidayTolerant
     */
    protected $holidayTolerant = null;

    
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setService($service)
    {
      $this->service = $service;
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
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
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setShippingDate($shippingDate)
    {
      $this->shippingDate = $shippingDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxPointChronopost()
    {
      return $this->maxPointChronopost;
    }

    /**
     * @param string $maxPointChronopost
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setMaxPointChronopost($maxPointChronopost)
    {
      $this->maxPointChronopost = $maxPointChronopost;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxDistanceSearch()
    {
      return $this->maxDistanceSearch;
    }

    /**
     * @param string $maxDistanceSearch
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setMaxDistanceSearch($maxDistanceSearch)
    {
      $this->maxDistanceSearch = $maxDistanceSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getHolidayTolerant()
    {
      return $this->holidayTolerant;
    }

    /**
     * @param string $holidayTolerant
     * @return \Chronopost\PointRelais\recherchePointChronopost
     */
    public function setHolidayTolerant($holidayTolerant)
    {
      $this->holidayTolerant = $holidayTolerant;
      return $this;
    }

}
