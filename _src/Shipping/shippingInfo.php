<?php

namespace Chronopost\Shipping;

class shippingInfo
{

    /**
     * @var string $asCode
     */
    protected $asCode = null;

    /**
     * @var string $codeService
     */
    protected $codeService = null;

    /**
     * @var string $destinationDepot
     */
    protected $destinationDepot = null;

    /**
     * @var string $groupingPriorityLabel
     */
    protected $groupingPriorityLabel = null;

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
     * @var string $dSort
     */
    protected $dSort = null;

    /**
     * @var string $oSort
     */
    protected $oSort = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAsCode()
    {
      return $this->asCode;
    }

    /**
     * @param string $asCode
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setAsCode($asCode)
    {
      $this->asCode = $asCode;
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
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setCodeService($codeService)
    {
      $this->codeService = $codeService;
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
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setDestinationDepot($destinationDepot)
    {
      $this->destinationDepot = $destinationDepot;
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
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setGroupingPriorityLabel($groupingPriorityLabel)
    {
      $this->groupingPriorityLabel = $groupingPriorityLabel;
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
     * @return \Chronopost\Shipping\shippingInfo
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
     * @return \Chronopost\Shipping\shippingInfo
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
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setSignaletiqueProduit($signaletiqueProduit)
    {
      $this->signaletiqueProduit = $signaletiqueProduit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDSort()
    {
      return $this->dSort;
    }

    /**
     * @param string $dSort
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setDSort($dSort)
    {
      $this->dSort = $dSort;
      return $this;
    }

    /**
     * @return string
     */
    public function getOSort()
    {
      return $this->oSort;
    }

    /**
     * @param string $oSort
     * @return \Chronopost\Shipping\shippingInfo
     */
    public function setOSort($oSort)
    {
      $this->oSort = $oSort;
      return $this;
    }

}
