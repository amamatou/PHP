<?php

function inverse($x)
{
    if(!$x)
    {
        throw new Exception('Division par zero');
    }
    else
    {
        return 1/$x;
    }
}

try
{
    echo inverse(2).'<br>';
    echo inverse(0).'<br>';
}

catch(Exception $e)
{
    echo 'Erreur: '.$e->getMessage().'<br/>';
}

?>