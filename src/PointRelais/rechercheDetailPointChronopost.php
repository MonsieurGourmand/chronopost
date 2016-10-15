<?php

namespace Chonopost\PointRelais;

class rechercheDetailPointChronopost
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
     * @return \Chonopost\PointRelais\rechercheDetailPointChronopost
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
     * @return \Chonopost\PointRelais\rechercheDetailPointChronopost
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
     * @return \Chonopost\PointRelais\rechercheDetailPointChronopost
     */
    public function setIdentifiant($identifiant)
    {
      $this->identifiant = $identifiant;
      return $this;
    }

}
