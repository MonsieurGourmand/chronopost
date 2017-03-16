<?php

namespace Chronopost\Shipping;

class getReservedSkybillWithType
{

    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    
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
     * @return \Chronopost\Shipping\getReservedSkybillWithType
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

}
