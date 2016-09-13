<?php
namespace University;

class Professor
{
	protected $name;
	
	private static $title = 'prof.';
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	protected static function getTitle()
	{
		return self::$title;
	}
	
	public function getInfo()
	{  
		//late static-binding static call static class in this method 
		return sprintf("%s %s", static::getTitle(), $this->name);
	}
}