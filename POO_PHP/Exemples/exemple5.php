<?php
class MemberTest {
    /**  Variable pour les données surchargées.  */
    private $data = array();
    /**  La surcharge n'est lancée que lorsque l'on accède à la classe depuis l'extérieur.  */
    private $hidden = 2;
    public function __set($name, $value) {
        echo "Définition de '$name' à la valeur '$value'\n";
        $this->data[$name] = $value;
    }
    public function __get($name) {
        echo "Récupération de '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
}
    /**  Ce n'est pas une méthode magique, nécessaire ici que pour l'exemple.  */
    public function getHidden() {
        return $this->hidden;
    }
}
echo "<pre>\n";
$obj = new MemberTest;
 
$obj->a = 1;
$obj->hidden = 10; //la surcharge de l'attribut via __set() 
echo $obj->a . "\n\n"; //la variable a n'existe pas dab
echo "Manipulons maintenant la propriété privée nommée 'hidden':\n";
echo "'hidden' est visible depuis la classe, donc __get() n'est pas utilisé...\n";
echo $obj->getHidden() . "\n";
echo "'hidden' n'est pas visible en dehors de la classe, donc __get() est utlisé...\n";
echo $obj->hidden . "\n";
?> 