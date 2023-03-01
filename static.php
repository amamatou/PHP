<?php
function Test()
{
static $a = 0; // static $a=1+2 genere une erreur, ne pas faire des traitement ici
echo $a.'<br/>';
$a++;
}
for ($i=0;$i<10;$i++) Test();
?>