<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:58 AM
 */

namespace Chronopost\Request\Tracking;


class Skybill
{
    /**
     * @var string $skybillNumber
     */
    protected $skybillNumber;

    /**
     * @var string $language
     */
    protected $language = "fr_FR";

    /**
     * @var string $accountNumber
     */
    protected $accountNumber;

    /**
     * @var string $password
     */
    protected $password;

    /**
     * @param string $skybillNumber
     * @return Skybill
     */
    public function setSkybillNumber($skybillNumber)
    {
        $this->skybillNumber = $skybillNumber;
        return $this;
    }

    /**
     * @param string $language
     * @return Skybill
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $accountNumber
     * @return Skybill
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param string $password
     * @return Skybill
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}