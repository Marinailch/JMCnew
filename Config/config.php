<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 25.03.2017
 * Time: 23:51
 */
function __autoload($class){
    $filename="Library/{$class}.php";
    if(file_exists($filename)){
        include_once $filename;
    }
}



$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'jmcdatabase',
);

//$db->query('SET NAMES UTF8'); //вариант 1
//
//mysqli_set_charset( $db, 'utf8' ); //вариант 2
//
//$sql = "\n". "SET NAMES \"utf8\""; //вариант 3
//
//$mysqli = new mysqli($db['host'], //вариант 4
//    $db['user'],
//    $db['pass'],
//    $db['name']);
//
//if($mysqli->connect_errno){
//    echo "error with connection to database ->".$mysqli->connect_error;
//    die('No connection with database'.__LINE__);
//}
//$mysqli->query('SET NAMES UTF8');