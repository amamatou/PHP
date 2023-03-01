<?php

class Vue{
    private $fichier;

    public function __construct($vue_name){
        $this->fichier="vues/Vue".$vue_name.".php";
    }

    public function generer ($donnees){
        $content = $this->genererFichier($this->fichier,$donnees);
        $vue     = $this->genererFichier("vues/gabarit.php",array("content"=>$content));
        echo $vue;
    }

    public function genererFichier($fichier,$donnees){
        if( file_exists($fichier) ){
            extract($donnees);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }else{
            throw new Exception("Fichier $fichier Inexistant");
        }
    }
}