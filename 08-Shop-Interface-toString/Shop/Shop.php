<?php
namespace Shop;

use Products\ISellable;

class Shop
{
	protected static $items = [];
	
	protected static $total = 0;
	
	protected static $totalOnSale = 0;
	
	protected static $totalSold = 0;
	
	public static function addItem(ISellable $item)
	{
		self::$items[] = $item;
		self::$totalOnSale += $item->getPrice();
	}
	
	public static function sellItem(ISellable $item)
	{
		if($key = array_search($item, self::$items))
		{
			unset(self::$items[$key]);
		}
		
		$total += $item->getPrice();
	}
	

	public static function getTotalOnSale(){
		return self::$totalOnSale;
	}
	
	public function getTotalSold(){
		return self::$totalSold;
	}
	
	
	//1. 
	public static function getInfo()
	{
		return implode(', '.PHP_EOL, self::$items);
	}

}