<?php

namespace Chronopost\Tracking;

class eventInfoComp extends event
{

    /**
     * @var infoComp[] $infoCompList
     */
    protected $infoCompList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return infoComp[]
     */
    public function getInfoCompList()
    {
      return $this->infoCompList;
    }

    /**
     * @param infoComp[] $infoCompList
     * @return \Chronopost\Tracking\eventInfoComp
     */
    public function setInfoCompList(array $infoCompList = null)
    {
      $this->infoCompList = $infoCompList;
      return $this;
    }

}
