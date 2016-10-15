<?php

namespace Chronopost\Tracking;

class trackSkybill
{

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $skybillNumber
     */
    protected $skybillNumber = null;

    
    public function __construct()
    {
    
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
     * @return \Chronopost\Tracking\trackSkybill
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
     * @return \Chronopost\Tracking\trackSkybill
     */
    public function setSkybillNumber($skybillNumber)
    {
      $this->skybillNumber = $skybillNumber;
      return $this;
    }

}
