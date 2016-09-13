<?php
namespace Products;

use Shop\IShopItem;

class Software implements IShopItem
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

	public function __toString()
	{
		return sprintf("os: %s, version: %s, price: %d ", $this->osName, $this->version, $this->price);
	}
}