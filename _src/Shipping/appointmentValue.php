<?php

namespace Chronopost\Shipping;

class appointmentValue
{

    /**
     * @var \DateTime $timeSlotEndDate
     */
    protected $timeSlotEndDate = null;

    /**
     * @var \DateTime $timeSlotStartDate
     */
    protected $timeSlotStartDate = null;

    /**
     * @var string $timeSlotTariffLevel
     */
    protected $timeSlotTariffLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getTimeSlotEndDate()
    {
      if ($this->timeSlotEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timeSlotEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timeSlotEndDate
     * @return \Chronopost\Shipping\appointmentValue
     */
    public function setTimeSlotEndDate(\DateTime $timeSlotEndDate = null)
    {
      if ($timeSlotEndDate == null) {
       $this->timeSlotEndDate = null;
      } else {
        $this->timeSlotEndDate = $timeSlotEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeSlotStartDate()
    {
      if ($this->timeSlotStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timeSlotStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timeSlotStartDate
     * @return \Chronopost\Shipping\appointmentValue
     */
    public function setTimeSlotStartDate(\DateTime $timeSlotStartDate = null)
    {
      if ($timeSlotStartDate == null) {
       $this->timeSlotStartDate = null;
      } else {
        $this->timeSlotStartDate = $timeSlotStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeSlotTariffLevel()
    {
      return $this->timeSlotTariffLevel;
    }

    /**
     * @param string $timeSlotTariffLevel
     * @return \Chronopost\Shipping\appointmentValue
     */
    public function setTimeSlotTariffLevel($timeSlotTariffLevel)
    {
      $this->timeSlotTariffLevel = $timeSlotTariffLevel;
      return $this;
    }

}
