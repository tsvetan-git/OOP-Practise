<?php
namespace Products;

interface ISellable
{
	public function getPrice();
	
	public function setPrice($price);
}