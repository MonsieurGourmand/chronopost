<?php

namespace Chronopost\Request\Slot;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/14/17
 * Time: 11:57 AM
 */
class Confirm
{
    /**
     * @var string $callerTool
     */
    protected $callerTool = "RDVWS";

    /**
     * @var string $productType
     */
    protected $productType = null;

    const PRODUCTTYPE_FRESH = "FRESH";
    const PRODUCTTYPE_FREEZE = "FREEZE";

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
    protected $rank = 0;


    /**
     * @var string $position
     */
    protected $position = null;


    /**
     * @var \DateTime $dateSelected
     */
    protected $dateSelected = null;

    /**
     * @param string $callerTool
     * @return Confirm
     */
    public function setCallerTool($callerTool)
    {
        $this->callerTool = $callerTool;
        return $this;
    }

    /**
     * @param string $productType
     * @return Confirm
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @param string $codeSlot
     * @return Confirm
     */
    public function setCodeSlot($codeSlot)
    {
        $this->codeSlot = $codeSlot;
        return $this;
    }

    /**
     * @param string $meshCode
     * @return Confirm
     */
    public function setMeshCode($meshCode)
    {
        $this->meshCode = $meshCode;
        return $this;
    }

    /**
     * @param string $transactionID
     * @return Confirm
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * @param string $rank
     * @return Confirm
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * @param string $position
     * @return Confirm
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param \DateTime $dateSelected
     * @return Confirm
     */
    public function setDateSelected($dateSelected)
    {
        $this->dateSelected = $dateSelected->format(\DateTime::ATOM);
        return $this;
    }
}