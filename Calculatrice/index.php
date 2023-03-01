<!DOCTYPE>
<html>
    <head>
        <title>Calculatrice de base</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php 
            require "Calculatrice.php";
            calcul($X,$Y,$R);
        ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <table border="1px" bgcolor="silver" align="center">
                <tr>
                    <td>X :</td>
                    <td><input type="text" size="2" name="X" value="<?php echo $X; ?>" /></td>
                </tr>
                <tr>
                    <td>Y :</td>
                    <td><input type="text" size="2" name="Y" value="<?php echo $Y; ?>" /></td>
                </tr>
                <tr>
                    <td>R :</td>
                    <td><input type="text" size="2" name="R" disabled="true" value="<?php echo $R; ?>" /></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="operation" value="+" /></td>
                    <td align="center"><input type="submit" name="operation" value="-" /></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="operation" value="*" /></td>
                    <td align="center"><input type="submit" name="operation" value="/" /></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="operation" value="Reset" /></td>
                </tr>
            </table>
        </form>
    </body>
</html> 