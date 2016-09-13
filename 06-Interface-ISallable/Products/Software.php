<?php
namespace Products;

class Software implements ISellable
{
	protected $osName;
	protected $version;
	protected $price;
	
	public function __construct($osName, $version, $price)
	{
		$this->osName=$osName;
		$this->version=$version;
		$this->setPrice($price);
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	public function setPrice($price)
	{
		$this->price=$price;
	}
}