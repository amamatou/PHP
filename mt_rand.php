<?php
$salaire = mt_rand(1,9000) ;
if ($salaire < 1000) 
{
echo "Vous êtes payé en dessous du SMIC, votre salaire=$salaire <br/>";
} 
elseif ($salaire < 6000) 
{
echo "Vous êtes raisonnablement bien payé, votre salaire=$salaire <br/>";
// On notera ici qu’il n’est pas nécessaire de répéter la
// condition impliquant que le salaire est supérieur à 1000
} 
else 
{
echo "Contactez–moi, votre travail m'intéresse ! votre salaire=$salaire<br/>";
}
echo "val max = ".mt_getrandmax().'<br/>';
echo mt_rand().'<br/>';
echo mt_rand(2147483637,2147483648);//ne genere pas d'erreur meme si l'interval depasse la valeur maximale
?>