<?php
namespace Chronopost;

class Chronopost {

    public $accountNumber;
    public $pass;

    public function __construct($accountNumber=null,$pass=null)
    {
        $this->accountNumber = $accountNumber;
        $this->pass = $pass;

        $this->slot = new \Chronopost\Route\Slot($this);
        $this->shipping = new \Chronopost\Route\Shipping($this);
        $this->tracking = new \Chronopost\Route\Tracking($this);
    }

    public function request($wsdl,$targetNamespace,$service,$obj)
    {
        try {
            $client = new \SoapClient($wsdl,array("trace" => 1,'cache_wsdl' => WSDL_CACHE_NONE));
        } catch (\Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
        $headers[]= new \SoapHeader($targetNamespace, 'accountNumber', $this->accountNumber);
        $headers[]= new \SoapHeader($targetNamespace, 'password', $this->pass);
        $client->__setSoapHeaders($headers);

        $response = $client->$service($obj);

        return $response->return;
    }

    public function setCredentials($accountNumber,$pass)
    {
        $this->accountNumber = $accountNumber;
        $this->pass = $pass;
    }
}