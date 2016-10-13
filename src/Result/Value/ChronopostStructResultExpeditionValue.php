<?php
/**
 * File for class ChronopostStructResultExpeditionValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructResultExpeditionValue originally named resultExpeditionValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructResultExpeditionValue extends ChronopostWsdlClass
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
	 * The skybill
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var base64Binary
	 */
	public $skybill;
	/**
	 * The skybillNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $skybillNumber;
	/**
	 * Constructor method for resultExpeditionValue
	 * @see parent::__construct()
	 * @param string $_eSDNumber
	 * @param int $_errorCode
	 * @param string $_errorMessage
	 * @param dateTime $_pickupDate
	 * @param base64Binary $_skybill
	 * @param string $_skybillNumber
	 * @return ChronopostStructResultExpeditionValue
	 */
	public function __construct($_eSDNumber = NULL,$_errorCode = NULL,$_errorMessage = NULL,$_pickupDate = NULL,$_skybill = NULL,$_skybillNumber = NULL)
	{
		parent::__construct(array('ESDNumber'=>$_eSDNumber,'errorCode'=>$_errorCode,'errorMessage'=>$_errorMessage,'pickupDate'=>$_pickupDate,'skybill'=>$_skybill,'skybillNumber'=>$_skybillNumber));
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
	 * Get skybill value
	 * @return base64Binary|null
	 */
	public function getSkybill()
	{
		return $this->skybill;
	}
	/**
	 * Set skybill value
	 * @param base64Binary $_skybill the skybill
	 * @return base64Binary
	 */
	public function setSkybill($_skybill)
	{
		return ($this->skybill = $_skybill);
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
	 * @return ChronopostStructResultExpeditionValue
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