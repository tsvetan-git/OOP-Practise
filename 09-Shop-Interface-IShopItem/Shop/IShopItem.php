<?php
namespace Shop;
use Products\ISellable;
use Products\IPrintable;

interface IShopItem extends ISellable,IPrintable
{
	
}
