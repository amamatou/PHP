<h1>Liste des élèves</h1>
<?php 
var_dump($eleves) 
?>
<table>
    <tr>
        <td>CNE</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Etat</td>
    </tr>
    <?php foreach($eleves as $eleve): ?>
        <tr>
            <td> <?= $eleve["cne"] ?> </td>
            <td> <?= $eleve["nom"] ?> </td>
            <td> <?= $eleve["prenom"] ?> </td>
           
            <td> <a href=<?= "activer.php?cne=".$eleve["cne"]."&etat=".$eleve["etat"] ?> > 
            <?= $eleve['etat']=='true'?'desactive':'active' ?> 
            </a> </td>
        </tr>
    <?php endforeach; ?>
</table>