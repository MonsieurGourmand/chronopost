<?php
/**
 * File for class ChronopostServiceFaisabilite
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostServiceFaisabilite originally named Faisabilite
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostServiceFaisabilite extends ChronopostWsdlClass
{
	/**
	 * Method to call the operation originally named faisabiliteESD
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructFaisabiliteESD::getShipperValue()
	 * @uses ChronopostStructFaisabiliteESD::getRetrievalDateTime()
	 * @uses ChronopostStructFaisabiliteESD::getClosingDateTime()
	 * @param ChronopostStructFaisabiliteESD $_chronopostStructFaisabiliteESD
	 * @return ChronopostStructFaisabiliteESDResponse
	 */
	public function faisabiliteESD(ChronopostStructFaisabiliteESD $_chronopostStructFaisabiliteESD)
	{
		try
		{
			$this->setResult(new ChronopostStructFaisabiliteESDResponse(self::getSoapClient()->faisabiliteESD(array('shipperValue'=>$_chronopostStructFaisabiliteESD->getShipperValue(),'retrievalDateTime'=>$_chronopostStructFaisabiliteESD->getRetrievalDateTime(),'closingDateTime'=>$_chronopostStructFaisabiliteESD->getClosingDateTime()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see ChronopostWsdlClass::getResult()
	 * @return ChronopostStructFaisabiliteESDResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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