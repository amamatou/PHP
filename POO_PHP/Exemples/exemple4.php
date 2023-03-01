<?php
require("exemple4.class.php");
 
// Définition d'un descendant
class Fils extends Papa { }
 
$papa = new Papa();
$fils = new Fils();
 
// Propriété privée : Erreur FATALE
// echo $fils->argent;
 
// Propriété privée : Erreur FATALE
// echo $papa->argent;
 
// Récupère une propriété privée
echo $papa->prendreArgent();
?>