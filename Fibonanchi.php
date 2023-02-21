<?php

function Fibonanchi($n)
{
    if ($n == 0) {
        return 1;
    } elseif ($n == 1) {
        return 1;
    } else {
        return Fibonanchi($n - 1) + Fibonanchi($n - 2);
    }
}

for ($i = 1 ; $i < 20; $i++) {
    echo Fibonanchi($i) . " ";
}

?>