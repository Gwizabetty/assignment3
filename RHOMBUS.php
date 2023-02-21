<?php

$size = 21;
$lines = ceil($size/2);

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= abs($lines-$i); $j++) {
        echo " &nbsp;&nbsp; ";
    }
    for ($a = 1; $a <= $size - 2*abs($lines-$i); $a++) {
        echo " * ";
    }
    echo "<br>";
}

?>