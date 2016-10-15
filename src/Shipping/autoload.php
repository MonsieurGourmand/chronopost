<?php


 function autoload_d46707f1d9e8a1ed5d7495082a8d2e52($class)
{
    $classes = array(
        'Chronopost\Shipping\ShippingServiceWSService' => __DIR__ .'/ShippingServiceWSService.php',
        'Chronopost\Shipping\shipperValue' => __DIR__ .'/shipperValue.php',
        'Chronopost\Shipping\resultFaisabiliteESD' => __DIR__ .'/resultFaisabiliteESD.php',
        'Chronopost\Shipping\esdValue' => __DIR__ .'/esdValue.php',
        'Chronopost\Shipping\headerValue' => __DIR__ .'/headerValue.php',
        'Chronopost\Shipping\customerValue' => __DIR__ .'/customerValue.php',
        'Chronopost\Shipping\recipientValue' => __DIR__ .'/recipientValue.php',
        'Chronopost\Shipping\refValue' => __DIR__ .'/refValue.php',
        'Chronopost\Shipping\skybillValue' => __DIR__ .'/skybillValue.php',
        'Chronopost\Shipping\skybillParamsValue' => __DIR__ .'/skybillParamsValue.php',
        'Chronopost\Shipping\resultExpeditionValue' => __DIR__ .'/resultExpeditionValue.php',
        'Chronopost\Shipping\resultGetReservedSkybillWithTypeValue' => __DIR__ .'/resultGetReservedSkybillWithTypeValue.php',
        'Chronopost\Shipping\scheduledValue' => __DIR__ .'/scheduledValue.php',
        'Chronopost\Shipping\appointmentValue' => __DIR__ .'/appointmentValue.php',
        'Chronopost\Shipping\esdWithRefClientValue' => __DIR__ .'/esdWithRefClientValue.php',
        'Chronopost\Shipping\skybillValueV2' => __DIR__ .'/skybillValueV2.php',
        'Chronopost\Shipping\resultReservationExpeditionValue' => __DIR__ .'/resultReservationExpeditionValue.php',
        'Chronopost\Shipping\resultReservationExpeditionValueV2' => __DIR__ .'/resultReservationExpeditionValueV2.php',
        'Chronopost\Shipping\resultGetReservedSkybillValue' => __DIR__ .'/resultGetReservedSkybillValue.php',
        'Chronopost\Shipping\skybillWithDimensionsValue' => __DIR__ .'/skybillWithDimensionsValue.php',
        'Chronopost\Shipping\resultReservationMultiParcelExpeditionValue' => __DIR__ .'/resultReservationMultiParcelExpeditionValue.php',
        'Chronopost\Shipping\resultParcelValue' => __DIR__ .'/resultParcelValue.php',
        'Chronopost\Shipping\esdValue3' => __DIR__ .'/esdValue3.php',
        'Chronopost\Shipping\skybillWithDimensionsValueV2' => __DIR__ .'/skybillWithDimensionsValueV2.php',
        'Chronopost\Shipping\resultReservationMultiParcelExpeditionValueV2' => __DIR__ .'/resultReservationMultiParcelExpeditionValueV2.php',
        'Chronopost\Shipping\esdResultContraintesAgenceValue' => __DIR__ .'/esdResultContraintesAgenceValue.php',
        'Chronopost\Shipping\esdContraintesAgence' => __DIR__ .'/esdContraintesAgence.php',
        'Chronopost\Shipping\skybillValueBase' => __DIR__ .'/skybillValueBase.php',
        'Chronopost\Shipping\resultShippingInfo' => __DIR__ .'/resultShippingInfo.php',
        'Chronopost\Shipping\error' => __DIR__ .'/error.php',
        'Chronopost\Shipping\detail' => __DIR__ .'/detail.php',
        'Chronopost\Shipping\shippingInfo' => __DIR__ .'/shippingInfo.php',
        'Chronopost\Shipping\faisabiliteESD' => __DIR__ .'/faisabiliteESD.php',
        'Chronopost\Shipping\faisabiliteESDResponse' => __DIR__ .'/faisabiliteESDResponse.php',
        'Chronopost\Shipping\shippingV2' => __DIR__ .'/shippingV2.php',
        'Chronopost\Shipping\shippingV2Response' => __DIR__ .'/shippingV2Response.php',
        'Chronopost\Shipping\getReservedSkybillWithType' => __DIR__ .'/getReservedSkybillWithType.php',
        'Chronopost\Shipping\getReservedSkybillWithTypeResponse' => __DIR__ .'/getReservedSkybillWithTypeResponse.php',
        'Chronopost\Shipping\shippingV3' => __DIR__ .'/shippingV3.php',
        'Chronopost\Shipping\shippingV3Response' => __DIR__ .'/shippingV3Response.php',
        'Chronopost\Shipping\shippingWithReservationV2' => __DIR__ .'/shippingWithReservationV2.php',
        'Chronopost\Shipping\shippingWithReservationV2Response' => __DIR__ .'/shippingWithReservationV2Response.php',
        'Chronopost\Shipping\shipping' => __DIR__ .'/shipping.php',
        'Chronopost\Shipping\shippingResponse' => __DIR__ .'/shippingResponse.php',
        'Chronopost\Shipping\getReservedSkybill' => __DIR__ .'/getReservedSkybill.php',
        'Chronopost\Shipping\getReservedSkybillResponse' => __DIR__ .'/getReservedSkybillResponse.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservation' => __DIR__ .'/shippingMultiParcelWithReservation.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservationResponse' => __DIR__ .'/shippingMultiParcelWithReservationResponse.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservationV3' => __DIR__ .'/shippingMultiParcelWithReservationV3.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservationV3Response' => __DIR__ .'/shippingMultiParcelWithReservationV3Response.php',
        'Chronopost\Shipping\shippingWithReservation' => __DIR__ .'/shippingWithReservation.php',
        'Chronopost\Shipping\shippingWithReservationResponse' => __DIR__ .'/shippingWithReservationResponse.php',
        'Chronopost\Shipping\rechercherContraintesEnlevement' => __DIR__ .'/rechercherContraintesEnlevement.php',
        'Chronopost\Shipping\rechercherContraintesEnlevementResponse' => __DIR__ .'/rechercherContraintesEnlevementResponse.php',
        'Chronopost\Shipping\shippingV4' => __DIR__ .'/shippingV4.php',
        'Chronopost\Shipping\shippingV4Response' => __DIR__ .'/shippingV4Response.php',
        'Chronopost\Shipping\getReservedSkybillWithTypeAndMode' => __DIR__ .'/getReservedSkybillWithTypeAndMode.php',
        'Chronopost\Shipping\getReservedSkybillWithTypeAndModeResponse' => __DIR__ .'/getReservedSkybillWithTypeAndModeResponse.php',
        'Chronopost\Shipping\shippingWithReservationAndESDWithRefClient' => __DIR__ .'/shippingWithReservationAndESDWithRefClient.php',
        'Chronopost\Shipping\shippingWithReservationAndESDWithRefClientResponse' => __DIR__ .'/shippingWithReservationAndESDWithRefClientResponse.php',
        'Chronopost\Shipping\shippingWithReservationAndESDWithRefClientPC' => __DIR__ .'/shippingWithReservationAndESDWithRefClientPC.php',
        'Chronopost\Shipping\shippingWithReservationAndESDWithRefClientPCResponse' => __DIR__ .'/shippingWithReservationAndESDWithRefClientPCResponse.php',
        'Chronopost\Shipping\shippingV5' => __DIR__ .'/shippingV5.php',
        'Chronopost\Shipping\shippingV5Response' => __DIR__ .'/shippingV5Response.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservationV2' => __DIR__ .'/shippingMultiParcelWithReservationV2.php',
        'Chronopost\Shipping\shippingMultiParcelWithReservationV2Response' => __DIR__ .'/shippingMultiParcelWithReservationV2Response.php',
        'Chronopost\Shipping\shippingWithESDOnly' => __DIR__ .'/shippingWithESDOnly.php',
        'Chronopost\Shipping\shippingWithESDOnlyResponse' => __DIR__ .'/shippingWithESDOnlyResponse.php',
        'Chronopost\Shipping\getShippingInformation' => __DIR__ .'/getShippingInformation.php',
        'Chronopost\Shipping\getShippingInformationResponse' => __DIR__ .'/getShippingInformationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d46707f1d9e8a1ed5d7495082a8d2e52');

// Do nothing. The rest is just leftovers from the code generation.
{
}
