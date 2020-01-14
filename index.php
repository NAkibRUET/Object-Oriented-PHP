<?php
    include 'inc/autoload.inc.php';
    include 'newClass.php';
?>
<html>
    <head>
        <title>OOP PHP</title>
    </head>
    <body>
        <div>Nakib Hossain</div>
        <?php
            $obj = new derived(); // The Paranthesis are not important here because there is no Contructor here
            //echo $obj->showGender();
            echo NewClass::constant;
            echo $obj->showStatic();
            $p1 = new Person(); // The Paranthesis are not important here because there is no Contructor here
            $p1->setPerson("Nakib",23,"Male");
            echo $p1->showPersonInfo();
            
            $p2 = new Person("Mr X", 24, "Male"); // Without Paranthesis it will give an erro, because constructor exists
            echo $p2->showPersonInfo();

            //echo PersonY::$DrinkingAge;
            //PersonY::setDrinkingAge(21);
            //echo PersonY::$DrinkingAge;

            //$p3 = new PersonY("A",12,"Male");
            //echo $p3->printStatic();

            /* Abstract Class Example */
            $buyProduct = new buyProduct();
            echo $buyProduct->getPayment();


            //Anonymous Class
            // The class is being free up from memory as soon as executed.
            // We use it in case we need a class that won't be reused.
            $newObj = new class(){ // Here it is important to name it "class", you cannot name it freely e.g "newClass", it will give an error
                public function func(){
                    echo "\nHello World";
                }
            };
            $newObj->func();
        ?>
    </body>
</html>