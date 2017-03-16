<?php

namespace Chronopost\Shipping;

class getShippingInformation
{

    /**
     * @var headerValue $headerValue
     */
    protected $headerValue = null;

    /**
     * @var shipperValue $shipperValue
     */
    protected $shipperValue = null;

    /**
     * @var recipientValue $recipientValue
     */
    protected $recipientValue = null;

    /**
     * @var skybillValueBase $skybillValueBase
     */
    protected $skybillValueBase = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
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
     * @return \Chronopost\Shipping\getShippingInformation
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
     * @return \Chronopost\Shipping\getShippingInformation
     */
    public function setShipperValue($shipperValue)
    {
      $this->shipperValue = $shipperValue;
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
     * @return \Chronopost\Shipping\getShippingInformation
     */
    public function setRecipientValue($recipientValue)
    {
      $this->recipientValue = $recipientValue;
      return $this;
    }

    /**
     * @return skybillValueBase
     */
    public function getSkybillValueBase()
    {
      return $this->skybillValueBase;
    }

    /**
     * @param skybillValueBase $skybillValueBase
     * @return \Chronopost\Shipping\getShippingInformation
     */
    public function setSkybillValueBase($skybillValueBase)
    {
      $this->skybillValueBase = $skybillValueBase;
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
     * @return \Chronopost\Shipping\getShippingInformation
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
