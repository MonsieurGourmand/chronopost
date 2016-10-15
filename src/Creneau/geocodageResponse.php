<?php

namespace Chonopost\Creneau;

class geocodageResponse extends wsResponse
{

    /**
     * @var float $lat
     */
    protected $lat = null;

    /**
     * @var float $lon
     */
    protected $lon = null;

    /**
     * @var int $niveauQualite
     */
    protected $niveauQualite = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      parent::__construct($code);
    }

    /**
     * @return float
     */
    public function getLat()
    {
      return $this->lat;
    }

    /**
     * @param float $lat
     * @return \Chonopost\Creneau\geocodageResponse
     */
    public function setLat($lat)
    {
      $this->lat = $lat;
      return $this;
    }

    /**
     * @return float
     */
    public function getLon()
    {
      return $this->lon;
    }

    /**
     * @param float $lon
     * @return \Chonopost\Creneau\geocodageResponse
     */
    public function setLon($lon)
    {
      $this->lon = $lon;
      return $this;
    }

    /**
     * @return int
     */
    public function getNiveauQualite()
    {
      return $this->niveauQualite;
    }

    /**
     * @param int $niveauQualite
     * @return \Chonopost\Creneau\geocodageResponse
     */
    public function setNiveauQualite($niveauQualite)
    {
      $this->niveauQualite = $niveauQualite;
      return $this;
    }

}
