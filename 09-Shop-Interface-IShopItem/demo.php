<?php
use Products\NoteBook;
use Shop\Shop;
use Products\Book;
use Products\Software;

require_once 'autoload.php';
$os = new Software('Windows', '8.1', 200);

$notebook1 = new NoteBook('HP', 'G6', 15, ['i5','8gb','500gb'], 1000);
$notebook2 = new NoteBook('Sony', 'Vaio', 14, ['i7','12gb','1tb'], 1500);

$book1 = new Book('testvano', 'profesor docentov', 'soft', 1000, 20);
$book2 = new Book('testvano2', 'profesor docentov', 'hard', 1500, 30);

Shop::addItem($notebook1);
Shop::addItem($notebook2);
Shop::addItem($book1);
Shop::addItem($book2);
Shop::addItem($os);

var_dump(Shop::getInfo());

var_dump(Shop::getTotalOnSale());