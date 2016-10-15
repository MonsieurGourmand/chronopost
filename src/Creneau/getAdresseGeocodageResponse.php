<?php

namespace Chronopost\Creneau;

class getAdresseGeocodageResponse
{

    /**
     * @var geocodageResponse $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return geocodageResponse
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param geocodageResponse $return
     * @return \Chronopost\Creneau\getAdresseGeocodageResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
