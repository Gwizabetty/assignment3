<?php
function FACT ($n){
    if($n <= 1){
        return 1;
    }
    else{
        return $n * FACT ($n-1);
    }
}
$nbr = 10;
$fact =FACT ($nbr);
echo "Factorial of $nbr is $fact";
?>