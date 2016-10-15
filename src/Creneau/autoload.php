<?php


 function autoload_c8b88afaca68886932c8fd5a377f2da9($class)
{
    $classes = array(
        'Chonopost\Creneau\CreneauWS' => __DIR__ .'/CreneauWS.php',
        'Chonopost\Creneau\searchDeliverySlot' => __DIR__ .'/searchDeliverySlot.php',
        'Chonopost\Creneau\searchDeliverySlotResponse' => __DIR__ .'/searchDeliverySlotResponse.php',
        'Chonopost\Creneau\deliverySlotResponse' => __DIR__ .'/deliverySlotResponse.php',
        'Chonopost\Creneau\wsResponse' => __DIR__ .'/wsResponse.php',
        'Chonopost\Creneau\slot' => __DIR__ .'/slot.php',
        'Chonopost\Creneau\confirmDeliverySlotV2' => __DIR__ .'/confirmDeliverySlotV2.php',
        'Chonopost\Creneau\confirmDeliverySlotV2Response' => __DIR__ .'/confirmDeliverySlotV2Response.php',
        'Chonopost\Creneau\serviceResponseV2' => __DIR__ .'/serviceResponseV2.php',
        'Chonopost\Creneau\productServiceV2' => __DIR__ .'/productServiceV2.php',
        'Chonopost\Creneau\productService' => __DIR__ .'/productService.php',
        'Chonopost\Creneau\getAdresseGeocodage' => __DIR__ .'/getAdresseGeocodage.php',
        'Chonopost\Creneau\getAdresseGeocodageResponse' => __DIR__ .'/getAdresseGeocodageResponse.php',
        'Chonopost\Creneau\geocodageResponse' => __DIR__ .'/geocodageResponse.php',
        'Chonopost\Creneau\confirmDeliverySlot' => __DIR__ .'/confirmDeliverySlot.php',
        'Chonopost\Creneau\confirmDeliverySlotResponse' => __DIR__ .'/confirmDeliverySlotResponse.php',
        'Chonopost\Creneau\serviceResponse' => __DIR__ .'/serviceResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c8b88afaca68886932c8fd5a377f2da9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
