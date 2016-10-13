<?php
/**
 * File for class ChronopostStructHeaderValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructHeaderValue originally named headerValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructHeaderValue extends ChronopostWsdlClass
{
	/**
	 * The accountNumber
	 * @var int
	 */
	public $accountNumber;
	/**
	 * The idEmit
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $idEmit;
	/**
	 * The identWebPro
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $identWebPro;
	/**
	 * The subAccount
	 * @var int
	 */
	public $subAccount;
	/**
	 * Constructor method for headerValue
	 * @see parent::__construct()
	 * @param int $_accountNumber
	 * @param string $_idEmit
	 * @param string $_identWebPro
	 * @param int $_subAccount
	 * @return ChronopostStructHeaderValue
	 */
	public function __construct($_accountNumber = NULL,$_idEmit = NULL,$_identWebPro = NULL,$_subAccount = NULL)
	{
		parent::__construct(array('accountNumber'=>$_accountNumber,'idEmit'=>$_idEmit,'identWebPro'=>$_identWebPro,'subAccount'=>$_subAccount));
	}
	/**
	 * Get accountNumber value
	 * @return int|null
	 */
	public function getAccountNumber()
	{
		return $this->accountNumber;
	}
	/**
	 * Set accountNumber value
	 * @param int $_accountNumber the accountNumber
	 * @return int
	 */
	public function setAccountNumber($_accountNumber)
	{
		return ($this->accountNumber = $_accountNumber);
	}
	/**
	 * Get idEmit value
	 * @return string|null
	 */
	public function getIdEmit()
	{
		return $this->idEmit;
	}
	/**
	 * Set idEmit value
	 * @param string $_idEmit the idEmit
	 * @return string
	 */
	public function setIdEmit($_idEmit)
	{
		return ($this->idEmit = $_idEmit);
	}
	/**
	 * Get identWebPro value
	 * @return string|null
	 */
	public function getIdentWebPro()
	{
		return $this->identWebPro;
	}
	/**
	 * Set identWebPro value
	 * @param string $_identWebPro the identWebPro
	 * @return string
	 */
	public function setIdentWebPro($_identWebPro)
	{
		return ($this->identWebPro = $_identWebPro);
	}
	/**
	 * Get subAccount value
	 * @return int|null
	 */
	public function getSubAccount()
	{
		return $this->subAccount;
	}
	/**
	 * Set subAccount value
	 * @param int $_subAccount the subAccount
	 * @return int
	 */
	public function setSubAccount($_subAccount)
	{
		return ($this->subAccount = $_subAccount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructHeaderValue
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