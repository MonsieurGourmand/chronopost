<?php

namespace Chronopost\PointRelais;

class bureauDeTabac
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
     * @var string $adresse3
     */
    protected $adresse3 = null;

    /**
     * @var string $codePostal
     */
    protected $codePostal = null;

    /**
     * @var \DateTime $dateArriveColis
     */
    protected $dateArriveColis = null;

    /**
     * @var string $horairesOuvertureDimanche
     */
    protected $horairesOuvertureDimanche = null;

    /**
     * @var string $horairesOuvertureJeudi
     */
    protected $horairesOuvertureJeudi = null;

    /**
     * @var string $horairesOuvertureLundi
     */
    protected $horairesOuvertureLundi = null;

    /**
     * @var string $horairesOuvertureMardi
     */
    protected $horairesOuvertureMardi = null;

    /**
     * @var string $horairesOuvertureMercredi
     */
    protected $horairesOuvertureMercredi = null;

    /**
     * @var string $horairesOuvertureSamedi
     */
    protected $horairesOuvertureSamedi = null;

    /**
     * @var string $horairesOuvertureVendredi
     */
    protected $horairesOuvertureVendredi = null;

    /**
     * @var string $identifiantChronopostPointA2PAS
     */
    protected $identifiantChronopostPointA2PAS = null;

    /**
     * @var string $localite
     */
    protected $localite = null;

    /**
     * @var string $nomEnseigne
     */
    protected $nomEnseigne = null;

    
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
     * @return \Chronopost\PointRelais\bureauDeTabac
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
     * @return \Chronopost\PointRelais\bureauDeTabac
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
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setAdresse3($adresse3)
    {
      $this->adresse3 = $adresse3;
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
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setCodePostal($codePostal)
    {
      $this->codePostal = $codePostal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateArriveColis()
    {
      if ($this->dateArriveColis == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateArriveColis);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateArriveColis
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setDateArriveColis(\DateTime $dateArriveColis = null)
    {
      if ($dateArriveColis == null) {
       $this->dateArriveColis = null;
      } else {
        $this->dateArriveColis = $dateArriveColis->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureDimanche()
    {
      return $this->horairesOuvertureDimanche;
    }

    /**
     * @param string $horairesOuvertureDimanche
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureDimanche($horairesOuvertureDimanche)
    {
      $this->horairesOuvertureDimanche = $horairesOuvertureDimanche;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureJeudi()
    {
      return $this->horairesOuvertureJeudi;
    }

    /**
     * @param string $horairesOuvertureJeudi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureJeudi($horairesOuvertureJeudi)
    {
      $this->horairesOuvertureJeudi = $horairesOuvertureJeudi;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureLundi()
    {
      return $this->horairesOuvertureLundi;
    }

    /**
     * @param string $horairesOuvertureLundi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureLundi($horairesOuvertureLundi)
    {
      $this->horairesOuvertureLundi = $horairesOuvertureLundi;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureMardi()
    {
      return $this->horairesOuvertureMardi;
    }

    /**
     * @param string $horairesOuvertureMardi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureMardi($horairesOuvertureMardi)
    {
      $this->horairesOuvertureMardi = $horairesOuvertureMardi;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureMercredi()
    {
      return $this->horairesOuvertureMercredi;
    }

    /**
     * @param string $horairesOuvertureMercredi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureMercredi($horairesOuvertureMercredi)
    {
      $this->horairesOuvertureMercredi = $horairesOuvertureMercredi;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureSamedi()
    {
      return $this->horairesOuvertureSamedi;
    }

    /**
     * @param string $horairesOuvertureSamedi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureSamedi($horairesOuvertureSamedi)
    {
      $this->horairesOuvertureSamedi = $horairesOuvertureSamedi;
      return $this;
    }

    /**
     * @return string
     */
    public function getHorairesOuvertureVendredi()
    {
      return $this->horairesOuvertureVendredi;
    }

    /**
     * @param string $horairesOuvertureVendredi
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setHorairesOuvertureVendredi($horairesOuvertureVendredi)
    {
      $this->horairesOuvertureVendredi = $horairesOuvertureVendredi;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifiantChronopostPointA2PAS()
    {
      return $this->identifiantChronopostPointA2PAS;
    }

    /**
     * @param string $identifiantChronopostPointA2PAS
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setIdentifiantChronopostPointA2PAS($identifiantChronopostPointA2PAS)
    {
      $this->identifiantChronopostPointA2PAS = $identifiantChronopostPointA2PAS;
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
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setLocalite($localite)
    {
      $this->localite = $localite;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomEnseigne()
    {
      return $this->nomEnseigne;
    }

    /**
     * @param string $nomEnseigne
     * @return \Chronopost\PointRelais\bureauDeTabac
     */
    public function setNomEnseigne($nomEnseigne)
    {
      $this->nomEnseigne = $nomEnseigne;
      return $this;
    }

}
