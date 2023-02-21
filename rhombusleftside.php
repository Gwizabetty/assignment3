<?php

for($i=1;$i<=10;$i++) { 
   for ($j=1;$j<=$i;$j++) { 
   echo " * ";
   }
   echo("<br>");
   if($i==10){
    for($i=1;$i<=10;$i++) { 
        for ($j=9;$j>=$i;$j--) { 
        echo " * ";
        }
        echo("<br>");
     }
   }
}
?>