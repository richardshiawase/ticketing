<?php
class User {
    private $username;
    private $password; 
    private $request;

    

    public function setUsername($val){
        $this->username = $val;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setPassword($val){
        $this->password = $val;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setRequest($val){
        $this->request = $val;
        
    }
    public function getRequest(){
        return $this->request;
    
    }



    
}


?>