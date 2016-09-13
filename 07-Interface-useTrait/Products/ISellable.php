<?php
namespace Products;

interface ISellable
{
	//must be implemented in every class
	public function getPrice();
	
	public function setPrice($price);
}