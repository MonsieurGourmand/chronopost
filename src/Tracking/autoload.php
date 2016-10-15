<?php


 function autoload_da8e4553b52d1920eec468cffbe4e26e($class)
{
    $classes = array(
        'Chronopost\Tracking\TrackingServiceWSService' => __DIR__ .'/TrackingServiceWSService.php',
        'Chronopost\Tracking\resultTrackWithSenderRef' => __DIR__ .'/resultTrackWithSenderRef.php',
        'Chronopost\Tracking\listEvents' => __DIR__ .'/listEvents.php',
        'Chronopost\Tracking\event' => __DIR__ .'/event.php',
        'Chronopost\Tracking\resultTrackSearch' => __DIR__ .'/resultTrackSearch.php',
        'Chronopost\Tracking\infosPOD' => __DIR__ .'/infosPOD.php',
        'Chronopost\Tracking\resultTrackSkybillV2' => __DIR__ .'/resultTrackSkybillV2.php',
        'Chronopost\Tracking\listEventInfoComps' => __DIR__ .'/listEventInfoComps.php',
        'Chronopost\Tracking\eventInfoComp' => __DIR__ .'/eventInfoComp.php',
        'Chronopost\Tracking\infoComp' => __DIR__ .'/infoComp.php',
        'Chronopost\Tracking\resultCancelSkybill' => __DIR__ .'/resultCancelSkybill.php',
        'Chronopost\Tracking\resultTrackSkybill' => __DIR__ .'/resultTrackSkybill.php',
        'Chronopost\Tracking\resultSearchPOD' => __DIR__ .'/resultSearchPOD.php',
        'Chronopost\Tracking\resultSearchPODWithSenderRef' => __DIR__ .'/resultSearchPODWithSenderRef.php',
        'Chronopost\Tracking\parcelPOD' => __DIR__ .'/parcelPOD.php',
        'Chronopost\Tracking\trackWithSenderRef' => __DIR__ .'/trackWithSenderRef.php',
        'Chronopost\Tracking\trackWithSenderRefResponse' => __DIR__ .'/trackWithSenderRefResponse.php',
        'Chronopost\Tracking\trackSearch' => __DIR__ .'/trackSearch.php',
        'Chronopost\Tracking\trackSearchResponse' => __DIR__ .'/trackSearchResponse.php',
        'Chronopost\Tracking\trackSkybillV2' => __DIR__ .'/trackSkybillV2.php',
        'Chronopost\Tracking\trackSkybillV2Response' => __DIR__ .'/trackSkybillV2Response.php',
        'Chronopost\Tracking\cancelSkybill' => __DIR__ .'/cancelSkybill.php',
        'Chronopost\Tracking\cancelSkybillResponse' => __DIR__ .'/cancelSkybillResponse.php',
        'Chronopost\Tracking\trackSkybill' => __DIR__ .'/trackSkybill.php',
        'Chronopost\Tracking\trackSkybillResponse' => __DIR__ .'/trackSkybillResponse.php',
        'Chronopost\Tracking\searchPOD' => __DIR__ .'/searchPOD.php',
        'Chronopost\Tracking\searchPODResponse' => __DIR__ .'/searchPODResponse.php',
        'Chronopost\Tracking\searchPODWithSenderRef' => __DIR__ .'/searchPODWithSenderRef.php',
        'Chronopost\Tracking\searchPODWithSenderRefResponse' => __DIR__ .'/searchPODWithSenderRefResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_da8e4553b52d1920eec468cffbe4e26e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
