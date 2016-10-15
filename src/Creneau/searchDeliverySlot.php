<?php

namespace Chonopost\Creneau;

class searchDeliverySlot
{

    /**
     * @var string $callerTool
     */
    protected $callerTool = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var string $shipperAdress1
     */
    protected $shipperAdress1 = null;

    /**
     * @var string $shipperAdress2
     */
    protected $shipperAdress2 = null;

    /**
     * @var string $shipperZipCode
     */
    protected $shipperZipCode = null;

    /**
     * @var string $shipperCity
     */
    protected $shipperCity = null;

    /**
     * @var string $shipperCountry
     */
    protected $shipperCountry = null;

    /**
     * @var string $recipientAdress1
     */
    protected $recipientAdress1 = null;

    /**
     * @var string $recipientAdress2
     */
    protected $recipientAdress2 = null;

    /**
     * @var string $recipientZipCode
     */
    protected $recipientZipCode = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    /**
     * @var string $recipientCountry
     */
    protected $recipientCountry = null;

    /**
     * @var string $injectionSite
     */
    protected $injectionSite = null;

    /**
     * @var int $weight
     */
    protected $weight = null;

    /**
     * @var \DateTime $dateBegin
     */
    protected $dateBegin = null;

    /**
     * @var \DateTime $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @var string[] $shipperDeliverySlotClosed
     */
    protected $shipperDeliverySlotClosed = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $rateN1
     */
    protected $rateN1 = null;

    /**
     * @var string $rateN2
     */
    protected $rateN2 = null;

    /**
     * @var string $rateN3
     */
    protected $rateN3 = null;

    /**
     * @var string $rateN4
     */
    protected $rateN4 = null;

    /**
     * @var string[] $rateLevelsNotShow
     */
    protected $rateLevelsNotShow = null;

    /**
     * @var boolean $isDeliveryDate
     */
    protected $isDeliveryDate = null;

    /**
     * @var string $slotType
     */
    protected $slotType = null;

    /**
     * @param boolean $isDeliveryDate
     */
    public function __construct($isDeliveryDate)
    {
      $this->isDeliveryDate = $isDeliveryDate;
    }

    /**
     * @return string
     */
    public function getCallerTool()
    {
      return $this->callerTool;
    }

    /**
     * @param string $callerTool
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setCallerTool($callerTool)
    {
      $this->callerTool = $callerTool;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->productType;
    }

    /**
     * @param string $productType
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAdress1()
    {
      return $this->shipperAdress1;
    }

    /**
     * @param string $shipperAdress1
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperAdress1($shipperAdress1)
    {
      $this->shipperAdress1 = $shipperAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAdress2()
    {
      return $this->shipperAdress2;
    }

    /**
     * @param string $shipperAdress2
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperAdress2($shipperAdress2)
    {
      $this->shipperAdress2 = $shipperAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperZipCode()
    {
      return $this->shipperZipCode;
    }

    /**
     * @param string $shipperZipCode
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperZipCode($shipperZipCode)
    {
      $this->shipperZipCode = $shipperZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCity()
    {
      return $this->shipperCity;
    }

    /**
     * @param string $shipperCity
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperCity($shipperCity)
    {
      $this->shipperCity = $shipperCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountry()
    {
      return $this->shipperCountry;
    }

    /**
     * @param string $shipperCountry
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperCountry($shipperCountry)
    {
      $this->shipperCountry = $shipperCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAdress1()
    {
      return $this->recipientAdress1;
    }

    /**
     * @param string $recipientAdress1
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRecipientAdress1($recipientAdress1)
    {
      $this->recipientAdress1 = $recipientAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAdress2()
    {
      return $this->recipientAdress2;
    }

    /**
     * @param string $recipientAdress2
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRecipientAdress2($recipientAdress2)
    {
      $this->recipientAdress2 = $recipientAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientZipCode()
    {
      return $this->recipientZipCode;
    }

    /**
     * @param string $recipientZipCode
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRecipientZipCode($recipientZipCode)
    {
      $this->recipientZipCode = $recipientZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCity()
    {
      return $this->recipientCity;
    }

    /**
     * @param string $recipientCity
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRecipientCity($recipientCity)
    {
      $this->recipientCity = $recipientCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCountry()
    {
      return $this->recipientCountry;
    }

    /**
     * @param string $recipientCountry
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRecipientCountry($recipientCountry)
    {
      $this->recipientCountry = $recipientCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getInjectionSite()
    {
      return $this->injectionSite;
    }

    /**
     * @param string $injectionSite
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setInjectionSite($injectionSite)
    {
      $this->injectionSite = $injectionSite;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateBegin()
    {
      if ($this->dateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateBegin
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setDateBegin(\DateTime $dateBegin = null)
    {
      if ($dateBegin == null) {
       $this->dateBegin = null;
      } else {
        $this->dateBegin = $dateBegin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
      if ($this->dateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateEnd
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setDateEnd(\DateTime $dateEnd = null)
    {
      if ($dateEnd == null) {
       $this->dateEnd = null;
      } else {
        $this->dateEnd = $dateEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string[]
     */
    public function getShipperDeliverySlotClosed()
    {
      return $this->shipperDeliverySlotClosed;
    }

    /**
     * @param string[] $shipperDeliverySlotClosed
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setShipperDeliverySlotClosed(array $shipperDeliverySlotClosed = null)
    {
      $this->shipperDeliverySlotClosed = $shipperDeliverySlotClosed;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateN1()
    {
      return $this->rateN1;
    }

    /**
     * @param string $rateN1
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRateN1($rateN1)
    {
      $this->rateN1 = $rateN1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateN2()
    {
      return $this->rateN2;
    }

    /**
     * @param string $rateN2
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRateN2($rateN2)
    {
      $this->rateN2 = $rateN2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateN3()
    {
      return $this->rateN3;
    }

    /**
     * @param string $rateN3
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRateN3($rateN3)
    {
      $this->rateN3 = $rateN3;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateN4()
    {
      return $this->rateN4;
    }

    /**
     * @param string $rateN4
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRateN4($rateN4)
    {
      $this->rateN4 = $rateN4;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRateLevelsNotShow()
    {
      return $this->rateLevelsNotShow;
    }

    /**
     * @param string[] $rateLevelsNotShow
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setRateLevelsNotShow(array $rateLevelsNotShow = null)
    {
      $this->rateLevelsNotShow = $rateLevelsNotShow;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeliveryDate()
    {
      return $this->isDeliveryDate;
    }

    /**
     * @param boolean $isDeliveryDate
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setIsDeliveryDate($isDeliveryDate)
    {
      $this->isDeliveryDate = $isDeliveryDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSlotType()
    {
      return $this->slotType;
    }

    /**
     * @param string $slotType
     * @return \Chonopost\Creneau\searchDeliverySlot
     */
    public function setSlotType($slotType)
    {
      $this->slotType = $slotType;
      return $this;
    }

}
