<?php
namespace Shape;

class BaseShape
{
	protected $width;
	protected $height;
	protected $graphic;
	
	public function __construct($width,$height,$graphic){
		$this->width=$width;
		$this->height=$height;
		$this->graphic=$graphic;
	}
	
	public function display()
	{
		return sprintf('<img src="%s" width="%d" height="%d" />',
				'images/'.$this->graphic,
				$this->width,
				$this->height
				);
	}
	public function resize($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}
	
	public function displayTitle()
	{
		return "I am a Shape";
	}
}