<?php
/**
 * File for the class which returns the class map definition
 * @package Chronopost
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * Class which returns the class map definition by the static method ChronopostClassMap::classMap()
 * @package Chronopost
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'customerValue' => 'ChronopostStructCustomerValue',
  'esdValue' => 'ChronopostStructEsdValue',
  'esdWithRefClientValue' => 'ChronopostStructEsdWithRefClientValue',
  'faisabiliteESD' => 'ChronopostStructFaisabiliteESD',
  'faisabiliteESDResponse' => 'ChronopostStructFaisabiliteESDResponse',
  'getReservedSkybill' => 'ChronopostStructGetReservedSkybill',
  'getReservedSkybillResponse' => 'ChronopostStructGetReservedSkybillResponse',
  'getReservedSkybillWithType' => 'ChronopostStructGetReservedSkybillWithType',
  'getReservedSkybillWithTypeResponse' => 'ChronopostStructGetReservedSkybillWithTypeResponse',
  'headerValue' => 'ChronopostStructHeaderValue',
  'recipientValue' => 'ChronopostStructRecipientValue',
  'refValue' => 'ChronopostStructRefValue',
  'resultExpeditionValue' => 'ChronopostStructResultExpeditionValue',
  'resultFaisabiliteESD' => 'ChronopostStructResultFaisabiliteESD',
  'resultGetReservedSkybillValue' => 'ChronopostStructResultGetReservedSkybillValue',
  'resultGetReservedSkybillWithTypeValue' => 'ChronopostStructResultGetReservedSkybillWithTypeValue',
  'resultParcelValue' => 'ChronopostStructResultParcelValue',
  'resultReservationExpeditionValue' => 'ChronopostStructResultReservationExpeditionValue',
  'resultReservationMultiParcelExpeditionValue' => 'ChronopostStructResultReservationMultiParcelExpeditionValue',
  'shipperValue' => 'ChronopostStructShipperValue',
  'shipping' => 'ChronopostStructShipping',
  'shippingMultiParcelWithReservation' => 'ChronopostStructShippingMultiParcelWithReservation',
  'shippingMultiParcelWithReservationResponse' => 'ChronopostStructShippingMultiParcelWithReservationResponse',
  'shippingResponse' => 'ChronopostStructShippingResponse',
  'shippingWithESDOnly' => 'ChronopostStructShippingWithESDOnly',
  'shippingWithESDOnlyResponse' => 'ChronopostStructShippingWithESDOnlyResponse',
  'shippingWithReservation' => 'ChronopostStructShippingWithReservation',
  'shippingWithReservationAndESDWithRefClient' => 'ChronopostStructShippingWithReservationAndESDWithRefClient',
  'shippingWithReservationAndESDWithRefClientPC' => 'ChronopostStructShippingWithReservationAndESDWithRefClientPC',
  'shippingWithReservationAndESDWithRefClientPCResponse' => 'ChronopostStructShippingWithReservationAndESDWithRefClientPCResponse',
  'shippingWithReservationAndESDWithRefClientResponse' => 'ChronopostStructShippingWithReservationAndESDWithRefClientResponse',
  'shippingWithReservationResponse' => 'ChronopostStructShippingWithReservationResponse',
  'skybillParamsValue' => 'ChronopostStructSkybillParamsValue',
  'skybillValue' => 'ChronopostStructSkybillValue',
  'skybillWithDimensionsValue' => 'ChronopostStructSkybillWithDimensionsValue',
);
	}
}
?>