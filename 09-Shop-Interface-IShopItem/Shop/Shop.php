<?php
namespace Shop;

class Shop
{
	protected static $items = [];
	
	protected static $total = 0;
	
	protected static $totalOnSale = 0;
	
	protected static $totalSold = 0;
	
	public static function addItem(IShopItem $item)
	{
		self::$items[] = $item;
		self::$totalOnSale += $item->getPrice();
	}
	
	public static function sellItem(IShopItem $item)
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
	
	public static function getInfo()
	{
		return implode(', '.PHP_EOL, self::$items);
	}

}