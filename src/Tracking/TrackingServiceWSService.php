<?php

namespace Chronopost\Tracking;

class TrackingServiceWSService extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'resultTrackWithSenderRef' => 'Chronopost\\Tracking\\resultTrackWithSenderRef',
      'listEvents' => 'Chronopost\\Tracking\\listEvents',
      'event' => 'Chronopost\\Tracking\\event',
      'resultTrackSearch' => 'Chronopost\\Tracking\\resultTrackSearch',
      'infosPOD' => 'Chronopost\\Tracking\\infosPOD',
      'resultTrackSkybillV2' => 'Chronopost\\Tracking\\resultTrackSkybillV2',
      'listEventInfoComps' => 'Chronopost\\Tracking\\listEventInfoComps',
      'eventInfoComp' => 'Chronopost\\Tracking\\eventInfoComp',
      'infoComp' => 'Chronopost\\Tracking\\infoComp',
      'resultCancelSkybill' => 'Chronopost\\Tracking\\resultCancelSkybill',
      'resultTrackSkybill' => 'Chronopost\\Tracking\\resultTrackSkybill',
      'resultSearchPOD' => 'Chronopost\\Tracking\\resultSearchPOD',
      'resultSearchPODWithSenderRef' => 'Chronopost\\Tracking\\resultSearchPODWithSenderRef',
      'parcelPOD' => 'Chronopost\\Tracking\\parcelPOD',
      'trackWithSenderRef' => 'Chronopost\\Tracking\\trackWithSenderRef',
      'trackWithSenderRefResponse' => 'Chronopost\\Tracking\\trackWithSenderRefResponse',
      'trackSearch' => 'Chronopost\\Tracking\\trackSearch',
      'trackSearchResponse' => 'Chronopost\\Tracking\\trackSearchResponse',
      'trackSkybillV2' => 'Chronopost\\Tracking\\trackSkybillV2',
      'trackSkybillV2Response' => 'Chronopost\\Tracking\\trackSkybillV2Response',
      'cancelSkybill' => 'Chronopost\\Tracking\\cancelSkybill',
      'cancelSkybillResponse' => 'Chronopost\\Tracking\\cancelSkybillResponse',
      'trackSkybill' => 'Chronopost\\Tracking\\trackSkybill',
      'trackSkybillResponse' => 'Chronopost\\Tracking\\trackSkybillResponse',
      'searchPOD' => 'Chronopost\\Tracking\\searchPOD',
      'searchPODResponse' => 'Chronopost\\Tracking\\searchPODResponse',
      'searchPODWithSenderRef' => 'Chronopost\\Tracking\\searchPODWithSenderRef',
      'searchPODWithSenderRefResponse' => 'Chronopost\\Tracking\\searchPODWithSenderRefResponse',
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
        $wsdl = 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param trackWithSenderRef $parameters
     * @return trackWithSenderRefResponse
     */
    public function trackWithSenderRef(trackWithSenderRef $parameters)
    {
      return $this->__soapCall('trackWithSenderRef', array($parameters));
    }

    /**
     * @param trackSearch $parameters
     * @return trackSearchResponse
     */
    public function trackSearch(trackSearch $parameters)
    {
      return $this->__soapCall('trackSearch', array($parameters));
    }

    /**
     * @param trackSkybillV2 $parameters
     * @return trackSkybillV2Response
     */
    public function trackSkybillV2(trackSkybillV2 $parameters)
    {
      return $this->__soapCall('trackSkybillV2', array($parameters));
    }

    /**
     * @param cancelSkybill $parameters
     * @return cancelSkybillResponse
     */
    public function cancelSkybill(cancelSkybill $parameters)
    {
      return $this->__soapCall('cancelSkybill', array($parameters));
    }

    /**
     * @param trackSkybill $parameters
     * @return trackSkybillResponse
     */
    public function trackSkybill(trackSkybill $parameters)
    {
      return $this->__soapCall('trackSkybill', array($parameters));
    }

    /**
     * @param searchPOD $parameters
     * @return searchPODResponse
     */
    public function searchPOD(searchPOD $parameters)
    {
      return $this->__soapCall('searchPOD', array($parameters));
    }

    /**
     * @param searchPODWithSenderRef $parameters
     * @return searchPODWithSenderRefResponse
     */
    public function searchPODWithSenderRef(searchPODWithSenderRef $parameters)
    {
      return $this->__soapCall('searchPODWithSenderRef', array($parameters));
    }

}
