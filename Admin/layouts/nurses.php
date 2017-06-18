<div class="container">
    <nav id="main">
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ДОБАВЛЕНИЕ НОВОЙ--------- -->
        <!-- ------МЕД СЕСТРЫ--------- -->
        <!-- ------------------------- -->
        <h5 class="directions_header_adm">Добавить Медицинскую сестру</h5>
        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div style="margin-bottom: 20px;">
                        <!--               <span class="btn btn-default btn-file batton_del_panel_lab" style="width: 20px;">-->
                        <!--                   <img src="./img/rec.png" title="Редактировать" class="del_button" style="margin-right: -10px">-->
                        <!--                   <input type="file" name="foto">-->
                        <!--                </span>-->
                        <img src="./img/default.png" width="370px">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>ФИО медицинской сестры</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Введите ФИО">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>должность медицинской сестры</label>
                        <div class="col-sm-6">
                            <input type="text" name="specialty" class="form-control"
                                   placeholder="Введите должность">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>фото м/с</label>
                        <div class="col-sm-6">
                            <input type="file" name="foto">
                        </div>

                    </div>
                </div>
            </div>
            <h5 class="directions_header_adm">Добавить описание</h5>
            <textarea name="description" id="doctor_add"></textarea>
            <input type="submit" class="form-horizontal" value="Сохранить"
                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createNurse">
        </form>
        <script>
            CKEDITOR.replace('doctor_add');
        </script>
        <!-- ------------------------- -->
        <!-- --------КОНЕЦ------------ -->
        <!-- ------ДОБАВЛЕНИЯ НОВОЙ--- -->
        <!-- -------МЕД СЕСТРЫ-------- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- РЕДАКТИОВАНИЕ МЕД СЕСТРЫ- -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <h5 class="directions_header_adm">Редактировать/Удалить средний медицинский персонал</h5>
        <?php foreach ($nurses->getNurses() as $key => $value): ?>

                    <div class="col-sm-3 ">
                        <div class="doctor_card hvr-grow-shadow">
                            <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">
<!--                                <a href="">-->
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#n<?= $value['id'] ?>">
                                        <img src="./img/rec.png" title="Редактировать" class="del_button"
                                             style="margin-right: -17px">
                                    </button>
<!--                                </a>-->
                                <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deleteNurse&id=<?= $value['id'] ?>">
                                    <img src="./img/del.png" title="Удалить" class="del_button">
                                </a>
                            </div>
<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ МЕДСЕСТЕР----------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
                            <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Изменение данных о медицинской сестре</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                                            <img class="" style="width:100px; height:100px;" src="../img/doctors_foto/<?= $value['link_foto'] ?>">
                                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="n<?= $value['id'] ?>">Изменить ФИО<br>медицинской сестры</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="name" class="form-control"
                                                               value="<?= $value['name'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="n<?= $value['id'] ?>">Изменить должность<br>медицинской сестры</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="specialty" class="form-control"
                                                               value="<?= $value['specialty'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputSuccess3">Изменить<br>фото м/с</label>
                                                    <div class="col-sm-6">
                                                        <input type="file" name="foto">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                                <input type="hidden" name="fotomain" value="<?= $value['link_foto'] ?>">
                                                <textarea id="test<?= $value['id'] ?>"
                                                          name="description"><?= $value['description'] ?></textarea>
                                                <script>
                                                    CKEDITOR.replace('test<?= $value['id']?>');
                                                </script>
                                                <input type="submit" class="form-horizontal" value="Сохранить"
                                                       formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveNurse">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ МЕДСЕСТЕР----------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
                            <img class="" src="../img/doctors_foto/<?= $value['link_foto'] ?>">
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
<!--                        <a href="--><?//= $_SERVER[PHP_SELF] ?><!--?page=doctor_card&status=administrator&id=--><?//= $value['id'] ?><!--">-->
<!--                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"-->
<!--                                    data-target="#d--><?//= $value['id'] ?><!--">-->
<!--                                <img src="./img/rec.png" title="Редактировать" class="del_button"-->
<!--                                     style="margin-right: -17px">-->
<!--                            </button>-->
<!--                        </a>-->
<!--                        <a href="">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <img class="" src="../img/doctors_foto/--><?//= $value['link_foto'] ?><!--">-->
<!--                    <div class="doctor_info" style="margin-bottom: 20px">-->
<!--                        --><?php
//                        // не удаляй этот код он мне нужен
//                        $fio = $value['name'];
//                        $fio_pieces = explode(" ", $fio);
//                        ?>
<!--                        <h5>--><?//= $fio_pieces[0] ?><!--</h5>-->
<!--                        <h5>--><?//= $fio_pieces[1] . " " . $fio_pieces[2] ?><!--</h5>-->
<!--                        <h6>--><?//= $value['specialty'] ?><!--</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--        --><?// endforeach; ?>
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
<!--            <!--    <a href="index.php?page=doctors&id=-->--><?// //= $value['id'] ?><!--<!--">-->
<!---->
<!--            <div class="col-sm-3 ">-->
<!--                <div class="doctor_card hvr-grow-shadow">-->
<!--                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">-->
<!--                        <a href="--><?//= $_SERVER[PHP_SELF] ?><!--?page=doctor_card&status=nurse&id=--><?//= $value['id'] ?><!--">-->
<!--                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"-->
<!--                                    data-target="#d--><?//= $value['id'] ?><!--">-->
<!--                                <img src="./img/rec.png" title="Редактировать" class="del_button"-->
<!--                                     style="margin-right: -17px">-->
<!--                            </button>-->
<!--                        </a>-->
<!--                        <a href="">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <img class="" src="../img/doctors_foto/--><?//= $value['link_foto'] ?><!--">-->
<!--                    <div class="doctor_info" style="margin-bottom: 20px">-->
<!--                        --><?php
//                        // не удаляй этот код он мне нужен
//                        $fio = $value['name'];
//                        $fio_pieces = explode(" ", $fio);
//                        ?>
<!--                        <h5>--><?//= $fio_pieces[0] ?><!--</h5>-->
<!--                        <h5>--><?//= $fio_pieces[1] . " " . $fio_pieces[2] ?><!--</h5>-->
<!--                        <h6>--><?//= $value['specialty'] ?><!--</h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--            --><?// endforeach; ?>
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</nav>-->
<!--</div>-->
