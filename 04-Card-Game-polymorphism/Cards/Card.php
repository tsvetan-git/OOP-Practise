<?php
namespace Cards;
use Players\Player;

//класа card съдържа абстрактен метод затова трябва и самият клас да е абстрактен!!
abstract class Card
{
	const TYPE_DEMAGE = 'D';
	const TYPE_HEALTH = 'H';
	const TYPE_SHIELD = 'S';
	
	const DEMAGE_CARD_VALUE = 20;
	const HEALTH_CARD_VALUE = 10;
	const SHIELD_CARD_VALUE = 10;
	
	protected $value;
	protected $type;
	
	public function __construct($value, $type)
	{
		$this->value=$value;
		$this->type=$type;
	}
	
	abstract function applyToPlayer(Player $player);//type hinting
	
    abstract function isApplicableToCurrentPlayer(); //

	public function getValue(){
		return $this->value;
	}

	public function getType(){
		return $this->type;
	}



}