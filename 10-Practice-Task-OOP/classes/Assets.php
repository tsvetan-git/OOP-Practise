<?php

class Assets
{
	const TAX_VALUE = 10;
    private $name;
    private $price;
    private $tax;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->tax = $price / self::TAX_VALUE;
    }
	//need trait
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    } 

    public function getTax()
    {
        return $this->tax;
    } 
	
    public function setTax($tax)
    {
        $this->tax = $tax;
    }
}