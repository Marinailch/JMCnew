<div class="container container_nav">
    <div class="row" id="blog_rec">
        <nav id="main">
            <!-- --------------------------------------------------------------------- -->
            <!-- -----------------ТУТ ВЫВОДИТСЯ ВЕСЬ БЛОГ----------------------------- -->
            <!-- --------------------------------------------------------------------- -->
            <h5 class="directions_header_adm">Редактировать мета данные</h5>
            <?php //var_dump($blog->getBlogItems())  ?>
            <?php foreach ($blog->getMetaItems() as $key => $value): ?>
                <div class="row article_short">
                    <div class="batton_del_panel_lab">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                data-target="#n<?= $value['id'] ?>">
                            <img src="img/rec.png" title="Редактировать" class="del_button" style="margin-right: -17px; min-height: auto;">
                        </button>
                    </div>

                    <!-- ------------------------------------------------------------------------------------------------------------ -->
                    <!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ БЛОГА--------------------------------------------- -->
                    <!-- ------------------------------------------------------------------------------------------------------------ -->
                    <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
                        <div class="modal-dialog" style="width: 1200px">
                            <div class="modal-content" style="height: 800px;">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Изменение данных <?= $value['page_name']?></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-left: 50px;">
                                                    <input type="hidden" name="priceID"  value="<?= $value['id'] ?>">
                                                    <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить title</p>

                                                    <input class="form-input" type="text" name="title"  value="<?= $value['title'] ?>">

                                                </div>
                                                <div class="form-group" style="margin-left: 50px;">
                                                    <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить keyword</p>

                                                    <input class="form-input" type="text" name="keywords"  value="<?= $value['keywords'] ?>">

                                                </div>
                                                <div class="form-group" style="margin-left: 50px;">
                                                    <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить description</p>

                                                    <input class="form-input" type="text" name="description"  value="<?= $value['description'] ?>">

                                                </div>
                                            </div>

                                        </div>
                                        <input type="submit" class="form-horizontal" value="Сохранить"
                                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveMetaItemByID">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------------------------------------------------------------------------------------------------ -->
                    <!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ БЛОГА--------------------------------------------- -->
                    <!-- ------------------------------------------------------------------------------------------------------------ -->



                    <div class="col-md-8 article_text_short">
                        <p class="article_title_short"><?= $value['page_name'] ?></p>
                        <p class="">Title: <?= $value['title'] ?></p>
                        <p class="">Keywords: <?= $value['keywords'] ?></p>
                        <p class="">Description: <?= $value['description'] ?></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </nav>
    </div>
</div>
