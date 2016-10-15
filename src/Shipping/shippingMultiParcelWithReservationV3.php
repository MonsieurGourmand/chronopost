<?php

namespace Chonopost\Shipping;

class shippingMultiParcelWithReservationV3
{

    /**
     * @var esdValue3 $esdValue
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
     * @var recipientValue[] $recipientValue
     */
    protected $recipientValue = null;

    /**
     * @var refValue[] $refValue
     */
    protected $refValue = null;

    /**
     * @var skybillWithDimensionsValueV2[] $skybillValue
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
     * @var int $numberOfParcel
     */
    protected $numberOfParcel = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var string $multiParcel
     */
    protected $multiParcel = null;

    /**
     * @var scheduledValue $scheduledValue
     */
    protected $scheduledValue = null;

    /**
     * @param int $numberOfParcel
     */
    public function __construct($numberOfParcel)
    {
      $this->numberOfParcel = $numberOfParcel;
    }

    /**
     * @return esdValue3
     */
    public function getEsdValue()
    {
      return $this->esdValue;
    }

    /**
     * @param esdValue3 $esdValue
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setCustomerValue($customerValue)
    {
      $this->customerValue = $customerValue;
      return $this;
    }

    /**
     * @return recipientValue[]
     */
    public function getRecipientValue()
    {
      return $this->recipientValue;
    }

    /**
     * @param recipientValue[] $recipientValue
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setRecipientValue(array $recipientValue = null)
    {
      $this->recipientValue = $recipientValue;
      return $this;
    }

    /**
     * @return refValue[]
     */
    public function getRefValue()
    {
      return $this->refValue;
    }

    /**
     * @param refValue[] $refValue
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setRefValue(array $refValue = null)
    {
      $this->refValue = $refValue;
      return $this;
    }

    /**
     * @return skybillWithDimensionsValueV2[]
     */
    public function getSkybillValue()
    {
      return $this->skybillValue;
    }

    /**
     * @param skybillWithDimensionsValueV2[] $skybillValue
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setSkybillValue(array $skybillValue = null)
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setModeRetour($modeRetour)
    {
      $this->modeRetour = $modeRetour;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfParcel()
    {
      return $this->numberOfParcel;
    }

    /**
     * @param int $numberOfParcel
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setNumberOfParcel($numberOfParcel)
    {
      $this->numberOfParcel = $numberOfParcel;
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiParcel()
    {
      return $this->multiParcel;
    }

    /**
     * @param string $multiParcel
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setMultiParcel($multiParcel)
    {
      $this->multiParcel = $multiParcel;
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
     * @return \Chonopost\Shipping\shippingMultiParcelWithReservationV3
     */
    public function setScheduledValue($scheduledValue)
    {
      $this->scheduledValue = $scheduledValue;
      return $this;
    }

}
