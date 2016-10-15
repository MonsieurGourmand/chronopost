<?php

namespace Chonopost\Creneau;

class productServiceV2 extends productService
{

    /**
     * @var string $asCode
     */
    protected $asCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAsCode()
    {
      return $this->asCode;
    }

    /**
     * @param string $asCode
     * @return \Chonopost\Creneau\productServiceV2
     */
    public function setAsCode($asCode)
    {
      $this->asCode = $asCode;
      return $this;
    }

}
