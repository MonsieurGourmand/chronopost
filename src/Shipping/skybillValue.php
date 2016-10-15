<?php

namespace Chonopost\Shipping;

class skybillValue
{

    /**
     * @var string $bulkNumber
     */
    protected $bulkNumber = null;

    /**
     * @var string $codCurrency
     */
    protected $codCurrency = null;

    /**
     * @var float $codValue
     */
    protected $codValue = null;

    /**
     * @var string $content1
     */
    protected $content1 = null;

    /**
     * @var string $content2
     */
    protected $content2 = null;

    /**
     * @var string $content3
     */
    protected $content3 = null;

    /**
     * @var string $content4
     */
    protected $content4 = null;

    /**
     * @var string $content5
     */
    protected $content5 = null;

    /**
     * @var string $customsCurrency
     */
    protected $customsCurrency = null;

    /**
     * @var float $customsValue
     */
    protected $customsValue = null;

    /**
     * @var string $evtCode
     */
    protected $evtCode = null;

    /**
     * @var string $insuredCurrency
     */
    protected $insuredCurrency = null;

    /**
     * @var float $insuredValue
     */
    protected $insuredValue = null;

    /**
     * @var string $latitude
     */
    protected $latitude = null;

    /**
     * @var string $longitude
     */
    protected $longitude = null;

    /**
     * @var string $masterSkybillNumber
     */
    protected $masterSkybillNumber = null;

    /**
     * @var string $objectType
     */
    protected $objectType = null;

    /**
     * @var string $portCurrency
     */
    protected $portCurrency = null;

    /**
     * @var float $portValue
     */
    protected $portValue = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $qualite
     */
    protected $qualite = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var \DateTime $shipDate
     */
    protected $shipDate = null;

    /**
     * @var int $shipHour
     */
    protected $shipHour = null;

    /**
     * @var string $skybillRank
     */
    protected $skybillRank = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var string $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @param int $shipHour
     */
    public function __construct($shipHour)
    {
      $this->shipHour = $shipHour;
    }

    /**
     * @return string
     */
    public function getBulkNumber()
    {
      return $this->bulkNumber;
    }

    /**
     * @param string $bulkNumber
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setBulkNumber($bulkNumber)
    {
      $this->bulkNumber = $bulkNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodCurrency()
    {
      return $this->codCurrency;
    }

    /**
     * @param string $codCurrency
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setCodCurrency($codCurrency)
    {
      $this->codCurrency = $codCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getCodValue()
    {
      return $this->codValue;
    }

    /**
     * @param float $codValue
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setCodValue($codValue)
    {
      $this->codValue = $codValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent1()
    {
      return $this->content1;
    }

    /**
     * @param string $content1
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setContent1($content1)
    {
      $this->content1 = $content1;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent2()
    {
      return $this->content2;
    }

    /**
     * @param string $content2
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setContent2($content2)
    {
      $this->content2 = $content2;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent3()
    {
      return $this->content3;
    }

    /**
     * @param string $content3
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setContent3($content3)
    {
      $this->content3 = $content3;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent4()
    {
      return $this->content4;
    }

    /**
     * @param string $content4
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setContent4($content4)
    {
      $this->content4 = $content4;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent5()
    {
      return $this->content5;
    }

    /**
     * @param string $content5
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setContent5($content5)
    {
      $this->content5 = $content5;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency()
    {
      return $this->customsCurrency;
    }

    /**
     * @param string $customsCurrency
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setCustomsCurrency($customsCurrency)
    {
      $this->customsCurrency = $customsCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomsValue()
    {
      return $this->customsValue;
    }

    /**
     * @param float $customsValue
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setCustomsValue($customsValue)
    {
      $this->customsValue = $customsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getEvtCode()
    {
      return $this->evtCode;
    }

    /**
     * @param string $evtCode
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setEvtCode($evtCode)
    {
      $this->evtCode = $evtCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsuredCurrency()
    {
      return $this->insuredCurrency;
    }

    /**
     * @param string $insuredCurrency
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setInsuredCurrency($insuredCurrency)
    {
      $this->insuredCurrency = $insuredCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValue()
    {
      return $this->insuredValue;
    }

    /**
     * @param float $insuredValue
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setInsuredValue($insuredValue)
    {
      $this->insuredValue = $insuredValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterSkybillNumber()
    {
      return $this->masterSkybillNumber;
    }

    /**
     * @param string $masterSkybillNumber
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setMasterSkybillNumber($masterSkybillNumber)
    {
      $this->masterSkybillNumber = $masterSkybillNumber;
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
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setObjectType($objectType)
    {
      $this->objectType = $objectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortCurrency()
    {
      return $this->portCurrency;
    }

    /**
     * @param string $portCurrency
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setPortCurrency($portCurrency)
    {
      $this->portCurrency = $portCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPortValue()
    {
      return $this->portValue;
    }

    /**
     * @param float $portValue
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setPortValue($portValue)
    {
      $this->portValue = $portValue;
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
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getQualite()
    {
      return $this->qualite;
    }

    /**
     * @param string $qualite
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setQualite($qualite)
    {
      $this->qualite = $qualite;
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
     * @return \Chonopost\Shipping\skybillValue
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
     * @return \Chonopost\Shipping\skybillValue
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
     * @return int
     */
    public function getShipHour()
    {
      return $this->shipHour;
    }

    /**
     * @param int $shipHour
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setShipHour($shipHour)
    {
      $this->shipHour = $shipHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillRank()
    {
      return $this->skybillRank;
    }

    /**
     * @param string $skybillRank
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setSkybillRank($skybillRank)
    {
      $this->skybillRank = $skybillRank;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
      return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return \Chonopost\Shipping\skybillValue
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

}
