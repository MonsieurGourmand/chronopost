<?php

namespace Chonopost\Shipping;

class resultReservationExpeditionValue
{

    /**
     * @var string $codeDepot
     */
    protected $codeDepot = null;

    /**
     * @var string $codeService
     */
    protected $codeService = null;

    /**
     * @var string $DSort
     */
    protected $DSort = null;

    /**
     * @var string $destinationDepot
     */
    protected $destinationDepot = null;

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
     * @var string $geoPostCodeBarre
     */
    protected $geoPostCodeBarre = null;

    /**
     * @var string $geoPostNumeroColis
     */
    protected $geoPostNumeroColis = null;

    /**
     * @var string $groupingPriorityLabel
     */
    protected $groupingPriorityLabel = null;

    /**
     * @var string $OSort
     */
    protected $OSort = null;

    /**
     * @var \DateTime $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    /**
     * @var string $serviceMark
     */
    protected $serviceMark = null;

    /**
     * @var string $serviceName
     */
    protected $serviceName = null;

    /**
     * @var string $signaletiqueProduit
     */
    protected $signaletiqueProduit = null;

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
    public function getCodeDepot()
    {
      return $this->codeDepot;
    }

    /**
     * @param string $codeDepot
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setCodeDepot($codeDepot)
    {
      $this->codeDepot = $codeDepot;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeService()
    {
      return $this->codeService;
    }

    /**
     * @param string $codeService
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setCodeService($codeService)
    {
      $this->codeService = $codeService;
      return $this;
    }

    /**
     * @return string
     */
    public function getDSort()
    {
      return $this->DSort;
    }

    /**
     * @param string $DSort
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setDSort($DSort)
    {
      $this->DSort = $DSort;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationDepot()
    {
      return $this->destinationDepot;
    }

    /**
     * @param string $destinationDepot
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setDestinationDepot($destinationDepot)
    {
      $this->destinationDepot = $destinationDepot;
      return $this;
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeoPostCodeBarre()
    {
      return $this->geoPostCodeBarre;
    }

    /**
     * @param string $geoPostCodeBarre
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setGeoPostCodeBarre($geoPostCodeBarre)
    {
      $this->geoPostCodeBarre = $geoPostCodeBarre;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeoPostNumeroColis()
    {
      return $this->geoPostNumeroColis;
    }

    /**
     * @param string $geoPostNumeroColis
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setGeoPostNumeroColis($geoPostNumeroColis)
    {
      $this->geoPostNumeroColis = $geoPostNumeroColis;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupingPriorityLabel()
    {
      return $this->groupingPriorityLabel;
    }

    /**
     * @param string $groupingPriorityLabel
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setGroupingPriorityLabel($groupingPriorityLabel)
    {
      $this->groupingPriorityLabel = $groupingPriorityLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getOSort()
    {
      return $this->OSort;
    }

    /**
     * @param string $OSort
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setOSort($OSort)
    {
      $this->OSort = $OSort;
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceMark()
    {
      return $this->serviceMark;
    }

    /**
     * @param string $serviceMark
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setServiceMark($serviceMark)
    {
      $this->serviceMark = $serviceMark;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setServiceName($serviceName)
    {
      $this->serviceName = $serviceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignaletiqueProduit()
    {
      return $this->signaletiqueProduit;
    }

    /**
     * @param string $signaletiqueProduit
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setSignaletiqueProduit($signaletiqueProduit)
    {
      $this->signaletiqueProduit = $signaletiqueProduit;
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
     * @return \Chonopost\Shipping\resultReservationExpeditionValue
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
