<?php

namespace Chonopost\Creneau;

class CreneauWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'searchDeliverySlot' => 'Chonopost\\Creneau\\searchDeliverySlot',
      'searchDeliverySlotResponse' => 'Chonopost\\Creneau\\searchDeliverySlotResponse',
      'deliverySlotResponse' => 'Chonopost\\Creneau\\deliverySlotResponse',
      'wsResponse' => 'Chonopost\\Creneau\\wsResponse',
      'slot' => 'Chonopost\\Creneau\\slot',
      'confirmDeliverySlotV2' => 'Chonopost\\Creneau\\confirmDeliverySlotV2',
      'confirmDeliverySlotV2Response' => 'Chonopost\\Creneau\\confirmDeliverySlotV2Response',
      'serviceResponseV2' => 'Chonopost\\Creneau\\serviceResponseV2',
      'productServiceV2' => 'Chonopost\\Creneau\\productServiceV2',
      'productService' => 'Chonopost\\Creneau\\productService',
      'getAdresseGeocodage' => 'Chonopost\\Creneau\\getAdresseGeocodage',
      'getAdresseGeocodageResponse' => 'Chonopost\\Creneau\\getAdresseGeocodageResponse',
      'geocodageResponse' => 'Chonopost\\Creneau\\geocodageResponse',
      'confirmDeliverySlot' => 'Chonopost\\Creneau\\confirmDeliverySlot',
      'confirmDeliverySlotResponse' => 'Chonopost\\Creneau\\confirmDeliverySlotResponse',
      'serviceResponse' => 'Chonopost\\Creneau\\serviceResponse',
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
