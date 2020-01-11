<?php
    include 'newClass.php';
?>
<html>
    <head>
        <title>OOP PHP</title>
    </head>
    <body>
        <div>Nakib Hossain</div>
        <?php
            $obj = new Derived(); // The Paranthesis are not important here because there is no Contructor here
            echo $obj->showGender();
        
            $p1 = new Person(); // The Paranthesis are not important here because there is no Contructor here
            $p1->setPerson("Nakib",23,"Male");
            echo $p1->showPersonInfo();
        
            $p2 = new PersonX("Mr X", 24, "Male"); // Without Paranthesis it will give an erro, because constructor exists
            echo $p2->showPersonInfo();
        ?>
    </body>
</html>