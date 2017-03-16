<?php

namespace Chronopost\Response\Slot;

class Search
{

    /**
     * @var Search $return
     */
    protected $return = null;


    public function __construct()
    {

    }

    /**
     * @return Search
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param Search $return
     * @return \Chronopost\Creneau\searchDeliverySlotResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
