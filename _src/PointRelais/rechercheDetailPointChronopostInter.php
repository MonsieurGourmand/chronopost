<?php

namespace Chronopost\PointRelais;

class rechercheDetailPointChronopostInter
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
     * @var string $identifiant
     */
    protected $identifiant = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $version
     */
    protected $version = null;

    
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
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
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
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifiant()
    {
      return $this->identifiant;
    }

    /**
     * @param string $identifiant
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
     */
    public function setIdentifiant($identifiant)
    {
      $this->identifiant = $identifiant;
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
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
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
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \Chronopost\PointRelais\rechercheDetailPointChronopostInter
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
