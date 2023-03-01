<?php

abstract class Modele
{
	// Objet PDO d'accès à la BD
	private $bdd;

	// Exécute une requête SQL éventuellement paramétrée
	protected function executerRequete($sql, $params = null) 
	{
		if ($params == null) 
		{
			$resultat = $this->getBdd()->query($sql); // exécution directe
		}
		else 
		{
			$resultat = $this->getBdd()->prepare($sql); // requête préparée
			$resultat->execute($params);
		}
		return $resultat;
	}

	private function getBdd()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $bdd;
	}
}


