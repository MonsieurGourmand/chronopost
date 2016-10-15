<?php

namespace Chonopost\Shipping;

class shippingWithReservationAndESDWithRefClientPC
{

    /**
     * @var string $refEsdClient
     */
    protected $refEsdClient = null;

    /**
     * @var string $retrievalDateTime
     */
    protected $retrievalDateTime = null;

    /**
     * @var string $closingDateTime
     */
    protected $closingDateTime = null;

    /**
     * @var string $specificInstructions
     */
    protected $specificInstructions = null;

    /**
     * @var string $height
     */
    protected $height = null;

    /**
     * @var string $width
     */
    protected $width = null;

    /**
     * @var string $length
     */
    protected $length = null;

    /**
     * @var string $shipperCarriesCode
     */
    protected $shipperCarriesCode = null;

    /**
     * @var string $shipperBuildingFloor
     */
    protected $shipperBuildingFloor = null;

    /**
     * @var string $shipperServiceDirection
     */
    protected $shipperServiceDirection = null;

    /**
     * @var string $nombreDePassageMaximum
     */
    protected $nombreDePassageMaximum = null;

    /**
     * @var string $ltAImprimerParChronopost
     */
    protected $ltAImprimerParChronopost = null;

    /**
     * @var string $header_idEmit
     */
    protected $header_idEmit = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $subAccount
     */
    protected $subAccount = null;

    /**
     * @var string $header_identWebPro
     */
    protected $header_identWebPro = null;

    /**
     * @var string $shipperCivility
     */
    protected $shipperCivility = null;

    /**
     * @var string $shipperName
     */
    protected $shipperName = null;

    /**
     * @var string $shipperName2
     */
    protected $shipperName2 = null;

    /**
     * @var string $shipperAdress1
     */
    protected $shipperAdress1 = null;

    /**
     * @var string $shipperAdress2
     */
    protected $shipperAdress2 = null;

    /**
     * @var string $shipperZipCode
     */
    protected $shipperZipCode = null;

    /**
     * @var string $shipperCity
     */
    protected $shipperCity = null;

    /**
     * @var string $shipperCountry
     */
    protected $shipperCountry = null;

    /**
     * @var string $shipperCountryName
     */
    protected $shipperCountryName = null;

    /**
     * @var string $shipperContactName
     */
    protected $shipperContactName = null;

    /**
     * @var string $shipperEmail
     */
    protected $shipperEmail = null;

    /**
     * @var string $shipperPhone
     */
    protected $shipperPhone = null;

    /**
     * @var string $shipperMobilePhone
     */
    protected $shipperMobilePhone = null;

    /**
     * @var string $customerCivility
     */
    protected $customerCivility = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var string $customerName2
     */
    protected $customerName2 = null;

    /**
     * @var string $customerAdress1
     */
    protected $customerAdress1 = null;

    /**
     * @var string $customerAdress2
     */
    protected $customerAdress2 = null;

    /**
     * @var string $customerZipCode
     */
    protected $customerZipCode = null;

    /**
     * @var string $customerCity
     */
    protected $customerCity = null;

    /**
     * @var string $customerCountry
     */
    protected $customerCountry = null;

    /**
     * @var string $customerCountryName
     */
    protected $customerCountryName = null;

    /**
     * @var string $customerContactName
     */
    protected $customerContactName = null;

    /**
     * @var string $customerEmail
     */
    protected $customerEmail = null;

    /**
     * @var string $customerPhone
     */
    protected $customerPhone = null;

    /**
     * @var string $customerMobilePhone
     */
    protected $customerMobilePhone = null;

    /**
     * @var string $customerPreAlert
     */
    protected $customerPreAlert = null;

    /**
     * @var string $recipientCivility
     */
    protected $recipientCivility = null;

    /**
     * @var string $recipientName
     */
    protected $recipientName = null;

    /**
     * @var string $recipientName2
     */
    protected $recipientName2 = null;

    /**
     * @var string $recipientAdress1
     */
    protected $recipientAdress1 = null;

    /**
     * @var string $recipientAdress2
     */
    protected $recipientAdress2 = null;

    /**
     * @var string $recipientZipCode
     */
    protected $recipientZipCode = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    /**
     * @var string $recipientCountry
     */
    protected $recipientCountry = null;

    /**
     * @var string $recipientCountryName
     */
    protected $recipientCountryName = null;

    /**
     * @var string $recipientContactName
     */
    protected $recipientContactName = null;

    /**
     * @var string $recipientEmail
     */
    protected $recipientEmail = null;

    /**
     * @var string $recipientPhone
     */
    protected $recipientPhone = null;

    /**
     * @var string $recipientMobilePhone
     */
    protected $recipientMobilePhone = null;

    /**
     * @var string $recipientPreAlert
     */
    protected $recipientPreAlert = null;

    /**
     * @var string $shipperRef
     */
    protected $shipperRef = null;

    /**
     * @var string $recipientRef
     */
    protected $recipientRef = null;

    /**
     * @var string $customerSkybillNumber
     */
    protected $customerSkybillNumber = null;

    /**
     * @var string $evtCode
     */
    protected $evtCode = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $shipDate
     */
    protected $shipDate = null;

    /**
     * @var string $shipHour
     */
    protected $shipHour = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var string $insuredValue
     */
    protected $insuredValue = null;

    /**
     * @var string $insuredCurrency
     */
    protected $insuredCurrency = null;

    /**
     * @var string $codValue
     */
    protected $codValue = null;

    /**
     * @var string $codCurrency
     */
    protected $codCurrency = null;

    /**
     * @var string $customsValue
     */
    protected $customsValue = null;

    /**
     * @var string $customsCurrency
     */
    protected $customsCurrency = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $as
     */
    protected $as = null;

    /**
     * @var string $objectType
     */
    protected $objectType = null;

    /**
     * @var string $content1
     */
    protected $content1 = null;

    /**
     * @var string $content2
     */
    protected $content2 = null;

    /**
     * @var string $content3
     */
    protected $content3 = null;

    /**
     * @var string $content4
     */
    protected $content4 = null;

    /**
     * @var string $content5
     */
    protected $content5 = null;

    /**
     * @var string $portValue
     */
    protected $portValue = null;

    /**
     * @var string $portCurrency
     */
    protected $portCurrency = null;

    /**
     * @var string $skybillRank
     */
    protected $skybillRank = null;

    /**
     * @var string $bulkNumber
     */
    protected $bulkNumber = null;

    /**
     * @var string $mode
     */
    protected $mode = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $modeRetour
     */
    protected $modeRetour = null;

    /**
     * @var string $timeSlotStartDate
     */
    protected $timeSlotStartDate = null;

    /**
     * @var string $timeSlotEndDate
     */
    protected $timeSlotEndDate = null;

    /**
     * @var string $timeSlotTariffLevel
     */
    protected $timeSlotTariffLevel = null;

    /**
     * @var string $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var string $sellByDate
     */
    protected $sellByDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRefEsdClient()
    {
      return $this->refEsdClient;
    }

    /**
     * @param string $refEsdClient
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRefEsdClient($refEsdClient)
    {
      $this->refEsdClient = $refEsdClient;
      return $this;
    }

    /**
     * @return string
     */
    public function getRetrievalDateTime()
    {
      return $this->retrievalDateTime;
    }

    /**
     * @param string $retrievalDateTime
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRetrievalDateTime($retrievalDateTime)
    {
      $this->retrievalDateTime = $retrievalDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getClosingDateTime()
    {
      return $this->closingDateTime;
    }

    /**
     * @param string $closingDateTime
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setClosingDateTime($closingDateTime)
    {
      $this->closingDateTime = $closingDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecificInstructions()
    {
      return $this->specificInstructions;
    }

    /**
     * @param string $specificInstructions
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setSpecificInstructions($specificInstructions)
    {
      $this->specificInstructions = $specificInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param string $height
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param string $width
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param string $length
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCarriesCode()
    {
      return $this->shipperCarriesCode;
    }

    /**
     * @param string $shipperCarriesCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCarriesCode($shipperCarriesCode)
    {
      $this->shipperCarriesCode = $shipperCarriesCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperBuildingFloor()
    {
      return $this->shipperBuildingFloor;
    }

    /**
     * @param string $shipperBuildingFloor
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperBuildingFloor($shipperBuildingFloor)
    {
      $this->shipperBuildingFloor = $shipperBuildingFloor;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperServiceDirection()
    {
      return $this->shipperServiceDirection;
    }

    /**
     * @param string $shipperServiceDirection
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperServiceDirection($shipperServiceDirection)
    {
      $this->shipperServiceDirection = $shipperServiceDirection;
      return $this;
    }

    /**
     * @return string
     */
    public function getNombreDePassageMaximum()
    {
      return $this->nombreDePassageMaximum;
    }

    /**
     * @param string $nombreDePassageMaximum
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setNombreDePassageMaximum($nombreDePassageMaximum)
    {
      $this->nombreDePassageMaximum = $nombreDePassageMaximum;
      return $this;
    }

    /**
     * @return string
     */
    public function getLtAImprimerParChronopost()
    {
      return $this->ltAImprimerParChronopost;
    }

    /**
     * @param string $ltAImprimerParChronopost
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setLtAImprimerParChronopost($ltAImprimerParChronopost)
    {
      $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader_idEmit()
    {
      return $this->header_idEmit;
    }

    /**
     * @param string $header_idEmit
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setHeader_idEmit($header_idEmit)
    {
      $this->header_idEmit = $header_idEmit;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubAccount()
    {
      return $this->subAccount;
    }

    /**
     * @param string $subAccount
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setSubAccount($subAccount)
    {
      $this->subAccount = $subAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader_identWebPro()
    {
      return $this->header_identWebPro;
    }

    /**
     * @param string $header_identWebPro
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setHeader_identWebPro($header_identWebPro)
    {
      $this->header_identWebPro = $header_identWebPro;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCivility()
    {
      return $this->shipperCivility;
    }

    /**
     * @param string $shipperCivility
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCivility($shipperCivility)
    {
      $this->shipperCivility = $shipperCivility;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperName()
    {
      return $this->shipperName;
    }

    /**
     * @param string $shipperName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperName($shipperName)
    {
      $this->shipperName = $shipperName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperName2()
    {
      return $this->shipperName2;
    }

    /**
     * @param string $shipperName2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperName2($shipperName2)
    {
      $this->shipperName2 = $shipperName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAdress1()
    {
      return $this->shipperAdress1;
    }

    /**
     * @param string $shipperAdress1
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperAdress1($shipperAdress1)
    {
      $this->shipperAdress1 = $shipperAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAdress2()
    {
      return $this->shipperAdress2;
    }

    /**
     * @param string $shipperAdress2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperAdress2($shipperAdress2)
    {
      $this->shipperAdress2 = $shipperAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperZipCode()
    {
      return $this->shipperZipCode;
    }

    /**
     * @param string $shipperZipCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperZipCode($shipperZipCode)
    {
      $this->shipperZipCode = $shipperZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCity()
    {
      return $this->shipperCity;
    }

    /**
     * @param string $shipperCity
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCity($shipperCity)
    {
      $this->shipperCity = $shipperCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountry()
    {
      return $this->shipperCountry;
    }

    /**
     * @param string $shipperCountry
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCountry($shipperCountry)
    {
      $this->shipperCountry = $shipperCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountryName()
    {
      return $this->shipperCountryName;
    }

    /**
     * @param string $shipperCountryName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCountryName($shipperCountryName)
    {
      $this->shipperCountryName = $shipperCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperContactName()
    {
      return $this->shipperContactName;
    }

    /**
     * @param string $shipperContactName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperContactName($shipperContactName)
    {
      $this->shipperContactName = $shipperContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperEmail()
    {
      return $this->shipperEmail;
    }

    /**
     * @param string $shipperEmail
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperEmail($shipperEmail)
    {
      $this->shipperEmail = $shipperEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhone()
    {
      return $this->shipperPhone;
    }

    /**
     * @param string $shipperPhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperPhone($shipperPhone)
    {
      $this->shipperPhone = $shipperPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperMobilePhone()
    {
      return $this->shipperMobilePhone;
    }

    /**
     * @param string $shipperMobilePhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperMobilePhone($shipperMobilePhone)
    {
      $this->shipperMobilePhone = $shipperMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCivility()
    {
      return $this->customerCivility;
    }

    /**
     * @param string $customerCivility
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCivility($customerCivility)
    {
      $this->customerCivility = $customerCivility;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerName($customerName)
    {
      $this->customerName = $customerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName2()
    {
      return $this->customerName2;
    }

    /**
     * @param string $customerName2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerName2($customerName2)
    {
      $this->customerName2 = $customerName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAdress1()
    {
      return $this->customerAdress1;
    }

    /**
     * @param string $customerAdress1
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerAdress1($customerAdress1)
    {
      $this->customerAdress1 = $customerAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAdress2()
    {
      return $this->customerAdress2;
    }

    /**
     * @param string $customerAdress2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerAdress2($customerAdress2)
    {
      $this->customerAdress2 = $customerAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerZipCode()
    {
      return $this->customerZipCode;
    }

    /**
     * @param string $customerZipCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerZipCode($customerZipCode)
    {
      $this->customerZipCode = $customerZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCity()
    {
      return $this->customerCity;
    }

    /**
     * @param string $customerCity
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCity($customerCity)
    {
      $this->customerCity = $customerCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountry()
    {
      return $this->customerCountry;
    }

    /**
     * @param string $customerCountry
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCountry($customerCountry)
    {
      $this->customerCountry = $customerCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountryName()
    {
      return $this->customerCountryName;
    }

    /**
     * @param string $customerCountryName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCountryName($customerCountryName)
    {
      $this->customerCountryName = $customerCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerContactName()
    {
      return $this->customerContactName;
    }

    /**
     * @param string $customerContactName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerContactName($customerContactName)
    {
      $this->customerContactName = $customerContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
      return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerEmail($customerEmail)
    {
      $this->customerEmail = $customerEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone()
    {
      return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerPhone($customerPhone)
    {
      $this->customerPhone = $customerPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerMobilePhone()
    {
      return $this->customerMobilePhone;
    }

    /**
     * @param string $customerMobilePhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerMobilePhone($customerMobilePhone)
    {
      $this->customerMobilePhone = $customerMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPreAlert()
    {
      return $this->customerPreAlert;
    }

    /**
     * @param string $customerPreAlert
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerPreAlert($customerPreAlert)
    {
      $this->customerPreAlert = $customerPreAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCivility()
    {
      return $this->recipientCivility;
    }

    /**
     * @param string $recipientCivility
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCivility($recipientCivility)
    {
      $this->recipientCivility = $recipientCivility;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
      return $this->recipientName;
    }

    /**
     * @param string $recipientName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientName($recipientName)
    {
      $this->recipientName = $recipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName2()
    {
      return $this->recipientName2;
    }

    /**
     * @param string $recipientName2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientName2($recipientName2)
    {
      $this->recipientName2 = $recipientName2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAdress1()
    {
      return $this->recipientAdress1;
    }

    /**
     * @param string $recipientAdress1
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientAdress1($recipientAdress1)
    {
      $this->recipientAdress1 = $recipientAdress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAdress2()
    {
      return $this->recipientAdress2;
    }

    /**
     * @param string $recipientAdress2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientAdress2($recipientAdress2)
    {
      $this->recipientAdress2 = $recipientAdress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientZipCode()
    {
      return $this->recipientZipCode;
    }

    /**
     * @param string $recipientZipCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientZipCode($recipientZipCode)
    {
      $this->recipientZipCode = $recipientZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCity()
    {
      return $this->recipientCity;
    }

    /**
     * @param string $recipientCity
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCity($recipientCity)
    {
      $this->recipientCity = $recipientCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCountry()
    {
      return $this->recipientCountry;
    }

    /**
     * @param string $recipientCountry
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCountry($recipientCountry)
    {
      $this->recipientCountry = $recipientCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCountryName()
    {
      return $this->recipientCountryName;
    }

    /**
     * @param string $recipientCountryName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCountryName($recipientCountryName)
    {
      $this->recipientCountryName = $recipientCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientContactName()
    {
      return $this->recipientContactName;
    }

    /**
     * @param string $recipientContactName
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientContactName($recipientContactName)
    {
      $this->recipientContactName = $recipientContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmail()
    {
      return $this->recipientEmail;
    }

    /**
     * @param string $recipientEmail
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientEmail($recipientEmail)
    {
      $this->recipientEmail = $recipientEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPhone()
    {
      return $this->recipientPhone;
    }

    /**
     * @param string $recipientPhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientPhone($recipientPhone)
    {
      $this->recipientPhone = $recipientPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientMobilePhone()
    {
      return $this->recipientMobilePhone;
    }

    /**
     * @param string $recipientMobilePhone
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientMobilePhone($recipientMobilePhone)
    {
      $this->recipientMobilePhone = $recipientMobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPreAlert()
    {
      return $this->recipientPreAlert;
    }

    /**
     * @param string $recipientPreAlert
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientPreAlert($recipientPreAlert)
    {
      $this->recipientPreAlert = $recipientPreAlert;
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
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperRef($shipperRef)
    {
      $this->shipperRef = $shipperRef;
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
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientRef($recipientRef)
    {
      $this->recipientRef = $recipientRef;
      return $this;
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
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerSkybillNumber($customerSkybillNumber)
    {
      $this->customerSkybillNumber = $customerSkybillNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEvtCode()
    {
      return $this->evtCode;
    }

    /**
     * @param string $evtCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setEvtCode($evtCode)
    {
      $this->evtCode = $evtCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipDate()
    {
      return $this->shipDate;
    }

    /**
     * @param string $shipDate
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipDate($shipDate)
    {
      $this->shipDate = $shipDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipHour()
    {
      return $this->shipHour;
    }

    /**
     * @param string $shipHour
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setShipHour($shipHour)
    {
      $this->shipHour = $shipHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param string $weight
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
      return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsuredValue()
    {
      return $this->insuredValue;
    }

    /**
     * @param string $insuredValue
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setInsuredValue($insuredValue)
    {
      $this->insuredValue = $insuredValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsuredCurrency()
    {
      return $this->insuredCurrency;
    }

    /**
     * @param string $insuredCurrency
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setInsuredCurrency($insuredCurrency)
    {
      $this->insuredCurrency = $insuredCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodValue()
    {
      return $this->codValue;
    }

    /**
     * @param string $codValue
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCodValue($codValue)
    {
      $this->codValue = $codValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodCurrency()
    {
      return $this->codCurrency;
    }

    /**
     * @param string $codCurrency
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCodCurrency($codCurrency)
    {
      $this->codCurrency = $codCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsValue()
    {
      return $this->customsValue;
    }

    /**
     * @param string $customsValue
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomsValue($customsValue)
    {
      $this->customsValue = $customsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency()
    {
      return $this->customsCurrency;
    }

    /**
     * @param string $customsCurrency
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomsCurrency($customsCurrency)
    {
      $this->customsCurrency = $customsCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getAs()
    {
      return $this->as;
    }

    /**
     * @param string $as
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setAs($as)
    {
      $this->as = $as;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
      return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setObjectType($objectType)
    {
      $this->objectType = $objectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent1()
    {
      return $this->content1;
    }

    /**
     * @param string $content1
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setContent1($content1)
    {
      $this->content1 = $content1;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent2()
    {
      return $this->content2;
    }

    /**
     * @param string $content2
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setContent2($content2)
    {
      $this->content2 = $content2;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent3()
    {
      return $this->content3;
    }

    /**
     * @param string $content3
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setContent3($content3)
    {
      $this->content3 = $content3;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent4()
    {
      return $this->content4;
    }

    /**
     * @param string $content4
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setContent4($content4)
    {
      $this->content4 = $content4;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent5()
    {
      return $this->content5;
    }

    /**
     * @param string $content5
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setContent5($content5)
    {
      $this->content5 = $content5;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortValue()
    {
      return $this->portValue;
    }

    /**
     * @param string $portValue
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setPortValue($portValue)
    {
      $this->portValue = $portValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortCurrency()
    {
      return $this->portCurrency;
    }

    /**
     * @param string $portCurrency
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setPortCurrency($portCurrency)
    {
      $this->portCurrency = $portCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillRank()
    {
      return $this->skybillRank;
    }

    /**
     * @param string $skybillRank
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setSkybillRank($skybillRank)
    {
      $this->skybillRank = $skybillRank;
      return $this;
    }

    /**
     * @return string
     */
    public function getBulkNumber()
    {
      return $this->bulkNumber;
    }

    /**
     * @param string $bulkNumber
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setBulkNumber($bulkNumber)
    {
      $this->bulkNumber = $bulkNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getModeRetour()
    {
      return $this->modeRetour;
    }

    /**
     * @param string $modeRetour
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setModeRetour($modeRetour)
    {
      $this->modeRetour = $modeRetour;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeSlotStartDate()
    {
      return $this->timeSlotStartDate;
    }

    /**
     * @param string $timeSlotStartDate
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotStartDate($timeSlotStartDate)
    {
      $this->timeSlotStartDate = $timeSlotStartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeSlotEndDate()
    {
      return $this->timeSlotEndDate;
    }

    /**
     * @param string $timeSlotEndDate
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotEndDate($timeSlotEndDate)
    {
      $this->timeSlotEndDate = $timeSlotEndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeSlotTariffLevel()
    {
      return $this->timeSlotTariffLevel;
    }

    /**
     * @param string $timeSlotTariffLevel
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotTariffLevel($timeSlotTariffLevel)
    {
      $this->timeSlotTariffLevel = $timeSlotTariffLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellByDate()
    {
      return $this->sellByDate;
    }

    /**
     * @param string $sellByDate
     * @return \Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC
     */
    public function setSellByDate($sellByDate)
    {
      $this->sellByDate = $sellByDate;
      return $this;
    }

}
