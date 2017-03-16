<?php

namespace Chronopost\Shipping;

class esdContraintesAgence
{

    /**
     * @var int $battement
     */
    protected $battement = null;

    /**
     * @var string $battementEnHeure
     */
    protected $battementEnHeure = null;

    /**
     * @var string $codeAgence
     */
    protected $codeAgence = null;

    /**
     * @var string $codePays
     */
    protected $codePays = null;

    /**
     * @var string $codePostal
     */
    protected $codePostal = null;

    /**
     * @var string $hla
     */
    protected $hla = null;

    /**
     * @var string $hlp
     */
    protected $hlp = null;

    /**
     * @var string $hppt
     */
    protected $hppt = null;

    /**
     * @var string $nomAgence
     */
    protected $nomAgence = null;

    /**
     * @var string $raisonNonActivite
     */
    protected $raisonNonActivite = null;

    /**
     * @var string $ville
     */
    protected $ville = null;

    /**
     * @var boolean $zoneA
     */
    protected $zoneA = null;

    /**
     * @param boolean $zoneA
     */
    public function __construct($zoneA)
    {
      $this->zoneA = $zoneA;
    }

    /**
     * @return int
     */
    public function getBattement()
    {
      return $this->battement;
    }

    /**
     * @param int $battement
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setBattement($battement)
    {
      $this->battement = $battement;
      return $this;
    }

    /**
     * @return string
     */
    public function getBattementEnHeure()
    {
      return $this->battementEnHeure;
    }

    /**
     * @param string $battementEnHeure
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setBattementEnHeure($battementEnHeure)
    {
      $this->battementEnHeure = $battementEnHeure;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
      return $this->codeAgence;
    }

    /**
     * @param string $codeAgence
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setCodeAgence($codeAgence)
    {
      $this->codeAgence = $codeAgence;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodePays()
    {
      return $this->codePays;
    }

    /**
     * @param string $codePays
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setCodePays($codePays)
    {
      $this->codePays = $codePays;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
      return $this->codePostal;
    }

    /**
     * @param string $codePostal
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setCodePostal($codePostal)
    {
      $this->codePostal = $codePostal;
      return $this;
    }

    /**
     * @return string
     */
    public function getHla()
    {
      return $this->hla;
    }

    /**
     * @param string $hla
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setHla($hla)
    {
      $this->hla = $hla;
      return $this;
    }

    /**
     * @return string
     */
    public function getHlp()
    {
      return $this->hlp;
    }

    /**
     * @param string $hlp
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setHlp($hlp)
    {
      $this->hlp = $hlp;
      return $this;
    }

    /**
     * @return string
     */
    public function getHppt()
    {
      return $this->hppt;
    }

    /**
     * @param string $hppt
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setHppt($hppt)
    {
      $this->hppt = $hppt;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomAgence()
    {
      return $this->nomAgence;
    }

    /**
     * @param string $nomAgence
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setNomAgence($nomAgence)
    {
      $this->nomAgence = $nomAgence;
      return $this;
    }

    /**
     * @return string
     */
    public function getRaisonNonActivite()
    {
      return $this->raisonNonActivite;
    }

    /**
     * @param string $raisonNonActivite
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setRaisonNonActivite($raisonNonActivite)
    {
      $this->raisonNonActivite = $raisonNonActivite;
      return $this;
    }

    /**
     * @return string
     */
    public function getVille()
    {
      return $this->ville;
    }

    /**
     * @param string $ville
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setVille($ville)
    {
      $this->ville = $ville;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZoneA()
    {
      return $this->zoneA;
    }

    /**
     * @param boolean $zoneA
     * @return \Chronopost\Shipping\esdContraintesAgence
     */
    public function setZoneA($zoneA)
    {
      $this->zoneA = $zoneA;
      return $this;
    }

}
