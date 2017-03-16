<?php

namespace Chronopost\Tracking;

class infosPOD
{

    /**
     * @var \DateTime $dateDeposit
     */
    protected $dateDeposit = null;

    /**
     * @var string $depositCountry
     */
    protected $depositCountry = null;

    /**
     * @var string $depositZipCode
     */
    protected $depositZipCode = null;

    /**
     * @var string $objectType
     */
    protected $objectType = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    /**
     * @var string $recipientCountry
     */
    protected $recipientCountry = null;

    /**
     * @var string $recipientName
     */
    protected $recipientName = null;

    /**
     * @var string $recipientRef
     */
    protected $recipientRef = null;

    /**
     * @var string $recipientZipCode
     */
    protected $recipientZipCode = null;

    /**
     * @var string $shipperCity
     */
    protected $shipperCity = null;

    /**
     * @var string $shipperRef
     */
    protected $shipperRef = null;

    /**
     * @var string $shipperZipCode
     */
    protected $shipperZipCode = null;

    /**
     * @var event $significantEvent
     */
    protected $significantEvent = null;

    /**
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDateDeposit()
    {
      if ($this->dateDeposit == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateDeposit);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateDeposit
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setDateDeposit(\DateTime $dateDeposit = null)
    {
      if ($dateDeposit == null) {
       $this->dateDeposit = null;
      } else {
        $this->dateDeposit = $dateDeposit->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDepositCountry()
    {
      return $this->depositCountry;
    }

    /**
     * @param string $depositCountry
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setDepositCountry($depositCountry)
    {
      $this->depositCountry = $depositCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepositZipCode()
    {
      return $this->depositZipCode;
    }

    /**
     * @param string $depositZipCode
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setDepositZipCode($depositZipCode)
    {
      $this->depositZipCode = $depositZipCode;
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
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setObjectType($objectType)
    {
      $this->objectType = $objectType;
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
     * @return \Chronopost\Tracking\infosPOD
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
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setRecipientCountry($recipientCountry)
    {
      $this->recipientCountry = $recipientCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
      return $this->recipientName;
    }

    /**
     * @param string $recipientName
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setRecipientName($recipientName)
    {
      $this->recipientName = $recipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientRef()
    {
      return $this->recipientRef;
    }

    /**
     * @param string $recipientRef
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setRecipientRef($recipientRef)
    {
      $this->recipientRef = $recipientRef;
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
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setRecipientZipCode($recipientZipCode)
    {
      $this->recipientZipCode = $recipientZipCode;
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
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setShipperCity($shipperCity)
    {
      $this->shipperCity = $shipperCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperRef()
    {
      return $this->shipperRef;
    }

    /**
     * @param string $shipperRef
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setShipperRef($shipperRef)
    {
      $this->shipperRef = $shipperRef;
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
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setShipperZipCode($shipperZipCode)
    {
      $this->shipperZipCode = $shipperZipCode;
      return $this;
    }

    /**
     * @return event
     */
    public function getSignificantEvent()
    {
      return $this->significantEvent;
    }

    /**
     * @param event $significantEvent
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setSignificantEvent($significantEvent)
    {
      $this->significantEvent = $significantEvent;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillNumber()
    {
      return $this->skybillNumber;
    }

    /**
     * @param string $skybillNumber
     * @return \Chronopost\Tracking\infosPOD
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
