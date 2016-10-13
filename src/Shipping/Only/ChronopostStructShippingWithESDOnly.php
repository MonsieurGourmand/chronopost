<?php
/**
 * File for class ChronopostStructShippingWithESDOnly
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructShippingWithESDOnly originally named shippingWithESDOnly
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructShippingWithESDOnly extends ChronopostWsdlClass
{
	/**
	 * The esdValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructEsdWithRefClientValue
	 */
	public $esdValue;
	/**
	 * The headerValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructHeaderValue
	 */
	public $headerValue;
	/**
	 * The shipperValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructShipperValue
	 */
	public $shipperValue;
	/**
	 * The customerValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructCustomerValue
	 */
	public $customerValue;
	/**
	 * The recipientValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructRecipientValue
	 */
	public $recipientValue;
	/**
	 * The refValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructRefValue
	 */
	public $refValue;
	/**
	 * The skybillValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructSkybillValue
	 */
	public $skybillValue;
	/**
	 * The skybillParamsValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var ChronopostStructSkybillParamsValue
	 */
	public $skybillParamsValue;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $password;
	/**
	 * The modeRetour
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $modeRetour;
	/**
	 * Constructor method for shippingWithESDOnly
	 * @see parent::__construct()
	 * @param ChronopostStructEsdWithRefClientValue $_esdValue
	 * @param ChronopostStructHeaderValue $_headerValue
	 * @param ChronopostStructShipperValue $_shipperValue
	 * @param ChronopostStructCustomerValue $_customerValue
	 * @param ChronopostStructRecipientValue $_recipientValue
	 * @param ChronopostStructRefValue $_refValue
	 * @param ChronopostStructSkybillValue $_skybillValue
	 * @param ChronopostStructSkybillParamsValue $_skybillParamsValue
	 * @param string $_password
	 * @param string $_modeRetour
	 * @return ChronopostStructShippingWithESDOnly
	 */
	public function __construct($_esdValue = NULL,$_headerValue = NULL,$_shipperValue = NULL,$_customerValue = NULL,$_recipientValue = NULL,$_refValue = NULL,$_skybillValue = NULL,$_skybillParamsValue = NULL,$_password = NULL,$_modeRetour = NULL)
	{
		parent::__construct(array('esdValue'=>$_esdValue,'headerValue'=>$_headerValue,'shipperValue'=>$_shipperValue,'customerValue'=>$_customerValue,'recipientValue'=>$_recipientValue,'refValue'=>$_refValue,'skybillValue'=>$_skybillValue,'skybillParamsValue'=>$_skybillParamsValue,'password'=>$_password,'modeRetour'=>$_modeRetour));
	}
	/**
	 * Get esdValue value
	 * @return ChronopostStructEsdWithRefClientValue|null
	 */
	public function getEsdValue()
	{
		return $this->esdValue;
	}
	/**
	 * Set esdValue value
	 * @param ChronopostStructEsdWithRefClientValue $_esdValue the esdValue
	 * @return ChronopostStructEsdWithRefClientValue
	 */
	public function setEsdValue($_esdValue)
	{
		return ($this->esdValue = $_esdValue);
	}
	/**
	 * Get headerValue value
	 * @return ChronopostStructHeaderValue|null
	 */
	public function getHeaderValue()
	{
		return $this->headerValue;
	}
	/**
	 * Set headerValue value
	 * @param ChronopostStructHeaderValue $_headerValue the headerValue
	 * @return ChronopostStructHeaderValue
	 */
	public function setHeaderValue($_headerValue)
	{
		return ($this->headerValue = $_headerValue);
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
	 * Get customerValue value
	 * @return ChronopostStructCustomerValue|null
	 */
	public function getCustomerValue()
	{
		return $this->customerValue;
	}
	/**
	 * Set customerValue value
	 * @param ChronopostStructCustomerValue $_customerValue the customerValue
	 * @return ChronopostStructCustomerValue
	 */
	public function setCustomerValue($_customerValue)
	{
		return ($this->customerValue = $_customerValue);
	}
	/**
	 * Get recipientValue value
	 * @return ChronopostStructRecipientValue|null
	 */
	public function getRecipientValue()
	{
		return $this->recipientValue;
	}
	/**
	 * Set recipientValue value
	 * @param ChronopostStructRecipientValue $_recipientValue the recipientValue
	 * @return ChronopostStructRecipientValue
	 */
	public function setRecipientValue($_recipientValue)
	{
		return ($this->recipientValue = $_recipientValue);
	}
	/**
	 * Get refValue value
	 * @return ChronopostStructRefValue|null
	 */
	public function getRefValue()
	{
		return $this->refValue;
	}
	/**
	 * Set refValue value
	 * @param ChronopostStructRefValue $_refValue the refValue
	 * @return ChronopostStructRefValue
	 */
	public function setRefValue($_refValue)
	{
		return ($this->refValue = $_refValue);
	}
	/**
	 * Get skybillValue value
	 * @return ChronopostStructSkybillValue|null
	 */
	public function getSkybillValue()
	{
		return $this->skybillValue;
	}
	/**
	 * Set skybillValue value
	 * @param ChronopostStructSkybillValue $_skybillValue the skybillValue
	 * @return ChronopostStructSkybillValue
	 */
	public function setSkybillValue($_skybillValue)
	{
		return ($this->skybillValue = $_skybillValue);
	}
	/**
	 * Get skybillParamsValue value
	 * @return ChronopostStructSkybillParamsValue|null
	 */
	public function getSkybillParamsValue()
	{
		return $this->skybillParamsValue;
	}
	/**
	 * Set skybillParamsValue value
	 * @param ChronopostStructSkybillParamsValue $_skybillParamsValue the skybillParamsValue
	 * @return ChronopostStructSkybillParamsValue
	 */
	public function setSkybillParamsValue($_skybillParamsValue)
	{
		return ($this->skybillParamsValue = $_skybillParamsValue);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get modeRetour value
	 * @return string|null
	 */
	public function getModeRetour()
	{
		return $this->modeRetour;
	}
	/**
	 * Set modeRetour value
	 * @param string $_modeRetour the modeRetour
	 * @return string
	 */
	public function setModeRetour($_modeRetour)
	{
		return ($this->modeRetour = $_modeRetour);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructShippingWithESDOnly
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