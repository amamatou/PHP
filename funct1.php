<?php
function bonjour(&$phrase) 
{
$phrase= "bonjour Toto" ;
}
$chaine = "Phrase qui va disparaître" ;
bonjour($chaine) ;
echo $chaine ; // affiche 'bonjour Toto' à l’écran
?>