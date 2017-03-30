<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:58 AM
 */

namespace Chronopost\Request\Shipping;


class Skybill
{
    /**
     * @var string $evtCode
     */
    protected $evtCode = "DC";

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var \DateTime $shipDate
     */
    protected $shipDate = null;

    /**
     * @var int $shipHour
     */
    protected $shipHour = null;

    /**
     * @var string $skybillMasterNumber
     */
    protected $skybillMasterNumber = null;

    /**
     * @var int $skybillRank
     */
    protected $skybillRank = null;

    /**
     * @var int $bulkNumber
     */
    protected $bulkNumber = 1;

    /**
     * @var float $weight
     */
    protected $weight = 0;

    /**
     * @var string $weightUnit
     */
    protected $weightUnit = "KGM";

    /**
     * @var int $insuredValue
     */
    protected $insuredValue = 0;

    /**
     * @var string $insuredCurrency
     */
    protected $insuredCurrency = "EUR";

    /**
     * @var int $codValue
     */
    protected $codValue = 0;

    /**
     * @var string $codCurrency
     */
    protected $codCurrency = "EUR";

    /**
     * @var int $customsValue
     */
    protected $customsValue = 0;

    /**
     * @var string $customsCurrency
     */
    protected $customsCurrency = "EUR";

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $objectType
     */
    protected $objectType = "MAR";

    /**
     * @var string $content1
     */
    protected $content1 = null;

    /**
     * @var string $content2
     */
    protected $content2 = null;

    /**
     * @var string $ content3
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
     * @var float $height
     */
    protected $height = 0;

    /**
     * @var float $length
     */
    protected $length = 0;

    /**
     * @var float $width
     */
    protected $width = 0;

    /**
     * @param string $evtCode
     * @return Skybill
     */
    public function setEvtCode($evtCode)
    {
        $this->evtCode = $evtCode;
        return $this;
    }

    /**
     * @param string $productCode
     * @return Skybill
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @param \DateTime $shipDate
     * @return Skybill
     */
    public function setShipDate($shipDate)
    {
        $this->shipDate = $shipDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param int $shipHour
     * @return Skybill
     */
    public function setShipHour($shipHour)
    {
        $this->shipHour = $shipHour;
        return $this;
    }

    /**
     * @param string $skybillMasterNumber
     * @return Skybill
     */
    public function setSkybillMasterNumber($skybillMasterNumber)
    {
        $this->skybillMasterNumber = $skybillMasterNumber;
        return $this;
    }

    /**
     * @param int $skybillRank
     * @return Skybill
     */
    public function setSkybillRank($skybillRank)
    {
        $this->skybillRank = $skybillRank;
        return $this;
    }

    /**
     * @param int $bulkNumber
     * @return Skybill
     */
    public function setBulkNumber($bulkNumber)
    {
        $this->bulkNumber = $bulkNumber;
        return $this;
    }

    /**
     * @param float $weight
     * @return Skybill
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param string $weightUnit
     * @return Skybill
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * @param int $insuredValue
     * @return Skybill
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * @param string $insuredCurrency
     * @return Skybill
     */
    public function setInsuredCurrency($insuredCurrency)
    {
        $this->insuredCurrency = $insuredCurrency;
        return $this;
    }

    /**
     * @param int $codValue
     * @return Skybill
     */
    public function setCodValue($codValue)
    {
        $this->codValue = $codValue;
        return $this;
    }

    /**
     * @param string $codCurrency
     * @return Skybill
     */
    public function setCodCurrency($codCurrency)
    {
        $this->codCurrency = $codCurrency;
        return $this;
    }

    /**
     * @param int $customsValue
     * @return Skybill
     */
    public function setCustomsValue($customsValue)
    {
        $this->customsValue = $customsValue;
        return $this;
    }

    /**
     * @param string $customsCurrency
     * @return Skybill
     */
    public function setCustomsCurrency($customsCurrency)
    {
        $this->customsCurrency = $customsCurrency;
        return $this;
    }

    /**
     * @param string $service
     * @return Skybill
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @param string $objectType
     * @return Skybill
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @param string $content1
     * @return Skybill
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;
        return $this;
    }

    /**
     * @param string $content2
     * @return Skybill
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;
        return $this;
    }

    /**
     * @param string $content3
     * @return Skybill
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;
        return $this;
    }

    /**
     * @param string $content4
     * @return Skybill
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;
        return $this;
    }

    /**
     * @param string $content5
     * @return Skybill
     */
    public function setContent5($content5)
    {
        $this->content5 = $content5;
        return $this;
    }

    /**
     * @param float $height
     * @return Skybill
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param float $length
     * @return Skybill
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @param float $width
     * @return Skybill
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
}