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
//        var_dump($resultBlog);
//        var_dump($mainFoto);
        var_dump($fotos);


        ?>
    <!-- ТУТ ВЫВОДИТСЯ ОТДЕЛЬНЫЙ БЛОГ -->






        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 500px; overflow: hidden;">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $control=0;
             foreach ($fotos as $key => $value):
                 if ($control==0) {
                 ?>
                <div class="item active">
                    <a href=""><img src="../img/blog/<?= $value['link_foto']?>" alt="" ></a>
<!--                    <a href=""><img src="img/blog/album005.JPG" alt="" ></a>-->
                </div>
             <?php $control++; }
                 else {
                 ?>
                <div class="item">
                    <a href=""><img src="../img/blog/<?= $value['link_foto']?>" alt="" ></a>
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

    <!--ТУТ ОН ЗАКАНЧИВАЕТСЯ -->
<?php } ?>
</div>