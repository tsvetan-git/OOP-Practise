<?php
namespace Cards;

use Players\Player;

class ShieldCard extends Card
{
	//overriddes constructor
	public function __construct()
	{
		parent::__construct(self::SHIELD_CARD_VALUE, self::TYPE_SHIELD);
	}
	
	//implements abstract method
	
	public function applyToPlayer(Player $player)
	{
		$player->increàseShield($this->value);
	}
	
	public function  isApplicableToCurrentPlayer()
	{
		return true;
	}
}