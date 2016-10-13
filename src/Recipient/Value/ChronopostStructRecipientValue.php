<?php
/**
 * File for class ChronopostStructRecipientValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructRecipientValue originally named recipientValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructRecipientValue extends ChronopostWsdlClass
{
	/**
	 * The recipientAdress1
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientAdress1;
	/**
	 * The recipientAdress2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientAdress2;
	/**
	 * The recipientCity
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientCity;
	/**
	 * The recipientContactName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientContactName;
	/**
	 * The recipientCountry
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientCountry;
	/**
	 * The recipientCountryName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientCountryName;
	/**
	 * The recipientEmail
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientEmail;
	/**
	 * The recipientMobilePhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientMobilePhone;
	/**
	 * The recipientName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientName;
	/**
	 * The recipientName2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientName2;
	/**
	 * The recipientPhone
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientPhone;
	/**
	 * The recipientPreAlert
	 * @var int
	 */
	public $recipientPreAlert;
	/**
	 * The recipientZipCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientZipCode;
	/**
	 * Constructor method for recipientValue
	 * @see parent::__construct()
	 * @param string $_recipientAdress1
	 * @param string $_recipientAdress2
	 * @param string $_recipientCity
	 * @param string $_recipientContactName
	 * @param string $_recipientCountry
	 * @param string $_recipientCountryName
	 * @param string $_recipientEmail
	 * @param string $_recipientMobilePhone
	 * @param string $_recipientName
	 * @param string $_recipientName2
	 * @param string $_recipientPhone
	 * @param int $_recipientPreAlert
	 * @param string $_recipientZipCode
	 * @return ChronopostStructRecipientValue
	 */
	public function __construct($_recipientAdress1 = NULL,$_recipientAdress2 = NULL,$_recipientCity = NULL,$_recipientContactName = NULL,$_recipientCountry = NULL,$_recipientCountryName = NULL,$_recipientEmail = NULL,$_recipientMobilePhone = NULL,$_recipientName = NULL,$_recipientName2 = NULL,$_recipientPhone = NULL,$_recipientPreAlert = NULL,$_recipientZipCode = NULL)
	{
		parent::__construct(array('recipientAdress1'=>$_recipientAdress1,'recipientAdress2'=>$_recipientAdress2,'recipientCity'=>$_recipientCity,'recipientContactName'=>$_recipientContactName,'recipientCountry'=>$_recipientCountry,'recipientCountryName'=>$_recipientCountryName,'recipientEmail'=>$_recipientEmail,'recipientMobilePhone'=>$_recipientMobilePhone,'recipientName'=>$_recipientName,'recipientName2'=>$_recipientName2,'recipientPhone'=>$_recipientPhone,'recipientPreAlert'=>$_recipientPreAlert,'recipientZipCode'=>$_recipientZipCode));
	}
	/**
	 * Get recipientAdress1 value
	 * @return string|null
	 */
	public function getRecipientAdress1()
	{
		return $this->recipientAdress1;
	}
	/**
	 * Set recipientAdress1 value
	 * @param string $_recipientAdress1 the recipientAdress1
	 * @return string
	 */
	public function setRecipientAdress1($_recipientAdress1)
	{
		return ($this->recipientAdress1 = $_recipientAdress1);
	}
	/**
	 * Get recipientAdress2 value
	 * @return string|null
	 */
	public function getRecipientAdress2()
	{
		return $this->recipientAdress2;
	}
	/**
	 * Set recipientAdress2 value
	 * @param string $_recipientAdress2 the recipientAdress2
	 * @return string
	 */
	public function setRecipientAdress2($_recipientAdress2)
	{
		return ($this->recipientAdress2 = $_recipientAdress2);
	}
	/**
	 * Get recipientCity value
	 * @return string|null
	 */
	public function getRecipientCity()
	{
		return $this->recipientCity;
	}
	/**
	 * Set recipientCity value
	 * @param string $_recipientCity the recipientCity
	 * @return string
	 */
	public function setRecipientCity($_recipientCity)
	{
		return ($this->recipientCity = $_recipientCity);
	}
	/**
	 * Get recipientContactName value
	 * @return string|null
	 */
	public function getRecipientContactName()
	{
		return $this->recipientContactName;
	}
	/**
	 * Set recipientContactName value
	 * @param string $_recipientContactName the recipientContactName
	 * @return string
	 */
	public function setRecipientContactName($_recipientContactName)
	{
		return ($this->recipientContactName = $_recipientContactName);
	}
	/**
	 * Get recipientCountry value
	 * @return string|null
	 */
	public function getRecipientCountry()
	{
		return $this->recipientCountry;
	}
	/**
	 * Set recipientCountry value
	 * @param string $_recipientCountry the recipientCountry
	 * @return string
	 */
	public function setRecipientCountry($_recipientCountry)
	{
		return ($this->recipientCountry = $_recipientCountry);
	}
	/**
	 * Get recipientCountryName value
	 * @return string|null
	 */
	public function getRecipientCountryName()
	{
		return $this->recipientCountryName;
	}
	/**
	 * Set recipientCountryName value
	 * @param string $_recipientCountryName the recipientCountryName
	 * @return string
	 */
	public function setRecipientCountryName($_recipientCountryName)
	{
		return ($this->recipientCountryName = $_recipientCountryName);
	}
	/**
	 * Get recipientEmail value
	 * @return string|null
	 */
	public function getRecipientEmail()
	{
		return $this->recipientEmail;
	}
	/**
	 * Set recipientEmail value
	 * @param string $_recipientEmail the recipientEmail
	 * @return string
	 */
	public function setRecipientEmail($_recipientEmail)
	{
		return ($this->recipientEmail = $_recipientEmail);
	}
	/**
	 * Get recipientMobilePhone value
	 * @return string|null
	 */
	public function getRecipientMobilePhone()
	{
		return $this->recipientMobilePhone;
	}
	/**
	 * Set recipientMobilePhone value
	 * @param string $_recipientMobilePhone the recipientMobilePhone
	 * @return string
	 */
	public function setRecipientMobilePhone($_recipientMobilePhone)
	{
		return ($this->recipientMobilePhone = $_recipientMobilePhone);
	}
	/**
	 * Get recipientName value
	 * @return string|null
	 */
	public function getRecipientName()
	{
		return $this->recipientName;
	}
	/**
	 * Set recipientName value
	 * @param string $_recipientName the recipientName
	 * @return string
	 */
	public function setRecipientName($_recipientName)
	{
		return ($this->recipientName = $_recipientName);
	}
	/**
	 * Get recipientName2 value
	 * @return string|null
	 */
	public function getRecipientName2()
	{
		return $this->recipientName2;
	}
	/**
	 * Set recipientName2 value
	 * @param string $_recipientName2 the recipientName2
	 * @return string
	 */
	public function setRecipientName2($_recipientName2)
	{
		return ($this->recipientName2 = $_recipientName2);
	}
	/**
	 * Get recipientPhone value
	 * @return string|null
	 */
	public function getRecipientPhone()
	{
		return $this->recipientPhone;
	}
	/**
	 * Set recipientPhone value
	 * @param string $_recipientPhone the recipientPhone
	 * @return string
	 */
	public function setRecipientPhone($_recipientPhone)
	{
		return ($this->recipientPhone = $_recipientPhone);
	}
	/**
	 * Get recipientPreAlert value
	 * @return int|null
	 */
	public function getRecipientPreAlert()
	{
		return $this->recipientPreAlert;
	}
	/**
	 * Set recipientPreAlert value
	 * @param int $_recipientPreAlert the recipientPreAlert
	 * @return int
	 */
	public function setRecipientPreAlert($_recipientPreAlert)
	{
		return ($this->recipientPreAlert = $_recipientPreAlert);
	}
	/**
	 * Get recipientZipCode value
	 * @return string|null
	 */
	public function getRecipientZipCode()
	{
		return $this->recipientZipCode;
	}
	/**
	 * Set recipientZipCode value
	 * @param string $_recipientZipCode the recipientZipCode
	 * @return string
	 */
	public function setRecipientZipCode($_recipientZipCode)
	{
		return ($this->recipientZipCode = $_recipientZipCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructRecipientValue
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