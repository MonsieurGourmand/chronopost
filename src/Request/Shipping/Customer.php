<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 10:01 AM
 */

namespace Chronopost\Request\Shipping;


use Chronopost\Request\Contact;

class Customer
{

    /**
     * @var Contact
     */
    protected $contact;
    protected $customerCivility = null;
    protected $customerContactName = null;
    protected $customerEmail = null;
    protected $customerMobilePhone = null;
    protected $customerName = null;
    protected $customerName2 = null;
    protected $customerPhone = null;
    protected $customerPreAlert = null;
    protected $customerAdress1 = null;
    protected $customerAdress2 = null;
    protected $customerCity = null;
    protected $customerZipCode = null;
    protected $customerCountry = null;

    /**
     * @var string $printAsSender
     */
    protected $printAsSender = "Y";


    /**
     * @param Contact $contact
     * @return Customer
     */
    public function setContact($contact)
    {
        $this->customerCivility = $contact->getCivility();
        $this->customerContactName = $contact->getContactName();
        $this->customerEmail = $contact->getEmail();
        $this->customerMobilePhone = $contact->getMobilePhone();
        $this->customerName = $contact->getName();
        $this->customerName2 = $contact->getName2();
        $this->customerPhone = $contact->getPhone();
        $this->customerPreAlert = $contact->getPreAlert();

        $address = $contact->getAddress();
        $this->customerAdress1 = $address->getAddress1();
        $this->customerAdress2 = $address->getAddress2();
        $this->customerZipCode = $address->getZipCode();
        $this->customerCity = $address->getCity();
        $this->customerCountry = $address->getCountry();

        return $this;
    }

    /**
     * @param string $printAsSender
     * @return Customer
     */
    public function setPrintAsSender($printAsSender)
    {
        $this->printAsSender = $printAsSender;
        return $this;
    }
}