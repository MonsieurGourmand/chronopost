<?php

namespace Chronopost\Shipping;

class getReservedSkybillWithTypeAndMode
{

    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    /**
     * @var string $mode
     */
    protected $mode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
      return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return \Chronopost\Shipping\getReservedSkybillWithTypeAndMode
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return \Chronopost\Shipping\getReservedSkybillWithTypeAndMode
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
    }

}
