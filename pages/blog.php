<div class="directions_header">
    <p>Блог</p>
</div>
<div class="container">
    <?php $getID = filter_input(INPUT_GET, 'id');
    if (!$getID) {
        ?>
        <!-- ТУТ ВЫВОДИТСЯ ВЕСЬ БЛОГ -->
        <?php //var_dump($blog->getFullBlogItems())
        ?>
        <?php foreach ($blog->getBlogItems() as $key => $item): ?>
            <a href="index.php?page=blog&id=<?= $item['id'] ?>">
                <div class="row article_short">
                    <div class="col-md-4 article_short_img">
                        <img src="../img/blog/<?= $item['link_foto']; ?>" >
                    </div>
                    <?php
                    $title1 = mb_substr($item['title'], 0, 50, 'UTF-8').'...';
                    $shortDescr1 =mb_substr($item['short_description'], 0, 300, 'UTF-8').'...';
                    ?>
                    <div class="col-md-8 article_text_short">
                        <p class="article_title_short" ><?=  $title1 ?></p>
                        <p class="article_data"><?= $blog->getDataFromDB($item['created_at']) ?></p>
                        <p class=""><?= $shortDescr1 ?></p>
                    </div>
                </div>
            </a>

        <?php endforeach; ?>


        <!-- ТУТ ЗАКАНЧИВАЕТСЯ ВЫВОД ВСЕГО БЛОГА -->
    <?php } else {
        $resultBlog = $blog->getFullBlogItemByID($getID);
        $mainFoto = $blog->getMainFoto($getID);
        $fotos = $blog->getOtherFotos($getID);
        //        var_dump($resultBlog);
        //        var_dump($mainFoto);
        //        var_dump($fotos);
        ?>
        <!-- ТУТ ВЫВОДИТСЯ ОТДЕЛЬНЫЙ БЛОГ - статья -->
        <div style="margin-top: 40px; margin-bottom: 40px; ">
            <img src="../img/blog/<?= $resultBlog[0]['link_foto'] ?>" width="480px" height="300px"
                 style="float:left; margin-right: 35px; margin-bottom: 30px; ">


            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>


            <p class="markh3b"><?= $resultBlog[0]['title'] ?></p>
            <!--            <p> <span class="markh4o">Врач первой катигории</span> </p>-->
            <!--            <p  style="margin-top: -13px; margin-bottom: 28px;"> <span class="markh4o">гинеколог</span> </p>-->
            <p style="font-weight: 600; color: dimgrey; margin-bottom: -25px;"><?= $blog->getDataFromDB($resultBlog[0]['created_at']) ?></p>
            <p style="margin-top: -13px; margin-bottom: 28px; font-weight: 600; color: dimgrey">
            <div class="fb-share-button" data-href="http://jmcdonttouchgit.dev/index.php?page=blog"
                 data-layout="button_count" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank"                                                                          href="https://www.facebook.com/sharer/sharer.php?u=http://jmcdonttouchgit.dev/index.php?page=blog&id=1">Поделиться</a>
            </div>
            </p>
            <div style="text-align: justify; margin-top: 30px;">
                <?= $resultBlog[0]['full_description'] ?>
            </div>
        </div>
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
</div>