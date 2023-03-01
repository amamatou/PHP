<?php
class Velo
{
    private $_couleur = 'Bleu';
    public function ObtenirCouleur()//string $color)
    {
        //$this->_couleur = $color;
        echo "Je suis de couleur ".$this->_couleur;
    }
}

$monvelo = new Velo();
$monvelo->ObtenirCouleur();//'violet');
//$monvelo->_couleur; erreur
?>