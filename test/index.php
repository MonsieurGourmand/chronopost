<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once "../vendor/autoload.php";

    $client = new \Chronopost\Chronopost("19869502","255562");

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

    $result = $client->slot->search($search);

    dump($result);



?>