<?php

namespace Chronopost\Shipping;

class refValue
{

    /**
     * @var string $customerSkybillNumber
     */
    protected $customerSkybillNumber = null;

    /**
     * @var string $PCardTransactionNumber
     */
    protected $PCardTransactionNumber = null;

    /**
     * @var string $recipientRef
     */
    protected $recipientRef = null;

    /**
     * @var string $shipperRef
     */
    protected $shipperRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerSkybillNumber()
    {
      return $this->customerSkybillNumber;
    }

    /**
     * @param string $customerSkybillNumber
     * @return \Chronopost\Shipping\refValue
     */
    public function setCustomerSkybillNumber($customerSkybillNumber)
    {
      $this->customerSkybillNumber = $customerSkybillNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPCardTransactionNumber()
    {
      return $this->PCardTransactionNumber;
    }

    /**
     * @param string $PCardTransactionNumber
     * @return \Chronopost\Shipping\refValue
     */
    public function setPCardTransactionNumber($PCardTransactionNumber)
    {
      $this->PCardTransactionNumber = $PCardTransactionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientRef()
    {
      return $this->recipientRef;
    }

    /**
     * @param string $recipientRef
     * @return \Chronopost\Shipping\refValue
     */
    public function setRecipientRef($recipientRef)
    {
      $this->recipientRef = $recipientRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperRef()
    {
      return $this->shipperRef;
    }

    /**
     * @param string $shipperRef
     * @return \Chronopost\Shipping\refValue
     */
    public function setShipperRef($shipperRef)
    {
      $this->shipperRef = $shipperRef;
      return $this;
    }

}
