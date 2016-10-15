<?php

namespace Chonopost\Shipping;

class rechercherContraintesEnlevement
{

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Chonopost\Shipping\rechercherContraintesEnlevement
     */
    public function setCountry($country)
    {
      $this->country = $country;
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
     * @return \Chonopost\Shipping\rechercherContraintesEnlevement
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
     * @return \Chonopost\Shipping\rechercherContraintesEnlevement
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
