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
 