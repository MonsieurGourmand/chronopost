<?php
/**
 * File for class ChronopostStructShipperValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructShipperValue originally named shipperValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructShipperValue extends ChronopostWsdlClass
{
	/**
	 * The shipperAdress1
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperAdress1;
	/**
	 * The shipperAdress2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperAdress2;
	/**
	 * The shipperCity
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperCity;
	/**
	 * The shipperCivility
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperCivility;
	/**
	 * The shipperContactName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperContactName;
	/**
	 * The shipperCountry
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperCountry;
	/**
	 * The shipperCountryName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperCountryName;
	/**
	 * The shipperEmail
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperEmail;
	/**
	 * The shipperMobilePhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperMobilePhone;
	/**
	 * The shipperName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperName;
	/**
	 * The shipperName2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperName2;
	/**
	 * The shipperPhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperPhone;
	/**
	 * The shipperPreAlert
	 * @var int
	 */
	public $shipperPreAlert;
	/**
	 * The shipperZipCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperZipCode;
	/**
	 * Constructor method for shipperValue
	 * @see parent::__construct()
	 * @param string $_shipperAdress1
	 * @param string $_shipperAdress2
	 * @param string $_shipperCity
	 * @param string $_shipperCivility
	 * @param string $_shipperContactName
	 * @param string $_shipperCountry
	 * @param string $_shipperCountryName
	 * @param string $_shipperEmail
	 * @param string $_shipperMobilePhone
	 * @param string $_shipperName
	 * @param string $_shipperName2
	 * @param string $_shipperPhone
	 * @param int $_shipperPreAlert
	 * @param string $_shipperZipCode
	 * @return ChronopostStructShipperValue
	 */
	public function __construct($_shipperAdress1 = NULL,$_shipperAdress2 = NULL,$_shipperCity = NULL,$_shipperCivility = NULL,$_shipperContactName = NULL,$_shipperCountry = NULL,$_shipperCountryName = NULL,$_shipperEmail = NULL,$_shipperMobilePhone = NULL,$_shipperName = NULL,$_shipperName2 = NULL,$_shipperPhone = NULL,$_shipperPreAlert = NULL,$_shipperZipCode = NULL)
	{
		parent::__construct(array('shipperAdress1'=>$_shipperAdress1,'shipperAdress2'=>$_shipperAdress2,'shipperCity'=>$_shipperCity,'shipperCivility'=>$_shipperCivility,'shipperContactName'=>$_shipperContactName,'shipperCountry'=>$_shipperCountry,'shipperCountryName'=>$_shipperCountryName,'shipperEmail'=>$_shipperEmail,'shipperMobilePhone'=>$_shipperMobilePhone,'shipperName'=>$_shipperName,'shipperName2'=>$_shipperName2,'shipperPhone'=>$_shipperPhone,'shipperPreAlert'=>$_shipperPreAlert,'shipperZipCode'=>$_shipperZipCode));
	}
	/**
	 * Get shipperAdress1 value
	 * @return string|null
	 */
	public function getShipperAdress1()
	{
		return $this->shipperAdress1;
	}
	/**
	 * Set shipperAdress1 value
	 * @param string $_shipperAdress1 the shipperAdress1
	 * @return string
	 */
	public function setShipperAdress1($_shipperAdress1)
	{
		return ($this->shipperAdress1 = $_shipperAdress1);
	}
	/**
	 * Get shipperAdress2 value
	 * @return string|null
	 */
	public function getShipperAdress2()
	{
		return $this->shipperAdress2;
	}
	/**
	 * Set shipperAdress2 value
	 * @param string $_shipperAdress2 the shipperAdress2
	 * @return string
	 */
	public function setShipperAdress2($_shipperAdress2)
	{
		return ($this->shipperAdress2 = $_shipperAdress2);
	}
	/**
	 * Get shipperCity value
	 * @return string|null
	 */
	public function getShipperCity()
	{
		return $this->shipperCity;
	}
	/**
	 * Set shipperCity value
	 * @param string $_shipperCity the shipperCity
	 * @return string
	 */
	public function setShipperCity($_shipperCity)
	{
		return ($this->shipperCity = $_shipperCity);
	}
	/**
	 * Get shipperCivility value
	 * @return string|null
	 */
	public function getShipperCivility()
	{
		return $this->shipperCivility;
	}
	/**
	 * Set shipperCivility value
	 * @param string $_shipperCivility the shipperCivility
	 * @return string
	 */
	public function setShipperCivility($_shipperCivility)
	{
		return ($this->shipperCivility = $_shipperCivility);
	}
	/**
	 * Get shipperContactName value
	 * @return string|null
	 */
	public function getShipperContactName()
	{
		return $this->shipperContactName;
	}
	/**
	 * Set shipperContactName value
	 * @param string $_shipperContactName the shipperContactName
	 * @return string
	 */
	public function setShipperContactName($_shipperContactName)
	{
		return ($this->shipperContactName = $_shipperContactName);
	}
	/**
	 * Get shipperCountry value
	 * @return string|null
	 */
	public function getShipperCountry()
	{
		return $this->shipperCountry;
	}
	/**
	 * Set shipperCountry value
	 * @param string $_shipperCountry the shipperCountry
	 * @return string
	 */
	public function setShipperCountry($_shipperCountry)
	{
		return ($this->shipperCountry = $_shipperCountry);
	}
	/**
	 * Get shipperCountryName value
	 * @return string|null
	 */
	public function getShipperCountryName()
	{
		return $this->shipperCountryName;
	}
	/**
	 * Set shipperCountryName value
	 * @param string $_shipperCountryName the shipperCountryName
	 * @return string
	 */
	public function setShipperCountryName($_shipperCountryName)
	{
		return ($this->shipperCountryName = $_shipperCountryName);
	}
	/**
	 * Get shipperEmail value
	 * @return string|null
	 */
	public function getShipperEmail()
	{
		return $this->shipperEmail;
	}
	/**
	 * Set shipperEmail value
	 * @param string $_shipperEmail the shipperEmail
	 * @return string
	 */
	public function setShipperEmail($_shipperEmail)
	{
		return ($this->shipperEmail = $_shipperEmail);
	}
	/**
	 * Get shipperMobilePhone value
	 * @return string|null
	 */
	public function getShipperMobilePhone()
	{
		return $this->shipperMobilePhone;
	}
	/**
	 * Set shipperMobilePhone value
	 * @param string $_shipperMobilePhone the shipperMobilePhone
	 * @return string
	 */
	public function setShipperMobilePhone($_shipperMobilePhone)
	{
		return ($this->shipperMobilePhone = $_shipperMobilePhone);
	}
	/**
	 * Get shipperName value
	 * @return string|null
	 */
	public function getShipperName()
	{
		return $this->shipperName;
	}
	/**
	 * Set shipperName value
	 * @param string $_shipperName the shipperName
	 * @return string
	 */
	public function setShipperName($_shipperName)
	{
		return ($this->shipperName = $_shipperName);
	}
	/**
	 * Get shipperName2 value
	 * @return string|null
	 */
	public function getShipperName2()
	{
		return $this->shipperName2;
	}
	/**
	 * Set shipperName2 value
	 * @param string $_shipperName2 the shipperName2
	 * @return string
	 */
	public function setShipperName2($_shipperName2)
	{
		return ($this->shipperName2 = $_shipperName2);
	}
	/**
	 * Get shipperPhone value
	 * @return string|null
	 */
	public function getShipperPhone()
	{
		return $this->shipperPhone;
	}
	/**
	 * Set shipperPhone value
	 * @param string $_shipperPhone the shipperPhone
	 * @return string
	 */
	public function setShipperPhone($_shipperPhone)
	{
		return ($this->shipperPhone = $_shipperPhone);
	}
	/**
	 * Get shipperPreAlert value
	 * @return int|null
	 */
	public function getShipperPreAlert()
	{
		return $this->shipperPreAlert;
	}
	/**
	 * Set shipperPreAlert value
	 * @param int $_shipperPreAlert the shipperPreAlert
	 * @return int
	 */
	public function setShipperPreAlert($_shipperPreAlert)
	{
		return ($this->shipperPreAlert = $_shipperPreAlert);
	}
	/**
	 * Get shipperZipCode value
	 * @return string|null
	 */
	public function getShipperZipCode()
	{
		return $this->shipperZipCode;
	}
	/**
	 * Set shipperZipCode value
	 * @param string $_shipperZipCode the shipperZipCode
	 * @return string
	 */
	public function setShipperZipCode($_shipperZipCode)
	{
		return ($this->shipperZipCode = $_shipperZipCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructShipperValue
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