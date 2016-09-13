<?php
namespace Products;

use Shop\IShopItem;

class Book implements IShopItem
{
	protected $title;
	protected $author;
	protected $cover;
	protected $pages;
	
	use ISallableTrait;
	
	public function __construct($title, $author, $cover, $pages, $price)
	{
		$this->title=$title;
		$this->author=$author;
		$this->cover=$cover;
		$this->pages=$pages;
		$this->setPrice($price);
	}

	public function __toString()
	{
		return sprintf("title: %s, author: %s, price: %d", $this->title, $this->author, $this->price);
	}
	
}