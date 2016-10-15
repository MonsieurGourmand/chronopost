<?php

namespace Chronopost\Creneau;

class getAdresseGeocodage
{

    /**
     * @var string $adresse1
     */
    protected $adresse1 = null;

    /**
     * @var string $adresse2
     */
    protected $adresse2 = null;

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
    public function getAdresse1()
    {
      return $this->adresse1;
    }

    /**
     * @param string $adresse1
     * @return \Chronopost\Creneau\getAdresseGeocodage
     */
    public function setAdresse1($adresse1)
    {
      $this->adresse1 = $adresse1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdresse2()
    {
      return $this->adresse2;
    }

    /**
     * @param string $adresse2
     * @return \Chronopost\Creneau\getAdresseGeocodage
     */
    public function setAdresse2($adresse2)
    {
      $this->adresse2 = $adresse2;
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
     * @return \Chronopost\Creneau\getAdresseGeocodage
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
     * @return \Chronopost\Creneau\getAdresseGeocodage
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
