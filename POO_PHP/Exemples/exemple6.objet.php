<?php
require("exemple6.class.php");

$obj = new UneClasse();
$obj->text = 'valeur';
 
// Appel à une méthode non définie
echo $obj->substr(0, 3);
?>