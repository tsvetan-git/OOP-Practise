<?php
namespace GameCore;

class Game
{
	/*
	 * 
	 * @var playerOne
	 */
	protected $playerOne;
	/*
	 *
	 * @var playerTwo
	 */
	protected $playerTwo;
	/*
	 *
	 * @var playerOnTurn
	 */
	protected $playerOnTurn;
	
	public function turn()
	{
		//before everything call switchplayer 
		$this->switchPlayer();
		//promt for card index
		$card = $this->playerOnTurn->throwCard(0);
		
		//check if object is from DamageCard class
		if (!$card->isApplicableToCurrentPlayer()){
			$card->applyToPlayer($this->getOtherPlayer());
		}else{
			$card->applyToPlayer($this->playerOnTurn);
		}
	}
	
	public function getOthePlayer()
	{	
		// === compare objects if they are equal
		if ($this->playerOnTurn === $this->playerOne){
			return $this->playerTwo;
		}
		return $this->playerOne;
	}
	
	public function switchPlayer()
	{
		if ($this->playerOnTurn !== $this->playerOne){
			$this->playerOnTurn = $this->playerOne;
		}else{
			$this->playerOnTurn = $this->playerTwo;
		}
	}
}