<?php

namespace Chonopost\Shipping;

class skybillValueBase
{

    /**
     * @var string $as
     */
    protected $as = null;

    /**
     * @var string $objectType
     */
    protected $objectType = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var \DateTime $shipDate
     */
    protected $shipDate = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    
    public function __construct()
    {
    
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
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setAs($as)
    {
      $this->as = $as;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
      return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setObjectType($objectType)
    {
      $this->objectType = $objectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->shipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shipDate
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setShipDate(\DateTime $shipDate = null)
    {
      if ($shipDate == null) {
       $this->shipDate = null;
      } else {
        $this->shipDate = $shipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \Chonopost\Shipping\skybillValueBase
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

}
