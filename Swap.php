<?php

$number1 = 5;
$number2 = 15;
echo "BEFORE SWAPP " . "<br>" . "<br>" . " Number one is " . $number1 . "<br>" . "Number two is" . $number2 . "<br>" . "<br>";

$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "AFTER SWAPP " . "<br>" . "<br>" . " Number one is " . $number1 . "<br>" . "Number two is" . $number2 . "<br>" . "<br>";

?>