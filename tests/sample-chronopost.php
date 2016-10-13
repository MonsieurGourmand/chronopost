<?php
/**
 * Test with Chronopost
 * @package Chronopost
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/../src/ChronopostAutoload.php';
/**
 * Chronopost Informations
 */
define('CHRONOPOST_WSDL_URL','https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl');
define('CHRONOPOST_USER_LOGIN','');
define('CHRONOPOST_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[ChronopostWsdlClass::WSDL_URL] = CHRONOPOST_WSDL_URL;
$wsdl[ChronopostWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[ChronopostWsdlClass::WSDL_TRACE] = true;
if(CHRONOPOST_USER_LOGIN !== '')
	$wsdl[ChronopostWsdlClass::WSDL_LOGIN] = CHRONOPOST_USER_LOGIN;
if(CHRONOPOST_USER_PASSWORD !== '')
	$wsdl[ChronopostWsdlClass::WSDL_PASSWD] = CHRONOPOST_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/******************************************
 * Example for ChronopostServiceFaisabilite
 */
$chronopostServiceFaisabilite = new ChronopostServiceFaisabilite($wsdl);
// sample call for ChronopostServiceFaisabilite::faisabiliteESD()
if($chronopostServiceFaisabilite->faisabiliteESD(new ChronopostStructFaisabiliteESD(/*** update parameters list ***/)))
	print_r($chronopostServiceFaisabilite->getResult());
else
	print_r($chronopostServiceFaisabilite->getLastError());

/**********************************
 * Example for ChronopostServiceGet
 */
$chronopostServiceGet = new ChronopostServiceGet($wsdl);
// sample call for ChronopostServiceGet::getReservedSkybillWithType()
if($chronopostServiceGet->getReservedSkybillWithType(new ChronopostStructGetReservedSkybillWithType(/*** update parameters list ***/)))
	print_r($chronopostServiceGet->getResult());
else
	print_r($chronopostServiceGet->getLastError());
// sample call for ChronopostServiceGet::getReservedSkybill()
if($chronopostServiceGet->getReservedSkybill(new ChronopostStructGetReservedSkybill(/*** update parameters list ***/)))
	print_r($chronopostServiceGet->getResult());
else
	print_r($chronopostServiceGet->getLastError());

/***************************************
 * Example for ChronopostServiceShipping
 */
$chronopostServiceShipping = new ChronopostServiceShipping($wsdl);
// sample call for ChronopostServiceShipping::shipping()
if($chronopostServiceShipping->shipping(new ChronopostStructShipping(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
// sample call for ChronopostServiceShipping::shippingMultiParcelWithReservation()
if($chronopostServiceShipping->shippingMultiParcelWithReservation(new ChronopostStructShippingMultiParcelWithReservation(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
// sample call for ChronopostServiceShipping::shippingWithReservation()
if($chronopostServiceShipping->shippingWithReservation(new ChronopostStructShippingWithReservation(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
// sample call for ChronopostServiceShipping::shippingWithReservationAndESDWithRefClient()
if($chronopostServiceShipping->shippingWithReservationAndESDWithRefClient(new ChronopostStructShippingWithReservationAndESDWithRefClient(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
// sample call for ChronopostServiceShipping::shippingWithReservationAndESDWithRefClientPC()
if($chronopostServiceShipping->shippingWithReservationAndESDWithRefClientPC(new ChronopostStructShippingWithReservationAndESDWithRefClientPC(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
// sample call for ChronopostServiceShipping::shippingWithESDOnly()
if($chronopostServiceShipping->shippingWithESDOnly(new ChronopostStructShippingWithESDOnly(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());
?>