<?php

namespace Chronopost\Creneau;

class wsResponse
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \Chronopost\Creneau\wsResponse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Chronopost\Creneau\wsResponse
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
