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
                                <li class="hvr-grow-shadow"><a
                                            href="/index.php?page=directions&id=<?= $value['name_of_direction'] ?>"
                                            class="directions_button"><?= $value['name_of_direction'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="diraction_form" id="appointment" style="margin-top: -300px; padding-top: 320px;">
                            <h6>Запишитесь на приём!</h6>
                            <form class="form-horizontal ">

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Ваше Имя">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone" placeholder="Телефон">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Электронный адрес">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <select class="form-control" id="diractions_select">
                                            <option>Ваберите из списка</option>
                                            <option>Прокофьева Анна Семеновна</option>
                                            <option>Прокофьева Анна Семеновна</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" ">
                                    <div class="col-sm-offset-2 col-sm-10" style="text-align: left; margin-left: 0;">
                                        <button type="submit" class="btn btn-default diraction_form_button">Записаться</button>
                                    </div>
                                </div>
                            </form>

                        </div>
<!--                    <iframe  style=" opacity: 0.7; margin-top: 30px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.7383043602792!2d35.05259248512187!3d48.463753358272605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x18ebb773c0daa282!2z0JzQtdC90L7RgNCw!5e0!3m2!1sru!2sru!4v1492686565832" width="250" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->

                    </div>
                </div>
            </div>

        <div class="col-sm-8 text-doc">
            <nav>
<!-- Если есть ГЕТ запрос данная функция вернет ТРУ и загрузится направление-->
<?php if($request->getReqByGet()):?>
                    <!-- Это начало-->
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                        <img src="img/diractions/<?= $id['link_foto_direction'] ?>" class="diractions_main_img"  >
                    <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->
                    <p class="description_direction">
                            <?php
                                    echo $id['description_direction'];

                            ?>
                    </p>

                    <h4 class="diractions_title"><b>У нас работают лучшие специалисты города</b></h4>
                    <hr>
   <!-- Это блок с изображениями врачей, по данному направлению-->
                    <?php   $doctors = $doctors->getDoctorsByDirection($id['id']);
//                    var_dump($doctors);
                            foreach ($doctors as $key => $value): ?>
                    <div class="media">
                        <div class="media-left">
                            <img src="../img/doctors_foto/<?= $value['link_foto_doctor']?>" class="media-object"
                                 style="width:150px">
                        </div>
                        <div class="media-body" style="    padding-left: 20px;">
                            <h4 class="media-heading"><?= $value['name_of_doctor']?></h4>
                            <p><?= $value['short_descr']?></p>
                        </div>
                    </div>
                            <? endforeach; ?>
                    <hr>
    <!-- Это конец блока с изображениями врачей, по данному направлению-->

    <!-- Это начало блока с возможными консультациями врачей по направлению -->
                     <?php
                        $consult = $directions->getPricesDirectionsByID($id['id']);
                        $consult_at_home = $directions->getPricesHomeDirectionsByID($id['id']);
                     ?>
    <table class="table_price">
            <caption>В нашей клинике Вы можите получить консультации</caption>
            <tr>
                <th>Специалист</th>
                <th style="padding-top: 25px;">Цена, грн<br> <span style="font-weight: 100; font-size:12px;">первое      посещение</span></th>
                <th style="padding-top: 25px;">Цена, грн<br>  <span style="font-weight: 100; font-size: 12px;">последующее посещение</span></th>
            </tr>

            <?php foreach ($consult as $key=>$value):?>
        <tr>
            <td><?=$value['specialty'] ?></td>
            <td><?=$value['price_first_time'].' ' ?></td>
            <td><?=$value['price_after'].'' ?></td>
        </tr>
    <?php endforeach;
            if($consult_at_home){?>
                <?php foreach ($consult_at_home as $item2 => $value2):?>
                    <tr>
                        <td><?=$value2['specialty'] ?></td>
                        <td><?=$value2['consulting_at_home'].'' ?></td>
                    </tr>
                <?php endforeach ?>
    <?php }  ?>
    </table>
    <!-- Это конец блока с возможными консультациями врачей по направлению -->

    <!-- Это начало блока с возможными функциональными методами по направлению -->
    <?php
    $func_methods = $directions->getMethodsById($id['id']);
//    var_dump($func_methods);
    ?>
    <h4 class="diractions_title"><b>В нашей клинике вы можете получить следующие услуги:</b></h4>
    <table class="table">
        <tbody>
        <tr>
            <th>Название метода</th>
            <th style="text-align: center">Стоимость, грн</th>
        </tr>
        <?php foreach ($func_methods as $key => $value):?>

        <tr>
            <td class="diractions_laboratory_name"><?=$value['name_of_method_fd']?></td>
            <td style="text-align: center"><?=$value['price'].''?></td>
        </tr>
<?php endforeach;?>
        </tbody>
    </table>
    <!-- Это конец блока с возможными функциональными методами по направлению -->


    <!-- Это начало блока с возможными лабораторными методами по направлению -->
    <h4 class="diractions_title"><b>Гинекологическая панель анализов</b></h4>
    <table class="table">
        <tbody>
        <tr>
            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                репродуктивной системы и мониторинг беременности
            </td>
            <td>1-5 дней</td>
            <td>220 грн</td>

        </tr>
        <tr>
            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                репродуктивной системы и мониторинг беременности
            </td>
            <td>1-5 дней</td>
            <td>220 грн</td>
        </tr>
        <tr>
            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                репродуктивной системы и мониторинг беременности
            </td>
            <td>1-5 дней</td>
            <td>220 грн</td>
        </tr>
        </tbody>
    </table>
    <!-- Это конец блока с возможными лабораторными методами по направлению -->




            <!-- Это конец-->
    <!-- Если нет ГЕТ запроса данная функция вернет ФОЛС и загрузится Главная страница-->
<?php else: ?>

            <!-- Это начало-->


            <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
            <img src="img/diractions/<?= $id[0]['foto_main'] ?>" class="" style="width: 100%"><br>
            <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->

            <div style="margin-top: 20px; font-size: 16px; text-align: justify;"><?= $id[0]['descr_main'] ?></div>


    <!-- Теперь получаем прайс всех консультаций-->
    <?php

    $price1 = $price->getPriceMain();
    $price2 = $price->getPriceMainWithHome();

    ?>
<!-- Вывод основного прайса-->
        <table class="table_price">
            <caption>Прайс лист на услуги</caption>
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



