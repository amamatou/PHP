<?php
abstract class Mere 
{
    
    public static $stat = 0;
    public const cste = 2;



    abstract protected function getStatique();
    abstract protected function getConst();
    
}

final class constStat extends Mere 
{

    public function getStatique()
    {
        return parent::stat;
    }
    public function getConst()
    {
        return parent::cste;
    }
}

class parcourt
{
    
    public $var1 = 'valeur 1';
    public $var2 = 'valeur 2';
    public $var3 = 'valeur 3';

   public function parcourir()
   {
       foreach($this as $key => $valeur)
       {
           print "[$key] => $valeur<br/>";
       }
   }
}

$constante = new constStat();
echo $constante::cste.'<br/>';
echo $constante->getConst().'<br/>';

$class = new parcourt();

 
foreach($class as $key => $value) {
    print "$key => $value<br/>";
}
echo "<br/>";
$class->parcourir();

echo "<br/> Le clone de l'objet : <br/>";
$classClone = clone $class;
$classClone->parcourir();
?>