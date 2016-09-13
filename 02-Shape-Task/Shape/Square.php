<?php
namespace Shape;

class Square extends Rectangle
{
	public function __construct($width, $graphic)
	{
		/* $this->width = $width;
		$this->height = $width;
		$this->graphic = $graphic; */
		//
		parent::__construct($width, $width, $graphic);
	}
	
	public function displayTitle()
	{
		return parent::displayTitle().' and Square';
	}
<<<<<<< HEAD
	
=======

>>>>>>> origin/master
	public function resize($width, $height=null)
	{
		parent::resize($width, $width);	
	}
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/master
