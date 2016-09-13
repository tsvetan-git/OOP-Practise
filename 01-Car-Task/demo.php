<?php
use Vehicle\Car;
use Person\Driver;

require_once 'autoload.php';

$car1 = new Car('bmw', 'blue', 195);
$driver1 = new Driver('Pesho', 29);

$car1->setDriver($driver1);

$car1->startDriving();

//echo $car1->getInfo();
/* for ($i=0; $i<30; $i++){
	$car1->driving();
	echo $car1->getInfo(),PHP_EOL;
	sleep(1);
} */

do {
	$car1->driving();
	if (!$car1->getIsBraking()){
	$car1->setIsAccelerating(true);
	}
	if ($car1->getCurrentSpeed() == 125)
	{
		$car1->setIsAccelerating(false);
		$car1->setIsBraking(true);
	}
	echo $car1->getInfo(),PHP_EOL;
	sleep(1);
}while ($car1->getCurrentSpeed()!= 0);

//var_dump($car1);