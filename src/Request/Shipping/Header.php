<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:27 AM
 */

namespace Chronopost\Request\Shipping;


class Header
{
    /**
     * @var int $accountNumber
     */
    protected $accountNumber;

    /**
     * @var string $idEmit
     */
    protected $idEmit = "CHRFR";

    /**
     * @var string $identWebPro
     */
    protected $identWebPro;

    /**
     * @var int $subAccount
     */
    protected $subAccount;

    /**
     * @param int $accountNumber
     * @return Header
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param string $idEmit
     * @return Header
     */
    public function setIdEmit($idEmit)
    {
        $this->idEmit = $idEmit;
        return $this;
    }

    /**
     * @param string $identWebPro
     * @return Header
     */
    public function setIdentWebPro($identWebPro)
    {
        $this->identWebPro = $identWebPro;
        return $this;
    }

    /**
     * @param int $subAccount
     * @return Header
     */
    public function setSubAccount($subAccount)
    {
        $this->subAccount = $subAccount;
        return $this;
    }
}