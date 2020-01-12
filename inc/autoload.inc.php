<?php
    spl_autoload_register('AutoLoader');

    function AutoLoader($className){
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url,'inc')!==false){
            $path = '../classes/';
        }
        else{
            $path = 'classes/';
        }
        $extension = '.class.php';
        $fullpath = $path . $className . $extension;
        //echo $fullpath;

        if(!file_exists($fullpath)){
            return false;
        }
        include_once $fullpath;
    }
?>