<?php

namespace Chronopost\Shipping;

class shippingV2
{

    /**
     * @var esdValue $esdValue
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
     * @var string $version
     */
    protected $version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return esdValue
     */
    public function getEsdValue()
    {
      return $this->esdValue;
    }

    /**
     * @param esdValue $esdValue
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
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
     * @return \Chronopost\Shipping\shippingV2
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \Chronopost\Shipping\shippingV2
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
