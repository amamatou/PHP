<?php 
class PDOclass
{

    private $base;
    private $param;
    private $querries;

public function __construct($base,$param) 
{
    $this->base = $base;
    $this->param = $param;
    $this->querries = 0;

}

public function connexpdo()
{
    require_once($this->param.".inc.php");
    $dns = "mysql:host=".MYHOST.";dbname=".$this->base;
    $user = MYUSER;
    $pass = MYPASS;

    try
    {
        $dbh = new PDO($dns,$user,$pass);
        return $dbh;
    }
    catch(PDOException $e)
    {
        echo "Echec de connexion: ".$e->getMessage()."<br/>";
        return false;
        exit();
    }
}

public function MakeQuerry($requete)
{
    $result = connexpdo();
    if($result)
    {
        $this->querries = $this->querries + 1;
        return $this->$result->querry($requete);
    }
}

public function NbQuerry()
{
    return $this->querries;
}

}

