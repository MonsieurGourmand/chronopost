<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:27 AM
 */

namespace Chronopost\Request\Shipping;


class Appointment
{
    /**
     * @var \DateTime $timeSlotStartDate
     */
    protected $timeSlotStartDate;

    /**
     * @var \DateTime $timeSlotEndDate
     */
    protected $timeSlotEndDate;

    /**
     * @var string $sellByDate
     */
    protected $timeSlotTariffLevel;

    /**
     * @param \DateTime $timeSlotStartDate
     * @return Appointment
     */
    public function setTimeSlotStartDate($timeSlotStartDate)
    {
        $this->timeSlotStartDate = $timeSlotStartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param \DateTime $timeSlotEndDate
     * @return Appointment
     */
    public function setTimeSlotEndDate($timeSlotEndDate)
    {
        $this->timeSlotEndDate = $timeSlotEndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param string $timeSlotTariffLevel
     * @return Appointment
     */
    public function setTimeSlotTariffLevel($timeSlotTariffLevel)
    {
        $this->timeSlotTariffLevel = $timeSlotTariffLevel;
        return $this;
    }
}