<?php

namespace Chronopost\Request\Slot;
use \Chronopost\Request\Address;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/14/17
 * Time: 11:57 AM
 */
class Search
{
    /**
     * @var string $callerTool
     */
    protected $callerTool = "RDVWS";

    /**
     * @var string $productType
     */
    protected $productType = null;

    const PRODUCTTYPE_FRESH = "FRESH";
    const PRODUCTTYPE_FREEZE = "FREEZE";

    /**
     * @var Address $shipperAddress
    */
    protected $shipperAddress;

    protected $shipperAdress1 = null;
    protected $shipperAdress2 = null;
    protected $shipperZipCode = null;
    protected $shipperCity = null;
    protected $shipperCountry = null;

    /**
     * @var Address $recipientAddress
     */
    protected $recipientAddress;

    protected $recipientAdress1 = null;
    protected $recipientAdress2 = null;
    protected $recipientZipCode = null;
    protected $recipientCity = null;
    protected $recipientCountry = null;

    protected $injectionSite = null;
    protected $weight = null;
    /**
     * @var \DateTime $dateBegin
     */
    protected $dateBegin = null;

    /**
     * @var \DateTime $dateEnd
     */
    protected $dateEnd = null;

    protected $shipperDeliverySlotClosed = null;
    protected $currency = null;
    protected $rateN1 = null;
    protected $rateN2 = null;
    protected $rateN3 = null;
    protected $rateN4 = null;
    protected $rateLevelsNotShow = null;


    /**
     * @var boolean $isDeliveryDate
     */
    protected $isDeliveryDate = 1;

    protected $slotType = "";

    /**
     * @param string $productType
     * @return Search
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @param Address $shipperAddress
     * @return Search
     */
    public function setShipperAddress($shipperAddress)
    {
        $this->shipperAdress1 = $shipperAddress->getAddress1();
        $this->shipperAdress2 = $shipperAddress->getAddress2();
        $this->shipperZipCode = $shipperAddress->getZipCode();
        $this->shipperCity = $shipperAddress->getCity();
        $this->shipperCountry = $shipperAddress->getCountry();
        return $this;
    }

    /**
     * @param Address $recipientAddress
     * @return Search
     */
    public function setRecipientAddress($recipientAddress)
    {
        $this->recipientAdress1 = $recipientAddress->getAddress1();
        $this->recipientAdress2 = $recipientAddress->getAddress2();
        $this->recipientZipCode = $recipientAddress->getZipCode();
        $this->recipientCity = $recipientAddress->getCity();
        $this->recipientCountry = $recipientAddress->getCountry();
        return $this;
    }

    /**
     * @param \DateTime $dateBegin
     * @return Search
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param \DateTime $dateEnd
     * @return Search
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param string $callerTool
     * @return Search
     */
    public function setCallerTool($callerTool)
    {
        $this->callerTool = $callerTool;
        return $this;
    }

    /**
     * @param string $injectionSite
     * @return Search
     */
    public function setInjectionSite($injectionSite)
    {
        $this->injectionSite = $injectionSite;
        return $this;
    }

    /**
     * @param int $weight
     * @return Search
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param string $shipperDeliverySlotClosed
     * @return Search
     */
    public function setShipperDeliverySlotClosed($shipperDeliverySlotClosed)
    {
        $this->shipperDeliverySlotClosed = $shipperDeliverySlotClosed;
        return $this;
    }

    /**
     * @param string $currency
     * @return Search
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param string $rateN1
     * @return Search
     */
    public function setRateN1($rateN1)
    {
        $this->rateN1 = $rateN1;
        return $this;
    }

    /**
     * @param string $rateN2
     * @return Search
     */
    public function setRateN2($rateN2)
    {
        $this->rateN2 = $rateN2;
        return $this;
    }

    /**
     * @param string $rateN3
     * @return Search
     */
    public function setRateN3($rateN3)
    {
        $this->rateN3 = $rateN3;
        return $this;
    }

    /**
     * @param string $rateN4
     * @return Search
     */
    public function setRateN4($rateN4)
    {
        $this->rateN4 = $rateN4;
        return $this;
    }

    /**
     * @param string $rateLevelsNotShow
     * @return Search
     */
    public function setRateLevelsNotShow($rateLevelsNotShow)
    {
        $this->rateLevelsNotShow = $rateLevelsNotShow;
        return $this;
    }

    /**
     * @param bool $isDeliveryDate
     * @return Search
     */
    public function setIsDeliveryDate($isDeliveryDate)
    {
        $this->isDeliveryDate = $isDeliveryDate;
        return $this;
    }

    /**
     * @param string $slotType
     * @return Search
     */
    public function setSlotType($slotType)
    {
        $this->slotType = $slotType;
        return $this;
    }
}