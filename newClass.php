<?php
    class NewClass{
        protected $gender = "Male";
        public $name = "Nakib";
        public function information(){
            echo "Nothing";
        }
    }
    class derived extends NewClass{
        public function showGender(){
            return $this->gender;
        }
    }
    $object = new NewClass;
    var_dump($object);

    class Person{
        private $name;
        private $age;
        private $gender;

        public function setPerson($name,$age,$gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
        public function showPersonInfo(){
            $info = $this->name.' '.$this->age.' '.$this->gender;
            return $info;
        }
    }
?>