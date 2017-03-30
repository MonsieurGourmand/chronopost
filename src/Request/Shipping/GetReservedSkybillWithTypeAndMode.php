<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/23/17
 * Time: 3:34 PM
 */

namespace Chronopost\Request\Shipping;


class GetReservedSkybillWithTypeAndMode
{
    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    /**
     * @var string $mode
     */
    protected $mode = "PDF";

    /**
     * @param string $reservationNumber
     * @return GetReservedSkybillWithTypeAndMode
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->reservationNumber = $reservationNumber;
        return $this;
    }

    /**
     * @param string $mode
     * @return GetReservedSkybillWithTypeAndMode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
}