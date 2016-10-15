<?php

namespace Chonopost\PointRelais;

class tournee
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var boolean $localise
     */
    protected $localise = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param boolean $localise
     */
    public function __construct($localise)
    {
      $this->localise = $localise;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Chonopost\PointRelais\tournee
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalise()
    {
      return $this->localise;
    }

    /**
     * @param boolean $localise
     * @return \Chonopost\PointRelais\tournee
     */
    public function setLocalise($localise)
    {
      $this->localise = $localise;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Chonopost\PointRelais\tournee
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
