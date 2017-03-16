<?php

namespace Chronopost\PointRelais;

class pointCHR
{

    /**
     * @var boolean $accesPersonneMobiliteReduite
     */
    protected $accesPersonneMobiliteReduite = null;

    /**
     * @var boolean $actif
     */
    protected $actif = null;

    /**
     * @var string $adresse1
     */
    protected $adresse1 = null;

    /**
     * @var string $adresse2
     */
    protected $adresse2 = null;

    /**
     * @var string $adresse3
     */
    protected $adresse3 = null;

    /**
     * @var string $codePays
     */
    protected $codePays = null;

    /**
     * @var string $codePostal
     */
    protected $codePostal = null;

    /**
     * @var string $coordGeolocalisationLatitude
     */
    protected $coordGeolocalisationLatitude = null;

    /**
     * @var string $coordGeolocalisationLongitude
     */
    protected $coordGeolocalisationLongitude = null;

    /**
     * @var int $distanceEnMetre
     */
    protected $distanceEnMetre = null;

    /**
     * @var string $identifiant
     */
    protected $identifiant = null;

    /**
     * @var string $indiceDeLocalisation
     */
    protected $indiceDeLocalisation = null;

    /**
     * @var listeHoraireOuverturePourUnJour[] $listeHoraireOuverture
     */
    protected $listeHoraireOuverture = null;

    /**
     * @var periodeFermeture[] $listePeriodeFermeture
     */
    protected $listePeriodeFermeture = null;

    /**
     * @var string $localite
     */
    protected $localite = null;

    /**
     * @var string $nom
     */
    protected $nom = null;

    /**
     * @var int $poidsMaxi
     */
    protected $poidsMaxi = null;

    /**
     * @var string $typeDePoint
     */
    protected $typeDePoint = null;

    /**
     * @var string $urlGoogleMaps
     */
    protected $urlGoogleMaps = null;

    /**
     * @param boolean $accesPersonneMobiliteReduite
     * @param boolean $actif
     * @param int $distanceEnMetre
     * @param int $poidsMaxi
     */
    public function __construct($accesPersonneMobiliteReduite, $actif, $distanceEnMetre, $poidsMaxi)
    {
      $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;
      $this->actif = $actif;
      $this->distanceEnMetre = $distanceEnMetre;
      $this->poidsMaxi = $poidsMaxi;
    }

    /**
     * @return boolean
     */
    public function getAccesPersonneMobiliteReduite()
    {
      return $this->accesPersonneMobiliteReduite;
    }

    /**
     * @param boolean $accesPersonneMobiliteReduite
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite)
    {
      $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActif()
    {
      return $this->actif;
    }

    /**
     * @param boolean $actif
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setActif($actif)
    {
      $this->actif = $actif;
      return $this;
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
     * @return \Chronopost\PointRelais\pointCHR
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
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setAdresse2($adresse2)
    {
      $this->adresse2 = $adresse2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdresse3()
    {
      return $this->adresse3;
    }

    /**
     * @param string $adresse3
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setAdresse3($adresse3)
    {
      $this->adresse3 = $adresse3;
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
     * @return \Chronopost\PointRelais\pointCHR
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
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setCodePostal($codePostal)
    {
      $this->codePostal = $codePostal;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoordGeolocalisationLatitude()
    {
      return $this->coordGeolocalisationLatitude;
    }

    /**
     * @param string $coordGeolocalisationLatitude
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setCoordGeolocalisationLatitude($coordGeolocalisationLatitude)
    {
      $this->coordGeolocalisationLatitude = $coordGeolocalisationLatitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoordGeolocalisationLongitude()
    {
      return $this->coordGeolocalisationLongitude;
    }

    /**
     * @param string $coordGeolocalisationLongitude
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setCoordGeolocalisationLongitude($coordGeolocalisationLongitude)
    {
      $this->coordGeolocalisationLongitude = $coordGeolocalisationLongitude;
      return $this;
    }

    /**
     * @return int
     */
    public function getDistanceEnMetre()
    {
      return $this->distanceEnMetre;
    }

    /**
     * @param int $distanceEnMetre
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setDistanceEnMetre($distanceEnMetre)
    {
      $this->distanceEnMetre = $distanceEnMetre;
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
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setIdentifiant($identifiant)
    {
      $this->identifiant = $identifiant;
      return $this;
    }

    /**
     * @return string
     */
    public function getIndiceDeLocalisation()
    {
      return $this->indiceDeLocalisation;
    }

    /**
     * @param string $indiceDeLocalisation
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setIndiceDeLocalisation($indiceDeLocalisation)
    {
      $this->indiceDeLocalisation = $indiceDeLocalisation;
      return $this;
    }

    /**
     * @return listeHoraireOuverturePourUnJour[]
     */
    public function getListeHoraireOuverture()
    {
      return $this->listeHoraireOuverture;
    }

    /**
     * @param listeHoraireOuverturePourUnJour[] $listeHoraireOuverture
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setListeHoraireOuverture(array $listeHoraireOuverture = null)
    {
      $this->listeHoraireOuverture = $listeHoraireOuverture;
      return $this;
    }

    /**
     * @return periodeFermeture[]
     */
    public function getListePeriodeFermeture()
    {
      return $this->listePeriodeFermeture;
    }

    /**
     * @param periodeFermeture[] $listePeriodeFermeture
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setListePeriodeFermeture(array $listePeriodeFermeture = null)
    {
      $this->listePeriodeFermeture = $listePeriodeFermeture;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalite()
    {
      return $this->localite;
    }

    /**
     * @param string $localite
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setLocalite($localite)
    {
      $this->localite = $localite;
      return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
      return $this->nom;
    }

    /**
     * @param string $nom
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setNom($nom)
    {
      $this->nom = $nom;
      return $this;
    }

    /**
     * @return int
     */
    public function getPoidsMaxi()
    {
      return $this->poidsMaxi;
    }

    /**
     * @param int $poidsMaxi
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setPoidsMaxi($poidsMaxi)
    {
      $this->poidsMaxi = $poidsMaxi;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeDePoint()
    {
      return $this->typeDePoint;
    }

    /**
     * @param string $typeDePoint
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setTypeDePoint($typeDePoint)
    {
      $this->typeDePoint = $typeDePoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlGoogleMaps()
    {
      return $this->urlGoogleMaps;
    }

    /**
     * @param string $urlGoogleMaps
     * @return \Chronopost\PointRelais\pointCHR
     */
    public function setUrlGoogleMaps($urlGoogleMaps)
    {
      $this->urlGoogleMaps = $urlGoogleMaps;
      return $this;
    }

}
