<?php
//Получаем массив из ГЕТ запроса
//Если его нет - возвращает массив с фото и описанием главной страницы
//Если есть - массив с описанием искомого направления
$id = $request->getGET();
//var_dump($id);

//Получаем все направления
$res = $directions->getDirections();

 if($request->getReqByGet()):
    $title_direct = $directions->getTitleDirection($id['name_of_direction']);
    ?>
     <div class="directions_header"><p><?= $title_direct; ?></p></div>
 <?php else : ?>
    <div class="directions_header"><p>Консультативный приём</p></div>
 <?php endif ?>


<div class="container">
    <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu">
                    <div class="directions_info ">

                       <ul style="list-style-type: none; padding-left: 0; margin-top: 10px; width: 360px;">
                        <!-- class="" data-spy="affix" data-offset-top="205"-->
                            <?php foreach ($res as $item => $value): ?>
                                <li class="hvr-grow-shadow"><a href="/index.php?page=directions&id=<?= $value['name_of_direction'] ?>"
                                            class="directions_button"><?= $value['name_of_direction'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="diraction_form" id="appointment">
                            <h6>Запишитесь на приём!</h6>
                            <form class="form-horizontal" method="post"
                                  action="<?= $_SERVER['PHP_SELF'] ?>?page=callform">

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="personName"
                                               placeholder="Ваше Имя" required>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone" name="personPhone"
                                               placeholder="Телефон" required>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" name="personDate"
                                               placeholder="Дата"
                                               required>
                                        <input type="hidden" name="personGET" value="<?= $_GET['page'] ?>">

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <!--  <select class="form-control" id="diractions_select" name="personDoctor" size="6">-->
                                        <select class="form-control" id="diractions_select" name="personDoctor"
                                                onmousedown="if(this.options.length>10){this.size=10;}"
                                                onchange="this.blur()" onblur="this.size=0;">
                                            <option style="color: lightgray">Выберите врача</option>
                                            <?php $res = $directions->getDirections();
                                            foreach ($res as $key => $value):?>
                                                <option class="nnn"
                                                        value="<?= $value['id'] ?>"><?= $value['name_of_direction'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10" style="text-align: left; margin-left: 0;">
                                        <button type="submit" class="btn btn-default diraction_form_button">Записаться
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
<!--                    <iframe  style=" opacity: 0.7; margin-top: 30px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.7383043602792!2d35.05259248512187!3d48.463753358272605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x18ebb773c0daa282!2z0JzQtdC90L7RgNCw!5e0!3m2!1sru!2sru!4v1492686565832" width="250" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->

                    </div>
                </div>
            </div>

        <div class="col-sm-8" style=" color: #848484;">
            <nav>
<!-- Если есть ГЕТ запрос данная функция вернет ТРУ и загрузится направление-->
<?php if($request->getReqByGet()):?>
                    <!-- Это начало-->
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                        <img src="img/diractions/<?= $id['link_foto_direction'] ?>" class="diractions_main_img"  >
                    <p class="description_direction"><?php echo $id['description_direction'];?>  </p>

   <!-- Это блок с изображениями врачей, по данному направлению-->
                    <?php foreach ($doctors->getDoctorsByDirection($id['id']) as $key => $value): ?>
                    <?php if ($value['link_foto_doctor'] !=='avatar.jpg'){?>
                            <div  id="media">
                                <h4 class="diractions_title"><b>У нас работают лучшие специалисты города</b></h4><div class="media" >
                        <div class="media-left">
                            <img src="../img/doctors_foto/<?= $value['link_foto_doctor']?>" class="media-object"
                                 style="width:300px">
                        </div>
                        <div class="media-body" style="">
                            <h4 class="media-heading" id="name_doc"><?= $value['name_of_doctor']?></h4>
                            <p class="markh4o" ><?= $value['specialty_of_doctor']?></p>
                            <p style="color: #848484;"><?= $value['science_degree']?></p>
                            <p><span class="" style="color: #848484;">опыт работы :  <?= $value['expirience_of_work']?></span></p>
                            <a href="index.php?page=doctors" style="font-size: 1em; margin-left: 0%; float: right; margin-top: 16%;"><i>Весь персонал клиники</i></a>
                        </div>
                    </div>
                    </div>
            <script>
//                if ($('#name_doc').get(0).firstChild == null) {
//                if ($('#name_doc').html() == '') {}
                function () {
                    if ($('#name_doc').get(0).firstChild == null) {
                        var media = $('#media').style.display = "none";
                    } else {
                        var media = $('#media').style.display = "block";
                    })
//                    return (media);
                    alert(media);

                }
            </script>
<!--                --><?php }//else{?>
<!--            <button type="button" class="btn btn-default diraction_form_button"><a href="index.php?page=doctors">Наш Персонал</a></button>-->
<!--                              --><?php //}?>
                            <? endforeach; ?>


<!--                    <hr>-->
    <!-- Это конец блока с изображениями врачей, по данному направлению-->

    <!-- Это начало блока с возможными консультациями врачей по направлению -->
                     <?php
                        $consult = $directions->getPricesDirectionsByID($id['id']);
                        $consult_at_home = $directions->getPricesHomeDirectionsByID($id['id']);
                     ?>
    <!-- Функция по запросу наличия цены в таблице - если нет - то не выводится-->
    <?php if($consult){ ?>
    <table class="table_price">
        <h4 class="diractions_title"><b>В нашей клинике Вы можете получить консультации</b></h4>
            <tr>
                <th>Специалист</th>
                <th style="padding-top: 25px;">Цена, грн<br> <span style="font-weight: 100; font-size:12px;">первое      посещение</span></th>
                <th style="padding-top: 25px;">Цена, грн<br> <span style="font-weight: 100; font-size: 12px;">последующее посещение</span></th>
            </tr>


                <?php foreach ($consult as $key=>$value):?>
                    <tr>
                        <td style="border-left: solid 1px #f1f1f1;"><?=$value['specialty'] ?></td>
                        <td><?=$value['price_first_time'].' ' ?></td>
                        <td style="text-align: center; border-right: solid 1px #f1f1f1;"><?=$value['price_after'].'' ?></td>
                    </tr>
                <?php endforeach;
            }
            if($consult_at_home){?>
                <?php foreach ($consult_at_home as $item2 => $value2):?>
                    <tr>
                        <td><?=$value2['specialty'] ?></td>
                        <td><?=$value2['consulting_at_home'].'' ?></td>
                        <td></td>
                    </tr>

                <?php endforeach ?>


    <?php }  ?>
    </table>
    <a href="index.php?page=directions" style="font-size: 1em; margin-left: 70%;"><i>Все Консультации</i></a>
    <!-- Это конец блока с возможными консультациями врачей по направлению -->

    <!-- Это начало блока с возможными функциональными методами по направлению -->
    <?php
    $func_methods = $directions->getMethodsById($id['id']);
//    var_dump($func_methods);
    ?>
    <h4 class="diractions_title"><b>В нашей клинике вы можете получить следующие услуги:</b></h4>
    <table class="table_price">
        <tbody>
        <tr>
            <th  style="text-align: center">Название</th>
            <th style="text-align: right; padding-right: 10px;">цена,  грн</th>
        </tr>
        <?php foreach ($func_methods as $key => $value):?>

        <tr>
            <td class="diractions_laboratory_name" style="border-left: solid 1px #f1f1f1;"><?=$value['name_of_method_fd']?></td>
            <td style="text-align: right; padding-right: 40px;border-right: solid 1px #f1f1f1;"><?=$value['price'].''?></td>
        </tr>
<?php endforeach;?>
        </tbody>
    </table>
    <a href="index.php?page=functional_diagnostic" style="font-size: 1em;margin-left: 50%;"><i>Весь спектр функциональных исследований</i></a>
    <!-- Это конец блока с возможными функциональными методами по направлению -->


    <!-- Это начало блока с возможными лабораторными методами по направлению -->
    <h4 class="diractions_title"><b>Лабораторная диагностика</b></h4>
    <table class="table_price">
        <tbody>
        <tr>
            <th>Название</th>
            <th>Срок</th>
            <th>Цена(грн)</th>
        </tr>
        <tr>
            <td class="diractions_laboratory_name" style="text-align: left;border-left: solid 1px #f1f1f1;">
                <ul><b>Клинический анализ крови (развернутый):</b>
                    <li style="margin-left: 20px;">Общий анализ</li>
                    <li style="margin-left: 20px;">Лейкоформула</li>
                    <li style="margin-left: 20px;">СОЭ</li>
                </ul>
            </td>
            <td>1</td>
            <td style="text-align: center;border-right: solid 1px #f1f1f1;">120</td>

        </tr>
        <tr>
            <td class="diractions_laboratory_name"  style="text-align: left;border-left: solid 1px #f1f1f1;">
                <ul>
                    <li style="list-style-type: none;"><b>Общий анализ мочи (с микроскопией осадка)</b></li>
                </ul>
            </td>
            <td>1</td>
            <td style="text-align: center;border-right: solid 1px #f1f1f1;">85</td>
        </tr>
        <tr>
            <td class="diractions_laboratory_name"  style="text-align: left;border-left: solid 1px #f1f1f1;">
                <ul><b>КОАГУЛОГРАММА</b>
                    <li style="margin-left: 20px;">АЧТВ (1)</li>
                    <li style="margin-left: 20px;">Протромбин (по Квику, %)</li>
                    <li style="margin-left: 20px;">МНО</li>

            </td>
            <td>1</td>
            <td style="text-align: center;border-right: solid 1px #f1f1f1;">125</td>
        </tr>
        </tbody>
    </table>
    <a href="index.php?page=laboratory_diagnostic" style="font-size: 1em;margin-left: 50%;"><i>Весь спектр лабораторных исследований</i></a>
    <!-- Это конец блока с возможными лабораторными методами по направлению -->




            <!-- Это конец-->
    <!-- Если нет ГЕТ запроса данная функция вернет ФОЛС и загрузится Главная страница-->
<?php else: ?>

            <!-- Это начало-->


            <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
            <img src="img/diractions/<?= $id[0]['foto_main'] ?>" class="" style="width: 100%"><br>
            <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->

<!--            <div style="margin-top: 20px; font-size: 16px; text-align: justify;">--><?//= $id[0]['descr_main'] ?><!--</div>-->

                <div style="margin-top: 20px; font-size: 16px; text-align: justify;"> <p>&laquo;JMC&raquo; - это многопрофильная высококлассная клиника, где наилучшим образом сочетаются новейшие технологии, самое современное и уникальное оборудование, высочайшая квалификация и интеллект врачей всех профилей, высокий сервис<br>
         К Вашим услуга представлены - все виды УЗИ; Суточный мониторинг ЭКГ по Холтеру; Суточный мониторинг артериального давления; Гастроскопия (ВГДС);
       Колоноскопия (ВКС) с возможностью общей анестезии;
       Видеоэндоскопическая диагностика и лечение заболеваний ЛОР-органов, физиотерапия;
       Спирография;
       Бесконтактная диагностика внутриглазного давления;
       Лабораторная диагностика (более 350 показателей);
       Дневной стационар;
       Хирургия &laquo;одного дня&raquo; для взрослых и детей;
       Диспансеризация для детей с выдачей справок-заключений для школ и дошкольных учреждений;
       Диспансеризация для взрослых;
       Детоксикационная терапия;
       Аппаратная медицинская косметология;
       Вертеброневрология, мануальная терапия;
       Массаж.</p>
    </div>

    <!-- Теперь получаем прайс всех консультаций-->
    <?php

    $price1 = $price->getPriceMain();
    $price2 = $price->getPriceMainWithHome();

    ?>
<!-- Вывод основного прайса-->
        <table class="table_price">
            <caption>Консультаивный приёмов врачей нашей клиники</caption>
            <tr>
                <th>Направление</th>
                <th style="padding-top: 25px;">Цена, грн<br> <span style="font-weight: 100; font-size:12px;">первое      посещение</span></th>
                <th style="padding-top: 25px;">Цена, грн<br>  <span style="font-weight: 100; font-size: 12px;">последующее посещение</span></th>
            </tr>

            <?php foreach ($price1 as $key=>$value):?>
                <tr>
                    <td><?=$value['specialty'] ?></td>
                    <td><?=$value['price_first_time'].' ' ?></td>
                    <td><?=$value['price_after'].'' ?></td>
                </tr>
            <?php endforeach; ?>
<!--            --><?php //foreach ($price2 as $item=>$value):?>
<!--                <tr>-->
<!--                    <td>--><?//= $value['specialty'] ?><!--</td>-->
<!--                    <td colspan="2">--><?//= $value['consulting_at_home'].' грн' ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
        </table>
    <!-- Конец прайса-->


<?php endif ?>



            </nav>
        </div>
    </div>
</div>



