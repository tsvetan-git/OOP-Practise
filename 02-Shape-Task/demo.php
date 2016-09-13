<?php
use Shape\Rectangle;
use Shape\Square;
use Shape\BaseShape;
require_once 'autoload.php';
$shape =  new BaseShape(100, 200, 'rectangle.png');
$rectangle = new Rectangle(100, 200, 'rectangle.jpg');
$square =  new Square(100, 'rectangle.jpg');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3><?= $shape->displayTitle()?></h3>
<?php echo $rectangle->display(); ?>
<hr>
<h3><?= $rectangle->displayTitle()?></h3>
<?php 
$rectangle->resize(200, 100);
echo $rectangle->display();
?>
<hr>
<h3><?= $square->displayTitle()?></h3>
<?php 
echo $square->display();
?>

</body>
</html>