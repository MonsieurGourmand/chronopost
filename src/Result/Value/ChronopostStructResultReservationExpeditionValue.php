<?php
/**
 * File for class ChronopostStructResultReservationExpeditionValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructResultReservationExpeditionValue originally named resultReservationExpeditionValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructResultReservationExpeditionValue extends ChronopostWsdlClass
{
	/**
	 * The codeDepot
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $codeDepot;
	/**
	 * The codeService
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $codeService;
	/**
	 * The DSort
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $DSort;
	/**
	 * The destinationDepot
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $destinationDepot;
	/**
	 * The ESDNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $ESDNumber;
	/**
	 * The errorCode
	 * @var int
	 */
	public $errorCode;
	/**
	 * The errorMessage
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $errorMessage;
	/**
	 * The geoPostCodeBarre
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $geoPostCodeBarre;
	/**
	 * The geoPostNumeroColis
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $geoPostNumeroColis;
	/**
	 * The groupingPriorityLabel
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $groupingPriorityLabel;
	/**
	 * The OSort
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $OSort;
	/**
	 * The pickupDate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $pickupDate;
	/**
	 * The reservationNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $reservationNumber;
	/**
	 * The serviceMark
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $serviceMark;
	/**
	 * The serviceName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $serviceName;
	/**
	 * The signaletiqueProduit
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $signaletiqueProduit;
	/**
	 * The skybillNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $skybillNumber;
	/**
	 * Constructor method for resultReservationExpeditionValue
	 * @see parent::__construct()
	 * @param string $_codeDepot
	 * @param string $_codeService
	 * @param string $_dSort
	 * @param string $_destinationDepot
	 * @param string $_eSDNumber
	 * @param int $_errorCode
	 * @param string $_errorMessage
	 * @param string $_geoPostCodeBarre
	 * @param string $_geoPostNumeroColis
	 * @param string $_groupingPriorityLabel
	 * @param string $_oSort
	 * @param dateTime $_pickupDate
	 * @param string $_reservationNumber
	 * @param string $_serviceMark
	 * @param string $_serviceName
	 * @param string $_signaletiqueProduit
	 * @param string $_skybillNumber
	 * @return ChronopostStructResultReservationExpeditionValue
	 */
	public function __construct($_codeDepot = NULL,$_codeService = NULL,$_dSort = NULL,$_destinationDepot = NULL,$_eSDNumber = NULL,$_errorCode = NULL,$_errorMessage = NULL,$_geoPostCodeBarre = NULL,$_geoPostNumeroColis = NULL,$_groupingPriorityLabel = NULL,$_oSort = NULL,$_pickupDate = NULL,$_reservationNumber = NULL,$_serviceMark = NULL,$_serviceName = NULL,$_signaletiqueProduit = NULL,$_skybillNumber = NULL)
	{
		parent::__construct(array('codeDepot'=>$_codeDepot,'codeService'=>$_codeService,'DSort'=>$_dSort,'destinationDepot'=>$_destinationDepot,'ESDNumber'=>$_eSDNumber,'errorCode'=>$_errorCode,'errorMessage'=>$_errorMessage,'geoPostCodeBarre'=>$_geoPostCodeBarre,'geoPostNumeroColis'=>$_geoPostNumeroColis,'groupingPriorityLabel'=>$_groupingPriorityLabel,'OSort'=>$_oSort,'pickupDate'=>$_pickupDate,'reservationNumber'=>$_reservationNumber,'serviceMark'=>$_serviceMark,'serviceName'=>$_serviceName,'signaletiqueProduit'=>$_signaletiqueProduit,'skybillNumber'=>$_skybillNumber));
	}
	/**
	 * Get codeDepot value
	 * @return string|null
	 */
	public function getCodeDepot()
	{
		return $this->codeDepot;
	}
	/**
	 * Set codeDepot value
	 * @param string $_codeDepot the codeDepot
	 * @return string
	 */
	public function setCodeDepot($_codeDepot)
	{
		return ($this->codeDepot = $_codeDepot);
	}
	/**
	 * Get codeService value
	 * @return string|null
	 */
	public function getCodeService()
	{
		return $this->codeService;
	}
	/**
	 * Set codeService value
	 * @param string $_codeService the codeService
	 * @return string
	 */
	public function setCodeService($_codeService)
	{
		return ($this->codeService = $_codeService);
	}
	/**
	 * Get DSort value
	 * @return string|null
	 */
	public function getDSort()
	{
		return $this->DSort;
	}
	/**
	 * Set DSort value
	 * @param string $_dSort the DSort
	 * @return string
	 */
	public function setDSort($_dSort)
	{
		return ($this->DSort = $_dSort);
	}
	/**
	 * Get destinationDepot value
	 * @return string|null
	 */
	public function getDestinationDepot()
	{
		return $this->destinationDepot;
	}
	/**
	 * Set destinationDepot value
	 * @param string $_destinationDepot the destinationDepot
	 * @return string
	 */
	public function setDestinationDepot($_destinationDepot)
	{
		return ($this->destinationDepot = $_destinationDepot);
	}
	/**
	 * Get ESDNumber value
	 * @return string|null
	 */
	public function getESDNumber()
	{
		return $this->ESDNumber;
	}
	/**
	 * Set ESDNumber value
	 * @param string $_eSDNumber the ESDNumber
	 * @return string
	 */
	public function setESDNumber($_eSDNumber)
	{
		return ($this->ESDNumber = $_eSDNumber);
	}
	/**
	 * Get errorCode value
	 * @return int|null
	 */
	public function getErrorCode()
	{
		return $this->errorCode;
	}
	/**
	 * Set errorCode value
	 * @param int $_errorCode the errorCode
	 * @return int
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->errorCode = $_errorCode);
	}
	/**
	 * Get errorMessage value
	 * @return string|null
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set errorMessage value
	 * @param string $_errorMessage the errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Get geoPostCodeBarre value
	 * @return string|null
	 */
	public function getGeoPostCodeBarre()
	{
		return $this->geoPostCodeBarre;
	}
	/**
	 * Set geoPostCodeBarre value
	 * @param string $_geoPostCodeBarre the geoPostCodeBarre
	 * @return string
	 */
	public function setGeoPostCodeBarre($_geoPostCodeBarre)
	{
		return ($this->geoPostCodeBarre = $_geoPostCodeBarre);
	}
	/**
	 * Get geoPostNumeroColis value
	 * @return string|null
	 */
	public function getGeoPostNumeroColis()
	{
		return $this->geoPostNumeroColis;
	}
	/**
	 * Set geoPostNumeroColis value
	 * @param string $_geoPostNumeroColis the geoPostNumeroColis
	 * @return string
	 */
	public function setGeoPostNumeroColis($_geoPostNumeroColis)
	{
		return ($this->geoPostNumeroColis = $_geoPostNumeroColis);
	}
	/**
	 * Get groupingPriorityLabel value
	 * @return string|null
	 */
	public function getGroupingPriorityLabel()
	{
		return $this->groupingPriorityLabel;
	}
	/**
	 * Set groupingPriorityLabel value
	 * @param string $_groupingPriorityLabel the groupingPriorityLabel
	 * @return string
	 */
	public function setGroupingPriorityLabel($_groupingPriorityLabel)
	{
		return ($this->groupingPriorityLabel = $_groupingPriorityLabel);
	}
	/**
	 * Get OSort value
	 * @return string|null
	 */
	public function getOSort()
	{
		return $this->OSort;
	}
	/**
	 * Set OSort value
	 * @param string $_oSort the OSort
	 * @return string
	 */
	public function setOSort($_oSort)
	{
		return ($this->OSort = $_oSort);
	}
	/**
	 * Get pickupDate value
	 * @return dateTime|null
	 */
	public function getPickupDate()
	{
		return $this->pickupDate;
	}
	/**
	 * Set pickupDate value
	 * @param dateTime $_pickupDate the pickupDate
	 * @return dateTime
	 */
	public function setPickupDate($_pickupDate)
	{
		return ($this->pickupDate = $_pickupDate);
	}
	/**
	 * Get reservationNumber value
	 * @return string|null
	 */
	public function getReservationNumber()
	{
		return $this->reservationNumber;
	}
	/**
	 * Set reservationNumber value
	 * @param string $_reservationNumber the reservationNumber
	 * @return string
	 */
	public function setReservationNumber($_reservationNumber)
	{
		return ($this->reservationNumber = $_reservationNumber);
	}
	/**
	 * Get serviceMark value
	 * @return string|null
	 */
	public function getServiceMark()
	{
		return $this->serviceMark;
	}
	/**
	 * Set serviceMark value
	 * @param string $_serviceMark the serviceMark
	 * @return string
	 */
	public function setServiceMark($_serviceMark)
	{
		return ($this->serviceMark = $_serviceMark);
	}
	/**
	 * Get serviceName value
	 * @return string|null
	 */
	public function getServiceName()
	{
		return $this->serviceName;
	}
	/**
	 * Set serviceName value
	 * @param string $_serviceName the serviceName
	 * @return string
	 */
	public function setServiceName($_serviceName)
	{
		return ($this->serviceName = $_serviceName);
	}
	/**
	 * Get signaletiqueProduit value
	 * @return string|null
	 */
	public function getSignaletiqueProduit()
	{
		return $this->signaletiqueProduit;
	}
	/**
	 * Set signaletiqueProduit value
	 * @param string $_signaletiqueProduit the signaletiqueProduit
	 * @return string
	 */
	public function setSignaletiqueProduit($_signaletiqueProduit)
	{
		return ($this->signaletiqueProduit = $_signaletiqueProduit);
	}
	/**
	 * Get skybillNumber value
	 * @return string|null
	 */
	public function getSkybillNumber()
	{
		return $this->skybillNumber;
	}
	/**
	 * Set skybillNumber value
	 * @param string $_skybillNumber the skybillNumber
	 * @return string
	 */
	public function setSkybillNumber($_skybillNumber)
	{
		return ($this->skybillNumber = $_skybillNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructResultReservationExpeditionValue
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>