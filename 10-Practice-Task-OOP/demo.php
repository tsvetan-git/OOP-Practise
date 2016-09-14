<?php
require_once 'autoload.php';

$proxy1Assets = [new Assets('car', 20000), new Assets('car2', 1000)];
$proxy1 = new Client('Gosho', 3445678787, $proxy1Assets);
 
$client1Assets = [new Assets('house1', 300000), new Assets('house2', 120000)];
$client1 = new Client('Pesho', 8988784624, $client1Assets, $proxy1);

Administration::getInstance()->newDeclaration($proxy1);
Administration::getInstance()->newDeclaration($client1);

Administration::getInstance()->checkTaxes($proxy1);
Administration::getInstance()->checkTaxes($client1);

Administration::getInstance()->payTaxes($proxy1);
Administration::getInstance()->payTaxes($client1);

Administration::getInstance()->allNotPaid();
Administration::getInstance()->allDeclarationsAtDate(14, 9, 2016);



