<?php
class Admin{
    private $id;
    private $username;
    private $nama;

    public function setId($val){
        $this->id = $val;
    }
    public function getId(){
        return $this->id;
    }
    public function setUsername($val){
        $this->username = $val;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setNama($val){
        $this->nama = $val;
    }
    public function getNama(){
        return $this->nama;
    }


}


?>