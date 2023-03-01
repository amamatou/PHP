<?php
$tab = array(1, 2, 3) ;
foreach($tab as $valeur) {
$valeur = $valeur - 1 ;
}
echo $tab[0] + $tab[1] + $tab[2] ."<br/>" ; // Affiche 6
foreach($tab as &$valeur) {
$valeur = $valeur - 1 ;
}
echo $tab[0] + $tab[1] + $tab[2] ."<br/>" ; // Affiche 3
?>