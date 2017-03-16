<?php

namespace Chronopost\PointRelais;

class listeHoraireOuverturePourUnJour
{

    /**
     * @var string $horairesAsString
     */
    protected $horairesAsString = null;

    /**
     * @var int $jour
     */
    protected $jour = null;

    /**
     * @var horaireOuverture[] $listeHoraireOuverture
     */
    protected $listeHoraireOuverture = null;

    /**
     * @param int $jour
     */
    public function __construct($jour)
    {
      $this->jour = $jour;
    }

    /**
     * @return string
     */
    public function getHorairesAsString()
    {
      return $this->horairesAsString;
    }

    /**
     * @param string $horairesAsString
     * @return \Chronopost\PointRelais\listeHoraireOuverturePourUnJour
     */
    public function setHorairesAsString($horairesAsString)
    {
      $this->horairesAsString = $horairesAsString;
      return $this;
    }

    /**
     * @return int
     */
    public function getJour()
    {
      return $this->jour;
    }

    /**
     * @param int $jour
     * @return \Chronopost\PointRelais\listeHoraireOuverturePourUnJour
     */
    public function setJour($jour)
    {
      $this->jour = $jour;
      return $this;
    }

    /**
     * @return horaireOuverture[]
     */
    public function getListeHoraireOuverture()
    {
      return $this->listeHoraireOuverture;
    }

    /**
     * @param horaireOuverture[] $listeHoraireOuverture
     * @return \Chronopost\PointRelais\listeHoraireOuverturePourUnJour
     */
    public function setListeHoraireOuverture(array $listeHoraireOuverture = null)
    {
      $this->listeHoraireOuverture = $listeHoraireOuverture;
      return $this;
    }

}
