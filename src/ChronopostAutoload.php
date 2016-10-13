<?php
/**
 * File to load generated classes once at once time
 * @package Chronopost
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * Includes for all generated classes files
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
require_once dirname(__FILE__) . '/ChronopostWsdlClass.php';
require_once dirname(__FILE__) . '/Esd/Value/ChronopostStructEsdValue.php';
require_once dirname(__FILE__) . '/Skybill/Value/ChronopostStructSkybillValue.php';
require_once dirname(__FILE__) . '/Get/Response/ChronopostStructGetReservedSkybillResponse.php';
require_once dirname(__FILE__) . '/Shipping/Reservation/ChronopostStructShippingMultiParcelWithReservation.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingMultiParcelWithReservationResponse.php';
require_once dirname(__FILE__) . '/Get/Skybill/ChronopostStructGetReservedSkybill.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingResponse.php';
require_once dirname(__FILE__) . '/Get/Response/ChronopostStructGetReservedSkybillWithTypeResponse.php';
require_once dirname(__FILE__) . '/Shipping/ChronopostStructShipping.php';
require_once dirname(__FILE__) . '/Shipping/Reservation/ChronopostStructShippingWithReservation.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingWithReservationResponse.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingWithReservationAndESDWithRefClientPCResponse.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingWithESDOnlyResponse.php';
require_once dirname(__FILE__) . '/Shipping/PC/ChronopostStructShippingWithReservationAndESDWithRefClientPC.php';
require_once dirname(__FILE__) . '/Shipping/Response/ChronopostStructShippingWithReservationAndESDWithRefClientResponse.php';
require_once dirname(__FILE__) . '/Get/Type/ChronopostStructGetReservedSkybillWithType.php';
require_once dirname(__FILE__) . '/Shipping/Client/ChronopostStructShippingWithReservationAndESDWithRefClient.php';
require_once dirname(__FILE__) . '/Shipping/Only/ChronopostStructShippingWithESDOnly.php';
require_once dirname(__FILE__) . '/Faisabilite/ESD/ChronopostStructFaisabiliteESD.php';
require_once dirname(__FILE__) . '/Recipient/Value/ChronopostStructRecipientValue.php';
require_once dirname(__FILE__) . '/Ref/Value/ChronopostStructRefValue.php';
require_once dirname(__FILE__) . '/Skybill/Value/ChronopostStructSkybillParamsValue.php';
require_once dirname(__FILE__) . '/Customer/Value/ChronopostStructCustomerValue.php';
require_once dirname(__FILE__) . '/Header/Value/ChronopostStructHeaderValue.php';
require_once dirname(__FILE__) . '/Result/ESD/ChronopostStructResultFaisabiliteESD.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultGetReservedSkybillWithTypeValue.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultExpeditionValue.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultGetReservedSkybillValue.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultReservationExpeditionValue.php';
require_once dirname(__FILE__) . '/Shipper/Value/ChronopostStructShipperValue.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultParcelValue.php';
require_once dirname(__FILE__) . '/Result/Value/ChronopostStructResultReservationMultiParcelExpeditionValue.php';
require_once dirname(__FILE__) . '/Esd/Value/ChronopostStructEsdWithRefClientValue.php';
require_once dirname(__FILE__) . '/Skybill/Value/ChronopostStructSkybillWithDimensionsValue.php';
require_once dirname(__FILE__) . '/Faisabilite/Response/ChronopostStructFaisabiliteESDResponse.php';
require_once dirname(__FILE__) . '/Faisabilite/ChronopostServiceFaisabilite.php';
require_once dirname(__FILE__) . '/Get/ChronopostServiceGet.php';
require_once dirname(__FILE__) . '/Shipping/ChronopostServiceShipping.php';
require_once dirname(__FILE__) . '/ChronopostClassMap.php';
?>