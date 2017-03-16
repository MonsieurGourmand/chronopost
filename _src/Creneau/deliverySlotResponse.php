<?php

namespace Chronopost\Creneau;

class deliverySlotResponse extends wsResponse
{

    /**
     * @var string $meshCode
     */
    protected $meshCode = null;

    /**
     * @var slot[] $slotList
     */
    protected $slotList = null;

    /**
     * @var string $transactionID
     */
    protected $transactionID = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      parent::__construct($code);
    }

    /**
     * @return string
     */
    public function getMeshCode()
    {
      return $this->meshCode;
    }

    /**
     * @param string $meshCode
     * @return \Chronopost\Creneau\deliverySlotResponse
     */
    public function setMeshCode($meshCode)
    {
      $this->meshCode = $meshCode;
      return $this;
    }

    /**
     * @return slot[]
     */
    public function getSlotList()
    {
      return $this->slotList;
    }

    /**
     * @param slot[] $slotList
     * @return \Chronopost\Creneau\deliverySlotResponse
     */
    public function setSlotList(array $slotList = null)
    {
      $this->slotList = $slotList;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->transactionID;
    }

    /**
     * @param string $transactionID
     * @return \Chronopost\Creneau\deliverySlotResponse
     */
    public function setTransactionID($transactionID)
    {
      $this->transactionID = $transactionID;
      return $this;
    }

}
