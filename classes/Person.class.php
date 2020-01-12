<?php

class Person{
    private $name;
    private $age;
    private $gender;

    public function __construct($name,$age,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function showPersonInfo(){
        $info = '<br>'.$this->name.'<br>'.$this->age.'<br>'.$this->gender.'<br><br>';
        return $info;
    }
    public function __destruct(){ // Destructor Destroys an instance/ object.
        echo "Destroyed"; 
    }
}
?>