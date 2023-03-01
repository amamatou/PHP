<?php
$nombre = mt_rand(0,4);
switch ($nombre)
{
case 4:
echo "$nombre est supérieur à 3 <br>";
case 3:
echo "$nombre est supérieur à 2 <br>";
case 2:
echo "$nombre est supérieur à 1 <br>";
case 1:
echo "$nombre est supérieur à 0 <br>";
break ;
default:
echo "$nombre est 0 <br>";
}
?>