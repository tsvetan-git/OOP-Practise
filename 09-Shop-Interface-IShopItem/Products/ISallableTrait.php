<?php
namespace Products;

trait ISallableTrait
{
	protected $price;
	
	public function getPrice()
	{
		return $this->price;
	}
	public function setPrice($price)
	{
		$this->price=$price;
	}
	
}