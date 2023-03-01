<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Calco test</title>
</head>
<body>
<?php
    $X = $Y = $R = NULL;
    if(isset($_POST['op']) && is_numeric($_POST['x']) && is_numeric($_POST['y']))
    {
        $X = ($_POST['x']);
        $Y = ($_POST['y']);

        switch ($_POST['op'])
        {
            case '+' : $R = $X + $Y; break;
            case '-' : $R = $X - $Y; break;
            case '*' : $R = $X * $Y; break;
            case '/' : $Y ? $R = $X/$Y : $R = "inf"; break;
            case 'Reset' : $X = $Y = $R = NULL; break;
        }
    }
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table bgcolor='silver' border="1" align="center">
<tr>
<td>X :</td>
<td><input name="x" type="text" size="2" value="<?php echo $X;?>"></td>
</tr>
<tr>
<td>Y :</td>
<td><input name="y"type="text" size="2" value="<?php echo $Y;?>"></td>
</tr>
<tr>
<td>R :</td>
<td><input name="R" type="text" size="2" disabled=true value="<?php echo $R;?>"></td>
</tr>
<tr>
<td><input type="submit" value="+" name="op"></td>
<td><input type="submit" value="-" name="op"></td>
</tr>
<tr>
<td><input type="submit" value="*" name="op"></td>
<td><input type="submit" value="/" name="op"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Reset" name="op"></td>
</tr>
</table>
</form>
</body>

</html>