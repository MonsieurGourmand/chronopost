<?php

namespace Chronopost\Request\Shipping;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/14/17
 * Time: 11:57 AM
 */
class MultiParcelWithReservation
{
    /**
     * @var Header $headerValue
     */
    protected $headerValue;

    /**
     * @var Shipper $shipperValue
     */
    protected $shipperValue;

    /**
     * @var Customer $customerValue
     */
    protected $customerValue;

    /**
     * @var Recipient $recipientValue
     */
    protected $recipientValue;

    /**
     * @var Reference[] $refValue
     */
    protected $refValue;

    /**
     * @var Skybill[] $skybillValue;
     */
    protected $skybillValue;

    /**
     * @param Reference $refValue
     */
    public function addRefValue($refValue)
    {
        $this->refValue[] = $refValue;
    }

    /**
     * @param Skybill $skybillValue
     */
    public function addSkybillValue($skybillValue)
    {
        $this->skybillValue[] = $skybillValue;
    }

    /**
     * @var SkybillParams $skybillParams
     */
    protected $skybillParamsValue;

    /**
     * @var Scheduled $scheduledValue
     */
    protected $scheduledValue;

    /**
     * @var int $numberOfParcel
     */
    protected $numberOfParcel;

    /**
     * @var string $password
     */
    protected $password;

    /**
     * @var string $multiParcel
     */
    protected $multiParcel = "Y";

    /**
     * @var int $modeRetour
     */
    protected $modeRetour = 2;

    /**
     * @var int $version
     */
    protected $version = "2";


    /**
     * @param Header $headerValue
     * @return MultiParcelWithReservation
     */
    public function setHeaderValue($headerValue)
    {
        $this->headerValue = $headerValue;
        return $this;
    }

    /**
     * @param Shipper $shipperValue
     * @return MultiParcelWithReservation
     */
    public function setShipperValue($shipperValue)
    {
        $this->shipperValue = $shipperValue;
        return $this;
    }

    /**
     * @param Customer $customerValue
     * @return MultiParcelWithReservation
     */
    public function setCustomerValue($customerValue)
    {
        $this->customerValue = $customerValue;
        return $this;
    }

    /**
     * @param Recipient $recipientValue
     * @return MultiParcelWithReservation
     */
    public function setRecipientValue($recipientValue)
    {
        $this->recipientValue = $recipientValue;
        return $this;
    }


    /**
     * @param string $multiParcel
     * @return MultiParcelWithReservation
     */
    public function setMultiParcel($multiParcel)
    {
        $this->multiParcel = $multiParcel;
        return $this;
    }

    /**
     * @param int $modeRetour
     * @return MultiParcelWithReservation
     */
    public function setModeRetour($modeRetour)
    {
        $this->modeRetour = $modeRetour;
        return $this;
    }

    /**
     * @param int $numberOfParcel
     * @return MultiParcelWithReservation
     */
    public function setNumberOfParcel($numberOfParcel)
    {
        $this->numberOfParcel = $numberOfParcel;
        return $this;
    }

    /**
     * @param string $password
     * @return MultiParcelWithReservation
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param SkybillParams $skybillParamsValue
     * @return MultiParcelWithReservation
     */
    public function setSkybillParamsValue($skybillParamsValue)
    {
        $this->skybillParamsValue = $skybillParamsValue;
        return $this;
    }

    /**
     * @param Scheduled $scheduledValue
     * @return MultiParcelWithReservation
     */
    public function setScheduledValue($scheduledValue)
    {
        $this->scheduledValue = $scheduledValue;
        return $this;
    }
}