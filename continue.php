<?php
for ($i=1; $i<=3;$i++) 
{
	for($j=1; $j<=3;$j++)
	{
		// N’affiche le texte qu’une seule fois quand $i==3
		if ($i !=3) continue(2); //continue(3) genere une erreue
		echo 'On en est à la troisième itération i='.$i.' j='.$j.'<br/>';
	}
	echo 'On en est à la troisième itération i='.$i.'<br/>';
}
?>