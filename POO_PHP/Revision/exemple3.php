<?php
class Texte
{
    protected $text;

    public function _construct(){}

    public function _destruct(){}

    protected function protegee()
    {
        return $this->text;
    }

    public function getText()
    {
        return $this->protegee();
    }

    public function setText($val)
    {
        $this->text = $val;
    }

}

$monTexte = new Texte();

$monTexte->setText("Merci pour tout !!!!");

echo $monTexte->getText();

?>