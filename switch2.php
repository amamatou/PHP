<?php
require "traitement.php";
$nombre = mt_rand(0,4);
switch ($nombre)
{
case 4:
	traitement4(); break;
case 3:
	traitement3(); break;
case 2:
	traitement2(); break;
case 1:
	traitement1(); break;
default: 
	echo "Pas de traitement <br/>";
}
?>