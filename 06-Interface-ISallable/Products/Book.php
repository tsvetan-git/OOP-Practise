<?php
namespace Products;

class Book implements ISellable
{
	protected $title;
	protected $author;
	protected $cover;
	protected $pages;
	protected $price;
	
	public function __construct($title, $author, $cover, $pages, $price)
	{
		$this->title=$title;
		$this->author=$author;
		$this->cover=$cover;
		$this->pages=$pages;
		$this->setPrice($price); //2.call setPrice
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	//1.add setPrice method
	public function setPrice($price)
	{
		$this->price=$price;
	}
}