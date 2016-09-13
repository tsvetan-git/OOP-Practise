<?php
namespace Products;

class NoteBook implements ISellable
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
	
}