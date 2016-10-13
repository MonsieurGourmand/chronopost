<?php
/**
 * File for class ChronopostStructGetReservedSkybillWithTypeResponse
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructGetReservedSkybillWithTypeResponse originally named getReservedSkybillWithTypeResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructGetReservedSkybillWithTypeResponse extends ChronopostWsdlClass
{
	/**
	 * The return
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructResultGetReservedSkybillWithTypeValue
	 */
	public $return;
	/**
	 * Constructor method for getReservedSkybillWithTypeResponse
	 * @see parent::__construct()
	 * @param ChronopostStructResultGetReservedSkybillWithTypeValue $_return
	 * @return ChronopostStructGetReservedSkybillWithTypeResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return ChronopostStructResultGetReservedSkybillWithTypeValue|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param ChronopostStructResultGetReservedSkybillWithTypeValue $_return the return
	 * @return ChronopostStructResultGetReservedSkybillWithTypeValue
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructGetReservedSkybillWithTypeResponse
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