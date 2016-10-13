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
$chronopostServiceShipping = new ChronopostServiceShipping($wsdl);
var_dump($chronopostServiceShipping);exit;
// sample call for ChronopostServiceShipping::shipping()
if($chronopostServiceShipping->shipping(new ChronopostStructShipping(/*** update parameters list ***/)))
	print_r($chronopostServiceShipping->getResult());
else
	print_r($chronopostServiceShipping->getLastError());

?>