<?php

namespace Chronopost\Shipping;

class ShippingServiceWSService extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'shipperValue' => 'Chronopost\\Shipping\\shipperValue',
      'resultFaisabiliteESD' => 'Chronopost\\Shipping\\resultFaisabiliteESD',
      'esdValue' => 'Chronopost\\Shipping\\esdValue',
      'headerValue' => 'Chronopost\\Shipping\\headerValue',
      'customerValue' => 'Chronopost\\Shipping\\customerValue',
      'recipientValue' => 'Chronopost\\Shipping\\recipientValue',
      'refValue' => 'Chronopost\\Shipping\\refValue',
      'skybillValue' => 'Chronopost\\Shipping\\skybillValue',
      'skybillParamsValue' => 'Chronopost\\Shipping\\skybillParamsValue',
      'resultExpeditionValue' => 'Chronopost\\Shipping\\resultExpeditionValue',
      'resultGetReservedSkybillWithTypeValue' => 'Chronopost\\Shipping\\resultGetReservedSkybillWithTypeValue',
      'scheduledValue' => 'Chronopost\\Shipping\\scheduledValue',
      'appointmentValue' => 'Chronopost\\Shipping\\appointmentValue',
      'esdWithRefClientValue' => 'Chronopost\\Shipping\\esdWithRefClientValue',
      'skybillValueV2' => 'Chronopost\\Shipping\\skybillValueV2',
      'resultReservationExpeditionValue' => 'Chronopost\\Shipping\\resultReservationExpeditionValue',
      'resultReservationExpeditionValueV2' => 'Chronopost\\Shipping\\resultReservationExpeditionValueV2',
      'resultGetReservedSkybillValue' => 'Chronopost\\Shipping\\resultGetReservedSkybillValue',
      'skybillWithDimensionsValue' => 'Chronopost\\Shipping\\skybillWithDimensionsValue',
      'resultReservationMultiParcelExpeditionValue' => 'Chronopost\\Shipping\\resultReservationMultiParcelExpeditionValue',
      'resultParcelValue' => 'Chronopost\\Shipping\\resultParcelValue',
      'esdValue3' => 'Chronopost\\Shipping\\esdValue3',
      'skybillWithDimensionsValueV2' => 'Chronopost\\Shipping\\skybillWithDimensionsValueV2',
      'resultReservationMultiParcelExpeditionValueV2' => 'Chronopost\\Shipping\\resultReservationMultiParcelExpeditionValueV2',
      'esdResultContraintesAgenceValue' => 'Chronopost\\Shipping\\esdResultContraintesAgenceValue',
      'esdContraintesAgence' => 'Chronopost\\Shipping\\esdContraintesAgence',
      'skybillValueBase' => 'Chronopost\\Shipping\\skybillValueBase',
      'resultShippingInfo' => 'Chronopost\\Shipping\\resultShippingInfo',
      'error' => 'Chronopost\\Shipping\\error',
      'detail' => 'Chronopost\\Shipping\\detail',
      'shippingInfo' => 'Chronopost\\Shipping\\shippingInfo',
      'faisabiliteESD' => 'Chronopost\\Shipping\\faisabiliteESD',
      'faisabiliteESDResponse' => 'Chronopost\\Shipping\\faisabiliteESDResponse',
      'shippingV2' => 'Chronopost\\Shipping\\shippingV2',
      'shippingV2Response' => 'Chronopost\\Shipping\\shippingV2Response',
      'getReservedSkybillWithType' => 'Chronopost\\Shipping\\getReservedSkybillWithType',
      'getReservedSkybillWithTypeResponse' => 'Chronopost\\Shipping\\getReservedSkybillWithTypeResponse',
      'shippingV3' => 'Chronopost\\Shipping\\shippingV3',
      'shippingV3Response' => 'Chronopost\\Shipping\\shippingV3Response',
      'shippingWithReservationV2' => 'Chronopost\\Shipping\\shippingWithReservationV2',
      'shippingWithReservationV2Response' => 'Chronopost\\Shipping\\shippingWithReservationV2Response',
      'shipping' => 'Chronopost\\Shipping\\shipping',
      'shippingResponse' => 'Chronopost\\Shipping\\shippingResponse',
      'getReservedSkybill' => 'Chronopost\\Shipping\\getReservedSkybill',
      'getReservedSkybillResponse' => 'Chronopost\\Shipping\\getReservedSkybillResponse',
      'shippingMultiParcelWithReservation' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservation',
      'shippingMultiParcelWithReservationResponse' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservationResponse',
      'shippingMultiParcelWithReservationV3' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservationV3',
      'shippingMultiParcelWithReservationV3Response' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservationV3Response',
      'shippingWithReservation' => 'Chronopost\\Shipping\\shippingWithReservation',
      'shippingWithReservationResponse' => 'Chronopost\\Shipping\\shippingWithReservationResponse',
      'rechercherContraintesEnlevement' => 'Chronopost\\Shipping\\rechercherContraintesEnlevement',
      'rechercherContraintesEnlevementResponse' => 'Chronopost\\Shipping\\rechercherContraintesEnlevementResponse',
      'shippingV4' => 'Chronopost\\Shipping\\shippingV4',
      'shippingV4Response' => 'Chronopost\\Shipping\\shippingV4Response',
      'getReservedSkybillWithTypeAndMode' => 'Chronopost\\Shipping\\getReservedSkybillWithTypeAndMode',
      'getReservedSkybillWithTypeAndModeResponse' => 'Chronopost\\Shipping\\getReservedSkybillWithTypeAndModeResponse',
      'shippingWithReservationAndESDWithRefClient' => 'Chronopost\\Shipping\\shippingWithReservationAndESDWithRefClient',
      'shippingWithReservationAndESDWithRefClientResponse' => 'Chronopost\\Shipping\\shippingWithReservationAndESDWithRefClientResponse',
      'shippingWithReservationAndESDWithRefClientPC' => 'Chronopost\\Shipping\\shippingWithReservationAndESDWithRefClientPC',
      'shippingWithReservationAndESDWithRefClientPCResponse' => 'Chronopost\\Shipping\\shippingWithReservationAndESDWithRefClientPCResponse',
      'shippingV5' => 'Chronopost\\Shipping\\shippingV5',
      'shippingV5Response' => 'Chronopost\\Shipping\\shippingV5Response',
      'shippingMultiParcelWithReservationV2' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservationV2',
      'shippingMultiParcelWithReservationV2Response' => 'Chronopost\\Shipping\\shippingMultiParcelWithReservationV2Response',
      'shippingWithESDOnly' => 'Chronopost\\Shipping\\shippingWithESDOnly',
      'shippingWithESDOnlyResponse' => 'Chronopost\\Shipping\\shippingWithESDOnlyResponse',
      'getShippingInformation' => 'Chronopost\\Shipping\\getShippingInformation',
      'getShippingInformationResponse' => 'Chronopost\\Shipping\\getShippingInformationResponse',
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
        $wsdl = 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param faisabiliteESD $parameters
     * @return faisabiliteESDResponse
     */
    public function faisabiliteESD(faisabiliteESD $parameters)
    {
      return $this->__soapCall('faisabiliteESD', array($parameters));
    }

    /**
     * @param getReservedSkybillWithType $parameters
     * @return getReservedSkybillWithTypeResponse
     */
    public function getReservedSkybillWithType(getReservedSkybillWithType $parameters)
    {
      return $this->__soapCall('getReservedSkybillWithType', array($parameters));
    }

    /**
     * @param shippingV2 $parameters
     * @return shippingV2Response
     */
    public function shippingV2(shippingV2 $parameters)
    {
      return $this->__soapCall('shippingV2', array($parameters));
    }

    /**
     * @param shippingV3 $parameters
     * @return shippingV3Response
     */
    public function shippingV3(shippingV3 $parameters)
    {
      return $this->__soapCall('shippingV3', array($parameters));
    }

    /**
     * @param shippingWithReservationV2 $parameters
     * @return shippingWithReservationV2Response
     */
    public function shippingWithReservationV2(shippingWithReservationV2 $parameters)
    {
      return $this->__soapCall('shippingWithReservationV2', array($parameters));
    }

    /**
     * @param shipping $parameters
     * @return shippingResponse
     */
    public function shipping(shipping $parameters)
    {
      return $this->__soapCall('shipping', array($parameters));
    }

    /**
     * @param getReservedSkybill $parameters
     * @return getReservedSkybillResponse
     */
    public function getReservedSkybill(getReservedSkybill $parameters)
    {
      return $this->__soapCall('getReservedSkybill', array($parameters));
    }

    /**
     * @param shippingMultiParcelWithReservation $parameters
     * @return shippingMultiParcelWithReservationResponse
     */
    public function shippingMultiParcelWithReservation(shippingMultiParcelWithReservation $parameters)
    {
      return $this->__soapCall('shippingMultiParcelWithReservation', array($parameters));
    }

    /**
     * @param shippingMultiParcelWithReservationV3 $parameters
     * @return shippingMultiParcelWithReservationV3Response
     */
    public function shippingMultiParcelWithReservationV3(shippingMultiParcelWithReservationV3 $parameters)
    {
      return $this->__soapCall('shippingMultiParcelWithReservationV3', array($parameters));
    }

    /**
     * @param shippingWithReservation $parameters
     * @return shippingWithReservationResponse
     */
    public function shippingWithReservation(shippingWithReservation $parameters)
    {
      return $this->__soapCall('shippingWithReservation', array($parameters));
    }

    /**
     * @param rechercherContraintesEnlevement $parameters
     * @return rechercherContraintesEnlevementResponse
     */
    public function rechercherContraintesEnlevement(rechercherContraintesEnlevement $parameters)
    {
      return $this->__soapCall('rechercherContraintesEnlevement', array($parameters));
    }

    /**
     * @param getReservedSkybillWithTypeAndMode $parameters
     * @return getReservedSkybillWithTypeAndModeResponse
     */
    public function getReservedSkybillWithTypeAndMode(getReservedSkybillWithTypeAndMode $parameters)
    {
      return $this->__soapCall('getReservedSkybillWithTypeAndMode', array($parameters));
    }

    /**
     * @param shippingV4 $parameters
     * @return shippingV4Response
     */
    public function shippingV4(shippingV4 $parameters)
    {
      return $this->__soapCall('shippingV4', array($parameters));
    }

    /**
     * @param shippingWithReservationAndESDWithRefClient $parameters
     * @return shippingWithReservationAndESDWithRefClientResponse
     */
    public function shippingWithReservationAndESDWithRefClient(shippingWithReservationAndESDWithRefClient $parameters)
    {
      return $this->__soapCall('shippingWithReservationAndESDWithRefClient', array($parameters));
    }

    /**
     * @param shippingV5 $parameters
     * @return shippingV5Response
     */
    public function shippingV5(shippingV5 $parameters)
    {
      return $this->__soapCall('shippingV5', array($parameters));
    }

    /**
     * @param shippingWithReservationAndESDWithRefClientPC $parameters
     * @return shippingWithReservationAndESDWithRefClientPCResponse
     */
    public function shippingWithReservationAndESDWithRefClientPC(shippingWithReservationAndESDWithRefClientPC $parameters)
    {
      return $this->__soapCall('shippingWithReservationAndESDWithRefClientPC', array($parameters));
    }

    /**
     * @param shippingMultiParcelWithReservationV2 $parameters
     * @return shippingMultiParcelWithReservationV2Response
     */
    public function shippingMultiParcelWithReservationV2(shippingMultiParcelWithReservationV2 $parameters)
    {
      return $this->__soapCall('shippingMultiParcelWithReservationV2', array($parameters));
    }

    /**
     * @param shippingWithESDOnly $parameters
     * @return shippingWithESDOnlyResponse
     */
    public function shippingWithESDOnly(shippingWithESDOnly $parameters)
    {
      return $this->__soapCall('shippingWithESDOnly', array($parameters));
    }

    /**
     * @param getShippingInformation $parameters
     * @return getShippingInformationResponse
     */
    public function getShippingInformation(getShippingInformation $parameters)
    {
      return $this->__soapCall('getShippingInformation', array($parameters));
    }

}
