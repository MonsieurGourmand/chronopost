<?php

namespace Chonopost\PointRelais;

class recherchePointChronopostParCoordonneesGeographiques
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
     * @var string $coordGeoLatitude
     */
    protected $coordGeoLatitude = null;

    /**
     * @var string $coordGeoLongitude
     */
    protected $coordGeoLongitude = null;

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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoordGeoLatitude()
    {
      return $this->coordGeoLatitude;
    }

    /**
     * @param string $coordGeoLatitude
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
     */
    public function setCoordGeoLatitude($coordGeoLatitude)
    {
      $this->coordGeoLatitude = $coordGeoLatitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoordGeoLongitude()
    {
      return $this->coordGeoLongitude;
    }

    /**
     * @param string $coordGeoLongitude
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
     */
    public function setCoordGeoLongitude($coordGeoLongitude)
    {
      $this->coordGeoLongitude = $coordGeoLongitude;
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
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
     * @return \Chonopost\PointRelais\recherchePointChronopostParCoordonneesGeographiques
     */
    public function setHolidayTolerant($holidayTolerant)
    {
      $this->holidayTolerant = $holidayTolerant;
      return $this;
    }

}
