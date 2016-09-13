<?php
namespace Vehicle;

use Person;

class Car
{
	protected $model;
	protected $color;
	protected $maxSpeed;
	protected $currentSpeed;
	protected $currentGear;
	protected $driver;
	
	protected $isBraking;//4 // когато е булева променливата е хубаво да е с is - $isБraking
	protected $isAccelerating;
	public function __construct($model,$color,$maxSpeed)
	{
		$this->model=$model;
		$this->color=$color;
		$this->maxSpeed=$maxSpeed;
		
		$this->currentSpeed = 0;
		$this->currentGear = 0;
		
		$this->isBraking = false;//4
		$this->isAccelerating = false;
	}
	

	public function setIsBraking($isBraking){
		$this->isBraking = (bool)$isBraking; //bool type hinting
		return $this;
	}
	
	public function setIsAccelerating($isAccelerating){
		$this->isAccelerating = (bool)$isAccelerating; //bool type hinting
		return $this;
	}

	public function getModel(){
		return $this->model;
	}

	public function setModel($model){
		$this->model = $model;
		return $this;
	}

	public function getColor(){
		return $this->color;
	}

	public function setColor($color){
		$this->color = $color;
		return $this;
	}

	public function getMaxSpeed(){
		return $this->maxSpeed;
	}

	public function setMaxSpeed($maxSpeed){
		$this->maxSpeed = $maxSpeed;
		return $this;
	}

	public function getCurrentSpeed(){
		return $this->currentSpeed;
	}

	public function setCurrentSpeed($currentSpeed){
		$this->currentSpeed = $currentSpeed;
		return $this;
	}

	public function getCurrentGear(){
		return $this->currentGear;
	}

	public function setCurrentGear($currentGear){
		$this->currentGear = $currentGear;
		return $this;
	}

	public function getDriver(){
		return $this->driver;
	}

	//задаваме драйвера от какъв тип да е, ако не го създадем в demo.php от този тип дава следната грешка:
	//Argument 1 passed to Vehicle\Car::setDriver() must be an instance of Person\Driver
	
	public function setDriver(Person\Driver $driver){
		$this->driver = $driver;
		return $this;
	}
	
	//
	public function startDriving()
	{
		if (!$this->driver){
			// \Exception -> този клас е в главният namespace Vehicle
			throw new \Exception('no driver');
		}	
		$this->setCurrentGear(1);
		$this->setCurrentSpeed(20);
	}
	
	public function driving()
	{
		if ($this->currentSpeed == 0){
			return $this->startDriving();
		}
		if ($this->isAccelerating && $this->getCurrentSpeed() < $this->getMaxSpeed()){
				$this->currentSpeed++;
		}
		if ($this->isBraking && $this->getCurrentSpeed()> 0 ){
				$this->currentSpeed--;
		}	
		$this->handleGear();//2
				
	}
	//1
	protected function handleGear()
	{
		if ($this->getCurrentSpeed() == 0){
			$this->setCurrentGear(0);
		}
		if ($this->getCurrentSpeed() > 0 && $this->getCurrentSpeed() <= 30){
			$this->setCurrentGear(1);
		}
		if ($this->getCurrentSpeed() > 30 && $this->getCurrentSpeed() <= 60){
			$this->setCurrentGear(2);
		}
		if ($this->getCurrentSpeed() > 60 && $this->getCurrentSpeed() <= 80){
			$this->setCurrentGear(3);
		}
		if ($this->getCurrentSpeed() > 80 && $this->getCurrentSpeed() <= 100){
			$this->setCurrentGear(4);
		}
		if ($this->getCurrentSpeed() > 100 && $this->getCurrentSpeed() <= 140){
			$this->setCurrentGear(5);
		}
		if ($this->getCurrentSpeed() > 140 && $this->getCurrentSpeed() <= $this->maxSpeed){
			$this->setCurrentGear(6);
		}
	}
	
	public function getInfo()
	{
	return sprintf('car: %s speed: %d km/h gear: %s',
			$this->getModel(),
			$this->getCurrentSpeed(),
			$this->getCurrentGear()
			//$this->getDriver()няма как да го добавим,т.к. е обект и не може да се конвертира до стринг
			);
	}

	public function getIsBraking(){
		return $this->isBraking;
	}

}