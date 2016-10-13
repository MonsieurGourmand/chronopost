<?php
/**
 * File for class ChronopostStructSkybillValue
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostStructSkybillValue originally named skybillValue
 * Meta informations extracted from the WSDL
 * - from schema : https://www.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl
 * @package Chronopost
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostStructSkybillValue extends ChronopostWsdlClass
{
	/**
	 * The bulkNumber
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $bulkNumber;
	/**
	 * The codCurrency
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $codCurrency;
	/**
	 * The codValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $codValue;
	/**
	 * The content1
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $content1;
	/**
	 * The content2
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $content2;
	/**
	 * The content3
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $content3;
	/**
	 * The content4
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $content4;
	/**
	 * The content5
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $content5;
	/**
	 * The customsCurrency
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $customsCurrency;
	/**
	 * The customsValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $customsValue;
	/**
	 * The evtCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $evtCode;
	/**
	 * The insuredCurrency
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $insuredCurrency;
	/**
	 * The insuredValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $insuredValue;
	/**
	 * The objectType
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $objectType;
	/**
	 * The portCurrency
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $portCurrency;
	/**
	 * The portValue
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $portValue;
	/**
	 * The productCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $productCode;
	/**
	 * The service
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $service;
	/**
	 * The shipDate
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $shipDate;
	/**
	 * The shipHour
	 * @var int
	 */
	public $shipHour;
	/**
	 * The skybillRank
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $skybillRank;
	/**
	 * The weight
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var float
	 */
	public $weight;
	/**
	 * The weightUnit
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $weightUnit;
	/**
	 * Constructor method for skybillValue
	 * @see parent::__construct()
	 * @param string $_bulkNumber
	 * @param string $_codCurrency
	 * @param float $_codValue
	 * @param string $_content1
	 * @param string $_content2
	 * @param string $_content3
	 * @param string $_content4
	 * @param string $_content5
	 * @param string $_customsCurrency
	 * @param float $_customsValue
	 * @param string $_evtCode
	 * @param string $_insuredCurrency
	 * @param float $_insuredValue
	 * @param string $_objectType
	 * @param string $_portCurrency
	 * @param float $_portValue
	 * @param string $_productCode
	 * @param string $_service
	 * @param dateTime $_shipDate
	 * @param int $_shipHour
	 * @param string $_skybillRank
	 * @param float $_weight
	 * @param string $_weightUnit
	 * @return ChronopostStructSkybillValue
	 */
	public function __construct($_bulkNumber = NULL,$_codCurrency = NULL,$_codValue = NULL,$_content1 = NULL,$_content2 = NULL,$_content3 = NULL,$_content4 = NULL,$_content5 = NULL,$_customsCurrency = NULL,$_customsValue = NULL,$_evtCode = NULL,$_insuredCurrency = NULL,$_insuredValue = NULL,$_objectType = NULL,$_portCurrency = NULL,$_portValue = NULL,$_productCode = NULL,$_service = NULL,$_shipDate = NULL,$_shipHour = NULL,$_skybillRank = NULL,$_weight = NULL,$_weightUnit = NULL)
	{
		parent::__construct(array('bulkNumber'=>$_bulkNumber,'codCurrency'=>$_codCurrency,'codValue'=>$_codValue,'content1'=>$_content1,'content2'=>$_content2,'content3'=>$_content3,'content4'=>$_content4,'content5'=>$_content5,'customsCurrency'=>$_customsCurrency,'customsValue'=>$_customsValue,'evtCode'=>$_evtCode,'insuredCurrency'=>$_insuredCurrency,'insuredValue'=>$_insuredValue,'objectType'=>$_objectType,'portCurrency'=>$_portCurrency,'portValue'=>$_portValue,'productCode'=>$_productCode,'service'=>$_service,'shipDate'=>$_shipDate,'shipHour'=>$_shipHour,'skybillRank'=>$_skybillRank,'weight'=>$_weight,'weightUnit'=>$_weightUnit));
	}
	/**
	 * Get bulkNumber value
	 * @return string|null
	 */
	public function getBulkNumber()
	{
		return $this->bulkNumber;
	}
	/**
	 * Set bulkNumber value
	 * @param string $_bulkNumber the bulkNumber
	 * @return string
	 */
	public function setBulkNumber($_bulkNumber)
	{
		return ($this->bulkNumber = $_bulkNumber);
	}
	/**
	 * Get codCurrency value
	 * @return string|null
	 */
	public function getCodCurrency()
	{
		return $this->codCurrency;
	}
	/**
	 * Set codCurrency value
	 * @param string $_codCurrency the codCurrency
	 * @return string
	 */
	public function setCodCurrency($_codCurrency)
	{
		return ($this->codCurrency = $_codCurrency);
	}
	/**
	 * Get codValue value
	 * @return float|null
	 */
	public function getCodValue()
	{
		return $this->codValue;
	}
	/**
	 * Set codValue value
	 * @param float $_codValue the codValue
	 * @return float
	 */
	public function setCodValue($_codValue)
	{
		return ($this->codValue = $_codValue);
	}
	/**
	 * Get content1 value
	 * @return string|null
	 */
	public function getContent1()
	{
		return $this->content1;
	}
	/**
	 * Set content1 value
	 * @param string $_content1 the content1
	 * @return string
	 */
	public function setContent1($_content1)
	{
		return ($this->content1 = $_content1);
	}
	/**
	 * Get content2 value
	 * @return string|null
	 */
	public function getContent2()
	{
		return $this->content2;
	}
	/**
	 * Set content2 value
	 * @param string $_content2 the content2
	 * @return string
	 */
	public function setContent2($_content2)
	{
		return ($this->content2 = $_content2);
	}
	/**
	 * Get content3 value
	 * @return string|null
	 */
	public function getContent3()
	{
		return $this->content3;
	}
	/**
	 * Set content3 value
	 * @param string $_content3 the content3
	 * @return string
	 */
	public function setContent3($_content3)
	{
		return ($this->content3 = $_content3);
	}
	/**
	 * Get content4 value
	 * @return string|null
	 */
	public function getContent4()
	{
		return $this->content4;
	}
	/**
	 * Set content4 value
	 * @param string $_content4 the content4
	 * @return string
	 */
	public function setContent4($_content4)
	{
		return ($this->content4 = $_content4);
	}
	/**
	 * Get content5 value
	 * @return string|null
	 */
	public function getContent5()
	{
		return $this->content5;
	}
	/**
	 * Set content5 value
	 * @param string $_content5 the content5
	 * @return string
	 */
	public function setContent5($_content5)
	{
		return ($this->content5 = $_content5);
	}
	/**
	 * Get customsCurrency value
	 * @return string|null
	 */
	public function getCustomsCurrency()
	{
		return $this->customsCurrency;
	}
	/**
	 * Set customsCurrency value
	 * @param string $_customsCurrency the customsCurrency
	 * @return string
	 */
	public function setCustomsCurrency($_customsCurrency)
	{
		return ($this->customsCurrency = $_customsCurrency);
	}
	/**
	 * Get customsValue value
	 * @return float|null
	 */
	public function getCustomsValue()
	{
		return $this->customsValue;
	}
	/**
	 * Set customsValue value
	 * @param float $_customsValue the customsValue
	 * @return float
	 */
	public function setCustomsValue($_customsValue)
	{
		return ($this->customsValue = $_customsValue);
	}
	/**
	 * Get evtCode value
	 * @return string|null
	 */
	public function getEvtCode()
	{
		return $this->evtCode;
	}
	/**
	 * Set evtCode value
	 * @param string $_evtCode the evtCode
	 * @return string
	 */
	public function setEvtCode($_evtCode)
	{
		return ($this->evtCode = $_evtCode);
	}
	/**
	 * Get insuredCurrency value
	 * @return string|null
	 */
	public function getInsuredCurrency()
	{
		return $this->insuredCurrency;
	}
	/**
	 * Set insuredCurrency value
	 * @param string $_insuredCurrency the insuredCurrency
	 * @return string
	 */
	public function setInsuredCurrency($_insuredCurrency)
	{
		return ($this->insuredCurrency = $_insuredCurrency);
	}
	/**
	 * Get insuredValue value
	 * @return float|null
	 */
	public function getInsuredValue()
	{
		return $this->insuredValue;
	}
	/**
	 * Set insuredValue value
	 * @param float $_insuredValue the insuredValue
	 * @return float
	 */
	public function setInsuredValue($_insuredValue)
	{
		return ($this->insuredValue = $_insuredValue);
	}
	/**
	 * Get objectType value
	 * @return string|null
	 */
	public function getObjectType()
	{
		return $this->objectType;
	}
	/**
	 * Set objectType value
	 * @param string $_objectType the objectType
	 * @return string
	 */
	public function setObjectType($_objectType)
	{
		return ($this->objectType = $_objectType);
	}
	/**
	 * Get portCurrency value
	 * @return string|null
	 */
	public function getPortCurrency()
	{
		return $this->portCurrency;
	}
	/**
	 * Set portCurrency value
	 * @param string $_portCurrency the portCurrency
	 * @return string
	 */
	public function setPortCurrency($_portCurrency)
	{
		return ($this->portCurrency = $_portCurrency);
	}
	/**
	 * Get portValue value
	 * @return float|null
	 */
	public function getPortValue()
	{
		return $this->portValue;
	}
	/**
	 * Set portValue value
	 * @param float $_portValue the portValue
	 * @return float
	 */
	public function setPortValue($_portValue)
	{
		return ($this->portValue = $_portValue);
	}
	/**
	 * Get productCode value
	 * @return string|null
	 */
	public function getProductCode()
	{
		return $this->productCode;
	}
	/**
	 * Set productCode value
	 * @param string $_productCode the productCode
	 * @return string
	 */
	public function setProductCode($_productCode)
	{
		return ($this->productCode = $_productCode);
	}
	/**
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get shipDate value
	 * @return dateTime|null
	 */
	public function getShipDate()
	{
		return $this->shipDate;
	}
	/**
	 * Set shipDate value
	 * @param dateTime $_shipDate the shipDate
	 * @return dateTime
	 */
	public function setShipDate($_shipDate)
	{
		return ($this->shipDate = $_shipDate);
	}
	/**
	 * Get shipHour value
	 * @return int|null
	 */
	public function getShipHour()
	{
		return $this->shipHour;
	}
	/**
	 * Set shipHour value
	 * @param int $_shipHour the shipHour
	 * @return int
	 */
	public function setShipHour($_shipHour)
	{
		return ($this->shipHour = $_shipHour);
	}
	/**
	 * Get skybillRank value
	 * @return string|null
	 */
	public function getSkybillRank()
	{
		return $this->skybillRank;
	}
	/**
	 * Set skybillRank value
	 * @param string $_skybillRank the skybillRank
	 * @return string
	 */
	public function setSkybillRank($_skybillRank)
	{
		return ($this->skybillRank = $_skybillRank);
	}
	/**
	 * Get weight value
	 * @return float|null
	 */
	public function getWeight()
	{
		return $this->weight;
	}
	/**
	 * Set weight value
	 * @param float $_weight the weight
	 * @return float
	 */
	public function setWeight($_weight)
	{
		return ($this->weight = $_weight);
	}
	/**
	 * Get weightUnit value
	 * @return string|null
	 */
	public function getWeightUnit()
	{
		return $this->weightUnit;
	}
	/**
	 * Set weightUnit value
	 * @param string $_weightUnit the weightUnit
	 * @return string
	 */
	public function setWeightUnit($_weightUnit)
	{
		return ($this->weightUnit = $_weightUnit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ChronopostWsdlClass::__set_state()
	 * @uses ChronopostWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ChronopostStructSkybillValue
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