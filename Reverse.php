<?php  
$name = "GWIZA BETTY"; 
$id_nbr = "0123456789"; 
$size = strlen($name); 
echo "The reverse of the name $name is : " ; 
for ($i=($size-1) ; $i >= 0 ; $i--)   
{  
  echo $name[$i];  
} 
echo "<br><br>" ;
$id_size = strlen($id_nbr);
echo "The reverse of this  $id_nbr  national id number is : " ; 
for ($j=($id_size-1) ; $j >= 0 ; $j--)
{
   echo $id_nbr[$j];
}
?>  