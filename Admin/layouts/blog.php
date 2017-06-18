<div class="container container_nav">
    <div class="row">
        <nav id="main">
                <h5 class="directions_header_adm">Добавить статью в блог</h5>
                <!-- ------------------------- -->
                <!-- ------------------------- -->
                <!-- ДОБАВЛЕНИЕ НОВОЙ СТАТЬИ-- -->
                <!-- ---------БЛОГА----------- -->
                <!-- ------------------------- -->
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="margin-bottom: 20px;">
                                <img src="img/default.png" width="370">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить <br>название статьи</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control">
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
                                    <input type="text" name="short_description" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить заглавное<br>фото для статьи</label>
                                <div class="col-sm-6">
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSuccess3">Добавить фото<br>для слайдера</label>
                                <div class="col-sm-6">
                                    <input type="file" multiple title="Удерживая клавишу Ctrl, выберите любое количество изображений, которые вы хотите видеть в вашем слайдере" name="slider[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="directions_header_adm">Добавить текст статьи</h5>
                    <textarea id="test" name="full_description"></textarea>
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
                                     style="margin-right: -17px">
                            </button>
                            <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deleteBlogItemByID&id=<?= $value['id'] ?>">
                                <img src="img/del.png" title="Удалить" class="del_button">
                            </a>
                        </div>

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
                                        <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                                        <img class="" style="width:100px; height:100px;"
                                             src="../img/blog/<?= $value['link_foto'] ?>">
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="n<?= $value['id'] ?>">Изменить название<br>статьи</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="title" class="form-control"
                                                           value="<?= $value['title'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="n<?= $value['id'] ?>">Изменить
                                                    короткое<br>описание</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="short_description" class="form-control"
                                                           value="<?= $value['short_description'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSuccess3">Изменить заглавное<br>фото блога</label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="foto">
                                                </div>
                                            </div>

                                            <input type="hidden" name="priceID" value="<?= $value['id'] ?>">
                                            <input type="hidden" name="fotomain" value="<?= $value['link_foto'] ?>">
                                            <textarea id="test<?= $value['id'] ?>"
                                                      name="full_description"><?= $value['full_description'] ?></textarea>
                                            <script>
                                                CKEDITOR.replace('test<?= $value['id']?>');
                                            </script>
                                            <input type="submit" class="form-horizontal" value="Сохранить"
                                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveBlogItemByID">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ------------------------------------------------------------------------------------------------------------ -->
                        <!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ БЛОГА--------------------------------------------- -->
                        <!-- ------------------------------------------------------------------------------------------------------------ -->

                        <div class="col-md-4 article_short_img">
                            <img src="../img/blog/<?= $value['link_foto']; ?>">
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
