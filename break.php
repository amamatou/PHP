<?php
for( $i=1 ; $i<=3 ; $i++) 
{
	while(TRUE) 
	{
		echo 'texte affiché une fois - 1ere entree du 1er while -<br/>' ;
		while(TRUE) 
		{
			echo 'texte aussi affiché une seule fois – 1ere entree du 2e while <br/>' ;
			break(2) ;// va sortir de la 1ere et 2e boucle
			// genere une erreur si le nombre depasse les boucles ex: break(4);
			echo 'texte jamais affiché – <br/>' ;
		}
		echo 'texte jamais affiché – <br/>' ;
	}
	echo "texte affiché une fois – for i=$i- <br/>" ;
	break ;
echo 'texte jamais affiché – <br/>' ;
}
?>