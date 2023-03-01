<!DOCTYPE html>
<html>
    <head>  
        <title>Calculatrice</title>  
        </head>
    <body>
        <?php 
        $x=$y=$r=NULL; 
        if (isset($_POST["operation"]) && is_numeric($_POST["x"])&& is_numeric($_POST["y"]))
            {  
                $x = $_POST["x"]; 
                $y = $_POST["y"]; 
                switch ($_POST["operation"]) 
                { 
                    case "+": $r=$x+$y; break; 
                    case "-": $r=$x-$y; break; 
                    case "*": $r=$x*$y; break; 
                    case "/": if($y!=NULL)
                                { 
                                    $r=$x/$y;
                                }
                                else
                                {
                                    $r="inf";
                                }
                                break; 
                    case "reset": $x=$y=$r=NULL; break; 
                } 
            } 
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <table bgcolor="silver" border="1px" align="center">
            <tr>
                <td>X :</td>
                <td><input type="text" name="x" size="2" value="<?php echo $x ?>"></td>
            </tr>
            <tr>
                <td>Y :</td>
                <td><input type="text" name="y" size="2" value="<?php echo $y ?>"></td>
            </tr>
            <tr>
                <td>R :</td>
                <td><input type ="text" name="r" size ="2" disabled ="true" value=<?php echo $r ?>></td>
            </tr>
            <tr align = center>
                <td><input type="submit" name="operation" value='+'></td>
                <td><input type="submit" name="operation" value='-'></td>
            </tr>
            <tr align = center>
                <td><input type="submit" name="operation" value='*'></td>
                <td><input type="submit" name="operation" value='/'></td>
            </tr>
            <tr align = center>
                <td colspan='2'><input type="submit" name="operation" value='reset'></td>
            </tr>
        </table>
        </form>
    </body>
</html>