<?php
// Définition d'une classe
class Papa {
  private $argent = '10000DH';
 
  public function prendreArgent() {
    return $this->argent;
  }
}
// Définition d'un descendant
class Fils extends Papa { }
 