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
                <div class="col-md-6">
<!--                    <div style="margin-bottom: 20px;">-->
<!--                                       <span class="btn btn-default btn-file batton_del_panel_lab" style="width: 20px;">-->
<!--                                           <img src="./img/rec.png" title="Редактировать" class="del_button" style="margin-right: -10px">-->
<!--                                           <input type="file" name="foto">-->
<!--                                        </span>-->
<!--                        <img src="./img/default.png" width="370px">-->
<!--                    </div>-->
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
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Короткое описание</label>
                        <div class="col-sm-6">
                           <textarea type="text" name="short_descr" class="form-control"
                                     placeholder="Введите короткое описание" style="min-height: 160px"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>Статус(актив/не актив)</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="diractions_select" name="active">
                                <option disabled selected>Выберите статус</option>
                                <option value="0">Не активен</option>
                                <option value="1">Активен</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                        <label for="inputSuccess3">Добавить <br>фото врача</label>
                        <div class="col-sm-6">
                            <input type="file" name="foto">
                        </div>

                    </div>
                </div>
            </div>
                <h5 class="directions_header_adm">Добавить описание</h5>
                <textarea name="full_descr" id="doctor_add"></textarea>
                <!-- Trying new action-->
                <input type="submit" class="form-horizontal" value="Сохранить"
                       formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createDoctor">
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
        <h5 class="directions_header_adm">Редактировать/Удалить доктора</h5>
        <?php
        foreach ($doctors->getDoctorsShortFull() as $key => $value): ?>
            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <div class="batton_del_panel_lab" style="z-index: 100; position: relative;">

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#n<?= $value['id'] ?>">
                                <img src="./img/rec.png" title="Редактировать" class="del_button"
                                     style="margin-right: -17px">
                            </button>

                        <a href=""  data-toggle="modal" data-target="#dd<?= $value['id'] ?>">
                            <img src="./img/del.png" class="del_button" title="Удалить" >
                        </a>


<!--                        <a href="--><?//= $_SERVER[PHP_SELF] ?><!--?page=deleteDoctorCard&id=--><?//= $value['id'] ?><!--">-->
<!--                            <img src="./img/del.png" title="Удалить" class="del_button">-->
<!--                        </a>-->

                    </div>



                    <!--модальное окно -->
                    <!-- Modal -->
                    <div class="modal fade" id="dd<?= $value['id'] ?>" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content" style="width: 500px; height: 250px; margin: 0 auto;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><b>Внимание!</b></h4>
                                </div>
                                <div class="modal-body">
                                    <p>Данные будут удалены без возможности восстановления.</p>
                                    <p>Вы уверены, что хотите удалить эту информацию?</p>
                                </div>
                                <div class="modal-footer">

                                    <a href="<?= $_SERVER[PHP_SELF] ?>?page=deleteDoctorCard&id=<?= $value['id'] ?>" >
                                        <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deleteDoctorCard&id">  </a>
                                    <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                                </div>
                            </div>
                        </div>
                    </div>


                    <!--модальное окно end -->







<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ ДОКТОРОВ------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
                    <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                        <div class="modal-dialog" style="min-width: 1200px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Изменение данных о враче</h4>
                                </div>
                                <div class="modal-body">
                                    <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img class="" style=" width: 100%; height: auto; margin-bottom: 20px;" src="../img/doctors_foto/<?= $value['link_foto_doctor'] ?>">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="hidden" name="fotomain" value="<?= $value['link_foto_doctor'] ?>">
                                                        <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                                        <div class="form-group">
                                                            <p style="font-weight: 600; font-size: 14px; margin-left: 20px;">Изменить фото доктора</p>
<!--                                                            <label for="inputSuccess3">Изменить<br>фото доктора</label>-->
                                                            <div class="col-sm-6">
                                                                <input type="file" name="foto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 1100px;">
                                                    <label for="n<?= $value['id'] ?>">Изменить ФИО<br>врача</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="name_of_doctor" class="form-control"
                                                               value="<?= $value['name_of_doctor'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 1100px;">
                                                    <label for="n<?= $value['id'] ?>">Изменить должность<br>Доктора</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="specialty_of_doctor" class="form-control"
                                                               value="<?= $value['specialty_of_doctor'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 1100px;">
                                                    <label for="n<?= $value['id'] ?>">Изменить Опыт работы<br>Доктора</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="expirience_of_work" class="form-control"
                                                               value="<?= $value['expirience_of_work'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 1100px;">
                                                    <label for="n<?= $value['id'] ?>">Изменить Научную степень<br>Доктора</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="science_degree" class="form-control"
                                                               value="<?= $value['science_degree'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="width: 1100px;">
                                                    <label for="n<?= $value['id'] ?>">Изменить короткое описание<br>Доктора</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="short_descr" class="form-control"
                                                               value="<?= $value['short_descr'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <label for="">Изменить<br>Статус(актив/не актив)</label>
                                                    <div class="col-sm-6" >
                                                        <select class="form-control" id="diractions_select" name="active">
                                                            <option disabled selected>Выберите статус</option>
                                                            <option value="0">Не активен</option>
                                                            <option value="1">Активен</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Добавить <br>категорию врача</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" id="diractions_select"  name="direction_id"
                                                                onmousedown="if(this.options.length>10){this.size=10;}"
                                                                onchange="this.blur()" onblur="this.size=0;">
                                                            <option style="color: lightgray" disabled selected>Выберите категорию</option>

                                                            <?php $res = $directions->getDirections();
                                                            foreach ($res as $key2 => $value2):
                                                            if($value['direction_id']==$value2['id']):?>
                                                                <option class="nnn"
                                                                        selected value="<?= $value2['id']?>"><?= $value2['name_of_direction']?></option>
                                                            <?php continue;
                                                            endif; ?>
                                                                <option class="nnn"
                                                                        value="<?= $value2['id'] ?>"><?= $value2['name_of_direction'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>


                                        </div>
                                        <div class="col-md-6">
                                            <textarea id="test<?= $value['id'] ?>"
                                                      name="full_descr"><?= $value['full_descr'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace('test<?= $value['id']?>');
                                            </script>
                                        </div>
                                    </div>
                                <input type="submit" class="form-horizontal" value="Сохранить"
                                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveDoctor">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ ДОКТОРОВ------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
                    <div style="width: 100%; height: 170px; display: block; overflow: hidden;">
                        <img class="" src="../img/doctors_foto/<?= $value['link_foto_doctor'] ?>">
                    </div>
<!--                    <img class="" src="../img/doctors_foto/--><?//= $value['link_foto_doctor'] ?><!--">-->
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
        <? endforeach; ?>

    </nav>
</div>