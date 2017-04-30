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
<!--        <p class="article_data">--><?//= $item['created_at']; ?><!--</p>-->
        <p class="article_data"><?php
//                -----------способ 2-------------------------
//                этот код определяет текущую дату
                ////      его можно заносить в бд вместе со статьёй
                $months = array(
                     "1"=>"Январь",
                     "2"=>"Февраль",
                     "3"=>"Март",
                     "4"=>"Апрель",
                     "5"=>"Май",
                     "6"=>"Июнь",
                     "7"=>"Июль",
                     "8"=>"Август",
                     "9"=>"Сентябрь",
                    "10"=>"Октябрь",
                    "11"=>"Ноябрь",
                    "12"=>"Декабрь"
                );
                $day = date("d");
                $mon = $months[date("n")];
                $year = date("Y");
                $data_blog=" "."$day"." "."$mon"." "."$year"." ";
//                echo ( $data_blog);
//-------------------------способ 1-------------------------------

//                echo $item['created_at'];
                $data1 = $item['created_at'];
                $data_blog1 = explode("-", $data1);
                $data_m= $data_blog1[1];
//                echo ($data_m);
                    switch($data_m)
                    {
                        case '01':          $blog_mon="Январь";     break;
                        case '02':          $blog_mon="Февраль";    break;
                        case '03':          $blog_mon="Март";       break;
                        case '04':          $blog_mon="Апрель";     break;
                        case '05':          $blog_mon="Май";        break;
                        case '06':          $blog_mon="Июнь";       break;
                        case '07':          $blog_mon="Июль";       break;
                        case '08':          $blog_mon="Август";     break;
                        case '09':          $blog_mon="Сентябрь";   break;
                        case '10':          $blog_mon="Октябрь";    break;
                        case '11':          $blog_mon="Ноябрь";     break;
                        case '12':          $blog_mon="Декабрь";    break;
                        default: return     $blog_mon=" ";
                    }
                ?>
            <?=$data_blog1[2]." ".$blog_mon." ".$data_blog1[0]?></p>
        <div class="article _short">
            <p><?= $item['full_description']; ?></p>
        </div>
        <?php endforeach; ?>



</div>