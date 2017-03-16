<?php

namespace Chronopost\Tracking;

class trackSearch
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
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $consigneesCountry
     */
    protected $consigneesCountry = null;

    /**
     * @var string $consigneesRef
     */
    protected $consigneesRef = null;

    /**
     * @var string $consigneesZipCode
     */
    protected $consigneesZipCode = null;

    /**
     * @var string $dateDeposit
     */
    protected $dateDeposit = null;

    /**
     * @var string $dateEndDeposit
     */
    protected $dateEndDeposit = null;

    /**
     * @var string $parcelState
     */
    protected $parcelState = null;

    /**
     * @var string $sendersRef
     */
    protected $sendersRef = null;

    /**
     * @var string $serviceCode
     */
    protected $serviceCode = null;

    
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
     * @return \Chronopost\Tracking\trackSearch
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
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneesCountry()
    {
      return $this->consigneesCountry;
    }

    /**
     * @param string $consigneesCountry
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setConsigneesCountry($consigneesCountry)
    {
      $this->consigneesCountry = $consigneesCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneesRef()
    {
      return $this->consigneesRef;
    }

    /**
     * @param string $consigneesRef
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setConsigneesRef($consigneesRef)
    {
      $this->consigneesRef = $consigneesRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneesZipCode()
    {
      return $this->consigneesZipCode;
    }

    /**
     * @param string $consigneesZipCode
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setConsigneesZipCode($consigneesZipCode)
    {
      $this->consigneesZipCode = $consigneesZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateDeposit()
    {
      return $this->dateDeposit;
    }

    /**
     * @param string $dateDeposit
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setDateDeposit($dateDeposit)
    {
      $this->dateDeposit = $dateDeposit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateEndDeposit()
    {
      return $this->dateEndDeposit;
    }

    /**
     * @param string $dateEndDeposit
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setDateEndDeposit($dateEndDeposit)
    {
      $this->dateEndDeposit = $dateEndDeposit;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelState()
    {
      return $this->parcelState;
    }

    /**
     * @param string $parcelState
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setParcelState($parcelState)
    {
      $this->parcelState = $parcelState;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersRef()
    {
      return $this->sendersRef;
    }

    /**
     * @param string $sendersRef
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setSendersRef($sendersRef)
    {
      $this->sendersRef = $sendersRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return \Chronopost\Tracking\trackSearch
     */
    public function setServiceCode($serviceCode)
    {
      $this->serviceCode = $serviceCode;
      return $this;
    }

}
