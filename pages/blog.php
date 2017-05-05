<div class="directions_header">
    <p>Блог</p>
</div>
<div class="container">
    <?php $getID = filter_input(INPUT_GET, 'id');
    if (!$getID){
    ?>
    <!-- ТУТ ВЫВОДИТСЯ ВЕСЬ БЛОГ -->
    <?php //var_dump($blog->getFullBlogItems())
    ?>
    <?php foreach ($blog->getBlogItems() as $key => $item): ?>
        <a href="index.php?page=blog&id=<?= $item['id'] ?>">
            <div class="row article_short">
                <div class="col-md-4" style="width: 300px; height: 200px; overflow: hidden;">
                    <img src="../img/blog/<?= $item['link_foto']; ?>"
                         style="width: 300px; height: 235px; overflow: hidden;">
                </div>
                <div class="col-md-8 article_text_short">
                    <p class="markh3b"><?= $item['title']; ?></p>
                    <p class="article_data"><?= $blog->getDataFromDB($item['created_at']) ?></p>
                    <p><?= $item['short_description']; ?></p>

                </div>

            </div>

        </a>

    <?php endforeach; ?>


<!-- ТУТ ЗАКАНЧИВАЕТСЯ ВЫВОД ВСЕГО БЛОГА -->
<?php } else {
        $resultBlog = $blog->getFullBlogItemByID($getID);
        $mainFoto = $blog->getMainFoto($getID);
        $fotos = $blog->getOtherFotos($getID);
        var_dump($resultBlog);
        var_dump($mainFoto);
        var_dump($fotos);

        ?>
    <!-- ТУТ ВЫВОДИТСЯ ОТДЕЛЬНЫЙ БЛОГ -->


        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 500px; overflow: hidden;">
            <!-- Indicators
            <ol class="carousel-indicators" >
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>-->

            <?php

            $cont_dott=0;
            foreach ($fotos as $key => $value)
            {
                if ($cont_dott==0) {
                    echo 			"<li data-target='#myCarousel' data-slide-to='$cont_dott' class='active'></li>";
                    $cont_dott++;
                }
                else {
                    echo "<li data-target='#myCarousel' data-slide-to='$cont_dott' ></li>";
                    $cont_dott++;
                }
            }

            ?>




        <?php foreach ($fotos as $key => $value):?>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <a href=""><img src="img/blog/<?= $mainFoto['link_foto']?>" alt="" ></a>
                </div>

                <div class="item">
                    <a href=""><img src="img/blog/<?= $value['link_foto']?>" alt="" ></a>
                </div>
<?php endforeach; ?>


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

    <!--ТУТ ОН ЗАКАНЧИВАЕТСЯ -->
<?php } ?>
</div>



<?php

$control=0;
foreach ($select_slider_articles as $value):
    if ($control==0) {
        ?>
        <div class="item  active">
            <div class="row">
                <div class="col-md-6 slider-caption animated ">
                    <h1 class="animated flash text-info" style="color: #ababab; color: #5082B7;  font-size: 28px; font-family: Arial;"><?= $value['title']?></h1>
                    <p class="animated fadeIn"><?= $value['discription']?></p>
                    <a href="services - EMS2.php" class=" btn btn-info animated fadeInLeft">Подробнее</a>
                    <a href="contact - EMS.php" class=" btn btn-success animated fadeInRight">Записаться</a>

                </div>
                <div class="col-md-6">

                    <img src="admin/img/<?php echo $value['name_slider']?>" width="100%" class="animated fadeInRightBig" alt="...">
                </div>

            </div>
        </div>






        <?php $control++; }
    else { ?>
        <div class="item ">
            <div class="row">
                <div class="col-md-6 slider-caption animated ">
                    <h2 class="animated flash"><?= $value['title']?></h2>
                    <p class="animated fadeIn"> <?= $value['discription']?></p>
                    <a href="services - EMS2.html" class=" btn btn-info animated fadeInUpBig ">Подробнее</a>
                    <a href="contact - EMS.html" class=" btn btn-success animated fadeInUpBig ">Записаться</a>
                </div>
                <div class="col-md-6">
                    <img src="admin/img/<?php echo $value['name_slider']?>" width="100%" class="animated fadeInRightBig" alt="...">
                </div>
            </div>
        </div>
        <?php

    }


endforeach; ?>