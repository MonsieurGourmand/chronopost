<?php
/**
 * File for class ChronopostStructShippingWithReservationResponse
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructShippingWithReservationResponse originally named shippingWithReservationResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructShippingWithReservationResponse extends ChronopostWsdlClass
{
	/**
	 * The return
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructResultReservationExpeditionValue
	 */
	public $return;
	/**
	 * Constructor method for shippingWithReservationResponse
	 * @see parent::__construct()
	 * @param ChronopostStructResultReservationExpeditionValue $_return
	 * @return ChronopostStructShippingWithReservationResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return ChronopostStructResultReservationExpeditionValue|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param ChronopostStructResultReservationExpeditionValue $_return the return
	 * @return ChronopostStructResultReservationExpeditionValue
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
	 * @return ChronopostStructShippingWithReservationResponse
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