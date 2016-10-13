<?php
/**
 * File for class ChronopostStructSkybillWithDimensionsValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructSkybillWithDimensionsValue originally named skybillWithDimensionsValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructSkybillWithDimensionsValue extends ChronopostStructSkybillValue
{
	/**
	 * The height
	 * @var float
	 */
	public $height;
	/**
	 * The length
	 * @var float
	 */
	public $length;
	/**
	 * The width
	 * @var float
	 */
	public $width;
	/**
	 * Constructor method for skybillWithDimensionsValue
	 * @see parent::__construct()
	 * @param float $_height
	 * @param float $_length
	 * @param float $_width
	 * @return ChronopostStructSkybillWithDimensionsValue
	 */
	public function __construct($_height = NULL,$_length = NULL,$_width = NULL)
	{
		ChronopostWsdlClass::__construct(array('height'=>$_height,'length'=>$_length,'width'=>$_width));
	}
	/**
	 * Get height value
	 * @return float|null
	 */
	public function getHeight()
	{
		return $this->height;
	}
	/**
	 * Set height value
	 * @param float $_height the height
	 * @return float
	 */
	public function setHeight($_height)
	{
		return ($this->height = $_height);
	}
	/**
	 * Get length value
	 * @return float|null
	 */
	public function getLength()
	{
		return $this->length;
	}
	/**
	 * Set length value
	 * @param float $_length the length
	 * @return float
	 */
	public function setLength($_length)
	{
		return ($this->length = $_length);
	}
	/**
	 * Get width value
	 * @return float|null
	 */
	public function getWidth()
	{
		return $this->width;
	}
	/**
	 * Set width value
	 * @param float $_width the width
	 * @return float
	 */
	public function setWidth($_width)
	{
		return ($this->width = $_width);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructSkybillWithDimensionsValue
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