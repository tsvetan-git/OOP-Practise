<?php
use Shape\Rectangle;
use Shape\Square;
use Shape\BaseShape;
use Shape\Triangle;
use Shape\Ellipse;
require_once 'autoload.php';
$shape =  new BaseShape(100, 200, 'rectangle.png');
$rectangle = new Rectangle(100, 200, 'rectangle.jpg');
$square =  new Square(100, 'rectangle.jpg');
$triangle = new Triangle(100, 150, 'triangle.png');
$ellipse = new Ellipse(100, 150, 'ellipse.png');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3><?= $shape->displayTitle()?></h3>
<?=$rectangle->display(); ?>
<hr>
<h3><?= $rectangle->displayTitle()?></h3>
<?php 
$rectangle->resize(200, 100);
echo $rectangle->display();
?>
<hr>
<h3><?= $square->displayTitle()?></h3>
<?= $square->display();?>
<hr>
<h3><?= $triangle->displayTitle()?></h3>
<?= $triangle->display();?>
<hr>
<h3><?= $ellipse->displayTitle()?></h3>
<?= $ellipse->display();?>
</body>
</html>