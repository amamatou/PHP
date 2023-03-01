<?php
require("Pdo.class.php"); //on inclue ici la class
require("connexpdo.inc.php"); 

connexpdo("ensat","myparam");

$sql = new Mysql("localhost", "root", "", "ensat", "1", "desole un probleme est survenu"); //creation de l'objet mysql
$sql->requete("SELECT * FROM eleves", "0"); //on execute une requete simple
echo "<center><h1>Liste des eleves de ENSAT</h1></center>";
echo "<table border=1 align=center>";
while($info = $sql->resultat(0)) //afin d'affiche les resultats de cette requete on utlise une boucle while
{
	echo "<tr>";
echo "<th>ID_ET</th>";
echo "<td>Nom</td>"; //on affiche les donnee du champ log de mysql
echo "<td>Prenom</td>";
echo "<td>CNE</td>";
echo "<td>Code_apoge</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$info['ID_ET']."</td>";
echo "<td>".$info['Nom']."</td>";  //on affiche les donnee du champ log de mysql
echo "<td>".$info['Prenom']."</td>"; 
echo "<td>".$info['CNE']."</td>";
echo "<td>".$info['Code_apoge']."</td>";

echo "</tr>";
}
echo "</table>";
$nb = $sql->nb_resultat(0); //on assigne a nb le nombre de resultat trouve
echo $nb; //on affiche le nombre de resultat trouve
echo $sql->nb_requete ."<br/>"; //on affiche le nombre de requetes utilisees, dans notre cas une seul donc 1
?>
