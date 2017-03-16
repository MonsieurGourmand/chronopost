<?php

namespace Chronopost\Creneau;

class serviceResponse extends wsResponse
{

    /**
     * @var productService $productService
     */
    protected $productService = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      parent::__construct($code);
    }

    /**
     * @return productService
     */
    public function getProductService()
    {
      return $this->productService;
    }

    /**
     * @param productService $productService
     * @return \Chronopost\Creneau\serviceResponse
     */
    public function setProductService($productService)
    {
      $this->productService = $productService;
      return $this;
    }

}
