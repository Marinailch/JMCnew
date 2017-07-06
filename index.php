<?php
ini_set('display_errors','0');
//Настройки приложения
include_once 'Config/config.php';
//Возврат классов, подключаемых к приложению
include_once 'Config/ConfigClasses.php';

$page = $request->getMain();

include_once "header.php";

include_once $page[0];

include_once "footer.php";
