<?php

namespace Chonopost\Shipping;

class skybillValueV2 extends skybillValue
{

    /**
     * @var string $as
     */
    protected $as = null;

    /**
     * @param int $shipHour
     */
    public function __construct($shipHour)
    {
      parent::__construct($shipHour);
    }

    /**
     * @return string
     */
    public function getAs()
    {
      return $this->as;
    }

    /**
     * @param string $as
     * @return \Chonopost\Shipping\skybillValueV2
     */
    public function setAs($as)
    {
      $this->as = $as;
      return $this;
    }

}
