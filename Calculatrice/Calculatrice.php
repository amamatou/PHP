<?php
     $X = $Y = $R = NULL;
    function calcul(&$X,&$Y,&$R)
    {
        if(isset($_POST['operation']) AND is_numeric($_POST['X']) AND is_numeric($_POST['Y']))
        {
            $X = $_POST['X'];
            $Y = $_POST['Y'];
            switch($_POST['operation'])
            {
                case '+': $R = $X + $Y; break;
                case '-': $R = $X - $Y; break;
                case '*': $R = $X * $Y; break;
                case '/': $Y ? $R = $X / $Y : $R = "infini" ; break;
                case 'Reset': $X = $Y = $R = NULL; break;
            }
        }
    }
?>