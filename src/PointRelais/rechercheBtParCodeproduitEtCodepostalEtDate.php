<?php

namespace Chonopost\PointRelais;

class rechercheBtParCodeproduitEtCodepostalEtDate
{

    /**
     * @var string $codeProduit
     */
    protected $codeProduit = null;

    /**
     * @var string $codePostal
     */
    protected $codePostal = null;

    /**
     * @var string $date
     */
    protected $date = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCodeProduit()
    {
      return $this->codeProduit;
    }

    /**
     * @param string $codeProduit
     * @return \Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDate
     */
    public function setCodeProduit($codeProduit)
    {
      $this->codeProduit = $codeProduit;
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
     * @return \Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDate
     */
    public function setCodePostal($codePostal)
    {
      $this->codePostal = $codePostal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \Chonopost\PointRelais\rechercheBtParCodeproduitEtCodepostalEtDate
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

}
