<?php

namespace Chronopost\Shipping;

class skybillWithDimensionsValue extends skybillValue
{

    /**
     * @var float $height
     */
    protected $height = null;

    /**
     * @var float $length
     */
    protected $length = null;

    /**
     * @var float $width
     */
    protected $width = null;

    /**
     * @param int $shipHour
     * @param float $height
     * @param float $length
     * @param float $width
     */
    public function __construct($shipHour, $height, $length, $width)
    {
      parent::__construct($shipHour);
      $this->height = $height;
      $this->length = $length;
      $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param float $height
     * @return \Chronopost\Shipping\skybillWithDimensionsValue
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param float $length
     * @return \Chronopost\Shipping\skybillWithDimensionsValue
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param float $width
     * @return \Chronopost\Shipping\skybillWithDimensionsValue
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

}
