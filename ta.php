<!DOCTYPE html>
<html>
    <head>
        <title>Table de multiplication</title>
    </head>
    <body>
        <center>
        <?php
        $NbrLignes = $NbrColonnes = NULL;
        if(isset($_POST['Generer']) AND is_numeric($_POST['m'])AND is_numeric($_POST['n']))
        {
            $NbrLignes = $_POST['m'];
            $NbrColonnes = $_POST['n'];
        }
        else 
        {
            echo "<p><i>Veuillez entrez des nombres entiers</i></p>";
        }
            
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
                        for($j=1; $j<=$NbrColonnes; $j++)
                        {
                            echo "<th>$j</th>";
                        }

                        echo "</tr></thead><tbody>";

                        for($i=2; $i<=$NbrLignes; $i++)
                        {
                            echo "<tr>";
                            echo "<th>$i</th>";
                            for($j=2; $j<=$NbrColonnes; $j++)
                            {
                                echo "<td align=center>".$i*$j."</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                    
                <!-- </tr> -->
            </tbody>
        </table>
        </center>
    </body>
</html>