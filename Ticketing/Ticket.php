<?php
class Ticket {
    private $id;
    private $description;
    private $request;
    private $admin;
    private $user;

    public function setUser($val){
        $this->user = $val;
    }
    public function getUser(){
        return $this->user;
    }
    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }

    public function setDescription($val){
        $this->description = $val;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setRequest($val){
        $this->request = $val;
    }
    public function getRequest(){
        return $this->request;
    }
    public function setAdmin($val){
        $this->admin = $val;    
    }

    public function getAdmin(){
        return $this->admin;
    }
}


?>