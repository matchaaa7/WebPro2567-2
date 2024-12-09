<?php


$ten = 0;
$five = 0;
$one = 0;

const total = 100;
$price = 22;

$change =  total - $price;
echo "Change is :  $change <br> " ;


$ten = (int)($change / 10);
$five = (int)(($change % 10) / 5);
$one = $change % 5;



echo "Ten coin is : $ten <br>";
echo "Five coin is : $five <br>";
echo "One coin is : $one <br>";