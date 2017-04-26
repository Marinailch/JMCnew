<div>
    <div class="directions_header">
        <p>Лабораторная диагностика</p>
    </div>




    <div class="container">
            <div class="row">
                <div class="col-sm-2" >
<!--                    <div class="directions_menu">-->
                        <div id="menu_lub">
<!--                            <ul style="">-->
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Гематологические
                                        исследования </a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Иммуногематологические
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Коагулологические
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Биохимические
                                        исследования </a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Гормональные
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Иммунологические
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование мочи </a>
                                </div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование кала </a>
                                </div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Микроскопические
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Цитологические
                                        исследования</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Дисбиотические
                                        состояния</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Диагностика инфекционных
                                        заболеваний </a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Паразитарные инфекции</a>
                                </div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Урогенитальные
                                        инфекции</a></div>
                                <div class="hvr-grow-shadow"><a href="#" class="directions_button">Генетическая
                                        предрасположенность</a></div>
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>

                    <script>
                        jQuery(function ($) {
                            var footer = $('.footer');
                            var offset = footer.offset().top;
                            // alert (offset);
                            var lub_lenth = offset - 800;
                            // var lub_lenth = 44000;
                            $(window).scroll(function  () {
                                if ($(this).scrollTop() > 200) {
                                    $('#menu_lub').addClass('fixed');
                                    if ($(this).scrollTop() > lub_lenth) {
                                        $('#menu_lub').removeClass('fixed');
                                    }
                                }
                                else if ($(this).scrollTop() < 200) {
                                    $('#menu_lub').removeClass('fixed');
                                }
                            });
                        });
                    </script>

            <div class="col-sm-10 ">
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





<div id="lab">      <!-- Here we try to do it-->

                    <?php $res2 = $laboratory->getAllMethods(); //  var_dump($res2);?>
<?php foreach ($res2 as $key=>$value):?>
<!--                    <h4 class="diractions_title"><b>--><?//= $value['name'] ?><!--</b></h4>-->
                    <?php echo $value['description'] ?>
                    <!-- Here we try to do it-->
<?php endforeach; ?>

</div>

                </nav>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>