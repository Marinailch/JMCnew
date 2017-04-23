<div>
    <div class="directions_header">
        <p>Лабораторная диагностика</p>
    </div>
    <div class="container">
            <div class="row">
<!--                <div class="col-sm-4">-->
<!--                    <div class="directions_menu">-->
<!--                        <div class="doctor_info">-->
<!--                            <ul style="list-style-type: none; padding-left: 0; margin-top: 0px; text-align: left;">-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гематологические-->
<!--                                        исследования </a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммуногематологические-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Коагулологические-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Биохимические-->
<!--                                        исследования </a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гормональные-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммунологические-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование мочи </a>-->
<!--                                </li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование кала </a>-->
<!--                                </li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Микроскопические-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Цитологические-->
<!--                                        исследования</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Дисбиотические-->
<!--                                        состояния</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Диагностика инфекционных-->
<!--                                        заболеваний </a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Паразитарные инфекции</a>-->
<!--                                </li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Урогенитальные-->
<!--                                        инфекции</a></li>-->
<!--                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Генетическая-->
<!--                                        предрасположенность</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            <div class="col-sm-12 text-doc">
                <nav style="margin-top: 20px;">
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->


                    <!--                    <h4 class="diractions_title"><b>Лабораторные методы в нашей клинике</b></h4>-->
                    <!--                    <table class="table">-->
                    <!--                        <tbody>-->
                    <!--                        <tr>-->
                    <!--                            <th>Название метода</th>-->
                    <!--                            <th>Биоматериал</th>-->
                    <!--                            <th>Результат</th>-->
                    <!--                            <th>Срок</th>-->
                    <!--                            <th>Цена</th>-->
                    <!--                        </tr>-->
                    <!-- олучаем выборку из массива-->
                    <!--                        --><?php //foreach ($laboratory->getLabMethods() as $key => $value):
                    //                        //                        var_dump($laboratory->getLabMethods()) ?>
                    <!---->
                    <!--                        <tr>-->
                    <!--                            <td>--><? //= $value['name_of_method'] ?><!--</td>-->
                    <!--                            <td>--><? //= $value['biomaterial'] ?><!--</td>-->
                    <!--                            <td>--><? //= $value['result'] ?><!--</td>-->
                    <!--                            <td>--><? //= $value['time_to_wait'] ?><!--</td>-->
                    <!--                            <td>--><? //= $value['price'] ?><!--</td>-->
                    <!--                        </tr>-->
                    <!--                        </tbody>-->
                    <!--                        --><?php //endforeach; ?>


                    <!-- Here we try to do it-->

<<<<<<< HEAD
<div id="lab">
                        <h4 class="diractions_title"><b>Лабораторные методы в нашей клинике</b></h4>
                        <?php $res2 = $laboratory->getAllMethods();
                        var_dump($res2);
                        ?>
<!--                        <h4 class="diractions_title"><b>--><?//= $res2[0]['name']?><!--</b></h4>-->
<!--                        --><?php //echo $res2[0]['description']?>

                        <h4 class="diractions_title"><b><?= $res2[1]['name']?></b></h4>
                        <?php echo $res2[1]['description']?>
                        <!-- Here we try to do it-->
            </div>
=======

                    <!--                        <h4 class="diractions_title"><b>Лабораторные методы в нашей клинике</b></h4>-->
                    <?php $res2 = $laboratory->getAllMethods();
                    //                        var_dump($res2);
                    ?>
                    <!--                        <h4 class="diractions_title"><b>-->
                    <? //= $res2[0]['name']?><!--</b></h4>-->
                    <!--                        --><?php //echo $res2[0]['description']?>
<?php foreach ($res2 as $key=>$value):?>
                    <h4 class="diractions_title"><b><?= $value['name'] ?></b></h4>
                    <?php echo $value['description'] ?>
                    <!-- Here we try to do it-->
<?php endforeach; ?>
>>>>>>> a14622d9475608af00bfbf7174bce465b339bae3

                </nav>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>