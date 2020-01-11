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
            $obj = new Derived();
            echo $obj->showGender();
            $p1 = new Person();
            $p1->setPerson("Nakib",23,"Male");
            echo $p1->showPersonInfo();
        ?>
    </body>
</html>