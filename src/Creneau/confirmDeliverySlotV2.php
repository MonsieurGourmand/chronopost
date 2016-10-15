<?php

namespace Chronopost\Creneau;

class confirmDeliverySlotV2
{

    /**
     * @var string $callerTool
     */
    protected $callerTool = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var string $codeSlot
     */
    protected $codeSlot = null;

    /**
     * @var string $meshCode
     */
    protected $meshCode = null;

    /**
     * @var string $transactionID
     */
    protected $transactionID = null;

    /**
     * @var string $rank
     */
    protected $rank = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var \DateTime $dateSelected
     */
    protected $dateSelected = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCallerTool()
    {
      return $this->callerTool;
    }

    /**
     * @param string $callerTool
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setCallerTool($callerTool)
    {
      $this->callerTool = $callerTool;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->productType;
    }

    /**
     * @param string $productType
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeSlot()
    {
      return $this->codeSlot;
    }

    /**
     * @param string $codeSlot
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setCodeSlot($codeSlot)
    {
      $this->codeSlot = $codeSlot;
      return $this;
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
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setMeshCode($meshCode)
    {
      $this->meshCode = $meshCode;
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
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setTransactionID($transactionID)
    {
      $this->transactionID = $transactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRank()
    {
      return $this->rank;
    }

    /**
     * @param string $rank
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setRank($rank)
    {
      $this->rank = $rank;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param string $position
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateSelected()
    {
      if ($this->dateSelected == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateSelected);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateSelected
     * @return \Chronopost\Creneau\confirmDeliverySlotV2
     */
    public function setDateSelected(\DateTime $dateSelected = null)
    {
      if ($dateSelected == null) {
       $this->dateSelected = null;
      } else {
        $this->dateSelected = $dateSelected->format(\DateTime::ATOM);
      }
      return $this;
    }

}
