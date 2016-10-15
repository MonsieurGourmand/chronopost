<?php

namespace Chonopost\Shipping;

class recipientValue
{

    /**
     * @var string $recipientAdress1
     */
    protected $recipientAdress1 = null;

    /**
     * @var string $recipientAdress2
     */
    protected $recipientAdress2 = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    /**
     * @var string $recipientContactName
     */
    protected $recipientContactName = null;

    /**
     * @var string $recipientCountry
     */
    protected $recipientCountry = null;

    /**
     * @var string $recipientCountryName
     */
    protected $recipientCountryName = null;

    /**
     * @var string $recipientEmail
     */
    protected $recipientEmail = null;

    /**
     * @var string $recipientMobilePhone
     */
    protected $recipientMobilePhone = null;

    /**
     * @var string $recipientName
     */
    protected $recipientName = null;

    /**
     * @var string $recipientName2
     */
    protected $recipientName2 = null;

    /**
     * @var string $recipientPhone
     */
    protected $recipientPhone = null;

    /**
     * @var int $recipientPreAlert
     */
    protected $recipientPreAlert = null;

    /**
     * @var string $recipientZipCode
     */
    protected $recipientZipCode = null;

    /**
     * @param int $recipientPreAlert
     */
    public function __construct($recipientPreAlert)
    {
      $this->recipientPreAlert = $recipientPreAlert;
    }

    /**
     * @return string
     */
    public function getRecipientAdress1()
    {
      return $this->recipientAdress1;
    }

    /**
     * @param string $recipientAdress1
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientAdress1($recipientAdress1)
    {
      $this->recipientAdress1 = $recipientAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAdress2()
    {
      return $this->recipientAdress2;
    }

    /**
     * @param string $recipientAdress2
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientAdress2($recipientAdress2)
    {
      $this->recipientAdress2 = $recipientAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCity()
    {
      return $this->recipientCity;
    }

    /**
     * @param string $recipientCity
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientCity($recipientCity)
    {
      $this->recipientCity = $recipientCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientContactName()
    {
      return $this->recipientContactName;
    }

    /**
     * @param string $recipientContactName
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientContactName($recipientContactName)
    {
      $this->recipientContactName = $recipientContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCountry()
    {
      return $this->recipientCountry;
    }

    /**
     * @param string $recipientCountry
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientCountry($recipientCountry)
    {
      $this->recipientCountry = $recipientCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCountryName()
    {
      return $this->recipientCountryName;
    }

    /**
     * @param string $recipientCountryName
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientCountryName($recipientCountryName)
    {
      $this->recipientCountryName = $recipientCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmail()
    {
      return $this->recipientEmail;
    }

    /**
     * @param string $recipientEmail
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientEmail($recipientEmail)
    {
      $this->recipientEmail = $recipientEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientMobilePhone()
    {
      return $this->recipientMobilePhone;
    }

    /**
     * @param string $recipientMobilePhone
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientMobilePhone($recipientMobilePhone)
    {
      $this->recipientMobilePhone = $recipientMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
      return $this->recipientName;
    }

    /**
     * @param string $recipientName
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientName($recipientName)
    {
      $this->recipientName = $recipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName2()
    {
      return $this->recipientName2;
    }

    /**
     * @param string $recipientName2
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientName2($recipientName2)
    {
      $this->recipientName2 = $recipientName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPhone()
    {
      return $this->recipientPhone;
    }

    /**
     * @param string $recipientPhone
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientPhone($recipientPhone)
    {
      $this->recipientPhone = $recipientPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientPreAlert()
    {
      return $this->recipientPreAlert;
    }

    /**
     * @param int $recipientPreAlert
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientPreAlert($recipientPreAlert)
    {
      $this->recipientPreAlert = $recipientPreAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientZipCode()
    {
      return $this->recipientZipCode;
    }

    /**
     * @param string $recipientZipCode
     * @return \Chonopost\Shipping\recipientValue
     */
    public function setRecipientZipCode($recipientZipCode)
    {
      $this->recipientZipCode = $recipientZipCode;
      return $this;
    }

}
