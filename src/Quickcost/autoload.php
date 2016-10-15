<?php


 function autoload_5fb9f2a6cb1fc25f363db2774b3cae2f($class)
{
    $classes = array(
        'Chonopost\Quickcost\QuickcostServiceWSService' => __DIR__ .'/QuickcostServiceWSService.php',
        'Chonopost\Quickcost\resultCalculateDeliveryTime' => __DIR__ .'/resultCalculateDeliveryTime.php',
        'Chonopost\Quickcost\resultQuickCost' => __DIR__ .'/resultQuickCost.php',
        'Chonopost\Quickcost\service' => __DIR__ .'/service.php',
        'Chonopost\Quickcost\resultQuickCostV2' => __DIR__ .'/resultQuickCostV2.php',
        'Chonopost\Quickcost\assurance' => __DIR__ .'/assurance.php',
        'Chonopost\Quickcost\resultCalculateProducts' => __DIR__ .'/resultCalculateProducts.php',
        'Chonopost\Quickcost\product' => __DIR__ .'/product.php',
        'Chonopost\Quickcost\calculateDeliveryTime' => __DIR__ .'/calculateDeliveryTime.php',
        'Chonopost\Quickcost\calculateDeliveryTimeResponse' => __DIR__ .'/calculateDeliveryTimeResponse.php',
        'Chonopost\Quickcost\quickCost' => __DIR__ .'/quickCost.php',
        'Chonopost\Quickcost\quickCostResponse' => __DIR__ .'/quickCostResponse.php',
        'Chonopost\Quickcost\calculateProducts' => __DIR__ .'/calculateProducts.php',
        'Chonopost\Quickcost\calculateProductsResponse' => __DIR__ .'/calculateProductsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5fb9f2a6cb1fc25f363db2774b3cae2f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
