<div class="directions_header">
    <p>Блог</p>
</div>
<div class="container">

    <?php foreach ($blog->getFullBlogItems() as $key => $item):?>
    <div class="row article_short">
        <div class="col-md-4" style="width: 300px; height: 200px; overflow: hidden;">
        <img  src="../img/blog/<?= $item['link_foto']; ?>" style="width: 300px; height: 235px; overflow: hidden;">
        </div>
        <div class="col-md-8 article_text_short">
            <p class="markh3b"><?= $item['title']; ?></p>
            <p class="article_data"><?= $blog->getDataFromDB($item['created_at']) ?></p>
            <p><?= $item['short_description']; ?></p>
        </div>
    </div>

        <?php endforeach; ?>


</div>