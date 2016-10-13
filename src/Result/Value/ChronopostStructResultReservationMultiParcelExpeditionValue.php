<?php
/**
 * File for class ChronopostStructResultReservationMultiParcelExpeditionValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructResultReservationMultiParcelExpeditionValue originally named resultReservationMultiParcelExpeditionValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructResultReservationMultiParcelExpeditionValue extends ChronopostWsdlClass
{
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
	 * The resultParcelValue
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var ChronopostStructResultParcelValue
	 */
	public $resultParcelValue;
	/**
	 * Constructor method for resultReservationMultiParcelExpeditionValue
	 * @see parent::__construct()
	 * @param string $_eSDNumber
	 * @param int $_errorCode
	 * @param string $_errorMessage
	 * @param dateTime $_pickupDate
	 * @param string $_reservationNumber
	 * @param ChronopostStructResultParcelValue $_resultParcelValue
	 * @return ChronopostStructResultReservationMultiParcelExpeditionValue
	 */
	public function __construct($_eSDNumber = NULL,$_errorCode = NULL,$_errorMessage = NULL,$_pickupDate = NULL,$_reservationNumber = NULL,$_resultParcelValue = NULL)
	{
		parent::__construct(array('ESDNumber'=>$_eSDNumber,'errorCode'=>$_errorCode,'errorMessage'=>$_errorMessage,'pickupDate'=>$_pickupDate,'reservationNumber'=>$_reservationNumber,'resultParcelValue'=>$_resultParcelValue));
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
	 * Get resultParcelValue value
	 * @return ChronopostStructResultParcelValue|null
	 */
	public function getResultParcelValue()
	{
		return $this->resultParcelValue;
	}
	/**
	 * Set resultParcelValue value
	 * @param ChronopostStructResultParcelValue $_resultParcelValue the resultParcelValue
	 * @return ChronopostStructResultParcelValue
	 */
	public function setResultParcelValue($_resultParcelValue)
	{
		return ($this->resultParcelValue = $_resultParcelValue);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructResultReservationMultiParcelExpeditionValue
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