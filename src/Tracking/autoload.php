<?php


 function autoload_0f2fa54ae495667022007adfef6c5da7($class)
{
    $classes = array(
        'Chonopost\Tracking\TrackingServiceWSService' => __DIR__ .'/TrackingServiceWSService.php',
        'Chonopost\Tracking\resultTrackWithSenderRef' => __DIR__ .'/resultTrackWithSenderRef.php',
        'Chonopost\Tracking\listEvents' => __DIR__ .'/listEvents.php',
        'Chonopost\Tracking\event' => __DIR__ .'/event.php',
        'Chonopost\Tracking\resultTrackSearch' => __DIR__ .'/resultTrackSearch.php',
        'Chonopost\Tracking\infosPOD' => __DIR__ .'/infosPOD.php',
        'Chonopost\Tracking\resultTrackSkybillV2' => __DIR__ .'/resultTrackSkybillV2.php',
        'Chonopost\Tracking\listEventInfoComps' => __DIR__ .'/listEventInfoComps.php',
        'Chonopost\Tracking\eventInfoComp' => __DIR__ .'/eventInfoComp.php',
        'Chonopost\Tracking\infoComp' => __DIR__ .'/infoComp.php',
        'Chonopost\Tracking\resultCancelSkybill' => __DIR__ .'/resultCancelSkybill.php',
        'Chonopost\Tracking\resultTrackSkybill' => __DIR__ .'/resultTrackSkybill.php',
        'Chonopost\Tracking\resultSearchPOD' => __DIR__ .'/resultSearchPOD.php',
        'Chonopost\Tracking\resultSearchPODWithSenderRef' => __DIR__ .'/resultSearchPODWithSenderRef.php',
        'Chonopost\Tracking\parcelPOD' => __DIR__ .'/parcelPOD.php',
        'Chonopost\Tracking\trackWithSenderRef' => __DIR__ .'/trackWithSenderRef.php',
        'Chonopost\Tracking\trackWithSenderRefResponse' => __DIR__ .'/trackWithSenderRefResponse.php',
        'Chonopost\Tracking\trackSearch' => __DIR__ .'/trackSearch.php',
        'Chonopost\Tracking\trackSearchResponse' => __DIR__ .'/trackSearchResponse.php',
        'Chonopost\Tracking\trackSkybillV2' => __DIR__ .'/trackSkybillV2.php',
        'Chonopost\Tracking\trackSkybillV2Response' => __DIR__ .'/trackSkybillV2Response.php',
        'Chonopost\Tracking\cancelSkybill' => __DIR__ .'/cancelSkybill.php',
        'Chonopost\Tracking\cancelSkybillResponse' => __DIR__ .'/cancelSkybillResponse.php',
        'Chonopost\Tracking\trackSkybill' => __DIR__ .'/trackSkybill.php',
        'Chonopost\Tracking\trackSkybillResponse' => __DIR__ .'/trackSkybillResponse.php',
        'Chonopost\Tracking\searchPOD' => __DIR__ .'/searchPOD.php',
        'Chonopost\Tracking\searchPODResponse' => __DIR__ .'/searchPODResponse.php',
        'Chonopost\Tracking\searchPODWithSenderRef' => __DIR__ .'/searchPODWithSenderRef.php',
        'Chonopost\Tracking\searchPODWithSenderRefResponse' => __DIR__ .'/searchPODWithSenderRefResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_0f2fa54ae495667022007adfef6c5da7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
