<?php
class Address{
    private $name;
    private $address;

    public function __construct($name,$address){
        $this->name = $name;
        $this->address = $address;
    }
    public function showPersonInfo(){
        $info = '<br>'.$this->name.'<br>'.$this->address.'<br><br>';
        return $info;
    }
    public function __destruct(){ // Destructor Destroys an instance/ object.

    }
}
?>