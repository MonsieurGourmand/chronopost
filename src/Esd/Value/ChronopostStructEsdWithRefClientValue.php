<?php
/**
 * File for class ChronopostStructEsdWithRefClientValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructEsdWithRefClientValue originally named esdWithRefClientValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructEsdWithRefClientValue extends ChronopostStructEsdValue
{
	/**
	 * The ltAImprimerParChronopost
	 * @var boolean
	 */
	public $ltAImprimerParChronopost;
	/**
	 * The nombreDePassageMaximum
	 * @var int
	 */
	public $nombreDePassageMaximum;
	/**
	 * The refEsdClient
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $refEsdClient;
	/**
	 * Constructor method for esdWithRefClientValue
	 * @see parent::__construct()
	 * @param boolean $_ltAImprimerParChronopost
	 * @param int $_nombreDePassageMaximum
	 * @param string $_refEsdClient
	 * @return ChronopostStructEsdWithRefClientValue
	 */
	public function __construct($_ltAImprimerParChronopost = NULL,$_nombreDePassageMaximum = NULL,$_refEsdClient = NULL)
	{
		ChronopostWsdlClass::__construct(array('ltAImprimerParChronopost'=>$_ltAImprimerParChronopost,'nombreDePassageMaximum'=>$_nombreDePassageMaximum,'refEsdClient'=>$_refEsdClient));
	}
	/**
	 * Get ltAImprimerParChronopost value
	 * @return boolean|null
	 */
	public function getLtAImprimerParChronopost()
	{
		return $this->ltAImprimerParChronopost;
	}
	/**
	 * Set ltAImprimerParChronopost value
	 * @param boolean $_ltAImprimerParChronopost the ltAImprimerParChronopost
	 * @return boolean
	 */
	public function setLtAImprimerParChronopost($_ltAImprimerParChronopost)
	{
		return ($this->ltAImprimerParChronopost = $_ltAImprimerParChronopost);
	}
	/**
	 * Get nombreDePassageMaximum value
	 * @return int|null
	 */
	public function getNombreDePassageMaximum()
	{
		return $this->nombreDePassageMaximum;
	}
	/**
	 * Set nombreDePassageMaximum value
	 * @param int $_nombreDePassageMaximum the nombreDePassageMaximum
	 * @return int
	 */
	public function setNombreDePassageMaximum($_nombreDePassageMaximum)
	{
		return ($this->nombreDePassageMaximum = $_nombreDePassageMaximum);
	}
	/**
	 * Get refEsdClient value
	 * @return string|null
	 */
	public function getRefEsdClient()
	{
		return $this->refEsdClient;
	}
	/**
	 * Set refEsdClient value
	 * @param string $_refEsdClient the refEsdClient
	 * @return string
	 */
	public function setRefEsdClient($_refEsdClient)
	{
		return ($this->refEsdClient = $_refEsdClient);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructEsdWithRefClientValue
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