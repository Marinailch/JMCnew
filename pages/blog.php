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
        var_dump($resultBlog);

        ?>
    <!-- ТУТ ВЫВОДИТСЯ ОТДЕЛЬНЫЙ БЛОГ -->


    asdfasdfasdfasdfasf

    <!--ТУТ ОН ЗАКАНЧИВАЕТСЯ -->
<?php } ?>
</div>