<?php

namespace Chronopost\Shipping;

class esdValue
{

    /**
     * @var \DateTime $closingDateTime
     */
    protected $closingDateTime = null;

    /**
     * @var float $height
     */
    protected $height = null;

    /**
     * @var float $length
     */
    protected $length = null;

    /**
     * @var \DateTime $retrievalDateTime
     */
    protected $retrievalDateTime = null;

    /**
     * @var string $shipperBuildingFloor
     */
    protected $shipperBuildingFloor = null;

    /**
     * @var string $shipperCarriesCode
     */
    protected $shipperCarriesCode = null;

    /**
     * @var string $shipperServiceDirection
     */
    protected $shipperServiceDirection = null;

    /**
     * @var string $specificInstructions
     */
    protected $specificInstructions = null;

    /**
     * @var float $width
     */
    protected $width = null;

    /**
     * @param float $height
     * @param float $length
     * @param float $width
     */
    public function __construct($height, $length, $width)
    {
      $this->height = $height;
      $this->length = $length;
      $this->width = $width;
    }

    /**
     * @return \DateTime
     */
    public function getClosingDateTime()
    {
      if ($this->closingDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->closingDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $closingDateTime
     * @return \Chronopost\Shipping\esdValue
     */
    public function setClosingDateTime(\DateTime $closingDateTime = null)
    {
      if ($closingDateTime == null) {
       $this->closingDateTime = null;
      } else {
        $this->closingDateTime = $closingDateTime->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Chronopost\Shipping\esdValue
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
     * @return \Chronopost\Shipping\esdValue
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRetrievalDateTime()
    {
      if ($this->retrievalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->retrievalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $retrievalDateTime
     * @return \Chronopost\Shipping\esdValue
     */
    public function setRetrievalDateTime(\DateTime $retrievalDateTime = null)
    {
      if ($retrievalDateTime == null) {
       $this->retrievalDateTime = null;
      } else {
        $this->retrievalDateTime = $retrievalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperBuildingFloor()
    {
      return $this->shipperBuildingFloor;
    }

    /**
     * @param string $shipperBuildingFloor
     * @return \Chronopost\Shipping\esdValue
     */
    public function setShipperBuildingFloor($shipperBuildingFloor)
    {
      $this->shipperBuildingFloor = $shipperBuildingFloor;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCarriesCode()
    {
      return $this->shipperCarriesCode;
    }

    /**
     * @param string $shipperCarriesCode
     * @return \Chronopost\Shipping\esdValue
     */
    public function setShipperCarriesCode($shipperCarriesCode)
    {
      $this->shipperCarriesCode = $shipperCarriesCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperServiceDirection()
    {
      return $this->shipperServiceDirection;
    }

    /**
     * @param string $shipperServiceDirection
     * @return \Chronopost\Shipping\esdValue
     */
    public function setShipperServiceDirection($shipperServiceDirection)
    {
      $this->shipperServiceDirection = $shipperServiceDirection;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecificInstructions()
    {
      return $this->specificInstructions;
    }

    /**
     * @param string $specificInstructions
     * @return \Chronopost\Shipping\esdValue
     */
    public function setSpecificInstructions($specificInstructions)
    {
      $this->specificInstructions = $specificInstructions;
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
     * @return \Chronopost\Shipping\esdValue
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

}
