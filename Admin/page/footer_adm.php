<footer>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="slide-nav" >
            <div class="container">
            <div class="navbar-header" >
                <a href=""><img class="logo_head" src="../../img/logo.gif"></a>

                <div id="slidemenu">
                    <ul class="nav navbar-nav">
                        <li><a href="">Главная</a></li>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Диагностика</a></li>
                        <li><a href="">Врачи</a></li>
                        <li><a href="">Блог</a></li>
                        <li><a href="">О нас</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>


        <script src="../../js/bootstrap.min.js"></script>
    	<script src="../../js/script.js"></script>
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


if ($x) {
    if ($laboratory->insertIntoLabFull($name, $descr)) {
        echo 'OK';
    } else {
        echo "NO";
    }
}
?>

