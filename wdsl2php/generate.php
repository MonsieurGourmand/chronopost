<?php

ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);

require "../vendor/autoload.php";

$map['Quickcost'] = 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl';
$map['PointRelais'] = 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl';
$map['Creneau'] = 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl';
$map['Shipping'] = 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl';
$map['Tracking'] = 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl';



$generator = new \Wsdl2PhpGenerator\Generator();
foreach($map as $name => $url)
{
	$generator->generate(
	    new \Wsdl2PhpGenerator\Config(array(
	        'inputFile' => $url,
	        'outputDir' => '../src/'.$name,
	        'namespaceName' => "Chonopost\\".$name
	    ))
	);
}
?>