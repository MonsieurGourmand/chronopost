<?php
/**
 * File for class ChronopostServiceShipping
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
/**
 * This class stands for ChronopostServiceShipping originally named Shipping
 * @package Chronopost
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-16
 */
class ChronopostServiceShipping extends ChronopostWsdlClass
{
	/**
	 * Method to call the operation originally named shipping
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShipping::getEsdValue()
	 * @uses ChronopostStructShipping::getHeaderValue()
	 * @uses ChronopostStructShipping::getShipperValue()
	 * @uses ChronopostStructShipping::getCustomerValue()
	 * @uses ChronopostStructShipping::getRecipientValue()
	 * @uses ChronopostStructShipping::getRefValue()
	 * @uses ChronopostStructShipping::getSkybillValue()
	 * @uses ChronopostStructShipping::getSkybillParamsValue()
	 * @uses ChronopostStructShipping::getPassword()
	 * @param ChronopostStructShipping $_chronopostStructShipping
	 * @return ChronopostStructShippingResponse
	 */
	public function shipping(ChronopostStructShipping $_chronopostStructShipping)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingResponse(self::getSoapClient()->shipping(array('esdValue'=>$_chronopostStructShipping->getEsdValue(),'headerValue'=>$_chronopostStructShipping->getHeaderValue(),'shipperValue'=>$_chronopostStructShipping->getShipperValue(),'customerValue'=>$_chronopostStructShipping->getCustomerValue(),'recipientValue'=>$_chronopostStructShipping->getRecipientValue(),'refValue'=>$_chronopostStructShipping->getRefValue(),'skybillValue'=>$_chronopostStructShipping->getSkybillValue(),'skybillParamsValue'=>$_chronopostStructShipping->getSkybillParamsValue(),'password'=>$_chronopostStructShipping->getPassword()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shippingMultiParcelWithReservation
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getEsdValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getHeaderValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getShipperValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getCustomerValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getRecipientValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getRefValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getSkybillValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getSkybillParamsValue()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getPassword()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getModeRetour()
	 * @uses ChronopostStructShippingMultiParcelWithReservation::getNumberOfParcel()
	 * @param ChronopostStructShippingMultiParcelWithReservation $_chronopostStructShippingMultiParcelWithReservation
	 * @return ChronopostStructShippingMultiParcelWithReservationResponse
	 */
	public function shippingMultiParcelWithReservation(ChronopostStructShippingMultiParcelWithReservation $_chronopostStructShippingMultiParcelWithReservation)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingMultiParcelWithReservationResponse(self::getSoapClient()->shippingMultiParcelWithReservation(array('esdValue'=>$_chronopostStructShippingMultiParcelWithReservation->getEsdValue(),'headerValue'=>$_chronopostStructShippingMultiParcelWithReservation->getHeaderValue(),'shipperValue'=>$_chronopostStructShippingMultiParcelWithReservation->getShipperValue(),'customerValue'=>$_chronopostStructShippingMultiParcelWithReservation->getCustomerValue(),'recipientValue'=>$_chronopostStructShippingMultiParcelWithReservation->getRecipientValue(),'refValue'=>$_chronopostStructShippingMultiParcelWithReservation->getRefValue(),'skybillValue'=>$_chronopostStructShippingMultiParcelWithReservation->getSkybillValue(),'skybillParamsValue'=>$_chronopostStructShippingMultiParcelWithReservation->getSkybillParamsValue(),'password'=>$_chronopostStructShippingMultiParcelWithReservation->getPassword(),'modeRetour'=>$_chronopostStructShippingMultiParcelWithReservation->getModeRetour(),'numberOfParcel'=>$_chronopostStructShippingMultiParcelWithReservation->getNumberOfParcel()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shippingWithReservation
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShippingWithReservation::getEsdValue()
	 * @uses ChronopostStructShippingWithReservation::getHeaderValue()
	 * @uses ChronopostStructShippingWithReservation::getShipperValue()
	 * @uses ChronopostStructShippingWithReservation::getCustomerValue()
	 * @uses ChronopostStructShippingWithReservation::getRecipientValue()
	 * @uses ChronopostStructShippingWithReservation::getRefValue()
	 * @uses ChronopostStructShippingWithReservation::getSkybillValue()
	 * @uses ChronopostStructShippingWithReservation::getSkybillParamsValue()
	 * @uses ChronopostStructShippingWithReservation::getPassword()
	 * @uses ChronopostStructShippingWithReservation::getModeRetour()
	 * @param ChronopostStructShippingWithReservation $_chronopostStructShippingWithReservation
	 * @return ChronopostStructShippingWithReservationResponse
	 */
	public function shippingWithReservation(ChronopostStructShippingWithReservation $_chronopostStructShippingWithReservation)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingWithReservationResponse(self::getSoapClient()->shippingWithReservation(array('esdValue'=>$_chronopostStructShippingWithReservation->getEsdValue(),'headerValue'=>$_chronopostStructShippingWithReservation->getHeaderValue(),'shipperValue'=>$_chronopostStructShippingWithReservation->getShipperValue(),'customerValue'=>$_chronopostStructShippingWithReservation->getCustomerValue(),'recipientValue'=>$_chronopostStructShippingWithReservation->getRecipientValue(),'refValue'=>$_chronopostStructShippingWithReservation->getRefValue(),'skybillValue'=>$_chronopostStructShippingWithReservation->getSkybillValue(),'skybillParamsValue'=>$_chronopostStructShippingWithReservation->getSkybillParamsValue(),'password'=>$_chronopostStructShippingWithReservation->getPassword(),'modeRetour'=>$_chronopostStructShippingWithReservation->getModeRetour()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shippingWithReservationAndESDWithRefClient
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getEsdValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getHeaderValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getShipperValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getCustomerValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getRecipientValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getRefValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getSkybillValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getSkybillParamsValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getPassword()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClient::getModeRetour()
	 * @param ChronopostStructShippingWithReservationAndESDWithRefClient $_chronopostStructShippingWithReservationAndESDWithRefClient
	 * @return ChronopostStructShippingWithReservationAndESDWithRefClientResponse
	 */
	public function shippingWithReservationAndESDWithRefClient(ChronopostStructShippingWithReservationAndESDWithRefClient $_chronopostStructShippingWithReservationAndESDWithRefClient)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingWithReservationAndESDWithRefClientResponse(self::getSoapClient()->shippingWithReservationAndESDWithRefClient(array('esdValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getEsdValue(),'headerValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getHeaderValue(),'shipperValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getShipperValue(),'customerValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getCustomerValue(),'recipientValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getRecipientValue(),'refValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getRefValue(),'skybillValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getSkybillValue(),'skybillParamsValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getSkybillParamsValue(),'password'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getPassword(),'modeRetour'=>$_chronopostStructShippingWithReservationAndESDWithRefClient->getModeRetour()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shippingWithReservationAndESDWithRefClientPC
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRefEsdClient()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRetrievalDateTime()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getClosingDateTime()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getSpecificInstructions()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getHeight()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getWidth()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getLength()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperCarriesCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperBuildingFloor()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperServiceDirection()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getNombreDePassageMaximum()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getLtAImprimerParChronopost()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getHeader_idEmit()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getAccountNumber()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getSubAccount()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getHeader_identWebPro()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperCivility()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperName2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperAdress1()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperAdress2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperZipCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperCity()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperCountry()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperCountryName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperContactName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperEmail()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperPhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperMobilePhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerCivility()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerName2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerAdress1()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerAdress2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerZipCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerCity()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerCountry()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerCountryName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerContactName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerEmail()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerPhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerMobilePhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerPreAlert()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientCivility()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientName2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientAdress1()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientAdress2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientZipCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientCity()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientCountry()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientCountryName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientContactName()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientEmail()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientPhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientMobilePhone()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientPreAlert()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipperRef()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getRecipientRef()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomerSkybillNumber()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getEvtCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getProductCode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipDate()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getShipHour()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getWeight()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getWeightUnit()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getInsuredValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getInsuredCurrency()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCodValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCodCurrency()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomsValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getCustomsCurrency()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getService()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getObjectType()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getContent1()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getContent2()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getContent3()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getContent4()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getContent5()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getPortValue()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getPortCurrency()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getSkybillRank()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getBulkNumber()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getMode()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getPassword()
	 * @uses ChronopostStructShippingWithReservationAndESDWithRefClientPC::getModeRetour()
	 * @param ChronopostStructShippingWithReservationAndESDWithRefClientPC $_chronopostStructShippingWithReservationAndESDWithRefClientPC
	 * @return ChronopostStructShippingWithReservationAndESDWithRefClientPCResponse
	 */
	public function shippingWithReservationAndESDWithRefClientPC(ChronopostStructShippingWithReservationAndESDWithRefClientPC $_chronopostStructShippingWithReservationAndESDWithRefClientPC)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingWithReservationAndESDWithRefClientPCResponse(self::getSoapClient()->shippingWithReservationAndESDWithRefClientPC(array('refEsdClient'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRefEsdClient(),'retrievalDateTime'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRetrievalDateTime(),'closingDateTime'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getClosingDateTime(),'specificInstructions'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getSpecificInstructions(),'height'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getHeight(),'width'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getWidth(),'length'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getLength(),'shipperCarriesCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperCarriesCode(),'shipperBuildingFloor'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperBuildingFloor(),'shipperServiceDirection'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperServiceDirection(),'nombreDePassageMaximum'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getNombreDePassageMaximum(),'ltAImprimerParChronopost'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getLtAImprimerParChronopost(),'header_idEmit'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getHeader_idEmit(),'accountNumber'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getAccountNumber(),'subAccount'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getSubAccount(),'header_identWebPro'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getHeader_identWebPro(),'shipperCivility'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperCivility(),'shipperName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperName(),'shipperName2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperName2(),'shipperAdress1'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperAdress1(),'shipperAdress2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperAdress2(),'shipperZipCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperZipCode(),'shipperCity'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperCity(),'shipperCountry'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperCountry(),'shipperCountryName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperCountryName(),'shipperContactName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperContactName(),'shipperEmail'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperEmail(),'shipperPhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperPhone(),'shipperMobilePhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperMobilePhone(),'customerCivility'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerCivility(),'customerName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerName(),'customerName2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerName2(),'customerAdress1'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerAdress1(),'customerAdress2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerAdress2(),'customerZipCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerZipCode(),'customerCity'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerCity(),'customerCountry'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerCountry(),'customerCountryName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerCountryName(),'customerContactName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerContactName(),'customerEmail'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerEmail(),'customerPhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerPhone(),'customerMobilePhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerMobilePhone(),'customerPreAlert'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerPreAlert(),'recipientCivility'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientCivility(),'recipientName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientName(),'recipientName2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientName2(),'recipientAdress1'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientAdress1(),'recipientAdress2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientAdress2(),'recipientZipCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientZipCode(),'recipientCity'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientCity(),'recipientCountry'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientCountry(),'recipientCountryName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientCountryName(),'recipientContactName'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientContactName(),'recipientEmail'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientEmail(),'recipientPhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientPhone(),'recipientMobilePhone'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientMobilePhone(),'recipientPreAlert'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientPreAlert(),'shipperRef'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipperRef(),'recipientRef'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getRecipientRef(),'customerSkybillNumber'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomerSkybillNumber(),'evtCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getEvtCode(),'productCode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getProductCode(),'shipDate'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipDate(),'shipHour'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getShipHour(),'weight'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getWeight(),'weightUnit'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getWeightUnit(),'insuredValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getInsuredValue(),'insuredCurrency'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getInsuredCurrency(),'codValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCodValue(),'codCurrency'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCodCurrency(),'customsValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomsValue(),'customsCurrency'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getCustomsCurrency(),'service'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getService(),'objectType'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getObjectType(),'content1'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getContent1(),'content2'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getContent2(),'content3'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getContent3(),'content4'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getContent4(),'content5'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getContent5(),'portValue'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getPortValue(),'portCurrency'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getPortCurrency(),'skybillRank'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getSkybillRank(),'bulkNumber'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getBulkNumber(),'mode'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getMode(),'password'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getPassword(),'modeRetour'=>$_chronopostStructShippingWithReservationAndESDWithRefClientPC->getModeRetour()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named shippingWithESDOnly
	 * @uses ChronopostWsdlClass::getSoapClient()
	 * @uses ChronopostWsdlClass::setResult()
	 * @uses ChronopostWsdlClass::getResult()
	 * @uses ChronopostWsdlClass::saveLastError()
	 * @uses ChronopostStructShippingWithESDOnly::getEsdValue()
	 * @uses ChronopostStructShippingWithESDOnly::getHeaderValue()
	 * @uses ChronopostStructShippingWithESDOnly::getShipperValue()
	 * @uses ChronopostStructShippingWithESDOnly::getCustomerValue()
	 * @uses ChronopostStructShippingWithESDOnly::getRecipientValue()
	 * @uses ChronopostStructShippingWithESDOnly::getRefValue()
	 * @uses ChronopostStructShippingWithESDOnly::getSkybillValue()
	 * @uses ChronopostStructShippingWithESDOnly::getSkybillParamsValue()
	 * @uses ChronopostStructShippingWithESDOnly::getPassword()
	 * @uses ChronopostStructShippingWithESDOnly::getModeRetour()
	 * @param ChronopostStructShippingWithESDOnly $_chronopostStructShippingWithESDOnly
	 * @return ChronopostStructShippingWithESDOnlyResponse
	 */
	public function shippingWithESDOnly(ChronopostStructShippingWithESDOnly $_chronopostStructShippingWithESDOnly)
	{
		try
		{
			$this->setResult(new ChronopostStructShippingWithESDOnlyResponse(self::getSoapClient()->shippingWithESDOnly(array('esdValue'=>$_chronopostStructShippingWithESDOnly->getEsdValue(),'headerValue'=>$_chronopostStructShippingWithESDOnly->getHeaderValue(),'shipperValue'=>$_chronopostStructShippingWithESDOnly->getShipperValue(),'customerValue'=>$_chronopostStructShippingWithESDOnly->getCustomerValue(),'recipientValue'=>$_chronopostStructShippingWithESDOnly->getRecipientValue(),'refValue'=>$_chronopostStructShippingWithESDOnly->getRefValue(),'skybillValue'=>$_chronopostStructShippingWithESDOnly->getSkybillValue(),'skybillParamsValue'=>$_chronopostStructShippingWithESDOnly->getSkybillParamsValue(),'password'=>$_chronopostStructShippingWithESDOnly->getPassword(),'modeRetour'=>$_chronopostStructShippingWithESDOnly->getModeRetour()))));
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
	 * @return ChronopostStructShippingMultiParcelWithReservationResponse|ChronopostStructShippingResponse|ChronopostStructShippingWithESDOnlyResponse|ChronopostStructShippingWithReservationAndESDWithRefClientPCResponse|ChronopostStructShippingWithReservationAndESDWithRefClientResponse|ChronopostStructShippingWithReservationResponse
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