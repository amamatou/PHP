<?php
class Fichier 
{
    protected $file;

    public function __construct($filename)
    {
        $this->file = fopen($filename, 'r');
    }

    public function read()
    {
        if(feof($this->file) == false)
        {
            return fgets($this->file);
        }
        else
        {
            return false;
        }
    }

    public function _destruct()
    {
        fclose($this->file);
    }
}

$fichier = new Fichier("fich.txt");
echo '<pre>';
while($lire = $fichier->read())
{
    echo htmlspecialchars($lire);
}
echo '</pre>';
?>