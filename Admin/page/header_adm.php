<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Еврейский Медицинский Центр">
        <link rel="stylesheet" href="/css/bootstrap.min.css" media="all"/>
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/Admin/style_adm.css">
        <script src="https://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
         <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
         <script src="/js/jquery-3.1.1-jquery.min.js"></script>
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
                                    <a href="/Admin/index.php?page=consultation" class="hvr-grow-shadow">Консультации
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/index.php?page=ultra" class="hvr-grow-shadow ">УЗИ диагностика
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/index.php?page=functionaldiagn" class="hvr-grow-shadow ">Функционал диагностика
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Врачи <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a href="/Admin/index.php?page=doctors" class="hvr-grow-shadow ">Врачи
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/index.php?page=administrators" class="hvr-grow-shadow ">Администрация
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/index.php?page=nurses" class="hvr-grow-shadow ">Медсестры
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/Admin/index.php?page=blog">Блог
                            </a>
                        </li>
                        <li>
                            <a href="/Admin/index.php?page=directions" class="hvr-grow-shadow ">Направления
                            </a>
                        </li>

                        <li><a href="/Admin/index.php?page=laboratory">Лаборатория</a></li>
<!--                        <li><a href="../index.php"><b style="color: #cdc639;">Перейти на сайт</b></a></li>-->
                        <li><a href="/Admin/index.php?page=meta">Мета данные</a></li>
                        <li><a href="/Admin/index.php?page=destroy">Выйти из Админпанели</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </header>