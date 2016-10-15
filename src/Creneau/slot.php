<?php

namespace Chronopost\Creneau;

class slot
{

    /**
     * @var string $deliverySlotCode
     */
    protected $deliverySlotCode = null;

    /**
     * @var string $deliveryDate
     */
    protected $deliveryDate = null;

    /**
     * @var int $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @var int $startHour
     */
    protected $startHour = null;

    /**
     * @var int $startMinutes
     */
    protected $startMinutes = null;

    /**
     * @var int $endHour
     */
    protected $endHour = null;

    /**
     * @var int $endMinutes
     */
    protected $endMinutes = null;

    /**
     * @var string $tariffLevel
     */
    protected $tariffLevel = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $codeStatus
     */
    protected $codeStatus = null;

    /**
     * @var int $note
     */
    protected $note = null;

    /**
     * @var boolean $incentiveFlag
     */
    protected $incentiveFlag = null;

    /**
     * @var int $rawRank
     */
    protected $rawRank = null;

    /**
     * @var int $rank
     */
    protected $rank = null;

    /**
     * @param int $dayOfWeek
     * @param int $startHour
     * @param int $startMinutes
     * @param int $endHour
     * @param int $endMinutes
     * @param int $note
     * @param boolean $incentiveFlag
     * @param int $rawRank
     * @param int $rank
     */
    public function __construct($dayOfWeek, $startHour, $startMinutes, $endHour, $endMinutes, $note, $incentiveFlag, $rawRank, $rank)
    {
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinutes = $startMinutes;
      $this->endHour = $endHour;
      $this->endMinutes = $endMinutes;
      $this->note = $note;
      $this->incentiveFlag = $incentiveFlag;
      $this->rawRank = $rawRank;
      $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getDeliverySlotCode()
    {
      return $this->deliverySlotCode;
    }

    /**
     * @param string $deliverySlotCode
     * @return \Chronopost\Creneau\slot
     */
    public function setDeliverySlotCode($deliverySlotCode)
    {
      $this->deliverySlotCode = $deliverySlotCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
      return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     * @return \Chronopost\Creneau\slot
     */
    public function setDeliveryDate($deliveryDate)
    {
      $this->deliveryDate = $deliveryDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayOfWeek()
    {
      return $this->dayOfWeek;
    }

    /**
     * @param int $dayOfWeek
     * @return \Chronopost\Creneau\slot
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartHour()
    {
      return $this->startHour;
    }

    /**
     * @param int $startHour
     * @return \Chronopost\Creneau\slot
     */
    public function setStartHour($startHour)
    {
      $this->startHour = $startHour;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartMinutes()
    {
      return $this->startMinutes;
    }

    /**
     * @param int $startMinutes
     * @return \Chronopost\Creneau\slot
     */
    public function setStartMinutes($startMinutes)
    {
      $this->startMinutes = $startMinutes;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndHour()
    {
      return $this->endHour;
    }

    /**
     * @param int $endHour
     * @return \Chronopost\Creneau\slot
     */
    public function setEndHour($endHour)
    {
      $this->endHour = $endHour;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndMinutes()
    {
      return $this->endMinutes;
    }

    /**
     * @param int $endMinutes
     * @return \Chronopost\Creneau\slot
     */
    public function setEndMinutes($endMinutes)
    {
      $this->endMinutes = $endMinutes;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffLevel()
    {
      return $this->tariffLevel;
    }

    /**
     * @param string $tariffLevel
     * @return \Chronopost\Creneau\slot
     */
    public function setTariffLevel($tariffLevel)
    {
      $this->tariffLevel = $tariffLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Chronopost\Creneau\slot
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeStatus()
    {
      return $this->codeStatus;
    }

    /**
     * @param string $codeStatus
     * @return \Chronopost\Creneau\slot
     */
    public function setCodeStatus($codeStatus)
    {
      $this->codeStatus = $codeStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param int $note
     * @return \Chronopost\Creneau\slot
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncentiveFlag()
    {
      return $this->incentiveFlag;
    }

    /**
     * @param boolean $incentiveFlag
     * @return \Chronopost\Creneau\slot
     */
    public function setIncentiveFlag($incentiveFlag)
    {
      $this->incentiveFlag = $incentiveFlag;
      return $this;
    }

    /**
     * @return int
     */
    public function getRawRank()
    {
      return $this->rawRank;
    }

    /**
     * @param int $rawRank
     * @return \Chronopost\Creneau\slot
     */
    public function setRawRank($rawRank)
    {
      $this->rawRank = $rawRank;
      return $this;
    }

    /**
     * @return int
     */
    public function getRank()
    {
      return $this->rank;
    }

    /**
     * @param int $rank
     * @return \Chronopost\Creneau\slot
     */
    public function setRank($rank)
    {
      $this->rank = $rank;
      return $this;
    }

}
