<?php
namespace Players;

class Player
{
	const MAX_HEALTH = 100;
	
	protected $health;
	protected $name;
	protected $shield;
	protected $cards; 
	
	public function __construct($name)
	{
		$this->name=$name;
		$this->health=self::MAX_HEALTH;
		
		//every player has cards, cards are array
		$this->cards = [];
	}
	
	public function getHealth(){
		return $this->health;
	}

	
	public function takeDamage($value)
	{
		//damage - shield;
		if ($this->health >= $value){
			$this->health -= $value;
		}else {
			$this->health = 0;
		}
	}
	public function increàseHealth($value)
	{
		$total = $this->health + $value;
		//$this->health = $total > self::MAX_HEALTH ? self::MAX_HEALTH : $total;
		$this->health = min(self::MAX_HEALTH,$total); //find lowest value min(100,120)
	}
	public function increàseShield($value)
	{
		$this->shield = $value; 
	}
	/*
	 * 
	 * @param int $index
	 * @return Card
	 */
	public function throwCard($index)
	{
		//remove portion of array and replace with something else
		return @current(array_splice($this->cards, $index, 1));
	}
}