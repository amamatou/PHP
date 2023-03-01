<?php

require_once 'modele/Eleve.php';
require_once 'vues/Vue.php';

class ControleurEleve{
    private   $eleve;
    
    public function __construct(){
        $this->eleve = new Eleve();
    }

    public function ListerEleves(){
        $eleves=$this->eleve->getEleves();
        $vue= new Vue("Eleve");
        $vue->generer(array('eleves'=>$eleves));
    }
}