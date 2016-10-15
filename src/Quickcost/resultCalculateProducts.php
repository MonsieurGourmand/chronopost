<?php

namespace Chonopost\Quickcost;

class resultCalculateProducts
{

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var product[] $productList
     */
    protected $productList = null;

    /**
     * @param int $errorCode
     */
    public function __construct($errorCode)
    {
      $this->errorCode = $errorCode;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \Chonopost\Quickcost\resultCalculateProducts
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \Chonopost\Quickcost\resultCalculateProducts
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return product[]
     */
    public function getProductList()
    {
      return $this->productList;
    }

    /**
     * @param product[] $productList
     * @return \Chonopost\Quickcost\resultCalculateProducts
     */
    public function setProductList(array $productList = null)
    {
      $this->productList = $productList;
      return $this;
    }

}
