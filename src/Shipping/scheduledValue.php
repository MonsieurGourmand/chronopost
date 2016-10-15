<?php

namespace Chonopost\Shipping;

class scheduledValue
{

    /**
     * @var appointmentValue $appointmentValue
     */
    protected $appointmentValue = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var \DateTime $sellByDate
     */
    protected $sellByDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return appointmentValue
     */
    public function getAppointmentValue()
    {
      return $this->appointmentValue;
    }

    /**
     * @param appointmentValue $appointmentValue
     * @return \Chonopost\Shipping\scheduledValue
     */
    public function setAppointmentValue($appointmentValue)
    {
      $this->appointmentValue = $appointmentValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Chonopost\Shipping\scheduledValue
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSellByDate()
    {
      if ($this->sellByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->sellByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $sellByDate
     * @return \Chonopost\Shipping\scheduledValue
     */
    public function setSellByDate(\DateTime $sellByDate = null)
    {
      if ($sellByDate == null) {
       $this->sellByDate = null;
      } else {
        $this->sellByDate = $sellByDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
