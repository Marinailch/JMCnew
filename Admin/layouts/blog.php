
<div class="container container_nav">
    <div class="row">
<nav id="main">
  ЭТО СТРАНИЦА БЛОГА

    <nav id="main">
        <h5 class="directions_header_adm">Добавить статью в блог</h5>
        <form class="form-horizontal" method="POST" action="index.php">

            <div class="row">
                <div class="col-md-4" >
                    <div style="margin-bottom: 20px;">
               <span class="btn btn-default btn-file batton_del_panel_lab" style="width: 20px;">
                   <img src="img/rec.png" title="Редактировать"  class="del_button" style="margin-right: -10px">
                   <input type="file">
                </span>
                        <img src="img/default.png" width="370">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>название статьи</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>дату публикации</label>
                        <div class="col-sm-6">
                            <input type="data" name="name" class="form-control" value="<?=$data_blog?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>краткое описание статьи</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Добавить слайдер</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h5 class="directions_header_adm">Добавить текст статьи</h5>


            <textarea name="blog"></textarea>
            <!-- Trying new action-->

            <input type="submit" class="form-horizontal" name="submit">
        </form>
        <script>
            CKEDITOR.replace('blog');
        </script>
        <h5 class="directions_header_adm">Редактировать/Удалить статью</h5>
        <?php $getID = filter_input(INPUT_GET, 'id');
        if (!$getID) {
            ?>
            <!-- ТУТ ВЫВОДИТСЯ ВЕСЬ БЛОГ -->
            <?php
            //var_dump($blog->getFullBlogItems())
            ?>
            <?php
            //var_dump($blog->getBlogItems());
            $i = 1;
        foreach ($blog->getBlogItems() as $key => $item): ?>

            <div class="row article_short">
                <div class="batton_del_panel_lab">
                    <a href="index.php?page=blog&id=<?= $item['id'] ?>"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#n<?= $i ?>">
                            <img src="img/rec.png" title="Редактировать"  class="del_button" style="margin-right: -17px">
                        </button>
                    </a>
                    <a href="" >
                        <img src="img/del.png" title="Удалить" class="del_button">
                    </a>
                </div>
                <div class="col-md-4 article_short_img">
                    <img src="../img/blog/<?= $item['link_foto']; ?>" >
                </div>
                <?php
                $title1 = mb_substr($item['title'], 0, 50, 'UTF-8').'...';
                $shortDescr1 =mb_substr($item['short_description'], 0, 300, 'UTF-8').'...';
                ?>
                <div class="col-md-8 article_text_short">
                    <p class="article_title_short" style="width: 450px;" ><?=  $title1 ?></p>
                    <p class="article_data"><?= $blog->getDataFromDB($item['created_at']) ?></p>
                    <p class=""><?= $shortDescr1 ?></p>
                </div>
            </div>

            <?php
            $i += 1;
        endforeach; ?>


            <!-- ТУТ ЗАКАНЧИВАЕТСЯ ВЫВОД ВСЕГО БЛОГА -->
        <?php } else {
            $blog = new Blog($db);
        $resultBlog = $blog->getFullBlogItemByID($getID);
        $mainFoto = $blog->getMainFoto($getID);
        $fotos = $blog->getOtherFotos($getID);
        $shortDescr1 =mb_substr($item['short_description'], 0, 300, 'UTF-8').'...';
        //var_dump($resultBlog);
        //var_dump($mainFoto);
        //var_dump($fotos);
        ?>
            <!-- ТУТ ВЫВОДИТСЯ ОТДЕЛЬНЫЙ БЛОГ - статья -->
            <form class="form-horizontal" method="POST" action="index.php">

                <div class="row">
                    <div class="col-md-4" >
                        <div style="margin-bottom: 20px;">
               <span class="btn btn-default btn-file batton_del_panel_lab" style="width: 30px; ">
                   <img src="img/rec.png" title="Редактировать"  class="del_button" style="  margin-right: -10px;  ">
                   <input type="file">
                </span>
                            <img src="../img/blog/<?= $resultBlog[0]['link_foto'] ?>" width="370">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="inputSuccess3">Изменить <br>название статьи</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" value="<?= $resultBlog[0]['title'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSuccess3">Изменить <br>дату публикации</label>
                            <div class="col-sm-6">
                                <input type="data" name="name" class="form-control" value="<?=$data_blog?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSuccess3">Изменить <br>краткое описание статьи</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" value="<?= $shortDescr1 ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Добавить слайдер</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <h5 class="directions_header_adm">Изменить текст статьи</h5>


                <textarea name="b<?= $i ?>"> <?= $resultBlog[0]['full_description'] ?></textarea>
                <!-- Trying new action-->

                <input type="submit" class="form-horizontal" name="submit">
            </form>
            <script>
                CKEDITOR.replace('b<?= $i ?>');
            </script>
            <!-- ЭТО СКРИПТ ДЛЯ СЛАЙДЕРА ПРИ НАЛИЧИИ ФОТОГРАФИЙ-->
        <?php if ($fotos) { ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php $i = 1;
                    for ($j = 0; $j < count($fotos) - 1; $j++) {
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
                        <?php $i++;
                    } ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $control = 0;
                    foreach ($fotos as $key => $value):
                        if ($control == 0) {
                            ?>
                            <div class="item active">
                                <a href=""><img src="../img/blog/<?= $value['link_foto'] ?>" alt=""></a>
                                <!--                    <a href=""><img src="img/blog/album005.JPG" alt="" ></a>-->
                            </div>
                            <?php $control++;
                        } else {
                            ?>
                            <div class="item">
                                <a href=""><img src="../img/blog/<?= $value['link_foto'] ?>" alt=""></a>
                                <!--                    <a href=""><img src="img/blog/album006.JPG" alt="" ></a>-->
                            </div>
                            <?php
                        }
                        $i += 1;
                    endforeach; ?>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="
   ">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="
   ">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
            <!-- ЭТО КОНЕЦ СКРИПТА ДЛЯ СЛАЙДЕРА ПРИ НАЛИЧИИ ФОТОГРАФИЙ-->
            <!--ТУТ ЗАКАНЧИВАЕТСЯ БЛОК ОТДЕЛЬНОЙ ЧАСТИ БЛОГА-->
        <?php } ?>
    </nav>


    </div>

</nav>
</div>
