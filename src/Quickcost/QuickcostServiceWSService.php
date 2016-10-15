<?php

namespace Chronopost\Quickcost;

class QuickcostServiceWSService extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'resultCalculateDeliveryTime' => 'Chronopost\\Quickcost\\resultCalculateDeliveryTime',
      'resultQuickCost' => 'Chronopost\\Quickcost\\resultQuickCost',
      'service' => 'Chronopost\\Quickcost\\service',
      'resultQuickCostV2' => 'Chronopost\\Quickcost\\resultQuickCostV2',
      'assurance' => 'Chronopost\\Quickcost\\assurance',
      'resultCalculateProducts' => 'Chronopost\\Quickcost\\resultCalculateProducts',
      'product' => 'Chronopost\\Quickcost\\product',
      'calculateDeliveryTime' => 'Chronopost\\Quickcost\\calculateDeliveryTime',
      'calculateDeliveryTimeResponse' => 'Chronopost\\Quickcost\\calculateDeliveryTimeResponse',
      'quickCost' => 'Chronopost\\Quickcost\\quickCost',
      'quickCostResponse' => 'Chronopost\\Quickcost\\quickCostResponse',
      'calculateProducts' => 'Chronopost\\Quickcost\\calculateProducts',
      'calculateProductsResponse' => 'Chronopost\\Quickcost\\calculateProductsResponse',
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
