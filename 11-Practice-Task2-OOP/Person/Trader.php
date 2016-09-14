<?php
namespace Person;

class Trader extends Person
{
	protected $sum;
	protected $stores;
	protected $suppliers;
	
	public function __construct($name, $address, $sum, $stores, $suppliers)
	{
		parent::__construct($name,$address);
		$this->sum=$sum;
		$this->stores=$stores;
		$this->suppliers=$suppliers;
		
	}
	
}