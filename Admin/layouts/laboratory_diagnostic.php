<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <nav id="main">
                <!-- ДОБАВЛЕНИЕ НОВОГО БЛОКА ЛАБОРАТОРНЫХ ИССЛЕДОВАНИЙ -->
                <h5 class="directions_header_adm">Добавить модуль лабораторного исследования</h5>

                <form class="form-horizontal" method="POST" action="index.php">

                    <div class="form-group">
                        <label for="inputSuccess3">Добавить название модуля <br>лабораторного исследования</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <textarea id="test" name="description"><table border="1" cellspacing="0" class="Table"
                                                                  style="background-color:#ffffff; border-collapse:collapse; border:solid windowtext 1.0pt; width:100.0%">
	<tbody>
		<tr>
			<td colspan="6" style="background-color:#cccc66; border-color:#bbbbbb; width:100%">
			<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:14px"><strong><span
                                style="color:white">НАЗВАНИЕ МЕТОДИКИ</span></strong></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; width:7.14%">
			<p style="text-align:center"><strong><span style="color:#777777"><span style="font-size:14px">№<br/>
			&nbsp;теста </span></span></strong></p>
			</td>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; width:45.2%">
			<p style="text-align:center"><strong><span style="color:#777777"><span
                                style="font-size:14px">Тест</span></span></strong></p>
			</td>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; text-align:center !important; vertical-align:middle; width:25.14%">
			<p style="margin-left:34%; text-align:left"><strong><span style="color:#777777"><span
                                style="font-size:14px">Биоматериал</span></span></strong></p>
			</td>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; width:8.16%">
			<p style="margin-left:-5.4pt; margin-right:-4.7pt; text-align:center"><strong><span
                            style="color:#777777"><span style="font-size:14px">Результат</span></span></strong></p>
			</td>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; width:7.14%">
			<p style="margin-left:-5.1pt; margin-right:-6.45pt; text-align:center"><span style="font-size:14px"><strong><span
                                style="color:#777777">Срок&nbsp;<br/>
			(раб. дн.) </span></strong></span></p>
			</td>
			<td style="background-color:#eeeeee; border-color:#bbbbbb; width:7.22%">
			<p style="margin-left:-4.35pt; margin-right:-6.15pt; text-align:center"><span
                        style="font-size:14px"><strong><span style="color:#777777">Ст-ть,<br/>
			грн. </span></strong></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:#ffffff; border-color:#bbbbbb; width:7.14%">
			<p style="text-align:center"><span style="color:#777777"><span
                            style="font-size:14px"><strong>№теста</strong></span></span></p>
			</td>
			<td style="background-color:#ffffff; border-color:#bbbbbb; width:45.2%">
			<p><span style="color:#777777"><span style="font-size:14px">Описание Метода</span></span></p>
			</td>
			<td style="background-color:#ffffff; border-color:#bbbbbb; width:25.14%">
			<p><span style="color:#777777"><span style="font-size:14px">Материал для метода</span></span></p>
			</td>
			<td style="background-color:#ffffff; border-color:#bbbbbb; width:8.16%">
			<p style="text-align:center"><span style="color:#777777"><span style="font-size:14px">кол.</span></span></p>
			</td>
			<td style="background-color:#ffffff; border-color:#bbbbbb; width:7.14%">
			<p style="text-align:center"><span style="color:#777777"><span style="font-size:14px">1</span></span></p>
            </td>
            <td style="background-color:#ffffff; border-color:#bbbbbb; width:7.14%">
			<p style="text-align:center"><span style="color:#777777"><span style="font-size:14px">1</span></span></p>
            </td>
        </tr>
    </tbody></table></textarea>
                    <input type="submit" class="form-horizontal" value="Сохранить"
                           formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createlabmethod">
                </form>
                <script>
                    CKEDITOR.replace('test');
                </script>
                <h5 class="directions_header_adm">Редактировать/Удалить модуль лабораторного исследования</h5>

                <!-- ТУТ НАЧИНАЕТСЯ ВОЛШЕБСТВО-->
                <!-- РЕДАКТИРОВАНИЕ БЛОКА ЛАБОРАТОРНЫХ ИССЛЕДОВАНИЙ -->

                <?php foreach ($laboratory->getAllMethods() as $key => $value): ?>

                    <div class="" id="">
                        <nav style="margin-top: 20px;">
                            <div id="lab">
                                <div class="batton_del_panel_lab">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#n<?= $value['id'] ?>">
                                        <img src="img/rec.png" title="Редактировать" class="del_button"
                                             style="margin-right: -17px">
                                    </button>
                                    <a href=""  data-toggle="modal"  data-target="#l<?= $value['id'] ?>">
                                        <img src="./img/del.png" class="del_button" title="Удалить" >
                                    </a>

<!--                                    <a href="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deletelab&id=--><?//= $value['id'] ?><!--">-->
<!--                                        <img src="img/del.png" title="Удалить" class="del_button">-->
<!--                                    </a>-->

                                </div>

                                <!--модальное окно -->
                                <!-- Modal -->
                                <div class="modal fade" id="l<?= $value['id'] ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" style="width: 40%; height: 290px; margin: 0 auto;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Внимание!</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Данные будут удалены без возможности восстановления.</p>
                                                <p>Вы уверены, что хотите удалить эту информацию?</p>
                                            </div>
                                            <div class="modal-footer">

                                                <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deletelab&id=<?= $value['id'] ?>" >
                                                    <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletelab&id">  </a>
                                                <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--модальное окно end -->








                                <!-- Modal -->
                                <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?= $value['name'] ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" method="POST">

                                                    <div class="form-group">
                                                        <label for="n<?= $value['id'] ?>">Изменить название модуля <br>лабораторного
                                                            исследования</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="name" class="form-control"
                                                                   value="<?= $value['name'] ?>">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                                    <textarea id="test<?= $value['id'] ?>"
                                                              name="description"><?= $value['description'] ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace('test<?= $value['id']?>');
                                                    </script>
                                                    <!-- Trying new action-->

                                                    <input type="submit" class="form-horizontal" value="Сохранить"
                                                           formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savelab">
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="n<?= $value['id'] ?>" class="lab_tabl">
                                    <?= $value['description'] ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <?php
                endforeach; ?>

            </nav>


        </nav>
    </div>
</div>
