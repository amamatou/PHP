<?php
$fic="eleves.csv";
if (!file_exists($fic))
{
	print "<H3><BR>Erreur, fichier manquant<BR>";
	exit;
} 
else 
{
	$fd = fopen($fic,"r");
	echo "<table border='1'>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
			</tr>";
	while (!feof($fd)) 
	{
		$ligne = fgets($fd,255);
		$tab=explode(";",$ligne);
		print "<tr><td>$tab[0]</td>";
		print "<td>$tab[1]</td>";
		print "<td>$tab[2]</td></tr>";
	}
	echo "</table>";
fclose($fd);
}
?>