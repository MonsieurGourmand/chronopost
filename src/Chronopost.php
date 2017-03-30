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
        $this->shipping = new \Chronopost\Route\Shipping($this);
    }

    public function request($wsdl,$targetNamespace,$service,$obj)
    {
        $client = new \SoapClient($wsdl,array("trace" => 1));
        $headers[]= new \SoapHeader($targetNamespace, 'accountNumber', $this->accountNumber);
        $headers[]= new \SoapHeader($targetNamespace, 'password', $this->pass);
        $client->__setSoapHeaders($headers);

        $response = $client->$service($obj);
        dump($client->__getLastRequest());

        return $response->return;
    }

    public function setCredentials($accountNumber,$pass)
    {
        $this->accountNumber = $accountNumber;
        $this->pass = $pass;
    }
}