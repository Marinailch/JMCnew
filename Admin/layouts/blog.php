<div class="container container_nav">
    <div class="row" id="blog_rec">
        <nav id="main">
                <h5 class="directions_header_adm">Добавить статью в блог</h5>
                <!-- ------------------------- -->
                <!-- ------------------------- -->
                <!-- ДОБАВЛЕНИЕ НОВОЙ СТАТЬИ-- -->
                <!-- ---------БЛОГА----------- -->
                <!-- ------------------------- -->
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить <br>название статьи</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" placeholder="Заголовок статьи ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить <br>дату публикации</label>
                                <div class="col-sm-6">
                                    <input type="date" name="created_at" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить <br>краткое описание статьи</label>
                                <div class="col-sm-6">
                                    <input type="text" name="short_description" class="form-control" value="" placeholder="Анонс статьи до 300 симвалов">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <p style="font-weight: 600; font-size: 12px; margin-left: 15px;">Добавить заглавное фото статьи (не более 3МБ)</p>
<!--                                <label for="inputSuccess3">Добавить заглавное<br>фото для статьи</label>-->
                                <div class="col-sm-6">
                                    <input type="file" name="foto" >
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 40px;">
                                <p style="font-weight: 600; font-size: 12px; margin-left: 15px;">Добавить фото для слайдера (не более 3МБ)</p>
<!--                                <label for="inputSuccess3">Добавить фото<br>для слайдера</label>-->

                                <div class="col-sm-6">
                                    <input type="file"  required multiple data-toggle="tooltip" data-placement="bottom"  title="Удерживая клавишу Ctrl, выберите любое количество изображений, которые вы хотите видеть в вашем слайдере" name="slider[]">
                                </div>

                                <script>
                                    $(document).ready(function(){
                                        $('[data-toggle="tooltip"]').tooltip();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                    <h5 class="directions_header_adm">Добавить текст статьи</h5>
                    <textarea id="test" name="full_description" >Текст статьи</textarea>
                    <input type="submit" class="form-horizontal" value="Сохранить"
                           formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createBlogItem">
                </form>
                <script>
                    CKEDITOR.replace('test');
                </script>
                <!-- ------------------------- -->
                <!-- -------КОНЕЦ------------- -->
                <!-- ДОБАВЛЕНИЯ НОВОЙ СТАТЬИ-- -->
                <!-- ---------БЛОГА----------- -->
                <!-- ------------------------- -->
                <!-- --------------------------------------------------------------------- -->
                <!-- -----------------ТУТ ВЫВОДИТСЯ ВЕСЬ БЛОГ----------------------------- -->
                <!-- --------------------------------------------------------------------- -->
                <h5 class="directions_header_adm">Редактировать/Удалить статью</h5>
<!--                --><?php //var_dump($blog->getBlogItems()) ?>
                <?php foreach ($blog->getBlogItems() as $key => $value): ?>
                    <div class="row article_short">
                        <div class="batton_del_panel_lab">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#n<?= $value['id'] ?>">
                                <img src="img/rec.png" title="Редактировать" class="del_button"
                                     style="margin-right: -17px; min-height: auto;">
                            </button>
                            <a href="" data-toggle="modal" data-target="#bd<?= $item['id'] ?>">
                                <img src="img/del.png" title="Удалить" class="del_button" style="min-height: auto;">
                            </a>
<!---->
<!--                            <a href="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deleteBlogItemByID&id=--><?//= $value['id'] ?><!--" >-->
<!--                                <img src="img/del.png" title="Удалить" class="del_button" style="min-height: auto;">-->
<!--                            </a>-->


                        </div>


                        <!--модальное окно -->
                        <!-- Modal -->
                        <div class="modal fade" id="bd<?= $item['id'] ?>" role="dialog">
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

                                        <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deleteBlogItemByID&id=<?= $value['id'] ?>" >
                                            <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deleteBlogItemByID&id" >  </a>
                                            <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--модальное окно end -->




                        <!-- ------------------------------------------------------------------------------------------------------------ -->
                        <!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ БЛОГА--------------------------------------------- -->
                        <!-- ------------------------------------------------------------------------------------------------------------ -->
                        <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Изменение данных о статье</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                        <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                                            <div class="col-sm-5">
                                                <div style="width:230px; height:150px; overflow: hidden;">
                                                        <img  src="../img/blog/<?= $value['link_foto'] ?>" style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
<!--                                                    <label for="inputSuccess3">Изменить заглавное<br>фото блога</label>-->

                                                        <p style="font-weight: 600; font-size: 12px; ">Изменить заглавное фото блога</p>
                                                        <input type="file" name="foto">
                                                        <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                                        <input type="hidden" name="fotomain" value="<?= $value['link_foto'] ?>">
                                                        <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить название статьи</p>
                                                        <div class="form-group">
<!--                                                            <label for="n--><?//= $value['id'] ?><!--">Изменить название<br>статьи</label>-->

                                                            <textarea type="text" name="title" rows="3" class="form-control" style="margin-left: 16px;     min-width: 100px;
    max-width: 400px !important; width: 90%; height: 50px"
                                                                       value=""><?= $value['title'] ?></textarea>

                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-left: 0; margin-right: 0px;">
                                                <p style="font-weight: 600; font-size: 12px; margin-top: 0px; margin-left: 0px;">Изменить короткое описание</p>
<!--                                                <label for="n--><?//= $value['id'] ?><!--">Изменить короткое<br>описание</label>-->
                                                    <textarea type="text" name="short_description"  rows="20" class="form-control" style="max-height: 121px!important; width: 80%;"
                                                           value=""><?= $value['short_description'] ?></textarea>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                        <textarea id="test<?= $value['id'] ?>"
                                                  name="full_description" ><?= $value['full_description'] ?></textarea>
                                        <script>
                                            CKEDITOR.replace('test<?= $value['id']?>');
                                        </script>
                                        <input type="submit" class="form-horizontal" value="Сохранить"
                                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveBlogItemByID">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ------------------------------------------------------------------------------------------------------------ -->
                        <!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ БЛОГА--------------------------------------------- -->
                        <!-- ------------------------------------------------------------------------------------------------------------ -->

                        <div class="col-md-4 article_short_img">
                            <img src="../img/blog/<?= $value['link_foto']; ?>" width="100%">
                        </div>
                        <?php
                        $title1 = mb_substr($value['title'], 0, 50, 'UTF-8') . '...';
                        $shortDescr1 = mb_substr($value['short_description'], 0, 300, 'UTF-8') . '...';
                        ?>
                        <div class="col-md-8 article_text_short">
                            <p class="article_title_short" style="width: 450px;"><?= $title1 ?></p>
                            <p class="article_data"><?= $blog->getDataFromDB($value['created_at']) ?></p>
                            <p class=""><?= $shortDescr1 ?></p>
                        </div>
                    </div>
                    <?php
                endforeach; ?>
            </nav>
    </div>
</div>
