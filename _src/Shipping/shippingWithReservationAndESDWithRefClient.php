<?php

namespace Chronopost\Shipping;

class shippingWithReservationAndESDWithRefClient
{

    /**
     * @var esdWithRefClientValue $esdValue
     */
    protected $esdValue = null;

    /**
     * @var headerValue $headerValue
     */
    protected $headerValue = null;

    /**
     * @var shipperValue $shipperValue
     */
    protected $shipperValue = null;

    /**
     * @var customerValue $customerValue
     */
    protected $customerValue = null;

    /**
     * @var recipientValue $recipientValue
     */
    protected $recipientValue = null;

    /**
     * @var refValue $refValue
     */
    protected $refValue = null;

    /**
     * @var skybillValue $skybillValue
     */
    protected $skybillValue = null;

    /**
     * @var skybillParamsValue $skybillParamsValue
     */
    protected $skybillParamsValue = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $modeRetour
     */
    protected $modeRetour = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var scheduledValue $scheduledValue
     */
    protected $scheduledValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esdWithRefClientValue
     */
    public function getEsdValue()
    {
      return $this->esdValue;
    }

    /**
     * @param esdWithRefClientValue $esdValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setEsdValue($esdValue)
    {
      $this->esdValue = $esdValue;
      return $this;
    }

    /**
     * @return headerValue
     */
    public function getHeaderValue()
    {
      return $this->headerValue;
    }

    /**
     * @param headerValue $headerValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setHeaderValue($headerValue)
    {
      $this->headerValue = $headerValue;
      return $this;
    }

    /**
     * @return shipperValue
     */
    public function getShipperValue()
    {
      return $this->shipperValue;
    }

    /**
     * @param shipperValue $shipperValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setShipperValue($shipperValue)
    {
      $this->shipperValue = $shipperValue;
      return $this;
    }

    /**
     * @return customerValue
     */
    public function getCustomerValue()
    {
      return $this->customerValue;
    }

    /**
     * @param customerValue $customerValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setCustomerValue($customerValue)
    {
      $this->customerValue = $customerValue;
      return $this;
    }

    /**
     * @return recipientValue
     */
    public function getRecipientValue()
    {
      return $this->recipientValue;
    }

    /**
     * @param recipientValue $recipientValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setRecipientValue($recipientValue)
    {
      $this->recipientValue = $recipientValue;
      return $this;
    }

    /**
     * @return refValue
     */
    public function getRefValue()
    {
      return $this->refValue;
    }

    /**
     * @param refValue $refValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setRefValue($refValue)
    {
      $this->refValue = $refValue;
      return $this;
    }

    /**
     * @return skybillValue
     */
    public function getSkybillValue()
    {
      return $this->skybillValue;
    }

    /**
     * @param skybillValue $skybillValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setSkybillValue($skybillValue)
    {
      $this->skybillValue = $skybillValue;
      return $this;
    }

    /**
     * @return skybillParamsValue
     */
    public function getSkybillParamsValue()
    {
      return $this->skybillParamsValue;
    }

    /**
     * @param skybillParamsValue $skybillParamsValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setSkybillParamsValue($skybillParamsValue)
    {
      $this->skybillParamsValue = $skybillParamsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getModeRetour()
    {
      return $this->modeRetour;
    }

    /**
     * @param string $modeRetour
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setModeRetour($modeRetour)
    {
      $this->modeRetour = $modeRetour;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return scheduledValue
     */
    public function getScheduledValue()
    {
      return $this->scheduledValue;
    }

    /**
     * @param scheduledValue $scheduledValue
     * @return \Chronopost\Shipping\shippingWithReservationAndESDWithRefClient
     */
    public function setScheduledValue($scheduledValue)
    {
      $this->scheduledValue = $scheduledValue;
      return $this;
    }

}
