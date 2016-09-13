<?php
namespace Products;

class Book implements ISellable
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
	//3.
	public function __toString()
	{
		return sprintf("title: %s, author: %s, price: %d", $this->title, $this->author, $this->price);
	}
	
}