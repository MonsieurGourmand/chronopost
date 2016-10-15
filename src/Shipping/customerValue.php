<?php

namespace Chronopost\Shipping;

class customerValue
{

    /**
     * @var string $customerAdress1
     */
    protected $customerAdress1 = null;

    /**
     * @var string $customerAdress2
     */
    protected $customerAdress2 = null;

    /**
     * @var string $customerCity
     */
    protected $customerCity = null;

    /**
     * @var string $customerCivility
     */
    protected $customerCivility = null;

    /**
     * @var string $customerContactName
     */
    protected $customerContactName = null;

    /**
     * @var string $customerCountry
     */
    protected $customerCountry = null;

    /**
     * @var string $customerCountryName
     */
    protected $customerCountryName = null;

    /**
     * @var string $customerEmail
     */
    protected $customerEmail = null;

    /**
     * @var string $customerMobilePhone
     */
    protected $customerMobilePhone = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var string $customerName2
     */
    protected $customerName2 = null;

    /**
     * @var string $customerPhone
     */
    protected $customerPhone = null;

    /**
     * @var int $customerPreAlert
     */
    protected $customerPreAlert = null;

    /**
     * @var string $customerZipCode
     */
    protected $customerZipCode = null;

    /**
     * @var string $printAsSender
     */
    protected $printAsSender = null;

    /**
     * @param int $customerPreAlert
     */
    public function __construct($customerPreAlert)
    {
      $this->customerPreAlert = $customerPreAlert;
    }

    /**
     * @return string
     */
    public function getCustomerAdress1()
    {
      return $this->customerAdress1;
    }

    /**
     * @param string $customerAdress1
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerAdress1($customerAdress1)
    {
      $this->customerAdress1 = $customerAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAdress2()
    {
      return $this->customerAdress2;
    }

    /**
     * @param string $customerAdress2
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerAdress2($customerAdress2)
    {
      $this->customerAdress2 = $customerAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCity()
    {
      return $this->customerCity;
    }

    /**
     * @param string $customerCity
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerCity($customerCity)
    {
      $this->customerCity = $customerCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCivility()
    {
      return $this->customerCivility;
    }

    /**
     * @param string $customerCivility
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerCivility($customerCivility)
    {
      $this->customerCivility = $customerCivility;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerContactName()
    {
      return $this->customerContactName;
    }

    /**
     * @param string $customerContactName
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerContactName($customerContactName)
    {
      $this->customerContactName = $customerContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountry()
    {
      return $this->customerCountry;
    }

    /**
     * @param string $customerCountry
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerCountry($customerCountry)
    {
      $this->customerCountry = $customerCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountryName()
    {
      return $this->customerCountryName;
    }

    /**
     * @param string $customerCountryName
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerCountryName($customerCountryName)
    {
      $this->customerCountryName = $customerCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
      return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerEmail($customerEmail)
    {
      $this->customerEmail = $customerEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerMobilePhone()
    {
      return $this->customerMobilePhone;
    }

    /**
     * @param string $customerMobilePhone
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerMobilePhone($customerMobilePhone)
    {
      $this->customerMobilePhone = $customerMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerName($customerName)
    {
      $this->customerName = $customerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName2()
    {
      return $this->customerName2;
    }

    /**
     * @param string $customerName2
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerName2($customerName2)
    {
      $this->customerName2 = $customerName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone()
    {
      return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerPhone($customerPhone)
    {
      $this->customerPhone = $customerPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerPreAlert()
    {
      return $this->customerPreAlert;
    }

    /**
     * @param int $customerPreAlert
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerPreAlert($customerPreAlert)
    {
      $this->customerPreAlert = $customerPreAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerZipCode()
    {
      return $this->customerZipCode;
    }

    /**
     * @param string $customerZipCode
     * @return \Chronopost\Shipping\customerValue
     */
    public function setCustomerZipCode($customerZipCode)
    {
      $this->customerZipCode = $customerZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintAsSender()
    {
      return $this->printAsSender;
    }

    /**
     * @param string $printAsSender
     * @return \Chronopost\Shipping\customerValue
     */
    public function setPrintAsSender($printAsSender)
    {
      $this->printAsSender = $printAsSender;
      return $this;
    }

}
