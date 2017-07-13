<?php
error_reporting(E_ALL);
//Настройки приложения
include_once 'Config/config.php';
//Возврат классов, подключаемых к приложению
include_once 'Config/ConfigClasses.php';



include_once "header.php";


$page = $request->getMain();
include_once $page;


include_once "footer.php";
