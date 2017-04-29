<div class="directions_header">
    <p>Блог</p>
</div>
<?php $res = $blog->getFullBlogItems();
//var_dump($res);?>
<div class="container">
<!--    <div class="article"-->
        <?php foreach ($blog->getFullBlogItems() as $key => $item):?>
        <img class="article_title_short" src="../img/blog/<?= $item['link_foto'];?>" width="300px" height="200px">
        <p class="markh3b"><?= $item['title']; ?></p>
        <p class="article_data"><?= $item['created_at']; ?></p>
        <div class="article _short">
            <p><?= $item['full_description']; ?></p>
        </div>
        <?php endforeach; ?>



</div>