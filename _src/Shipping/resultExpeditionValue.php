<?php

namespace Chronopost\Shipping;

class resultExpeditionValue
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
     * @var base64Binary $skybill
     */
    protected $skybill = null;

    /**
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

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
     * @return \Chronopost\Shipping\resultExpeditionValue
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
     * @return \Chronopost\Shipping\resultExpeditionValue
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
     * @return \Chronopost\Shipping\resultExpeditionValue
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
     * @return \Chronopost\Shipping\resultExpeditionValue
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
     * @return \Chronopost\Shipping\resultExpeditionValue
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
     * @return base64Binary
     */
    public function getSkybill()
    {
      return $this->skybill;
    }

    /**
     * @param base64Binary $skybill
     * @return \Chronopost\Shipping\resultExpeditionValue
     */
    public function setSkybill($skybill)
    {
      $this->skybill = $skybill;
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
     * @return \Chronopost\Shipping\resultExpeditionValue
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
