<div class="directions_header">
    <p>Блог</p>
</div>
<div class="container">
        <?php foreach ($blog->getFullBlogItems() as $key => $item):?>
        <img class="article_title_short" src="../img/blog/<?= $item['link_foto'];?>" width="300px" height="200px">
        <p class="markh3b"><?= $item['title']; ?></p>
        <p class="article_data"><?= $blog->getDataFromDB($item['created_at'])?></p>
        <div class="article _short">
            <p><?= $item['full_description']; ?></p>
        </div>
        <?php endforeach; ?>
</div>