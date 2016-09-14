<?php
namespace Person;

abstract class Person
{
	protected $name;
	protected $address;
	
	public function __construct($name, $address)
	{
		$this->name=$name;
		$this->address=$address;
	}
}