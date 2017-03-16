<?php
namespace Chronopost;

class Chronopost {

    public $accountNumber;
    public $pass;

    public function __construct($accountNumber=null,$pass=null)
    {
        $this->accountNumber = $accountNumber;
        $this->pass = $pass;

        $this->parser = new Parser();

        $this->slot = new \Chronopost\Route\Slot($this);
    }

    public function request($wsdl,$targetNamespace,$service,$obj)
    {
        $client = new \SoapClient($wsdl);
        $headers[]= new \SoapHeader($targetNamespace, 'accountNumber', $this->accountNumber);
        $headers[]= new \SoapHeader($targetNamespace, 'password', $this->pass);
        $client->__setSoapHeaders($headers);

        $response = $client->$service($obj);
        if($response->return->code != 0)
            throw new \Error($response->return->message);
        return $response->return;
    }

    public function setCredentials($accountNumber,$pass)
    {
        $this->accountNumber = $accountNumber;
        $this->pass = $pass;
    }
}