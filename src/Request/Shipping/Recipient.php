<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 9:56 AM
 */

namespace Chronopost\Request\Shipping;


use Chronopost\Request\Contact;

class Recipient
{
    /**
     * @var Contact $contact
     */
    protected $contact;
    protected $recipientCivility = null;
    protected $recipientContactName = null;
    protected $recipientEmail = null;
    protected $recipientMobilePhone = null;
    protected $recipientName = null;
    protected $recipientName2 = null;
    protected $recipientPhone = null;
    protected $recipientPreAlert = null;
    protected $recipientAdress1 = null;
    protected $recipientAdress2 = null;
    protected $recipientCity = null;
    protected $recipientZipCode = null;
    protected $recipientCountry = null;


    /**
     * @param Contact $contact
     * @return Recipient
     */
    public function setContact($contact)
    {
        $this->recipientCivility = $contact->getCivility();
        $this->recipientContactName = $contact->getContactName();
        $this->recipientEmail = $contact->getEmail();
        $this->recipientMobilePhone = $contact->getMobilePhone();
        $this->recipientName = $contact->getName();
        $this->recipientName2 = $contact->getName2();
        $this->recipientPhone = $contact->getPhone();
        $this->recipientPreAlert = $contact->getPreAlert();

        $address = $contact->getAddress();
        $this->recipientAdress1 = $address->getAddress1();
        $this->recipientAdress2 = $address->getAddress2();
        $this->recipientZipCode = $address->getZipCode();
        $this->recipientCity = $address->getCity();
        $this->recipientCountry = $address->getCountry();

        return $this;
    }
}