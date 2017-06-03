<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Еврейский Медицинский Центр">
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="all"/>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="style_adm.css">
        <script src="https://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
         <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
         <script src="../js/jquery-3.1.1-jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    </head>
<body>
    <header>
		<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="slide-nav" >
            <div class="container">
            <div class="navbar-header">
                <a href=""><img class="logo_head" src="../img/logo.gif"></a>

                <div id="slidemenu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Прайс <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a href="<?= $_SERVER[PHP_SELF] ?>?page=consultation" class="hvr-grow-shadow ">Консультации
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $_SERVER[PHP_SELF] ?>?page=ultra" class="hvr-grow-shadow ">УЗИ диагностика
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $_SERVER[PHP_SELF] ?>?page=functionaldiagn" class="hvr-grow-shadow ">Функционал диагностика
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= $_SERVER[PHP_SELF] ?>?page=doctors">Врачи
                            </a>
                        </li>
                        <li>
                            <a href="<?= $_SERVER[PHP_SELF] ?>?page=blog">Блог
                            </a>
                        </li>

                        <li><a href="<?= $_SERVER[PHP_SELF] ?>?page=laboratory">Лаборатория</a></li>
                        <li><a href="../index.php"><b style="color: #cdc639;">Перейти на сайт</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </header>