<?php
namespace University;

class ProfessorDoctor extends Professor
{
	//$name
	//static $title
	//__constructor
	
	private static $title = 'dr.';
	
	//overriding
	protected static function getTitle()
	{
		//parent + self
		return parent::getTitle().' '.self::$title;
	}
}