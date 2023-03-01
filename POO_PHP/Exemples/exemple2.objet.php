<?php 

require("exemple2.class.php");

// Instanciation de la classe
$fp = new Fichier('mysql.class.php');
 
echo '<pre>';
while( $l = $fp->read() ) {
  echo htmlspecialchars($l);
}
echo '</pre>';
?>