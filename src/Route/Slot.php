<?php
namespace Chronopost\Route;

use \Chronopost\Request\Slot\Search;

class Slot
{
    protected $wsdl = "https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl";
    protected $targetNamespace = "http://cxf.soap.ws.creneau.chronopost.fr/";
    /** Services */
    protected $searchDeliverySlot = "searchDeliverySlot";

    /** @var string */
    protected $entity;

    public function __construct(\Chronopost\Chronopost $master)
    {
        $this->master = $master;
        $this->entity = \Chronopost\Entity\Slot::class;
    }

    public function search(Search $search)
    {
        return $this->master->request($this->wsdl,$this->targetNamespace,$this->searchDeliverySlot,$search);
    }
}