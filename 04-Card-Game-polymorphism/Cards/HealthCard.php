<?php
namespace Cards;

use Players\Player;

class HealthCard extends Card
{
	//overrides constructor
	public function __construct()
	{
		parent::__construct(self::HEALTH_CARD_VALUE, self::TYPE_HEALTH);
	}
	//implements abstract method, specify Player class
	public function applyToPlayer(Player $player)
	{
		$player->increàseHealth($value);
	}
	
	public function  isApplicableToCurrentPlayer()
	{
		return true;
	}
}