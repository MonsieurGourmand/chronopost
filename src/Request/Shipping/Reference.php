<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:54 AM
 */

namespace Chronopost\Request\Shipping;


class Reference
{
    /**
     * @var string $shipperRef
     */
    protected $shipperRef;

    /**
     * @var string $recipientRef
     */
    protected $recipientRef;

    /**
     * @var string $customerSkybillNumber
     */
    protected $customerSkybillNumber;

    /**
     * @param string $shipperRef
     * @return Reference
     */
    public function setShipperRef($shipperRef)
    {
        $this->shipperRef = $shipperRef;
        return $this;
    }

    /**
     * @param string $recipientRef
     * @return Reference
     */
    public function setRecipientRef($recipientRef)
    {
        $this->recipientRef = $recipientRef;
        return $this;
    }

    /**
     * @param string $customerSkybillNumber
     * @return Reference
     */
    public function setCustomerSkybillNumber($customerSkybillNumber)
    {
        $this->customerSkybillNumber = $customerSkybillNumber;
        return $this;
    }
}