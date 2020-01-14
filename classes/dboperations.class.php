<?php

    class dboperations extends Dbh{
        public function users(){
            $sql= "SELECT * FROM user";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()){
                echo $row['name'].'<br>';
            }
        }
        //Prepared Statement
        public function getusers($name){
            $sql= "SELECT * FROM user WHERE name = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);
            $row = $stmt->fetchAll();

            foreach($row as $rows){
                echo $rows['address'].'<br>';
            }
        }

        public function setusers($name, $address, $mobile){
            $sql= "INSERT INTO `user` (`id`, `name`, `address`, `mobile`) VALUES (NULL, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $address, $mobile]);
            $insert = $stmt->fetchAll();

        }
    }