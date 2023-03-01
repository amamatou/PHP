<?php
interface Itemplate
{
    public function set($name, $var);
    public function get($name);
}

class Template implements Itemplate
{
    public $tab = array();
    public function set($name, $var)
    {
        $this->tab[$name] = $var;
    }
    public function get($name)
    {
        if(array_key_exists($name, $this->tab))
        {
            return $this->tab[$name].'<br/>';
        }
        else 
        {
            return false;
        }
    }
}

$template = new Template();

$template->set('1','one');
$template->set('2','two');
echo $template->get('1');
echo $template->get('2');



?>