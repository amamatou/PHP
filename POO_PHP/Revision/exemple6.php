<?php
class Call
{
    public $text;

    public function __call($name, $param)
    {
        if($name == 'substr')
        {
            return substr($this->text, $param[0], $param[1]);
        }
        else
        {
            return false;
        }
    }
}

$obj = new Call();
$obj->text = 'Valeur';
echo $obj->substr(0,3);

?>