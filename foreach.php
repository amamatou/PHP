<?php
$tab = array('prenom' => 'mohammed' , 'ville' => 'Tanger' ) ;
foreach ($tab as $element) 
{
echo "Valeur: $element<br>\n";
}
foreach ($tab as $cle => $valeur) 
{
echo "Cle : $cle; Valeur: $valeur<br>\n";
}
?>