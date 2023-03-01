<?php

require("exemple3.class.php");
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