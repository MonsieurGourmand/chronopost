<?php

namespace Chonopost\Quickcost;

class QuickcostServiceWSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'resultCalculateDeliveryTime' => 'Chonopost\\Quickcost\\resultCalculateDeliveryTime',
      'resultQuickCost' => 'Chonopost\\Quickcost\\resultQuickCost',
      'service' => 'Chonopost\\Quickcost\\service',
      'resultQuickCostV2' => 'Chonopost\\Quickcost\\resultQuickCostV2',
      'assurance' => 'Chonopost\\Quickcost\\assurance',
      'resultCalculateProducts' => 'Chonopost\\Quickcost\\resultCalculateProducts',
      'product' => 'Chonopost\\Quickcost\\product',
      'calculateDeliveryTime' => 'Chonopost\\Quickcost\\calculateDeliveryTime',
      'calculateDeliveryTimeResponse' => 'Chonopost\\Quickcost\\calculateDeliveryTimeResponse',
      'quickCost' => 'Chonopost\\Quickcost\\quickCost',
      'quickCostResponse' => 'Chonopost\\Quickcost\\quickCostResponse',
      'calculateProducts' => 'Chonopost\\Quickcost\\calculateProducts',
      'calculateProductsResponse' => 'Chonopost\\Quickcost\\calculateProductsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param calculateDeliveryTime $parameters
     * @return calculateDeliveryTimeResponse
     */
    public function calculateDeliveryTime(calculateDeliveryTime $parameters)
    {
      return $this->__soapCall('calculateDeliveryTime', array($parameters));
    }

    /**
     * @param quickCost $parameters
     * @return quickCostResponse
     */
    public function quickCost(quickCost $parameters)
    {
      return $this->__soapCall('quickCost', array($parameters));
    }

    /**
     * @param calculateProducts $parameters
     * @return calculateProductsResponse
     */
    public function calculateProducts(calculateProducts $parameters)
    {
      return $this->__soapCall('calculateProducts', array($parameters));
    }

}
