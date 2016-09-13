<?php
namespace Shape;

class Triangle extends BaseShape
{
	public function displayTitle()
	{
		return parent::displayTitle(). ' and Triagle'; 
	}
}