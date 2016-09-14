<?php
namespace Person;

class Supplier extends Person
{
	protected $workTime;
	protected $type;
	
	public function __construct($name, $address, $workTime, $type)
	{
		parent::__construct($name,$address);
		$this->workTime = $workTime;
		$this->type = $type;	
	}
	
}