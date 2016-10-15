<?php

namespace Chronopost\Shipping;

class getReservedSkybill
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
     * @return \Chronopost\Shipping\getReservedSkybill
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

}
