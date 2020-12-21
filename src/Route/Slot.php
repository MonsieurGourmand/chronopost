<?php
namespace Chronopost\Route;

use Chronopost\Request\Slot\Confirm;
use \Chronopost\Request\Slot\Search;

class Slot
{
    protected $wsdl = "http://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl";
    protected $targetNamespace = "http://cxf.soap.ws.creneau.chronopost.fr/";
    /** Services */
    protected $searchDeliverySlot = "searchDeliverySlot";
    protected $confirmDeliverySlot = "confirmDeliverySlot";

    /** @var string */
    protected $entity;

    public function __construct(\Chronopost\Chronopost $master)
    {
        $this->master = $master;
    }

    public function search(Search $search)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->searchDeliverySlot,$search);
    }

    public function confirm(Confirm $confirm)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->confirmDeliverySlot,$confirm);
    }
}
