<?php


 function autoload_899adc08035a04203b507325d7017ee1($class)
{
    $classes = array(
        'Chronopost\Creneau\CreneauWS' => __DIR__ .'/CreneauWS.php',
        'Chronopost\Creneau\searchDeliverySlot' => __DIR__ .'/searchDeliverySlot.php',
        'Chronopost\Creneau\searchDeliverySlotResponse' => __DIR__ .'/searchDeliverySlotResponse.php',
        'Chronopost\Creneau\deliverySlotResponse' => __DIR__ .'/deliverySlotResponse.php',
        'Chronopost\Creneau\wsResponse' => __DIR__ .'/wsResponse.php',
        'Chronopost\Creneau\slot' => __DIR__ .'/slot.php',
        'Chronopost\Creneau\confirmDeliverySlotV2' => __DIR__ .'/confirmDeliverySlotV2.php',
        'Chronopost\Creneau\confirmDeliverySlotV2Response' => __DIR__ .'/confirmDeliverySlotV2Response.php',
        'Chronopost\Creneau\serviceResponseV2' => __DIR__ .'/serviceResponseV2.php',
        'Chronopost\Creneau\productServiceV2' => __DIR__ .'/productServiceV2.php',
        'Chronopost\Creneau\productService' => __DIR__ .'/productService.php',
        'Chronopost\Creneau\getAdresseGeocodage' => __DIR__ .'/getAdresseGeocodage.php',
        'Chronopost\Creneau\getAdresseGeocodageResponse' => __DIR__ .'/getAdresseGeocodageResponse.php',
        'Chronopost\Creneau\geocodageResponse' => __DIR__ .'/geocodageResponse.php',
        'Chronopost\Creneau\confirmDeliverySlot' => __DIR__ .'/confirmDeliverySlot.php',
        'Chronopost\Creneau\confirmDeliverySlotResponse' => __DIR__ .'/confirmDeliverySlotResponse.php',
        'Chronopost\Creneau\serviceResponse' => __DIR__ .'/serviceResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_899adc08035a04203b507325d7017ee1');

// Do nothing. The rest is just leftovers from the code generation.
{
}
