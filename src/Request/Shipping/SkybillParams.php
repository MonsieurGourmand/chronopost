<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/20/17
 * Time: 11:58 AM
 */

namespace Chronopost\Request\Shipping;


class SkybillParams
{
    protected $mode = "PDF";

    /**
     * @param string $mode
     * @return SkybillParams
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
}