<?php

class Pere
{
    private $argent = "10000DH";

    public function getArgent()
    {
        return $this->argent;
    }
}

class Fils extends Pere
{

}

$papa = new Pere();
$fils = new Fils();

echo $papa->getArgent();
//echo $fils->argent;
//echo $papa->argent;

?>