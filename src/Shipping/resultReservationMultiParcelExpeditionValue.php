<?php

namespace Chronopost\Shipping;

class resultReservationMultiParcelExpeditionValue
{

    /**
     * @var string $ESDFullNumber
     */
    protected $ESDFullNumber = null;

    /**
     * @var string $ESDNumber
     */
    protected $ESDNumber = null;

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var \DateTime $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    /**
     * @var resultParcelValue[] $resultParcelValue
     */
    protected $resultParcelValue = null;

    /**
     * @param int $errorCode
     */
    public function __construct($errorCode)
    {
      $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getESDFullNumber()
    {
      return $this->ESDFullNumber;
    }

    /**
     * @param string $ESDFullNumber
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setESDFullNumber($ESDFullNumber)
    {
      $this->ESDFullNumber = $ESDFullNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getESDNumber()
    {
      return $this->ESDNumber;
    }

    /**
     * @param string $ESDNumber
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setESDNumber($ESDNumber)
    {
      $this->ESDNumber = $ESDNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDate()
    {
      if ($this->pickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->pickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pickupDate
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setPickupDate(\DateTime $pickupDate = null)
    {
      if ($pickupDate == null) {
       $this->pickupDate = null;
      } else {
        $this->pickupDate = $pickupDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
      return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

    /**
     * @return resultParcelValue[]
     */
    public function getResultParcelValue()
    {
      return $this->resultParcelValue;
    }

    /**
     * @param resultParcelValue[] $resultParcelValue
     * @return \Chronopost\Shipping\resultReservationMultiParcelExpeditionValue
     */
    public function setResultParcelValue(array $resultParcelValue = null)
    {
      $this->resultParcelValue = $resultParcelValue;
      return $this;
    }

}
