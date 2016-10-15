<?php

namespace Chonopost\PointRelais;

class tourneeComplete extends tournee
{

    /**
     * @var string $codeTourneeMaitre
     */
    protected $codeTourneeMaitre = null;

    /**
     * @var string $codeTypeTournee
     */
    protected $codeTypeTournee = null;

    /**
     * @var string $coutMensuelBatiment
     */
    protected $coutMensuelBatiment = null;

    /**
     * @var string $cubage
     */
    protected $cubage = null;

    /**
     * @var string $cubageDistri
     */
    protected $cubageDistri = null;

    /**
     * @var string $detailPrestation
     */
    protected $detailPrestation = null;

    /**
     * @var string $heureTheoriqueRetour
     */
    protected $heureTheoriqueRetour = null;

    /**
     * @var string $idMoyenPropre
     */
    protected $idMoyenPropre = null;

    /**
     * @var string $idSecteur
     */
    protected $idSecteur = null;

    /**
     * @var string $idSousTraitant
     */
    protected $idSousTraitant = null;

    /**
     * @var string $idVehicule
     */
    protected $idVehicule = null;

    /**
     * @var string $picking
     */
    protected $picking = null;

    /**
     * @var string $planDistri
     */
    protected $planDistri = null;

    /**
     * @var string $posteComptable
     */
    protected $posteComptable = null;

    /**
     * @var string $pourcentageCoChargement
     */
    protected $pourcentageCoChargement = null;

    /**
     * @var string $qualification
     */
    protected $qualification = null;

    /**
     * @var string $spot
     */
    protected $spot = null;

    /**
     * @var string $trigrammeAgence
     */
    protected $trigrammeAgence = null;

    /**
     * @var string $typeTournee
     */
    protected $typeTournee = null;

    /**
     * @var string $zone
     */
    protected $zone = null;

    /**
     * @param boolean $localise
     */
    public function __construct($localise)
    {
      parent::__construct($localise);
    }

    /**
     * @return string
     */
    public function getCodeTourneeMaitre()
    {
      return $this->codeTourneeMaitre;
    }

    /**
     * @param string $codeTourneeMaitre
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setCodeTourneeMaitre($codeTourneeMaitre)
    {
      $this->codeTourneeMaitre = $codeTourneeMaitre;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeTypeTournee()
    {
      return $this->codeTypeTournee;
    }

    /**
     * @param string $codeTypeTournee
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setCodeTypeTournee($codeTypeTournee)
    {
      $this->codeTypeTournee = $codeTypeTournee;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoutMensuelBatiment()
    {
      return $this->coutMensuelBatiment;
    }

    /**
     * @param string $coutMensuelBatiment
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setCoutMensuelBatiment($coutMensuelBatiment)
    {
      $this->coutMensuelBatiment = $coutMensuelBatiment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCubage()
    {
      return $this->cubage;
    }

    /**
     * @param string $cubage
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setCubage($cubage)
    {
      $this->cubage = $cubage;
      return $this;
    }

    /**
     * @return string
     */
    public function getCubageDistri()
    {
      return $this->cubageDistri;
    }

    /**
     * @param string $cubageDistri
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setCubageDistri($cubageDistri)
    {
      $this->cubageDistri = $cubageDistri;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailPrestation()
    {
      return $this->detailPrestation;
    }

    /**
     * @param string $detailPrestation
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setDetailPrestation($detailPrestation)
    {
      $this->detailPrestation = $detailPrestation;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeureTheoriqueRetour()
    {
      return $this->heureTheoriqueRetour;
    }

    /**
     * @param string $heureTheoriqueRetour
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setHeureTheoriqueRetour($heureTheoriqueRetour)
    {
      $this->heureTheoriqueRetour = $heureTheoriqueRetour;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdMoyenPropre()
    {
      return $this->idMoyenPropre;
    }

    /**
     * @param string $idMoyenPropre
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setIdMoyenPropre($idMoyenPropre)
    {
      $this->idMoyenPropre = $idMoyenPropre;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdSecteur()
    {
      return $this->idSecteur;
    }

    /**
     * @param string $idSecteur
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setIdSecteur($idSecteur)
    {
      $this->idSecteur = $idSecteur;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdSousTraitant()
    {
      return $this->idSousTraitant;
    }

    /**
     * @param string $idSousTraitant
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setIdSousTraitant($idSousTraitant)
    {
      $this->idSousTraitant = $idSousTraitant;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdVehicule()
    {
      return $this->idVehicule;
    }

    /**
     * @param string $idVehicule
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setIdVehicule($idVehicule)
    {
      $this->idVehicule = $idVehicule;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicking()
    {
      return $this->picking;
    }

    /**
     * @param string $picking
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setPicking($picking)
    {
      $this->picking = $picking;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlanDistri()
    {
      return $this->planDistri;
    }

    /**
     * @param string $planDistri
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setPlanDistri($planDistri)
    {
      $this->planDistri = $planDistri;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosteComptable()
    {
      return $this->posteComptable;
    }

    /**
     * @param string $posteComptable
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setPosteComptable($posteComptable)
    {
      $this->posteComptable = $posteComptable;
      return $this;
    }

    /**
     * @return string
     */
    public function getPourcentageCoChargement()
    {
      return $this->pourcentageCoChargement;
    }

    /**
     * @param string $pourcentageCoChargement
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setPourcentageCoChargement($pourcentageCoChargement)
    {
      $this->pourcentageCoChargement = $pourcentageCoChargement;
      return $this;
    }

    /**
     * @return string
     */
    public function getQualification()
    {
      return $this->qualification;
    }

    /**
     * @param string $qualification
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setQualification($qualification)
    {
      $this->qualification = $qualification;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpot()
    {
      return $this->spot;
    }

    /**
     * @param string $spot
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setSpot($spot)
    {
      $this->spot = $spot;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrigrammeAgence()
    {
      return $this->trigrammeAgence;
    }

    /**
     * @param string $trigrammeAgence
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setTrigrammeAgence($trigrammeAgence)
    {
      $this->trigrammeAgence = $trigrammeAgence;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeTournee()
    {
      return $this->typeTournee;
    }

    /**
     * @param string $typeTournee
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setTypeTournee($typeTournee)
    {
      $this->typeTournee = $typeTournee;
      return $this;
    }

    /**
     * @return string
     */
    public function getZone()
    {
      return $this->zone;
    }

    /**
     * @param string $zone
     * @return \Chonopost\PointRelais\tourneeComplete
     */
    public function setZone($zone)
    {
      $this->zone = $zone;
      return $this;
    }

}
