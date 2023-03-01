<?php
$monfichier = fopen("monfichier.txt", "r") ; // ouverture en lecture
if ( !($monfichier)) 
{
	print("Impossible d’ouvrir le fichier") ;
	exit ;
}
while ( !feof($monfichier) )  // feof end-of-file verifie si la fin du fichier est atteinte
{
	$ligne = fgets($monfichier,255); // 255 caractères max. ou bien fin de ligne. 
									//fgets lit une seule ligne du fichier et pointe sur la suivante apres son appel
									//fgetc lit un seul caractere d'un fichier et passer pointe sur le suivant apres son appel
	print "$ligne <BR>";
}
fclose ($monfichier) ;
?>