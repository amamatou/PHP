<?php

require_once 'modele/Modele.php';

class Eleve extends Modele{
    
    public function getEleves(){
        $sql="Select * from eleves";
        $eleves=$this->executerRequete($sql);
        return $eleves;
    }

}