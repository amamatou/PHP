<?php

class Modele{
    private $bdd;

    public function getBDD(){
        if($this->bdd == null){
            $this->bdd = new PDO("mysql:host=localhost;dbname=CC2017;charset=utf8","root","");
        }
        return $this->bdd;
    }

    public function executerRequete($sql,$params = null ){
        if($params==null){
            $res = $this->getBDD()->query($sql);
        }else{
            $res = $this->getBDD()->prepare($sql);
            $res->execute($params);
        }
        return $res;
    }
}