<?php

namespace Chronopost\Shipping;

class resultParcelValue
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

    
    public function __construct()
    {
    
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
     */
    public function setDestinationDepot($destinationDepot)
    {
      $this->destinationDepot = $destinationDepot;
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
     */
    public function setOSort($OSort)
    {
      $this->OSort = $OSort;
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
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
     * @return \Chronopost\Shipping\resultParcelValue
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
