<?php

namespace Chonopost\Creneau;

class serviceResponseV2 extends wsResponse
{

    /**
     * @var productServiceV2 $productServiceV2
     */
    protected $productServiceV2 = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      parent::__construct($code);
    }

    /**
     * @return productServiceV2
     */
    public function getProductServiceV2()
    {
      return $this->productServiceV2;
    }

    /**
     * @param productServiceV2 $productServiceV2
     * @return \Chonopost\Creneau\serviceResponseV2
     */
    public function setProductServiceV2($productServiceV2)
    {
      $this->productServiceV2 = $productServiceV2;
      return $this;
    }

}
