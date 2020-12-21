<?php
namespace Chronopost\Route;


use Chronopost\Request\Shipping\GetReservedSkybillWithTypeAndMode;
use Chronopost\Request\Shipping\MultiParcelWithReservation;

class Shipping
{
    protected $wsdl = "http://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl";
    protected $targetNamespace = "http://cxf.shipping.soap.chronopost.fr/";
    /** Services */
    protected $shippingMultiParcelWithReservation = "shippingMultiParcelWithReservation";
    protected $getReservedSkybillWithTypeAndMode = "getReservedSkybillWithTypeAndMode";

    /** @var string */
    protected $entity;

    public function __construct(\Chronopost\Chronopost $master)
    {
        $this->master = $master;
    }

    public function multiParcelWithReservation(MultiParcelWithReservation $multiParcelWithReservation)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->shippingMultiParcelWithReservation,$multiParcelWithReservation);
    }

    public function getReservedSkybillWithTypeAndMode(GetReservedSkybillWithTypeAndMode $getReservedSkybillWithTypeAndMode)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->getReservedSkybillWithTypeAndMode,$getReservedSkybillWithTypeAndMode);
    }
}
