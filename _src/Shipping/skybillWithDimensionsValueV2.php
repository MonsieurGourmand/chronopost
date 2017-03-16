<?php

namespace Chronopost\Shipping;

class skybillWithDimensionsValueV2 extends skybillWithDimensionsValue
{

    /**
     * @var string $as
     */
    protected $as = null;

    /**
     * @param int $shipHour
     * @param float $height
     * @param float $length
     * @param float $width
     */
    public function __construct($shipHour, $height, $length, $width)
    {
      parent::__construct($shipHour, $height, $length, $width);
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
     * @return \Chronopost\Shipping\skybillWithDimensionsValueV2
     */
    public function setAs($as)
    {
      $this->as = $as;
      return $this;
    }

}
