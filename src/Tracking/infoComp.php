<?php

namespace Chonopost\Tracking;

class infoComp
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Chonopost\Tracking\infoComp
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Chonopost\Tracking\infoComp
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
