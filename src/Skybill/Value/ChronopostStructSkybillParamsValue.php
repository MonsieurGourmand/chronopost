<?php
/**
 * File for class ChronopostStructSkybillParamsValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructSkybillParamsValue originally named skybillParamsValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructSkybillParamsValue extends ChronopostWsdlClass
{
	/**
	 * The mode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $mode;
	/**
	 * Constructor method for skybillParamsValue
	 * @see parent::__construct()
	 * @param string $_mode
	 * @return ChronopostStructSkybillParamsValue
	 */
	public function __construct($_mode = NULL)
	{
		parent::__construct(array('mode'=>$_mode));
	}
	/**
	 * Get mode value
	 * @return string|null
	 */
	public function getMode()
	{
		return $this->mode;
	}
	/**
	 * Set mode value
	 * @param string $_mode the mode
	 * @return string
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructSkybillParamsValue
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