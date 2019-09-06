<?php
require ('Rectangle.php');


$width = 20;
$height = 15;
$rec = new Rectangle($width,$height);

echo "Dien tich hinh chu nhat la: ".$rec->getArea()."<br>";
echo "Chu vi hinh chu nhat la: ".$rec->getPerimeter();
