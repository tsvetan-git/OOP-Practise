<?php
namespace Products;

use Shop\IShopItem;

class NoteBook implements IShopItem
{
	protected $brand;
	protected $model;
	protected $display;
	protected $hardware;
	
	use ISallableTrait;
	
	public function __construct($brand, $model, $display, $hardware, $price)
	{
		$this->brand=$brand;
		$this->model=$model;
		$this->display=$display;
		$this->hardware=$hardware;
		$this->setPrice($price);

	}

	public function __toString()
	{
		return sprintf("brand: %s, model: %s, price: %d ", $this->brand, $this->model, $this->price);
	}
	
}