<?php
/**
 * File for class ChronopostStructRefValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructRefValue originally named refValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructRefValue extends ChronopostWsdlClass
{
	/**
	 * The customerSkybillNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customerSkybillNumber;
	/**
	 * The PCardTransactionNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $PCardTransactionNumber;
	/**
	 * The recipientRef
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $recipientRef;
	/**
	 * The shipperRef
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $shipperRef;
	/**
	 * Constructor method for refValue
	 * @see parent::__construct()
	 * @param string $_customerSkybillNumber
	 * @param string $_pCardTransactionNumber
	 * @param string $_recipientRef
	 * @param string $_shipperRef
	 * @return ChronopostStructRefValue
	 */
	public function __construct($_customerSkybillNumber = NULL,$_pCardTransactionNumber = NULL,$_recipientRef = NULL,$_shipperRef = NULL)
	{
		parent::__construct(array('customerSkybillNumber'=>$_customerSkybillNumber,'PCardTransactionNumber'=>$_pCardTransactionNumber,'recipientRef'=>$_recipientRef,'shipperRef'=>$_shipperRef));
	}
	/**
	 * Get customerSkybillNumber value
	 * @return string|null
	 */
	public function getCustomerSkybillNumber()
	{
		return $this->customerSkybillNumber;
	}
	/**
	 * Set customerSkybillNumber value
	 * @param string $_customerSkybillNumber the customerSkybillNumber
	 * @return string
	 */
	public function setCustomerSkybillNumber($_customerSkybillNumber)
	{
		return ($this->customerSkybillNumber = $_customerSkybillNumber);
	}
	/**
	 * Get PCardTransactionNumber value
	 * @return string|null
	 */
	public function getPCardTransactionNumber()
	{
		return $this->PCardTransactionNumber;
	}
	/**
	 * Set PCardTransactionNumber value
	 * @param string $_pCardTransactionNumber the PCardTransactionNumber
	 * @return string
	 */
	public function setPCardTransactionNumber($_pCardTransactionNumber)
	{
		return ($this->PCardTransactionNumber = $_pCardTransactionNumber);
	}
	/**
	 * Get recipientRef value
	 * @return string|null
	 */
	public function getRecipientRef()
	{
		return $this->recipientRef;
	}
	/**
	 * Set recipientRef value
	 * @param string $_recipientRef the recipientRef
	 * @return string
	 */
	public function setRecipientRef($_recipientRef)
	{
		return ($this->recipientRef = $_recipientRef);
	}
	/**
	 * Get shipperRef value
	 * @return string|null
	 */
	public function getShipperRef()
	{
		return $this->shipperRef;
	}
	/**
	 * Set shipperRef value
	 * @param string $_shipperRef the shipperRef
	 * @return string
	 */
	public function setShipperRef($_shipperRef)
	{
		return ($this->shipperRef = $_shipperRef);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructRefValue
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