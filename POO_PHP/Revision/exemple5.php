<?php

class Tableau
{
   private $tab = array();
   private $hidden = 2;

   public function _set($name, $value)
   {
       $this->tab[$name] = $value;
   }

   public function _get($name)
   {
       if(array_key_exists($name, $this->tab))
       {
           return $this->tab[$name];
       }
   }

   public function getHidden()
   {
           return $this->hidden;
   }

}

echo "<pre>\n";
$obj = new Tableau;
//$obj->hidden = 10; //la surcharge de l'attribut hidden via __set()
$obj->a = 1;
//$obj->hidden = 10; //la surcharge de l'attribut via __set() 
echo $obj->a . "\n\n"; //la variable a n'existe pas dab
echo "Manipulons maintenant la propriété privée nommée 'hidden':\n";
echo "'hidden' est visible depuis la classe, donc __get() n'est pas utilisé...\n";
echo $obj->getHidden() . "\n";
echo "'hidden' n'est pas visible en dehors de la classe, donc __get() est utlisé...\n";
//echo $obj->hidden . "\n";

?>