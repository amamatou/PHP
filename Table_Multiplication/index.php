<!DOCTYPE html>
<html>
    <head>
        <title>Table de multiplication</title>
    </head>
    <body>
        <center>
        <?php
            require "Definition.php";
            Definition($NbrLignes, $NbrColonnes);
        ?>
    
        <table border="1px" cellpadding="5px">
            <thead>
                <tr>
                    <td colspan="<?php echo $NbrColonnes; ?>">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <label>Nombre de lignes :<input type="number" size="4" name="m" value="<?php echo $NbrLignes ?>"/></label>
                            <label>Nombre de colonnes :<input type="number" size="4" name="n" value="<?php echo $NbrColonnes ?>"/></label>
                            <input type="submit" name="Generer" value="Générer les tables"/>
                        </form>   
                    </td>
                </tr>
                <tr>

                   <?php
                        require "multiplication.php";
                        multiplication($NbrLignes, $NbrColonnes);
                    ?>
                    
                </tr>
            </tbody>
        </table>
        </center>
    </body>
</html>