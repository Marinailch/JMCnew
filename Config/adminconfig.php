<?php
function __autoload($class){
    $filename="../Library/{$class}.php";
    if(file_exists($filename)){
        include_once $filename;
    }
}



$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'root',
    'name' => 'jmcdatabase',
);