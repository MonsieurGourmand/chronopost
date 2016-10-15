<?php

namespace Chronopost\Creneau;

class CreneauWS extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'searchDeliverySlot' => 'Chronopost\\Creneau\\searchDeliverySlot',
      'searchDeliverySlotResponse' => 'Chronopost\\Creneau\\searchDeliverySlotResponse',
      'deliverySlotResponse' => 'Chronopost\\Creneau\\deliverySlotResponse',
      'wsResponse' => 'Chronopost\\Creneau\\wsResponse',
      'slot' => 'Chronopost\\Creneau\\slot',
      'confirmDeliverySlotV2' => 'Chronopost\\Creneau\\confirmDeliverySlotV2',
      'confirmDeliverySlotV2Response' => 'Chronopost\\Creneau\\confirmDeliverySlotV2Response',
      'serviceResponseV2' => 'Chronopost\\Creneau\\serviceResponseV2',
      'productServiceV2' => 'Chronopost\\Creneau\\productServiceV2',
      'productService' => 'Chronopost\\Creneau\\productService',
      'getAdresseGeocodage' => 'Chronopost\\Creneau\\getAdresseGeocodage',
      'getAdresseGeocodageResponse' => 'Chronopost\\Creneau\\getAdresseGeocodageResponse',
      'geocodageResponse' => 'Chronopost\\Creneau\\geocodageResponse',
      'confirmDeliverySlot' => 'Chronopost\\Creneau\\confirmDeliverySlot',
      'confirmDeliverySlotResponse' => 'Chronopost\\Creneau\\confirmDeliverySlotResponse',
      'serviceResponse' => 'Chronopost\\Creneau\\serviceResponse',
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
      'authentication' => 0,
      'login' => '10564650',
      'password' => 'chronofood',
      'connection_timeout' => 60,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param searchDeliverySlot $parameters
     * @return searchDeliverySlotResponse
     */
    public function searchDeliverySlot(searchDeliverySlot $parameters)
    {
      return $this->__soapCall('searchDeliverySlot', array($parameters));
    }

    /**
     * @param confirmDeliverySlotV2 $parameters
     * @return confirmDeliverySlotV2Response
     */
    public function confirmDeliverySlotV2(confirmDeliverySlotV2 $parameters)
    {
      return $this->__soapCall('confirmDeliverySlotV2', array($parameters));
    }

    /**
     * @param getAdresseGeocodage $parameters
     * @return getAdresseGeocodageResponse
     */
    public function getAdresseGeocodage(getAdresseGeocodage $parameters)
    {
      return $this->__soapCall('getAdresseGeocodage', array($parameters));
    }

    /**
     * @param confirmDeliverySlot $parameters
     * @return confirmDeliverySlotResponse
     */
    public function confirmDeliverySlot(confirmDeliverySlot $parameters)
    {
      return $this->__soapCall('confirmDeliverySlot', array($parameters));
    }

}
