<?php
namespace Stores;
class Store
{
	const MALL_STORE_TAX = 150;
	const STREET_STORE_TAX = 50;
	const PAVILLION_TAX = 50;
	
	protected $address;
	protected $workTime;
	protected $typeArray = ['Mall Store','Street Store','Pavillion'];
	protected $type;
	
	public function __construct($address, $workTime, $type)
	{
		$this->address=$address;
		$this->workTime=$workTime;
		
		if($type == in_array($type, $this->typeArray))
		{
			$this->type = $type;
		}else{
			throw new Exception('store type is incorrenct');
		}
	}
	
}