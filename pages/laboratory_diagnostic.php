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
                                <div class="hvr-grow-shadow"><a href="index.php?page=laboratory_diagnostic#gematology" class="directions_button">Гематологические
                                        исследования </a></div>
                                <div class="hvr-grow-shadow"><a href="index.php?page=laboratory_diagnostic#lab" class="directions_button">Иммуногематологи- ческие
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

                  <form class="form-horizontal" style="margin-top: 30px;  margin-left: -16px;">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control lab_form" id="text-to-find" name="search" placeholder="Введите текст" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10" style="text-align: left; margin-left: 0;">
                                        <button type="button" class="btn btn-default lub_search_button" onclick="javascript: FindOnPage('text-to-find'); return false;"
                                                value="Искать">Найти</button>
                                    </div>
                                </div>
                            </form>




                            <script>

                                var lastResFind=""; // последний удачный результат
                                var copy_page=""; // копия страницы в ихсодном виде
                                function TrimStr(s) {
                                    s = s.replace( /^\s+/g, '');
                                    return s.replace( /\s+$/g, '');
                                }
                                function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
                                    var obj = window.document.getElementById(inputId);
                                    var textToFind;

                                    if (obj) {
                                        textToFind = TrimStr(obj.value);//обрезаем пробелы
                                    } else {
                                        alert("Введенная фраза не найдена");
                                        return;
                                    }
                                    if (textToFind == "") {
                                        alert("Вы ничего не ввели");
                                        return;
                                    }

                                    if(document.body.innerHTML.indexOf(textToFind)=="-1")
                                        alert("Ничего не найдено, проверьте правильность ввода!");

                                    if(copy_page.length>0)
                                        document.body.innerHTML=copy_page;
                                    else copy_page=document.body.innerHTML;


                                    document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
                                    document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='   color: #899442;'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
                                    lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
                                    window.location = '#'+textToFind;//перемещаем скрол к последнему найденному совпадению
                                }
                            </script>
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

            <div class="col-sm-10" id="gematology">
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
<!--                    ну почему он опять не работает? ((((-->
<!--                    <script>-->
<!--                        $(function(){-->
<!--                            var d = $('#lab span') {-->
<!--                                if ($(this).css('color') == 'rgb(0, 0, 0)') {-->
<!--                                    return this;-->
<!--                                }-->
<!--                            });-->
<!--                        console.log(d);-->
<!--                        d.css('color', 'green!important');-->
<!--                        });-->
<!---->
<!--                    </script>-->

                </nav>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>