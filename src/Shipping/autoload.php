<?php


 function autoload_07c50295e6c08d624735e59b843a95d0($class)
{
    $classes = array(
        'Chonopost\Shipping\ShippingServiceWSService' => __DIR__ .'/ShippingServiceWSService.php',
        'Chonopost\Shipping\shipperValue' => __DIR__ .'/shipperValue.php',
        'Chonopost\Shipping\resultFaisabiliteESD' => __DIR__ .'/resultFaisabiliteESD.php',
        'Chonopost\Shipping\esdValue' => __DIR__ .'/esdValue.php',
        'Chonopost\Shipping\headerValue' => __DIR__ .'/headerValue.php',
        'Chonopost\Shipping\customerValue' => __DIR__ .'/customerValue.php',
        'Chonopost\Shipping\recipientValue' => __DIR__ .'/recipientValue.php',
        'Chonopost\Shipping\refValue' => __DIR__ .'/refValue.php',
        'Chonopost\Shipping\skybillValue' => __DIR__ .'/skybillValue.php',
        'Chonopost\Shipping\skybillParamsValue' => __DIR__ .'/skybillParamsValue.php',
        'Chonopost\Shipping\resultExpeditionValue' => __DIR__ .'/resultExpeditionValue.php',
        'Chonopost\Shipping\resultGetReservedSkybillWithTypeValue' => __DIR__ .'/resultGetReservedSkybillWithTypeValue.php',
        'Chonopost\Shipping\scheduledValue' => __DIR__ .'/scheduledValue.php',
        'Chonopost\Shipping\appointmentValue' => __DIR__ .'/appointmentValue.php',
        'Chonopost\Shipping\esdWithRefClientValue' => __DIR__ .'/esdWithRefClientValue.php',
        'Chonopost\Shipping\skybillValueV2' => __DIR__ .'/skybillValueV2.php',
        'Chonopost\Shipping\resultReservationExpeditionValue' => __DIR__ .'/resultReservationExpeditionValue.php',
        'Chonopost\Shipping\resultReservationExpeditionValueV2' => __DIR__ .'/resultReservationExpeditionValueV2.php',
        'Chonopost\Shipping\resultGetReservedSkybillValue' => __DIR__ .'/resultGetReservedSkybillValue.php',
        'Chonopost\Shipping\skybillWithDimensionsValue' => __DIR__ .'/skybillWithDimensionsValue.php',
        'Chonopost\Shipping\resultReservationMultiParcelExpeditionValue' => __DIR__ .'/resultReservationMultiParcelExpeditionValue.php',
        'Chonopost\Shipping\resultParcelValue' => __DIR__ .'/resultParcelValue.php',
        'Chonopost\Shipping\esdValue3' => __DIR__ .'/esdValue3.php',
        'Chonopost\Shipping\skybillWithDimensionsValueV2' => __DIR__ .'/skybillWithDimensionsValueV2.php',
        'Chonopost\Shipping\resultReservationMultiParcelExpeditionValueV2' => __DIR__ .'/resultReservationMultiParcelExpeditionValueV2.php',
        'Chonopost\Shipping\esdResultContraintesAgenceValue' => __DIR__ .'/esdResultContraintesAgenceValue.php',
        'Chonopost\Shipping\esdContraintesAgence' => __DIR__ .'/esdContraintesAgence.php',
        'Chonopost\Shipping\skybillValueBase' => __DIR__ .'/skybillValueBase.php',
        'Chonopost\Shipping\resultShippingInfo' => __DIR__ .'/resultShippingInfo.php',
        'Chonopost\Shipping\error' => __DIR__ .'/error.php',
        'Chonopost\Shipping\detail' => __DIR__ .'/detail.php',
        'Chonopost\Shipping\shippingInfo' => __DIR__ .'/shippingInfo.php',
        'Chonopost\Shipping\faisabiliteESD' => __DIR__ .'/faisabiliteESD.php',
        'Chonopost\Shipping\faisabiliteESDResponse' => __DIR__ .'/faisabiliteESDResponse.php',
        'Chonopost\Shipping\shippingV2' => __DIR__ .'/shippingV2.php',
        'Chonopost\Shipping\shippingV2Response' => __DIR__ .'/shippingV2Response.php',
        'Chonopost\Shipping\getReservedSkybillWithType' => __DIR__ .'/getReservedSkybillWithType.php',
        'Chonopost\Shipping\getReservedSkybillWithTypeResponse' => __DIR__ .'/getReservedSkybillWithTypeResponse.php',
        'Chonopost\Shipping\shippingV3' => __DIR__ .'/shippingV3.php',
        'Chonopost\Shipping\shippingV3Response' => __DIR__ .'/shippingV3Response.php',
        'Chonopost\Shipping\shippingWithReservationV2' => __DIR__ .'/shippingWithReservationV2.php',
        'Chonopost\Shipping\shippingWithReservationV2Response' => __DIR__ .'/shippingWithReservationV2Response.php',
        'Chonopost\Shipping\shipping' => __DIR__ .'/shipping.php',
        'Chonopost\Shipping\shippingResponse' => __DIR__ .'/shippingResponse.php',
        'Chonopost\Shipping\getReservedSkybill' => __DIR__ .'/getReservedSkybill.php',
        'Chonopost\Shipping\getReservedSkybillResponse' => __DIR__ .'/getReservedSkybillResponse.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservation' => __DIR__ .'/shippingMultiParcelWithReservation.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservationResponse' => __DIR__ .'/shippingMultiParcelWithReservationResponse.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservationV3' => __DIR__ .'/shippingMultiParcelWithReservationV3.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservationV3Response' => __DIR__ .'/shippingMultiParcelWithReservationV3Response.php',
        'Chonopost\Shipping\shippingWithReservation' => __DIR__ .'/shippingWithReservation.php',
        'Chonopost\Shipping\shippingWithReservationResponse' => __DIR__ .'/shippingWithReservationResponse.php',
        'Chonopost\Shipping\rechercherContraintesEnlevement' => __DIR__ .'/rechercherContraintesEnlevement.php',
        'Chonopost\Shipping\rechercherContraintesEnlevementResponse' => __DIR__ .'/rechercherContraintesEnlevementResponse.php',
        'Chonopost\Shipping\shippingV4' => __DIR__ .'/shippingV4.php',
        'Chonopost\Shipping\shippingV4Response' => __DIR__ .'/shippingV4Response.php',
        'Chonopost\Shipping\getReservedSkybillWithTypeAndMode' => __DIR__ .'/getReservedSkybillWithTypeAndMode.php',
        'Chonopost\Shipping\getReservedSkybillWithTypeAndModeResponse' => __DIR__ .'/getReservedSkybillWithTypeAndModeResponse.php',
        'Chonopost\Shipping\shippingWithReservationAndESDWithRefClient' => __DIR__ .'/shippingWithReservationAndESDWithRefClient.php',
        'Chonopost\Shipping\shippingWithReservationAndESDWithRefClientResponse' => __DIR__ .'/shippingWithReservationAndESDWithRefClientResponse.php',
        'Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPC' => __DIR__ .'/shippingWithReservationAndESDWithRefClientPC.php',
        'Chonopost\Shipping\shippingWithReservationAndESDWithRefClientPCResponse' => __DIR__ .'/shippingWithReservationAndESDWithRefClientPCResponse.php',
        'Chonopost\Shipping\shippingV5' => __DIR__ .'/shippingV5.php',
        'Chonopost\Shipping\shippingV5Response' => __DIR__ .'/shippingV5Response.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservationV2' => __DIR__ .'/shippingMultiParcelWithReservationV2.php',
        'Chonopost\Shipping\shippingMultiParcelWithReservationV2Response' => __DIR__ .'/shippingMultiParcelWithReservationV2Response.php',
        'Chonopost\Shipping\shippingWithESDOnly' => __DIR__ .'/shippingWithESDOnly.php',
        'Chonopost\Shipping\shippingWithESDOnlyResponse' => __DIR__ .'/shippingWithESDOnlyResponse.php',
        'Chonopost\Shipping\getShippingInformation' => __DIR__ .'/getShippingInformation.php',
        'Chonopost\Shipping\getShippingInformationResponse' => __DIR__ .'/getShippingInformationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_07c50295e6c08d624735e59b843a95d0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
