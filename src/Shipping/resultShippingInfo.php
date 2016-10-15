<?php

namespace Chronopost\Shipping;

class resultShippingInfo
{

    /**
     * @var error $error
     */
    protected $error = null;

    /**
     * @var shippingInfo $shippingInfo
     */
    protected $shippingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param error $error
     * @return \Chronopost\Shipping\resultShippingInfo
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return shippingInfo
     */
    public function getShippingInfo()
    {
      return $this->shippingInfo;
    }

    /**
     * @param shippingInfo $shippingInfo
     * @return \Chronopost\Shipping\resultShippingInfo
     */
    public function setShippingInfo($shippingInfo)
    {
      $this->shippingInfo = $shippingInfo;
      return $this;
    }

}
