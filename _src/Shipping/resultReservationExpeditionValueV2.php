<?php

namespace Chronopost\Shipping;

class resultReservationExpeditionValueV2 extends resultReservationExpeditionValue
{

    /**
     * @var string $asCode
     */
    protected $asCode = null;

    /**
     * @param int $errorCode
     */
    public function __construct($errorCode)
    {
      parent::__construct($errorCode);
    }

    /**
     * @return string
     */
    public function getAsCode()
    {
      return $this->asCode;
    }

    /**
     * @param string $asCode
     * @return \Chronopost\Shipping\resultReservationExpeditionValueV2
     */
    public function setAsCode($asCode)
    {
      $this->asCode = $asCode;
      return $this;
    }

}
