<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:27 AM
 */

namespace Chronopost\Request\Shipping;


class Scheduled
{
    /**
     * @var Appointment $appointmentValue
     */
    protected $appointmentValue;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate;

    /**
     * @var \DateTime $sellByDate
     */
    protected $sellByDate;

    /**
     * @param Appointment $appointmentValue
     * @return Scheduled
     */
    public function setAppointmentValue($appointmentValue)
    {
        $this->appointmentValue = $appointmentValue;
        return $this;
    }

    /**
     * @param \DateTime $expirationDate
     * @return Scheduled
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @param \DateTime $sellByDate
     * @return Scheduled
     */
    public function setSellByDate($sellByDate)
    {
        $this->sellByDate = $sellByDate->format(\DateTime::ATOM);
        return $this;
    }
}