<?php
    $NbrLignes = $NbrColonnes = NULL;
    function Definition(&$NbrLignes, &$NbrColonnes)
    {
        if(isset($_POST['Generer']) AND is_numeric($_POST['m'])AND is_numeric($_POST['n']))
        {
            $NbrLignes = $_POST['m'];
            $NbrColonnes = $_POST['n'];
        }
        else 
        {
            echo "<p><i>Veuillez entrez des nombres entiers</i></p>";
        }
    }
?>
        