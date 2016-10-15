<?php

namespace Chronopost\Tracking;

class searchPODWithSenderRef
{

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $sendersRef
     */
    protected $sendersRef = null;

    /**
     * @var boolean $pdf
     */
    protected $pdf = null;

    /**
     * @param boolean $pdf
     */
    public function __construct($pdf)
    {
      $this->pdf = $pdf;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Chronopost\Tracking\searchPODWithSenderRef
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Chronopost\Tracking\searchPODWithSenderRef
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Chronopost\Tracking\searchPODWithSenderRef
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersRef()
    {
      return $this->sendersRef;
    }

    /**
     * @param string $sendersRef
     * @return \Chronopost\Tracking\searchPODWithSenderRef
     */
    public function setSendersRef($sendersRef)
    {
      $this->sendersRef = $sendersRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPdf()
    {
      return $this->pdf;
    }

    /**
     * @param boolean $pdf
     * @return \Chronopost\Tracking\searchPODWithSenderRef
     */
    public function setPdf($pdf)
    {
      $this->pdf = $pdf;
      return $this;
    }

}
