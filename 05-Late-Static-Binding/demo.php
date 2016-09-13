<?php
use University\Professor;
use University\ProfessorDoctor;

require_once 'autoload.php';

$prof1 = new Professor('test testov');
echo $prof1->getInfo(),PHP_EOL;

$prof2 = new ProfessorDoctor('dobri dobrev');
echo $prof2->getInfo();
//$prof2 = new ProfessorDoctor('dobri dobrev');
//echo $prof2->getInfo();