<?php

namespace Chonopost\Shipping;

class faisabiliteESD
{

    /**
     * @var shipperValue $shipperValue
     */
    protected $shipperValue = null;

    /**
     * @var \DateTime $retrievalDateTime
     */
    protected $retrievalDateTime = null;

    /**
     * @var \DateTime $closingDateTime
     */
    protected $closingDateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return shipperValue
     */
    public function getShipperValue()
    {
      return $this->shipperValue;
    }

    /**
     * @param shipperValue $shipperValue
     * @return \Chonopost\Shipping\faisabiliteESD
     */
    public function setShipperValue($shipperValue)
    {
      $this->shipperValue = $shipperValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRetrievalDateTime()
    {
      if ($this->retrievalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->retrievalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $retrievalDateTime
     * @return \Chonopost\Shipping\faisabiliteESD
     */
    public function setRetrievalDateTime(\DateTime $retrievalDateTime = null)
    {
      if ($retrievalDateTime == null) {
       $this->retrievalDateTime = null;
      } else {
        $this->retrievalDateTime = $retrievalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosingDateTime()
    {
      if ($this->closingDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->closingDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $closingDateTime
     * @return \Chonopost\Shipping\faisabiliteESD
     */
    public function setClosingDateTime(\DateTime $closingDateTime = null)
    {
      if ($closingDateTime == null) {
       $this->closingDateTime = null;
      } else {
        $this->closingDateTime = $closingDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
