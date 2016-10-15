<?php

namespace Chonopost\Creneau;

class productService
{

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $serviceCode
     */
    protected $serviceCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Chonopost\Creneau\productService
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return \Chonopost\Creneau\productService
     */
    public function setServiceCode($serviceCode)
    {
      $this->serviceCode = $serviceCode;
      return $this;
    }

}
