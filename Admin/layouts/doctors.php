<div class="container">
    <nav id="main">
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <!-- ДОБАВЛЕНИЕ НОВОГО ДОКТОРА -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->
        <h5 class="directions_header_adm">Добавить врача</h5>
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
                        <label for="inputSuccess3">Добавить <br>ФИО врача</label>
                        <div class="col-sm-6">
                            <input type="text" name="name_of_doctor" class="form-control" placeholder="Введите ФИО">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>категорию врача</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="diractions_select" name="direction_id"
                                    onmousedown="if(this.options.length>10){this.size=10;}"
                                    onchange="this.blur()" onblur="this.size=0;">
                                <option style="color: lightgray">Выберите категорию</option>
                                <?php $res = $directions->getDirections();
                                foreach ($res as $key => $value):?>
                                    <option class="nnn"
                                            value="<?= $value['id'] ?>"><?= $value['name_of_direction'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>должность врача</label>
                        <div class="col-sm-6">
                            <input type="text" name="specialty_of_doctor" class="form-control"
                                   placeholder="Введите специальность">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Опыт работы</label>
                        <div class="col-sm-6">
                            <input type="text" name="expirience_of_work" class="form-control"
                                   placeholder="Введите опыт работы">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Научную степень врача</label>
                        <div class="col-sm-6">
                            <input type="text" name="science_degree" class="form-control"
                                   placeholder="Введите научную степень">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Короткое описание</label>
                        <div class="col-sm-6">
                            <input type="text" name="short_descr" class="form-control"
                                   placeholder="Введите короткое описание">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Статус(актив/не актив)</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="diractions_select" name="active">
                                <option disabled>Выберите статус</option>
                                <option class="nnn" value="0">Не активен</option>
                                <option class="nnn" value="1">Активен</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>фото врача</label>
                        <div class="col-sm-6">
                            <input type="file" name="foto">
                        </div>

                    </div>
                </div>
                <h5 class="directions_header_adm">Добавить описание</h5>


                <textarea name="full_descr" id="doctor_add"></textarea>
                <!-- Trying new action-->

                <input type="submit" class="form-horizontal" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createDoctor">
        </form>
        <script>
            CKEDITOR.replace('doctor_add');
        </script>
        <!-- ------------------------- -->
        <!-- --------КОНЕЦ------------ -->
        <!-- ДОБАВЛЕНИЯ НОВОГО ДОКТОРА -->
        <!-- ------------------------- -->
        <!-- ------------------------- -->

        <h5 class="directions_header_adm">Редактировать/Удалить статью</h5>

        <?php
        $i = 1;
        foreach ($doctors->getDoctorsShort() as $key => $value): ?>


            <!--    <a href="index.php?page=doctors&id=--><? //= $value['id'] ?><!--">-->

            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">
                        <a href="<?= $_SERVER[PHP_SELF] ?>?page=doctor_card&status=doctor&id=<?= $value['id'] ?>">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#d<?= $i ?>">
                                <img src="./img/rec.png" title="Редактировать" class="del_button"
                                     style="margin-right: -17px">
                            </button>
                        </a>
                        <a href="">
                            <img src="./img/del.png" title="Удалить" class="del_button">
                        </a>
                    </div>
                    <img class="" src="../img/doctors_foto/<?= $value['link_foto_doctor'] ?>">
                    <div class="doctor_info" style="margin-bottom: 20px">
                        <?php
                        // не удаляй этот код он мне нужен
                        $fio = $value['name_of_doctor'];
                        $fio_pieces = explode(" ", $fio);
                        ?>
                        <h5><?= $fio_pieces[0] ?></h5>
                        <h5><?= $fio_pieces[1] . " " . $fio_pieces[2] ?></h5>
                        <h6><?= $value['specialty_of_doctor'] ?></h6>
                        <h4><?= $value['science_degree'] ?></h4>
                    </div>
                </div>
            </div>


            <?
            $i += 1;
        endforeach; ?>


</div>

</div>

<div class="directions_header">
    <p>Администрация</p>
</div>
<div class="container" id="doctors">

    <div class="row">

        <!-- Это карточка одного администратора-->


        <?php
        $i = 1;
        foreach ($administrators->getAdministrators() as $key => $value): ?>


            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">
                        <a href="<?= $_SERVER[PHP_SELF] ?>?page=doctor_card&status=administrator&id=<?= $value['id'] ?>">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#d<?= $i ?>">
                                <img src="./img/rec.png" title="Редактировать" class="del_button"
                                     style="margin-right: -17px">
                            </button>
                        </a>
                        <a href="">
                            <img src="./img/del.png" title="Удалить" class="del_button">
                        </a>
                    </div>
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


            <?
            $i += 1;
        endforeach; ?>


    </div>

</div>

<div class="directions_header">
    <p>Средний медицинский персонал</p>
</div>
<div class="container" id="doctors">

    <div class="row">

        <!-- Это карточка одного администратора-->


        <?php
        $i = 1;
        foreach ($nurses->getNurses() as $key => $value): ?>


            <!--    <a href="index.php?page=doctors&id=--><? //= $value['id'] ?><!--">-->

            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">
                        <a href="<?= $_SERVER[PHP_SELF] ?>?page=doctor_card&status=nurse&id=<?= $value['id'] ?>> <button type="
                           button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#d<?= $i ?>">
                        <img src="./img/rec.png" title="Редактировать" class="del_button" style="margin-right: -17px">
                        </button>
                        </a>
                        <a href="">
                            <img src="./img/del.png" title="Удалить" class="del_button">
                        </a>
                    </div>
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


            <?
            $i += 1;
        endforeach; ?>


    </div>

</div>
</nav>
</div>
