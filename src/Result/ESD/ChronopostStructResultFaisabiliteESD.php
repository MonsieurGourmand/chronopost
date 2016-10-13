<?php
/**
 * File for class ChronopostStructResultFaisabiliteESD
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructResultFaisabiliteESD originally named resultFaisabiliteESD
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructResultFaisabiliteESD extends ChronopostWsdlClass
{
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
	 * Constructor method for resultFaisabiliteESD
	 * @see parent::__construct()
	 * @param int $_errorCode
	 * @param string $_errorMessage
	 * @return ChronopostStructResultFaisabiliteESD
	 */
	public function __construct($_errorCode = NULL,$_errorMessage = NULL)
	{
		parent::__construct(array('errorCode'=>$_errorCode,'errorMessage'=>$_errorMessage));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructResultFaisabiliteESD
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