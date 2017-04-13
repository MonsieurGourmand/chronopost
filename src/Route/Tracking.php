<?php
namespace Chronopost\Route;

use Chronopost\Request\Tracking\Skybill;
use Chronopost\Request\Slot\Confirm;
use \Chronopost\Request\Slot\Search;

class Tracking
{
    protected $wsdl = "https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl";
    protected $targetNamespace = "http://cxf.tracking.soap.chronopost.fr/";
    /** Services */
    protected $cancelSkybill = "cancelSkybill";
    protected $trackSkybill = "trackSkybill";

    /** @var string */
    protected $entity;

    public function __construct(\Chronopost\Chronopost $master)
    {
        $this->master = $master;
    }

    public function cancel(Skybill $skybill)
    {
        $skybill->setAccountNumber($this->master->accountNumber);
        $skybill->setPassword($this->master->pass);
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->cancelSkybill,$skybill);
    }

    public function track(Skybill $skybill)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->trackSkybill,$skybill);
    }
}