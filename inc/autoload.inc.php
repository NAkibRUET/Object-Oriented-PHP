<?php
    spl_autoload_register('AutoLoader');

    function AutoLoader($className){
        $path = 'classes/';
        $extension = '.class.php';
        $fullpath = $path . $className . $extension;
        //echo $fullpath;

        if(!file_exists($fullpath)){
            return false;
        }
        include_once $fullpath;
    }
?>