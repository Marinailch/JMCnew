<div class="directions_header">
    <p>Блог</p>
</div>
<div class="container">

    <?php foreach ($blog->getFullBlogItems() as $key => $item):?>
    <a href="index.php?page=articles"><div class="row article_short">
        <div class="col-md-4">
        <img  src="../img/blog/<?= $item['link_foto']; ?>" width="100%">
        </div>
        <div class="col-md-8 article_text_short">
            <p class="markh3b"><?= $item['title']; ?></p>
            <p class="article_data"><?= $blog->getDataFromDB($item['created_at']) ?></p>
            <p><?= $item['full_description']; ?></p>
        </div>
    </div>
        </a>
        <?php endforeach; ?>

</div>