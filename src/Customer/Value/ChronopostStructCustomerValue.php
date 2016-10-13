<?php
/**
 * File for class ChronopostStructCustomerValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructCustomerValue originally named customerValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructCustomerValue extends ChronopostWsdlClass
{
	/**
	 * The customerAdress1
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerAdress1;
	/**
	 * The customerAdress2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerAdress2;
	/**
	 * The customerCity
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerCity;
	/**
	 * The customerCivility
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerCivility;
	/**
	 * The customerContactName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerContactName;
	/**
	 * The customerCountry
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerCountry;
	/**
	 * The customerCountryName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerCountryName;
	/**
	 * The customerEmail
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerEmail;
	/**
	 * The customerMobilePhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerMobilePhone;
	/**
	 * The customerName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerName;
	/**
	 * The customerName2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerName2;
	/**
	 * The customerPhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerPhone;
	/**
	 * The customerPreAlert
	 * @var int
	 */
	public $customerPreAlert;
	/**
	 * The customerZipCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerZipCode;
	/**
	 * Constructor method for customerValue
	 * @see parent::__construct()
	 * @param string $_customerAdress1
	 * @param string $_customerAdress2
	 * @param string $_customerCity
	 * @param string $_customerCivility
	 * @param string $_customerContactName
	 * @param string $_customerCountry
	 * @param string $_customerCountryName
	 * @param string $_customerEmail
	 * @param string $_customerMobilePhone
	 * @param string $_customerName
	 * @param string $_customerName2
	 * @param string $_customerPhone
	 * @param int $_customerPreAlert
	 * @param string $_customerZipCode
	 * @return ChronopostStructCustomerValue
	 */
	public function __construct($_customerAdress1 = NULL,$_customerAdress2 = NULL,$_customerCity = NULL,$_customerCivility = NULL,$_customerContactName = NULL,$_customerCountry = NULL,$_customerCountryName = NULL,$_customerEmail = NULL,$_customerMobilePhone = NULL,$_customerName = NULL,$_customerName2 = NULL,$_customerPhone = NULL,$_customerPreAlert = NULL,$_customerZipCode = NULL)
	{
		parent::__construct(array('customerAdress1'=>$_customerAdress1,'customerAdress2'=>$_customerAdress2,'customerCity'=>$_customerCity,'customerCivility'=>$_customerCivility,'customerContactName'=>$_customerContactName,'customerCountry'=>$_customerCountry,'customerCountryName'=>$_customerCountryName,'customerEmail'=>$_customerEmail,'customerMobilePhone'=>$_customerMobilePhone,'customerName'=>$_customerName,'customerName2'=>$_customerName2,'customerPhone'=>$_customerPhone,'customerPreAlert'=>$_customerPreAlert,'customerZipCode'=>$_customerZipCode));
	}
	/**
	 * Get customerAdress1 value
	 * @return string|null
	 */
	public function getCustomerAdress1()
	{
		return $this->customerAdress1;
	}
	/**
	 * Set customerAdress1 value
	 * @param string $_customerAdress1 the customerAdress1
	 * @return string
	 */
	public function setCustomerAdress1($_customerAdress1)
	{
		return ($this->customerAdress1 = $_customerAdress1);
	}
	/**
	 * Get customerAdress2 value
	 * @return string|null
	 */
	public function getCustomerAdress2()
	{
		return $this->customerAdress2;
	}
	/**
	 * Set customerAdress2 value
	 * @param string $_customerAdress2 the customerAdress2
	 * @return string
	 */
	public function setCustomerAdress2($_customerAdress2)
	{
		return ($this->customerAdress2 = $_customerAdress2);
	}
	/**
	 * Get customerCity value
	 * @return string|null
	 */
	public function getCustomerCity()
	{
		return $this->customerCity;
	}
	/**
	 * Set customerCity value
	 * @param string $_customerCity the customerCity
	 * @return string
	 */
	public function setCustomerCity($_customerCity)
	{
		return ($this->customerCity = $_customerCity);
	}
	/**
	 * Get customerCivility value
	 * @return string|null
	 */
	public function getCustomerCivility()
	{
		return $this->customerCivility;
	}
	/**
	 * Set customerCivility value
	 * @param string $_customerCivility the customerCivility
	 * @return string
	 */
	public function setCustomerCivility($_customerCivility)
	{
		return ($this->customerCivility = $_customerCivility);
	}
	/**
	 * Get customerContactName value
	 * @return string|null
	 */
	public function getCustomerContactName()
	{
		return $this->customerContactName;
	}
	/**
	 * Set customerContactName value
	 * @param string $_customerContactName the customerContactName
	 * @return string
	 */
	public function setCustomerContactName($_customerContactName)
	{
		return ($this->customerContactName = $_customerContactName);
	}
	/**
	 * Get customerCountry value
	 * @return string|null
	 */
	public function getCustomerCountry()
	{
		return $this->customerCountry;
	}
	/**
	 * Set customerCountry value
	 * @param string $_customerCountry the customerCountry
	 * @return string
	 */
	public function setCustomerCountry($_customerCountry)
	{
		return ($this->customerCountry = $_customerCountry);
	}
	/**
	 * Get customerCountryName value
	 * @return string|null
	 */
	public function getCustomerCountryName()
	{
		return $this->customerCountryName;
	}
	/**
	 * Set customerCountryName value
	 * @param string $_customerCountryName the customerCountryName
	 * @return string
	 */
	public function setCustomerCountryName($_customerCountryName)
	{
		return ($this->customerCountryName = $_customerCountryName);
	}
	/**
	 * Get customerEmail value
	 * @return string|null
	 */
	public function getCustomerEmail()
	{
		return $this->customerEmail;
	}
	/**
	 * Set customerEmail value
	 * @param string $_customerEmail the customerEmail
	 * @return string
	 */
	public function setCustomerEmail($_customerEmail)
	{
		return ($this->customerEmail = $_customerEmail);
	}
	/**
	 * Get customerMobilePhone value
	 * @return string|null
	 */
	public function getCustomerMobilePhone()
	{
		return $this->customerMobilePhone;
	}
	/**
	 * Set customerMobilePhone value
	 * @param string $_customerMobilePhone the customerMobilePhone
	 * @return string
	 */
	public function setCustomerMobilePhone($_customerMobilePhone)
	{
		return ($this->customerMobilePhone = $_customerMobilePhone);
	}
	/**
	 * Get customerName value
	 * @return string|null
	 */
	public function getCustomerName()
	{
		return $this->customerName;
	}
	/**
	 * Set customerName value
	 * @param string $_customerName the customerName
	 * @return string
	 */
	public function setCustomerName($_customerName)
	{
		return ($this->customerName = $_customerName);
	}
	/**
	 * Get customerName2 value
	 * @return string|null
	 */
	public function getCustomerName2()
	{
		return $this->customerName2;
	}
	/**
	 * Set customerName2 value
	 * @param string $_customerName2 the customerName2
	 * @return string
	 */
	public function setCustomerName2($_customerName2)
	{
		return ($this->customerName2 = $_customerName2);
	}
	/**
	 * Get customerPhone value
	 * @return string|null
	 */
	public function getCustomerPhone()
	{
		return $this->customerPhone;
	}
	/**
	 * Set customerPhone value
	 * @param string $_customerPhone the customerPhone
	 * @return string
	 */
	public function setCustomerPhone($_customerPhone)
	{
		return ($this->customerPhone = $_customerPhone);
	}
	/**
	 * Get customerPreAlert value
	 * @return int|null
	 */
	public function getCustomerPreAlert()
	{
		return $this->customerPreAlert;
	}
	/**
	 * Set customerPreAlert value
	 * @param int $_customerPreAlert the customerPreAlert
	 * @return int
	 */
	public function setCustomerPreAlert($_customerPreAlert)
	{
		return ($this->customerPreAlert = $_customerPreAlert);
	}
	/**
	 * Get customerZipCode value
	 * @return string|null
	 */
	public function getCustomerZipCode()
	{
		return $this->customerZipCode;
	}
	/**
	 * Set customerZipCode value
	 * @param string $_customerZipCode the customerZipCode
	 * @return string
	 */
	public function setCustomerZipCode($_customerZipCode)
	{
		return ($this->customerZipCode = $_customerZipCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructCustomerValue
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