<?php
/**
 * File for class ChronopostStructEsdValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructEsdValue originally named esdValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructEsdValue extends ChronopostWsdlClass
{
	/**
	 * The closingDateTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $closingDateTime;
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
	 * The retrievalDateTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $retrievalDateTime;
	/**
	 * The shipperBuildingFloor
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperBuildingFloor;
	/**
	 * The shipperCarriesCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperCarriesCode;
	/**
	 * The shipperServiceDirection
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperServiceDirection;
	/**
	 * The specificInstructions
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $specificInstructions;
	/**
	 * The width
	 * @var float
	 */
	public $width;
	/**
	 * Constructor method for esdValue
	 * @see parent::__construct()
	 * @param dateTime $_closingDateTime
	 * @param float $_height
	 * @param float $_length
	 * @param dateTime $_retrievalDateTime
	 * @param string $_shipperBuildingFloor
	 * @param string $_shipperCarriesCode
	 * @param string $_shipperServiceDirection
	 * @param string $_specificInstructions
	 * @param float $_width
	 * @return ChronopostStructEsdValue
	 */
	public function __construct($_closingDateTime = NULL,$_height = NULL,$_length = NULL,$_retrievalDateTime = NULL,$_shipperBuildingFloor = NULL,$_shipperCarriesCode = NULL,$_shipperServiceDirection = NULL,$_specificInstructions = NULL,$_width = NULL)
	{
		parent::__construct(array('closingDateTime'=>$_closingDateTime,'height'=>$_height,'length'=>$_length,'retrievalDateTime'=>$_retrievalDateTime,'shipperBuildingFloor'=>$_shipperBuildingFloor,'shipperCarriesCode'=>$_shipperCarriesCode,'shipperServiceDirection'=>$_shipperServiceDirection,'specificInstructions'=>$_specificInstructions,'width'=>$_width));
	}
	/**
	 * Get closingDateTime value
	 * @return dateTime|null
	 */
	public function getClosingDateTime()
	{
		return $this->closingDateTime;
	}
	/**
	 * Set closingDateTime value
	 * @param dateTime $_closingDateTime the closingDateTime
	 * @return dateTime
	 */
	public function setClosingDateTime($_closingDateTime)
	{
		return ($this->closingDateTime = $_closingDateTime);
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
	 * Get retrievalDateTime value
	 * @return dateTime|null
	 */
	public function getRetrievalDateTime()
	{
		return $this->retrievalDateTime;
	}
	/**
	 * Set retrievalDateTime value
	 * @param dateTime $_retrievalDateTime the retrievalDateTime
	 * @return dateTime
	 */
	public function setRetrievalDateTime($_retrievalDateTime)
	{
		return ($this->retrievalDateTime = $_retrievalDateTime);
	}
	/**
	 * Get shipperBuildingFloor value
	 * @return string|null
	 */
	public function getShipperBuildingFloor()
	{
		return $this->shipperBuildingFloor;
	}
	/**
	 * Set shipperBuildingFloor value
	 * @param string $_shipperBuildingFloor the shipperBuildingFloor
	 * @return string
	 */
	public function setShipperBuildingFloor($_shipperBuildingFloor)
	{
		return ($this->shipperBuildingFloor = $_shipperBuildingFloor);
	}
	/**
	 * Get shipperCarriesCode value
	 * @return string|null
	 */
	public function getShipperCarriesCode()
	{
		return $this->shipperCarriesCode;
	}
	/**
	 * Set shipperCarriesCode value
	 * @param string $_shipperCarriesCode the shipperCarriesCode
	 * @return string
	 */
	public function setShipperCarriesCode($_shipperCarriesCode)
	{
		return ($this->shipperCarriesCode = $_shipperCarriesCode);
	}
	/**
	 * Get shipperServiceDirection value
	 * @return string|null
	 */
	public function getShipperServiceDirection()
	{
		return $this->shipperServiceDirection;
	}
	/**
	 * Set shipperServiceDirection value
	 * @param string $_shipperServiceDirection the shipperServiceDirection
	 * @return string
	 */
	public function setShipperServiceDirection($_shipperServiceDirection)
	{
		return ($this->shipperServiceDirection = $_shipperServiceDirection);
	}
	/**
	 * Get specificInstructions value
	 * @return string|null
	 */
	public function getSpecificInstructions()
	{
		return $this->specificInstructions;
	}
	/**
	 * Set specificInstructions value
	 * @param string $_specificInstructions the specificInstructions
	 * @return string
	 */
	public function setSpecificInstructions($_specificInstructions)
	{
		return ($this->specificInstructions = $_specificInstructions);
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
	 * @return ChronopostStructEsdValue
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