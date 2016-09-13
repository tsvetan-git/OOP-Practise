<?php
namespace Products;

class NoteBook implements ISellable
{
	protected $brand;
	protected $model;
	protected $display;
	protected $hardware;
	protected $price;
	
	public function __construct($brand, $model, $display, $hardware, $price)
	{
		$this->brand=$brand;
		$this->model=$model;
		$this->display=$display;
		$this->hardware=$hardware;
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