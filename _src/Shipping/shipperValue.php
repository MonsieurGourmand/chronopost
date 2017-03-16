<?php

namespace Chronopost\Shipping;

class shipperValue
{

    /**
     * @var string $shipperAdress1
     */
    protected $shipperAdress1 = null;

    /**
     * @var string $shipperAdress2
     */
    protected $shipperAdress2 = null;

    /**
     * @var string $shipperCity
     */
    protected $shipperCity = null;

    /**
     * @var string $shipperCivility
     */
    protected $shipperCivility = null;

    /**
     * @var string $shipperContactName
     */
    protected $shipperContactName = null;

    /**
     * @var string $shipperCountry
     */
    protected $shipperCountry = null;

    /**
     * @var string $shipperCountryName
     */
    protected $shipperCountryName = null;

    /**
     * @var string $shipperEmail
     */
    protected $shipperEmail = null;

    /**
     * @var string $shipperMobilePhone
     */
    protected $shipperMobilePhone = null;

    /**
     * @var string $shipperName
     */
    protected $shipperName = null;

    /**
     * @var string $shipperName2
     */
    protected $shipperName2 = null;

    /**
     * @var string $shipperPhone
     */
    protected $shipperPhone = null;

    /**
     * @var int $shipperPreAlert
     */
    protected $shipperPreAlert = null;

    /**
     * @var string $shipperZipCode
     */
    protected $shipperZipCode = null;

    /**
     * @param int $shipperPreAlert
     */
    public function __construct($shipperPreAlert)
    {
      $this->shipperPreAlert = $shipperPreAlert;
    }

    /**
     * @return string
     */
    public function getShipperAdress1()
    {
      return $this->shipperAdress1;
    }

    /**
     * @param string $shipperAdress1
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperAdress1($shipperAdress1)
    {
      $this->shipperAdress1 = $shipperAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAdress2()
    {
      return $this->shipperAdress2;
    }

    /**
     * @param string $shipperAdress2
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperAdress2($shipperAdress2)
    {
      $this->shipperAdress2 = $shipperAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCity()
    {
      return $this->shipperCity;
    }

    /**
     * @param string $shipperCity
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperCity($shipperCity)
    {
      $this->shipperCity = $shipperCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCivility()
    {
      return $this->shipperCivility;
    }

    /**
     * @param string $shipperCivility
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperCivility($shipperCivility)
    {
      $this->shipperCivility = $shipperCivility;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperContactName()
    {
      return $this->shipperContactName;
    }

    /**
     * @param string $shipperContactName
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperContactName($shipperContactName)
    {
      $this->shipperContactName = $shipperContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountry()
    {
      return $this->shipperCountry;
    }

    /**
     * @param string $shipperCountry
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperCountry($shipperCountry)
    {
      $this->shipperCountry = $shipperCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountryName()
    {
      return $this->shipperCountryName;
    }

    /**
     * @param string $shipperCountryName
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperCountryName($shipperCountryName)
    {
      $this->shipperCountryName = $shipperCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperEmail()
    {
      return $this->shipperEmail;
    }

    /**
     * @param string $shipperEmail
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperEmail($shipperEmail)
    {
      $this->shipperEmail = $shipperEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperMobilePhone()
    {
      return $this->shipperMobilePhone;
    }

    /**
     * @param string $shipperMobilePhone
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperMobilePhone($shipperMobilePhone)
    {
      $this->shipperMobilePhone = $shipperMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperName()
    {
      return $this->shipperName;
    }

    /**
     * @param string $shipperName
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperName($shipperName)
    {
      $this->shipperName = $shipperName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperName2()
    {
      return $this->shipperName2;
    }

    /**
     * @param string $shipperName2
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperName2($shipperName2)
    {
      $this->shipperName2 = $shipperName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhone()
    {
      return $this->shipperPhone;
    }

    /**
     * @param string $shipperPhone
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperPhone($shipperPhone)
    {
      $this->shipperPhone = $shipperPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipperPreAlert()
    {
      return $this->shipperPreAlert;
    }

    /**
     * @param int $shipperPreAlert
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperPreAlert($shipperPreAlert)
    {
      $this->shipperPreAlert = $shipperPreAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperZipCode()
    {
      return $this->shipperZipCode;
    }

    /**
     * @param string $shipperZipCode
     * @return \Chronopost\Shipping\shipperValue
     */
    public function setShipperZipCode($shipperZipCode)
    {
      $this->shipperZipCode = $shipperZipCode;
      return $this;
    }

}
