<?php
namespace Products;

class Software implements ISellable
{
	protected $osName;
	protected $version;
	
	use ISallableTrait;
	
	public function __construct($osName, $version, $price)
	{
		$this->osName=$osName;
		$this->version=$version;
		$this->setPrice($price);
	}
	
}