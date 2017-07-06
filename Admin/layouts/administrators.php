<div class="container">
    <nav id="main">
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ДОБАВЛЕНИЕ НОВОГО АДМИНИ- -->
        <!-- ------СТРАТОРА----------- -->
        <!-- ------------------------- -->
        <h5 class="directions_header_adm">Добавить Администратора</h5>
        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>ФИО Администратора</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" style="width: 95%;" class="form-control" placeholder="Введите ФИО">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>должность администратора</label>
                        <div class="col-sm-6">
                            <input type="text" name="specialty" style="width: 95%;" class="form-control"
                                   placeholder="Введите должность">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <p style="font-weight: 600; font-size: 12px; margin-left: 20px;">Добавить фото
                            администратора</p>
                        <!--                        <label for="inputSuccess3">Добавить <br>фото администратора</label>-->
                        <div class="col-sm-6">
                            <input type="file" name="foto">
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="directions_header_adm">Добавить описание</h5>
            <textarea name="description" id="doctor_add"></textarea>
            <input type="submit" class="form-horizontal" value="Сохранить"
                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createAdministrator">
        </form>
        <script>
            CKEDITOR.replace('doctor_add');
        </script>
        <!-- ------------------------- -->
        <!-- --------КОНЕЦ------------ -->
        <!-- ДОБАВЛЕНИЯ НОВОГО ДОКТОРА -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- РЕДАКТИОВАНИЕ ДОКТОРА---- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <h5 class="directions_header_adm">Редактировать/Удалить Администратора</h5>
        <?php
        foreach ($administrators->getAdministrators() as $key => $value): ?>


            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#n<?= $value['id'] ?>">
                            <img src="./img/rec.png" title="Редактировать" class="del_button"   style="margin-right: -17px">
                        </button>
                        <a href=""  data-toggle="modal"  data-target="#da<?= $value['id'] ?>">
                            <img src="./img/del.png" class="del_button" title="Удалить" >
                        </a>

<!--                        <a href="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deleteAdministrator&id=--><?//= $value['id'] ?><!--">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->

                </div>
                        <!--модальное окно -->
                        <!-- Modal -->
                        <div class="modal fade" id="da<?= $value['id'] ?>" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="width: 40%; height: 250px; margin: 0 auto;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><b>Внимание!</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Данные будут удалены без возможности восстановления.</p>
                                        <p>Вы уверены, что хотите удалить эту информацию?</p>
                                    </div>
                                    <div class="modal-footer">

                                        <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deleteAdministrator&id=<?= $value['id'] ?>" >
                                            <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deleteAdministrator&id">  </a>
                                        <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--модальное окно end -->












                    <div style="width: 100%; height: 170px; display: block; overflow: hidden;">
                        <img class="" style="" src="../img/doctors_foto/<?= $value['link_foto'] ?>">
                    </div>

                    <div class="doctor_info" style="margin-bottom: 20px">
                        <?php
                        // не удаляй этот код он мне нужен
                        $fio = $value['name'];
                        $fio_pieces = explode(" ", $fio);
                        ?>
                        <h5><?= $fio_pieces[0] ?></h5>
                        <h5><?= $fio_pieces[1] . " " . $fio_pieces[2] ?></h5>
                        <h6><?= $value['specialty'] ?></h6>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------------------------------------------ -->
            <!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ АДМИНИСТРАТОРОВ----------------------------------- -->
            <!-- ------------------------------------------------------------------------------------------------------------ -->
            <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                <div class="modal-dialog" style="width: 1200px; ">
                    <div class="modal-content" style="height: 1000px;">
                        <div class="modal-header">
                            <button type="button" class="close"
                                    data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Изменение данных об Администраторе</h4>
                        </div>
                        <div class="modal-body">
                            <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class=""
                                                     style=" width: 100%; height: auto; margin-bottom: 20px;"
                                                     src="../img/doctors_foto/<?= $value['link_foto'] ?>">
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="fotomain"
                                                       value="<?= $value['link_foto'] ?>">
                                                <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                                <div class="form-group">
                                                    <p style="font-weight: 600; font-size: 14px; margin-left: 20px;">
                                                        Изменить фото Администратора</p>
                                                    <!--                                                            <label for="inputSuccess3">Изменить<br>фото доктора</label>-->
                                                    <div class="col-sm-6">
                                                        <input type="file" name="foto">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="width: 1100px;">
                                            <label for="n<?= $value['id'] ?>">Изменить
                                                ФИО<br>Администратора</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="name_of_doctor" class="form-control"
                                                       value="<?= $value['name'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group" style="width: 1100px;">
                                            <label for="n<?= $value['id'] ?>">Изменить должность<br>Администратора</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="specialty_of_doctor"
                                                       class="form-control"
                                                       value="<?= $value['specialty'] ?>">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                                <textarea id="test<?= $value['id'] ?>" style="height: 100px"
                                                          name="full_descr"><?= $value['full_descr'] ?>
                                                </textarea>
                                        <script>
                                            CKEDITOR.replace('test<?= $value['id']?>');
                                        </script>
                                    </div>
                                </div>
                                <input type="submit" class="form-horizontal"    style="margin-top: 50px;" value="Сохранить"
                                       formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveAdministrator">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ------------------------------------------------------------------------------------------------------------ -->
            <!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ АДМИНИСТРАТОРОВ----------------------------------- -->
            <!-- ------------------------------------------------------------------------------------------------------------ -->
                  <? endforeach; ?>

    </nav>
</div>


<!--<div class="directions_header">-->
<!--    <p>Администрация</p>-->
<!--</div>-->
<!--<div class="container" id="doctors">-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        <!-- Это карточка одного администратора-->
<!---->
<!---->
<!--        --><?php
//        foreach ($administrators->getAdministrators() as $key => $value): ?>
<!---->
<!---->
<!--            <div class="col-sm-3 ">-->
<!--                <div class="doctor_card hvr-grow-shadow">-->
<!--                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">-->
<!--                        <a href="--><? //= $_SERVER[PHP_SELF] ?><!--?page=doctor_card&status=administrator&id=--><? //= $value['id'] ?><!--">-->
<!--                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"-->
<!--                                    data-target="#d--><? //= $value['id'] ?><!--">-->
<!--                                <img src="./img/rec.png" title="Редактировать" class="del_button"-->
<!--                                     style="margin-right: -17px">-->
<!--                            </button>-->
<!--                        </a>-->
<!--                        <a href="">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <img class="" src="../img/doctors_foto/--><? //= $value['link_foto'] ?><!--">-->
<!--                    <div class="doctor_info" style="margin-bottom: 20px">-->
<!--                        --><?php
//                        // не удаляй этот код он мне нужен
//                        $fio = $value['name'];
//                        $fio_pieces = explode(" ", $fio);
//                        ?>
<!--                        <h5>--><? //= $fio_pieces[0] ?><!--</h5>-->
<!--                        <h5>--><? //= $fio_pieces[1] . " " . $fio_pieces[2] ?><!--</h5>-->
<!--                        <h6>--><? //= $value['specialty'] ?><!--</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--        --><? // endforeach; ?>
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!--<div class="directions_header">-->
<!--    <p>Средний медицинский персонал</p>-->
<!--</div>-->
<!--<div class="container" id="doctors">-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        <!-- Это карточка одного администратора-->
<!---->
<!---->
<!--        --><?php //foreach ($nurses->getNurses() as $key => $value): ?>
<!---->
<!---->
<!--            <!--    <a href="index.php?page=doctors&id=-->--><? // //= $value['id'] ?><!--<!--">-->
<!---->
<!--            <div class="col-sm-3 ">-->
<!--                <div class="doctor_card hvr-grow-shadow">-->
<!--                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">-->
<!--                        <a href="--><? //= $_SERVER[PHP_SELF] ?><!--?page=doctor_card&status=nurse&id=--><? //= $value['id'] ?><!--">-->
<!--                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"-->
<!--                                    data-target="#d--><? //= $value['id'] ?><!--">-->
<!--                                <img src="./img/rec.png" title="Редактировать" class="del_button"-->
<!--                                     style="margin-right: -17px">-->
<!--                            </button>-->
<!--                        </a>-->
<!--                        <a href="">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <img class="" src="../img/doctors_foto/--><? //= $value['link_foto'] ?><!--">-->
<!--                    <div class="doctor_info" style="margin-bottom: 20px">-->
<!--                        --><?php
//                        // не удаляй этот код он мне нужен
//                        $fio = $value['name'];
//                        $fio_pieces = explode(" ", $fio);
//                        ?>
<!--                        <h5>--><? //= $fio_pieces[0] ?><!--</h5>-->
<!--                        <h5>--><? //= $fio_pieces[1] . " " . $fio_pieces[2] ?><!--</h5>-->
<!--                        <h6>--><? //= $value['specialty'] ?><!--</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--            --><? // endforeach; ?>
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</nav>-->
<!--</div>-->
