<?php
namespace Cards;
use Players\Player;

//т.е. Card има абстрактен метод, клас Demage Card го наследява и също изискава да бъде абстрактен
// за да се избегне това метода се предифинира от абстрактен в public и вече има тяло!!
class DemageCard extends Card
{
	//$value;
	//$type;
	//__construct
	
	//overrides parent constructor
	public function __construct()
	{
		parent::__construct(self::DEMAGE_CARD_VALUE,self::TYPE_DEMAGE);
	}
	//implements abstract method
	public function applyToPlayer(Player $player)
	{
		$player->takeDamage($value);
	}
	
	public function  isApplicableToCurrentPlayer()
	{
		return false;
	}
}