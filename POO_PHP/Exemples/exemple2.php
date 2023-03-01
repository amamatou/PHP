<?php
// Définition d'une classe
class Fichier {
  public $res;
 
  public function __construct($filename) {
    $this->res = fopen($filename, 'r');
  }
  
  public function read() {
    if ( feof($this->res) == FALSE ) {
         return fgets($this->res);
    } else {
         return FALSE;
    }
  }
 
  protected function __destruct() {
    fclose($this->res);
  }
}
 
// Instanciation de la classe
$fp = new Fichier('mysql.class.php');
 
echo '<pre>';
while( $l = $fp->read() ) {
  echo htmlspecialchars($l);
}
echo '</pre>';
?>