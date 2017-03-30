<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 9:56 AM
 */

namespace Chronopost\Request\Shipping;


use Chronopost\Request\Contact;

class Shipper
{
    /**
     * @var Contact $contact
     */
    protected $contact;
    protected $shipperCivility = null;
    protected $shipperContactName = null;
    protected $shipperEmail = null;
    protected $shipperMobilePhone = null;
    protected $shipperName = null;
    protected $shipperName2 = null;
    protected $shipperPhone = null;
    protected $shipperPreAlert = null;
    protected $shipperAdress1 = null;
    protected $shipperAdress2 = null;
    protected $shipperCity = null;
    protected $shipperZipCode = null;
    protected $shipperCountry = null;


    /**
     * @param Contact $contact
     * @return Shipper
     */
    public function setContact($contact)
    {
        $this->shipperCivility = $contact->getCivility();
        $this->shipperContactName = $contact->getContactName();
        $this->shipperEmail = $contact->getEmail();
        $this->shipperMobilePhone = $contact->getMobilePhone();
        $this->shipperName = $contact->getName();
        $this->shipperName2 = $contact->getName2();
        $this->shipperPhone = $contact->getPhone();
        $this->shipperPreAlert = $contact->getPreAlert();

        $address = $contact->getAddress();
        $this->shipperAdress1 = $address->getAddress1();
        $this->shipperAdress2 = $address->getAddress2();
        $this->shipperZipCode = $address->getZipCode();
        $this->shipperCity = $address->getCity();
        $this->shipperCountry = $address->getCountry();

        return $this;
    }
}