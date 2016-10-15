<?php

namespace Chonopost\Shipping;

class esdResultContraintesAgenceValue
{

    /**
     * @var int $codeErreur
     */
    protected $codeErreur = null;

    /**
     * @var esdContraintesAgence[] $esdContraintesAgence
     */
    protected $esdContraintesAgence = null;

    /**
     * @var string $libelleErreur
     */
    protected $libelleErreur = null;

    /**
     * @param int $codeErreur
     */
    public function __construct($codeErreur)
    {
      $this->codeErreur = $codeErreur;
    }

    /**
     * @return int
     */
    public function getCodeErreur()
    {
      return $this->codeErreur;
    }

    /**
     * @param int $codeErreur
     * @return \Chonopost\Shipping\esdResultContraintesAgenceValue
     */
    public function setCodeErreur($codeErreur)
    {
      $this->codeErreur = $codeErreur;
      return $this;
    }

    /**
     * @return esdContraintesAgence[]
     */
    public function getEsdContraintesAgence()
    {
      return $this->esdContraintesAgence;
    }

    /**
     * @param esdContraintesAgence[] $esdContraintesAgence
     * @return \Chonopost\Shipping\esdResultContraintesAgenceValue
     */
    public function setEsdContraintesAgence(array $esdContraintesAgence = null)
    {
      $this->esdContraintesAgence = $esdContraintesAgence;
      return $this;
    }

    /**
     * @return string
     */
    public function getLibelleErreur()
    {
      return $this->libelleErreur;
    }

    /**
     * @param string $libelleErreur
     * @return \Chonopost\Shipping\esdResultContraintesAgenceValue
     */
    public function setLibelleErreur($libelleErreur)
    {
      $this->libelleErreur = $libelleErreur;
      return $this;
    }

}
