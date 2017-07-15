<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
ini_set('display_errors','1');
include_once '../Config/adminconfig.php';
include_once '../Config/ConfigClasses.php';
//var_dump($_SESSION);
/**
 * Смысл этого в получении GET запроса со строки index.php, если это
 * начальная страница - он пуст($action = NULL), значит получаем
 * исходное значение $action = mainpage;
 *
 */
if (isset($_POST['submit'])) {
    $dataPost = $_POST['submit'];
}else{
    $dataPost = NULL;
}
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    $user=NULL;
}




if($dataPost!=NULL && $user==NULL){
    $action = 'authUserByNameAndLogin';
    $action_obj->$action();
}



if($user==NULL){
    $action = 'authuser';
}else {
    $action = filter_input(INPUT_GET, 'page');
    if (!$action) {
        $action = 'mainpage';
    }
}
/**
 * Теперь самое интересное, получаем экземпляр класса Action, содержащий
 * в себе $template(main.php) и $db - массив дл подсоединения к БД, в
 * результате чего согласно конструктору получаем 2 свойства - temmplate
 * и MainStorage, являющийся свойством класса Action и одновременно
 * экземпляром класса MainStorage.
 * Теперь имея GET запрос сверху($action) мы спрашиваем есть ли функция
 * полученная в GET запросе - в классе Action, если нет - то запустится
 * опять mainpage, если есть - то запустится функция, одноименнаая GET
 * запросу. Т.е. мы всегда будем находится на главной странице, а функции
 * будут срабатывать согласно полученного GET запроса после нажатия
 * Отработана единая точка входа
 */

if(!method_exists($action_obj, $action)){
    $action='mainpage';
}
/**
 * Теперь главный запрос, который характеризуется обращением к экземпляру
 * класса по GET запросу, полученному после нажатия на кнопку формы.Получается
 * ситуация типа : Начало страницы - index.php, за счет отсутствия GET
 * элементов $action присваивается NULL, из-за этого срабатывает условие
 * $action='mainpage' и срабатывает функция $action_obj->$action() по
 * принципу $action_obj->mainpage(); Далее во всех формах переходы
 * идут по принципу $_SERVER['PHP_SELF']?action=editform" всегда
 * указывая какое-либо GET значение, из-за чего мы всегда будем на странице
 * index.php, но с GET запросом, который опять будет считываться на этой
 * странице и вызывать соответствующую функцию
 */
$action_obj->$action();











