<?php
class Request{
    private $id;
    private $category;
    private $description;

    public function setId($val){
        $this->id = $val;
    }
    public function getId(){
        return $this->id;
    }
    public function setCategory($val){
        $this->category = $val;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setDescription($val){
        $this->description = $val;
    }
    public function getDescription(){
        return $this->description;
    }
}


?>