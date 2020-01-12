<?php
    class NewClass{
        protected $gender = "Male";
        public $name = "Nakib";
        public function information(){
            echo "Nothing";
        }
        public static $staticVar = "Static";
        const constant = "This is a const";
    }
    class derived extends NewClass{
        public function showGender(){
            return $this->gender;
        }
        public function showStatic(){
            return parent::$staticVar; // Extending from parent class. that's why 'parent::'
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
            $info = '<br><br>'.$this->name.'<br>'.$this->age.'<br>'.$this->gender.'<br><br>';
            return $info;
        }
    }

    /* Constructor and Destructor are methods. Constructors run right before we create an object.
    Destructors Right after we are done creating an object.  */

    
    class PersonX{
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
    /* Stattic Properties and Methods. They can be directly called without creating any instances of the class */
    class PersonY{
        private $name;
        private $gender;

        public static $DrinkingAge = 18;
        public function __construct($name,$age,$gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
        public function showPersonInfo(){
            $info = '<br>'.$this->name.'<br>'.$this->age.'<br>'.$this->gender.'<br><br>';
            return $info;
        }
        //public function setDrinkingAge($age){ // This will give warning.
        //    self::$DrinkingAge = $age;
        //}
        public static function setDrinkingAge($age){ // This will not give warning.
            self::$DrinkingAge = $age;
        }

        /*We can also access static variable normally. (using object)*/
        public function printStatic(){
            return self::$DrinkingAge;
        }
    }
?>