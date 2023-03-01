<?php
// Définition d'une classe
class UneClasse {
  protected $text;
     
  public function __construct() { }
 
  public function setText( $val ) {
    $this->text = $val;
  }
 
  public function getText() {
    return $this->Protegee();
  }
 
  protected function Protegee() {
    return $this->text;
  }
}
 
$obj = new UneClasse();
 
// Modifie une propriété protégée
$obj->setText('Valeur');
 
// Propriété protégée : Erreur FATALE
 echo $obj->text;
 
// Méthode protégée : Erreur FATALE
 echo $obj->Protegee();
 
// Récupère une propriété protégée
echo $obj->getText();
?>