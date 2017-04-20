<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 22:01
 */
include_once '../Config/adminconfig.php';

include_once '../Config/ConfigClasses.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ADMIN panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Еврейский Медицинский Центр">
    <meta name="author" content="">
    <meta name="keywords" content="Клиника">
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="all"/>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>


</head>
<body>
<header>
    <form class="form-horizontal" method="POST" action="index.php">


<!--        <textarea name="test"></textarea>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="inputSuccess3">Биоматериал</label>-->
<!--            <div class="col-sm-4">-->
<!--                <input type="text" name="bio" class="form-control">-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="inputSuccess3">Результат</label>-->
<!--            <div class="col-sm-4">-->
<!--                <input type="text" name="result" class="form-control">-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="inputSuccess3">Срок</label>-->
<!--            <div class="col-sm-4">-->
<!--                <input type="text" name="term" class="form-control">-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="inputSuccess3">Цена</label>-->
<!--            <div class="col-sm-4">-->
<!--                <input type="text" name="price" class="form-control">-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->


        <!-- Trying new action-->

                <div class="form-group">
                    <label for="inputSuccess3">Название модуля лаб исследований</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

        <textarea name="test"></textarea>
        <!-- Trying new action-->

        <input type="submit" class="form-horizontal" name="submit">
    </form>


</header>
<script>
    CKEDITOR.replace( 'test' );
</script>
</body>
</html>
<?php
//$x = filter_input(INPUT_POST, 'submit');
//$bio = filter_input(INPUT_POST, 'bio');
//$test = filter_input(INPUT_POST, 'test');
//$result = filter_input(INPUT_POST, 'result');
//$term = filter_input(INPUT_POST, 'term');
//$price = filter_input(INPUT_POST, 'price');
//
//
//if($x){
////    echo $bio.'<br>'.$test.'<br>'.$result.'<br>'.$term.'<br>'.$price;
//    if($laboratory->insertIntoLab($test, $bio, $result, $term, $price)){
//        echo 'OK';
//    }else{
//        echo "NO";
//    }
//}

$x = filter_input(INPUT_POST, 'submit');

$name = filter_input(INPUT_POST, 'name');
$descr = filter_input(INPUT_POST, 'test');


if($x){
    if ($laboratory->insertIntoLabFull($name, $descr)) {
        echo 'OK';
    } else {
        echo "NO";
    }
}

















