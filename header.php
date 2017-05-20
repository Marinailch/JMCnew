<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>JMC - Еврейский Медицинский Центр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Еврейский Медицинский Центр">
    <meta name="author" content="">
    <meta name="keywords" content="Клиника">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
    <script src="js/jquery-3.1.1-jquery.min.js"></script>
    <script src="js/jquery.knob.min.js"></script>
    <script src="js/jquery.inputmask.js"></script>
    <link rel="stylesheet" href="style.css">
<!--    <link rel="stylesheet" href="styles2.css">-->
<!--    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jquery.cross-slide.js"></script>-->
    <link href="css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link href="css/hover-min.css" rel="stylesheet" media="all"> <!--hover animaition affect-->
<!--    <script src="js/modernizr-custom.js" type="text/javascript"></script>-->

    <script>
        less = {
            env: "development",
            async: false,
            fileAsync: false,
            poll: 1000,
            functions: {},
            dumpLineNumbers: "comments",
            relativeUrls: false,
            rootpath: ":/a.com/"
        };
    </script>
    <script src="js/less.min.js"></script>

</head>
<body>
<header>



        <!--        <a href="index.php"><img class="logo_head" src="img/logo.gif"></a>-->
        <!--        <div class="right">-->


        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="slide-nav" >
            <div class="container">
            <div class="navbar-header" >
                <a href="index.php"><img class="logo_head" src="img/logo.gif"></a>
<!--                <div class="white_block"></div>-->


                <div id="slidemenu">
                    <!--                    <form class="navbar-form navbar-right" role="form">-->
                    <!--                        <div class="form-group">-->
                    <!--                            <input type="search" placeholder="Найти" class="form-control">-->
                    <!--                        </div>-->
                    <!--                        <button type="submit" class="btn btn-default">Поиск</button>-->
                    <!--                    </form>-->

                    <ul class="nav navbar-nav">
                        <li><a href="/index.php">Главная</a></li>
                        <li><a href="index.php?page=directions">Услуги</a></li>
                        <li><a href="index.php?page=diagnostics" class="dropdown-toggle"
                                        data-toggle="dropdown">Диагностика <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown">
                                <li><a href="index.php?page=ultrasound_investigation" class="hvr-grow-shadow">УЗИ</a>
                                </li>
                                <li><a href="index.php?page=laboratory_diagnostic"
                                       class="hvr-grow-shadow">Лабораторная</a></li>
                                <li><a href="index.php?page=functional_diagnostic" class="hvr-grow-shadow">Функциональная</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=doctors">Врачи</a></li>
                        <li><a href="index.php?page=blog">Блог</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php?page=about">О нас <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu ">
                                <li><a href="index.php?page=about" class="hvr-grow-shadow ">О клинике </a></li>
                                <li><a href="index.php?page=leaders" class="hvr-grow-shadow ">Руководство </a></li>
                                <li><a href="index.php?page=ravin" class="hvr-grow-shadow ">Раввин о нас</a></li>
                                <li><a href="index.php#contact" class="hvr-grow-shadow collapse in" onclick="none()" >Контакты</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="phone_block col-sm-4 ">
                    <div class=" head_time ">
                          <div class=" right"><span>+38-050-900-76-61<br>+38-096-551-75-65</span></div>
                    </div>
                    <div class="col-4  right">
                        <span class="geo">8 (056) 71-770-58<br> 8 (056) 71-770-59</span><br>
                    </div>
                </div>


                <a class="navbar-toggle" onclick="clik_header_menu()">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

<!--                <a class="navbar-toggle" onclick="clik_header_menu()">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </a>-->

            </div>
        </div>

    </div>


    <!-- MENU2 -->
</header>


