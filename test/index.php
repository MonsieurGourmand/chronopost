<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once "../vendor/autoload.php";

    $client = new \Chronopost\Chronopost("19869502","255562");


    $skybill = new \Chronopost\Request\Tracking\Skybill();
    $skybill->setSkybillNumber("XT206060674FR");
    $result = $client->tracking->track($skybill);
    dump($result);


    $search = new \Chronopost\Request\Tracking\Search();
    $search
        ->setDateDeposit("01/10/2020")
        ->setDateEndDeposit("31/10/2020")
        ->setParcelState("ANY")
        ->setAccountNumber("19869502")
        ->setPassword("255562");
    $result = $client->tracking->search($search);
    dump($result);


    exit;

    $shipperAddress = new \Chronopost\Request\Address();
    $shipperAddress->setAddress1('254 rue Francis de Pressensé');
    $shipperAddress->setZipcode('69100');
    $shipperAddress->setCity('Villeurbanne');
    $shipperAddress->setCountry('FR');

    $recipientAddress = new \Chronopost\Request\Address();
    $recipientAddress->setAddress1('12 rue Rabelais');
    $recipientAddress->setZipcode('69003');
    $recipientAddress->setCity('Lyon');
    $recipientAddress->setCountry('FR');

    $search = new \Chronopost\Request\Slot\Search();
    $search->setProductType(\Chronopost\Request\Slot\Search::PRODUCTTYPE_FRESH);
    $search->setShipperAddress($shipperAddress);
    $search->setRecipientAddress($recipientAddress);

    $search->setDateBegin(new \DateTime("tomorrow"));
    $search->setDateEnd(new \DateTime("tomorrow +1 day"));

    $slots = $client->slot->search($search);

    dump($slots);

    $confirm = new \Chronopost\Request\Slot\Confirm();
    $confirm->setTransactionID($slots->transactionID);
    $confirm->setMeshCode($slots->meshCode);
    $confirm->setCodeSlot($slots->slotList[0]->deliverySlotCode);
    $confirm->setProductType(\Chronopost\Request\Slot\Confirm::PRODUCTTYPE_FRESH);
    $confirm->setDateSelected(new \DateTime("tomorrow +1 day"));

    $result = $client->slot->confirm($confirm);

    dump($result);

    $shipping = new Chronopost\Request\Shipping\MultiParcelWithReservation();

    $header = new \Chronopost\Request\Shipping\Header();
    $header->setAccountNumber("19869502");
    $shipping->setHeaderValue($header);

    $recipientContact = new \Chronopost\Request\Contact();
    $recipientContact->setAddress($recipientAddress);
    $recipientContact->setCivility("M");
    $recipientContact->setName("Darricau");
    $recipientContact->setContactName("Darricau");
    $recipient = new \Chronopost\Request\Shipping\Recipient();
    $recipient->setContact($recipientContact);
    $shipping->setRecipientValue($recipient);

    $customerContact = new \Chronopost\Request\Contact();
    $customerContact->setAddress($recipientAddress);
    $customerContact->setCivility("M");
    $customerContact->setName("Darricau");
    $customerContact->setContactName("Darricau");
    $customer = new \Chronopost\Request\Shipping\Customer();
    $customer->setContact($customerContact);
    $shipping->setCustomerValue($customer);

    $shipperContact = new \Chronopost\Request\Contact();
    $shipperContact->setAddress($shipperAddress);
    $shipperContact->setCivility("M");
    $shipperContact->setName("Darricau");
    $shipperContact->setContactName("Darricau");
    $shipper = new \Chronopost\Request\Shipping\Shipper();
    $shipper->setContact($shipperContact);
    $shipping->setShipperValue($shipper);

    $reference = new \Chronopost\Request\Shipping\Reference();
    $reference->setShipperRef("ABSCD");
    $reference->setRecipientRef("ABSCD");
    $shipping->setRefValue($reference);

    $skybillParams = new \Chronopost\Request\Shipping\SkybillParams();
    $shipping->setSkybillParamsValue($skybillParams);

    $skybill = new \Chronopost\Request\Shipping\Skybill();
    $skybill->setProductCode($result->productService->productCode);
    $skybill->setService($result->productService->serviceCode);
    $skybill->setShipDate(new \DateTime("tomorrow"));
    $skybill->setShipHour(15);
    $skybill->setSkybillMasterNumber("GERGGERBT");
    $skybill->setSkybillRank(1);
    $skybill->setBulkNumber(1);
    $skybill->setWeight(2);
    $shipping->setSkybillValue($skybill);

    $startSlot = new \DateTime($slots->slotList[0]->deliveryDate);
    $startSlot->setTime($slots->slotList[0]->startHour,0);
    $endSlot = new \DateTime($slots->slotList[0]->deliveryDate);
    $endSlot->setTime($slots->slotList[0]->endHour,0);

    $appointment = new \Chronopost\Request\Shipping\Appointment();
    $appointment->setTimeSlotStartDate($startSlot);
    $appointment->setTimeSlotEndDate($endSlot);
    $appointment->setTimeSlotTariffLevel($slots->slotList[0]->tariffLevel);

    $scheduled = new \Chronopost\Request\Shipping\Scheduled();
    $scheduled->setExpirationDate(new \DateTime("tomorrow +10 days"));
    $scheduled->setSellByDate(new \DateTime("tomorrow +10 days"));
    $scheduled->setAppointmentValue($appointment);
    $shipping->setScheduledValue($scheduled);

    $shipping->setNumberOfParcel(1);
    $shipping->setPassword("255562");
    $shipping->setModeRetour(1);

    $result = $client->shipping->multiParcelWithReservation($shipping);

    dump($result);

    //$getSkybill = new \Chronopost\Request\Shipping\GetReservedSkybillWithTypeAndMode();
    //$getSkybill->setReservationNumber($result->reservationNumber);

    //$result = $client->shipping->getReservedSkybillWithTypeAndMode($getSkybill);
    //dump($result);

    dump($result->resultParcelValue->skybillNumber);
    $skybill = new \Chronopost\Request\Tracking\Skybill();
    $skybill->setSkybillNumber($result->resultParcelValue->skybillNumber);
    $result = $client->tracking->cancel($skybill);
    dump($result);
?>