<?php
// Définition d'une classe
class UneClasse {
  public $text;
 
  public function __call( $name, $params ) {
    if( $name == 'substr' )
      return substr($this->text, $params[0], $params[1]);
    else
      return false;
  }
}