<?php

namespace Chonopost\PointRelais;

class bureauDeTabacAvecCoord extends bureauDeTabac
{

    /**
     * @var float $coordGeoLatitude
     */
    protected $coordGeoLatitude = null;

    /**
     * @var float $coordGeoLongitude
     */
    protected $coordGeoLongitude = null;

    /**
     * @var string $urlGoogleMaps
     */
    protected $urlGoogleMaps = null;

    /**
     * @param float $coordGeoLatitude
     * @param float $coordGeoLongitude
     */
    public function __construct($coordGeoLatitude, $coordGeoLongitude)
    {
      parent::__construct();
      $this->coordGeoLatitude = $coordGeoLatitude;
      $this->coordGeoLongitude = $coordGeoLongitude;
    }

    /**
     * @return float
     */
    public function getCoordGeoLatitude()
    {
      return $this->coordGeoLatitude;
    }

    /**
     * @param float $coordGeoLatitude
     * @return \Chonopost\PointRelais\bureauDeTabacAvecCoord
     */
    public function setCoordGeoLatitude($coordGeoLatitude)
    {
      $this->coordGeoLatitude = $coordGeoLatitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoordGeoLongitude()
    {
      return $this->coordGeoLongitude;
    }

    /**
     * @param float $coordGeoLongitude
     * @return \Chonopost\PointRelais\bureauDeTabacAvecCoord
     */
    public function setCoordGeoLongitude($coordGeoLongitude)
    {
      $this->coordGeoLongitude = $coordGeoLongitude;
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
     * @return \Chonopost\PointRelais\bureauDeTabacAvecCoord
     */
    public function setUrlGoogleMaps($urlGoogleMaps)
    {
      $this->urlGoogleMaps = $urlGoogleMaps;
      return $this;
    }

}
