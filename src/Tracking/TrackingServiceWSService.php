<?php

namespace Chonopost\Tracking;

class TrackingServiceWSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'resultTrackWithSenderRef' => 'Chonopost\\Tracking\\resultTrackWithSenderRef',
      'listEvents' => 'Chonopost\\Tracking\\listEvents',
      'event' => 'Chonopost\\Tracking\\event',
      'resultTrackSearch' => 'Chonopost\\Tracking\\resultTrackSearch',
      'infosPOD' => 'Chonopost\\Tracking\\infosPOD',
      'resultTrackSkybillV2' => 'Chonopost\\Tracking\\resultTrackSkybillV2',
      'listEventInfoComps' => 'Chonopost\\Tracking\\listEventInfoComps',
      'eventInfoComp' => 'Chonopost\\Tracking\\eventInfoComp',
      'infoComp' => 'Chonopost\\Tracking\\infoComp',
      'resultCancelSkybill' => 'Chonopost\\Tracking\\resultCancelSkybill',
      'resultTrackSkybill' => 'Chonopost\\Tracking\\resultTrackSkybill',
      'resultSearchPOD' => 'Chonopost\\Tracking\\resultSearchPOD',
      'resultSearchPODWithSenderRef' => 'Chonopost\\Tracking\\resultSearchPODWithSenderRef',
      'parcelPOD' => 'Chonopost\\Tracking\\parcelPOD',
      'trackWithSenderRef' => 'Chonopost\\Tracking\\trackWithSenderRef',
      'trackWithSenderRefResponse' => 'Chonopost\\Tracking\\trackWithSenderRefResponse',
      'trackSearch' => 'Chonopost\\Tracking\\trackSearch',
      'trackSearchResponse' => 'Chonopost\\Tracking\\trackSearchResponse',
      'trackSkybillV2' => 'Chonopost\\Tracking\\trackSkybillV2',
      'trackSkybillV2Response' => 'Chonopost\\Tracking\\trackSkybillV2Response',
      'cancelSkybill' => 'Chonopost\\Tracking\\cancelSkybill',
      'cancelSkybillResponse' => 'Chonopost\\Tracking\\cancelSkybillResponse',
      'trackSkybill' => 'Chonopost\\Tracking\\trackSkybill',
      'trackSkybillResponse' => 'Chonopost\\Tracking\\trackSkybillResponse',
      'searchPOD' => 'Chonopost\\Tracking\\searchPOD',
      'searchPODResponse' => 'Chonopost\\Tracking\\searchPODResponse',
      'searchPODWithSenderRef' => 'Chonopost\\Tracking\\searchPODWithSenderRef',
      'searchPODWithSenderRefResponse' => 'Chonopost\\Tracking\\searchPODWithSenderRefResponse',
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
