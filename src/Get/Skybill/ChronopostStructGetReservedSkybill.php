<?php
/**
 * File for class ChronopostStructGetReservedSkybill
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructGetReservedSkybill originally named getReservedSkybill
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructGetReservedSkybill extends ChronopostWsdlClass
{
	/**
	 * The reservationNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $reservationNumber;
	/**
	 * Constructor method for getReservedSkybill
	 * @see parent::__construct()
	 * @param string $_reservationNumber
	 * @return ChronopostStructGetReservedSkybill
	 */
	public function __construct($_reservationNumber = NULL)
	{
		parent::__construct(array('reservationNumber'=>$_reservationNumber));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructGetReservedSkybill
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