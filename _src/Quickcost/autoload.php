<?php


 function autoload_62242b179152b03a1ee392f9d0136ecc($class)
{
    $classes = array(
        'Chronopost\Quickcost\QuickcostServiceWSService' => __DIR__ .'/QuickcostServiceWSService.php',
        'Chronopost\Quickcost\resultCalculateDeliveryTime' => __DIR__ .'/resultCalculateDeliveryTime.php',
        'Chronopost\Quickcost\resultQuickCost' => __DIR__ .'/resultQuickCost.php',
        'Chronopost\Quickcost\service' => __DIR__ .'/service.php',
        'Chronopost\Quickcost\resultQuickCostV2' => __DIR__ .'/resultQuickCostV2.php',
        'Chronopost\Quickcost\assurance' => __DIR__ .'/assurance.php',
        'Chronopost\Quickcost\resultCalculateProducts' => __DIR__ .'/resultCalculateProducts.php',
        'Chronopost\Quickcost\product' => __DIR__ .'/product.php',
        'Chronopost\Quickcost\calculateDeliveryTime' => __DIR__ .'/calculateDeliveryTime.php',
        'Chronopost\Quickcost\calculateDeliveryTimeResponse' => __DIR__ .'/calculateDeliveryTimeResponse.php',
        'Chronopost\Quickcost\quickCost' => __DIR__ .'/quickCost.php',
        'Chronopost\Quickcost\quickCostResponse' => __DIR__ .'/quickCostResponse.php',
        'Chronopost\Quickcost\calculateProducts' => __DIR__ .'/calculateProducts.php',
        'Chronopost\Quickcost\calculateProductsResponse' => __DIR__ .'/calculateProductsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_62242b179152b03a1ee392f9d0136ecc');

// Do nothing. The rest is just leftovers from the code generation.
{
}
