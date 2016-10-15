<?php

namespace Chonopost\Shipping;

class ShippingServiceWSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'shipperValue' => 'Chonopost\\Shipping\\shipperValue',
      'resultFaisabiliteESD' => 'Chonopost\\Shipping\\resultFaisabiliteESD',
      'esdValue' => 'Chonopost\\Shipping\\esdValue',
      'headerValue' => 'Chonopost\\Shipping\\headerValue',
      'customerValue' => 'Chonopost\\Shipping\\customerValue',
      'recipientValue' => 'Chonopost\\Shipping\\recipientValue',
      'refValue' => 'Chonopost\\Shipping\\refValue',
      'skybillValue' => 'Chonopost\\Shipping\\skybillValue',
      'skybillParamsValue' => 'Chonopost\\Shipping\\skybillParamsValue',
      'resultExpeditionValue' => 'Chonopost\\Shipping\\resultExpeditionValue',
      'resultGetReservedSkybillWithTypeValue' => 'Chonopost\\Shipping\\resultGetReservedSkybillWithTypeValue',
      'scheduledValue' => 'Chonopost\\Shipping\\scheduledValue',
      'appointmentValue' => 'Chonopost\\Shipping\\appointmentValue',
      'esdWithRefClientValue' => 'Chonopost\\Shipping\\esdWithRefClientValue',
      'skybillValueV2' => 'Chonopost\\Shipping\\skybillValueV2',
      'resultReservationExpeditionValue' => 'Chonopost\\Shipping\\resultReservationExpeditionValue',
      'resultReservationExpeditionValueV2' => 'Chonopost\\Shipping\\resultReservationExpeditionValueV2',
      'resultGetReservedSkybillValue' => 'Chonopost\\Shipping\\resultGetReservedSkybillValue',
      'skybillWithDimensionsValue' => 'Chonopost\\Shipping\\skybillWithDimensionsValue',
      'resultReservationMultiParcelExpeditionValue' => 'Chonopost\\Shipping\\resultReservationMultiParcelExpeditionValue',
      'resultParcelValue' => 'Chonopost\\Shipping\\resultParcelValue',
      'esdValue3' => 'Chonopost\\Shipping\\esdValue3',
      'skybillWithDimensionsValueV2' => 'Chonopost\\Shipping\\skybillWithDimensionsValueV2',
      'resultReservationMultiParcelExpeditionValueV2' => 'Chonopost\\Shipping\\resultReservationMultiParcelExpeditionValueV2',
      'esdResultContraintesAgenceValue' => 'Chonopost\\Shipping\\esdResultContraintesAgenceValue',
      'esdContraintesAgence' => 'Chonopost\\Shipping\\esdContraintesAgence',
      'skybillValueBase' => 'Chonopost\\Shipping\\skybillValueBase',
      'resultShippingInfo' => 'Chonopost\\Shipping\\resultShippingInfo',
      'error' => 'Chonopost\\Shipping\\error',
      'detail' => 'Chonopost\\Shipping\\detail',
      'shippingInfo' => 'Chonopost\\Shipping\\shippingInfo',
      'faisabiliteESD' => 'Chonopost\\Shipping\\faisabiliteESD',
      'faisabiliteESDResponse' => 'Chonopost\\Shipping\\faisabiliteESDResponse',
      'shippingV2' => 'Chonopost\\Shipping\\shippingV2',
      'shippingV2Response' => 'Chonopost\\Shipping\\shippingV2Response',
      'getReservedSkybillWithType' => 'Chonopost\\Shipping\\getReservedSkybillWithType',
      'getReservedSkybillWithTypeResponse' => 'Chonopost\\Shipping\\getReservedSkybillWithTypeResponse',
      'shippingV3' => 'Chonopost\\Shipping\\shippingV3',
      'shippingV3Response' => 'Chonopost\\Shipping\\shippingV3Response',
      'shippingWithReservationV2' => 'Chonopost\\Shipping\\shippingWithReservationV2',
      'shippingWithReservationV2Response' => 'Chonopost\\Shipping\\shippingWithReservationV2Response',
      'shipping' => 'Chonopost\\Shipping\\shipping',
      'shippingResponse' => 'Chonopost\\Shipping\\shippingResponse',
      'getReservedSkybill' => 'Chonopost\\Shipping\\getReservedSkybill',
      'getReservedSkybillResponse' => 'Chonopost\\Shipping\\getReservedSkybillResponse',
      'shippingMultiParcelWithReservation' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservation',
      'shippingMultiParcelWithReservationResponse' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservationResponse',
      'shippingMultiParcelWithReservationV3' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservationV3',
      'shippingMultiParcelWithReservationV3Response' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservationV3Response',
      'shippingWithReservation' => 'Chonopost\\Shipping\\shippingWithReservation',
      'shippingWithReservationResponse' => 'Chonopost\\Shipping\\shippingWithReservationResponse',
      'rechercherContraintesEnlevement' => 'Chonopost\\Shipping\\rechercherContraintesEnlevement',
      'rechercherContraintesEnlevementResponse' => 'Chonopost\\Shipping\\rechercherContraintesEnlevementResponse',
      'shippingV4' => 'Chonopost\\Shipping\\shippingV4',
      'shippingV4Response' => 'Chonopost\\Shipping\\shippingV4Response',
      'getReservedSkybillWithTypeAndMode' => 'Chonopost\\Shipping\\getReservedSkybillWithTypeAndMode',
      'getReservedSkybillWithTypeAndModeResponse' => 'Chonopost\\Shipping\\getReservedSkybillWithTypeAndModeResponse',
      'shippingWithReservationAndESDWithRefClient' => 'Chonopost\\Shipping\\shippingWithReservationAndESDWithRefClient',
      'shippingWithReservationAndESDWithRefClientResponse' => 'Chonopost\\Shipping\\shippingWithReservationAndESDWithRefClientResponse',
      'shippingWithReservationAndESDWithRefClientPC' => 'Chonopost\\Shipping\\shippingWithReservationAndESDWithRefClientPC',
      'shippingWithReservationAndESDWithRefClientPCResponse' => 'Chonopost\\Shipping\\shippingWithReservationAndESDWithRefClientPCResponse',
      'shippingV5' => 'Chonopost\\Shipping\\shippingV5',
      'shippingV5Response' => 'Chonopost\\Shipping\\shippingV5Response',
      'shippingMultiParcelWithReservationV2' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservationV2',
      'shippingMultiParcelWithReservationV2Response' => 'Chonopost\\Shipping\\shippingMultiParcelWithReservationV2Response',
      'shippingWithESDOnly' => 'Chonopost\\Shipping\\shippingWithESDOnly',
      'shippingWithESDOnlyResponse' => 'Chonopost\\Shipping\\shippingWithESDOnlyResponse',
      'getShippingInformation' => 'Chonopost\\Shipping\\getShippingInformation',
      'getShippingInformationResponse' => 'Chonopost\\Shipping\\getShippingInformationResponse',
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
