<?php
/**
 * File for class ChronopostStructFaisabiliteESD
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructFaisabiliteESD originally named faisabiliteESD
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructFaisabiliteESD extends ChronopostWsdlClass
{
	/**
	 * The shipperValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructShipperValue
	 */
	public $shipperValue;
	/**
	 * The retrievalDateTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $retrievalDateTime;
	/**
	 * The closingDateTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $closingDateTime;
	/**
	 * Constructor method for faisabiliteESD
	 * @see parent::__construct()
	 * @param ChronopostStructShipperValue $_shipperValue
	 * @param dateTime $_retrievalDateTime
	 * @param dateTime $_closingDateTime
	 * @return ChronopostStructFaisabiliteESD
	 */
	public function __construct($_shipperValue = NULL,$_retrievalDateTime = NULL,$_closingDateTime = NULL)
	{
		parent::__construct(array('shipperValue'=>$_shipperValue,'retrievalDateTime'=>$_retrievalDateTime,'closingDateTime'=>$_closingDateTime));
	}
	/**
	 * Get shipperValue value
	 * @return ChronopostStructShipperValue|null
	 */
	public function getShipperValue()
	{
		return $this->shipperValue;
	}
	/**
	 * Set shipperValue value
	 * @param ChronopostStructShipperValue $_shipperValue the shipperValue
	 * @return ChronopostStructShipperValue
	 */
	public function setShipperValue($_shipperValue)
	{
		return ($this->shipperValue = $_shipperValue);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructFaisabiliteESD
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