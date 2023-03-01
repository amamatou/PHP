<?php
function double($i) 
{
return $i*2; 
}
$b = $a = 5; 	/* Assigne la valeur 5 aux variables $a et $b */
$c = $a++; 		/* Post-incrémentation de la variable $a et assignation de
la valeur à la variable $c */
$e = $d = ++$b; 	/* Pre-incrémentation, et assignation de la valeur aux
variables $d et $e */
/* à ce niveau, les variables $d et $e sont égales à 6 */
echo "a=$a, c=$c <br/>" ; 
echo "e=$e, d=$d <br/>" ;
$f = double($d++); 		/* assignation du double de la valeur de $d à la variable $f ($f
vaut 12), puis incrémentation de la valeur de $d */
$g = double(++$e); 		/* assigne deux fois la valeur de $e après
incrémentation, 2*7 = 14 to $g */
echo "f=$f, d=$d <br/>" ; 
echo "g=$g, e=$e <br/>" ;
$h = $g += 10; /* Tout d'abord, $g est incrémentée de 10, et donc $g vaut 24.
Ensuite, la valeur de $g, (24) est assignée à la variable $h, qui vaut donc elle aussi 24.
*/
echo "h=$h, g=$g";
?>