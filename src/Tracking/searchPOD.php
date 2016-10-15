<?php

namespace Chonopost\Tracking;

class searchPOD
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
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

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
     * @return \Chonopost\Tracking\searchPOD
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
     * @return \Chonopost\Tracking\searchPOD
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
     * @return \Chonopost\Tracking\searchPOD
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkybillNumber()
    {
      return $this->skybillNumber;
    }

    /**
     * @param string $skybillNumber
     * @return \Chonopost\Tracking\searchPOD
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
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
     * @return \Chonopost\Tracking\searchPOD
     */
    public function setPdf($pdf)
    {
      $this->pdf = $pdf;
      return $this;
    }

}
