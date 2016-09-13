<?php
namespace Cards;
use Players\Player;

//�.�. Card ��� ���������� �����, ���� Demage Card �� ��������� � ���� �������� �� ���� ����������
// �� �� �� ������� ���� ������ �� ����������� �� ���������� � public � ���� ��� ����!!
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