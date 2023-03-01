<?php

require_once 'Modele/Modele.php';

class Commentaire extends Modele
{

	public function getCommentaires($idBillet)
	{
		$sql = 'select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE where BIL_ID=?';
		$commentaires = $this->executerRequete($sql, array($idBillet));
		return $commentaires;
	}
}