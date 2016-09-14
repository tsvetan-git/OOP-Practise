<?php
use Person\Trader;
use Person\Supplier;
use Stores\Store;

require_once 'autoload.php';

$trader = new Trader('test', 'test2', 100, ['store1','store2'], ['suplier1','2']);

$supplier = new Supplier('supplier', 'testtets', 'pfuudont', 'none');

$store = new Store('test', 'ok', 'Pavilliona');

var_dump($store);