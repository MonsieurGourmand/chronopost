<?php
/**
 * File for class ChronopostServiceGet
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostServiceGet originally named Get
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostServiceGet extends ChronopostWsdlClass
{
	/**
	 * Method to call the operation originally named getReservedSkybillWithType
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructGetReservedSkybillWithType::getReservationNumber()
	 * @param ChronopostStructGetReservedSkybillWithType $_chronopostStructGetReservedSkybillWithType
	 * @return ChronopostStructGetReservedSkybillWithTypeResponse
	 */
	public function getReservedSkybillWithType(ChronopostStructGetReservedSkybillWithType $_chronopostStructGetReservedSkybillWithType)
	{
		try
		{
			$this->setResult(new ChronopostStructGetReservedSkybillWithTypeResponse(self::getSoapClient()->getReservedSkybillWithType(array('reservationNumber'=>$_chronopostStructGetReservedSkybillWithType->getReservationNumber()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named getReservedSkybill
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructGetReservedSkybill::getReservationNumber()
	 * @param ChronopostStructGetReservedSkybill $_chronopostStructGetReservedSkybill
	 * @return ChronopostStructGetReservedSkybillResponse
	 */
	public function getReservedSkybill(ChronopostStructGetReservedSkybill $_chronopostStructGetReservedSkybill)
	{
		try
		{
			$this->setResult(new ChronopostStructGetReservedSkybillResponse(self::getSoapClient()->getReservedSkybill(array('reservationNumber'=>$_chronopostStructGetReservedSkybill->getReservationNumber()))));
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
	 * @return ChronopostStructGetReservedSkybillResponse|ChronopostStructGetReservedSkybillWithTypeResponse
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