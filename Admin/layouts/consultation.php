<div class="container container_nav">
    <div class="row">
        <nav id="main">
            ЭТО СТРАНИЦА КОНСУЛЬТАЦИЙ
            <?php
            var_dump($price->getPriceMain());
            var_dump($price->getPriceMainWithHome());
            ?>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>Specialty</th>
                    <th>Price1</th>
                    <th>Price2</th>
                    <th>Actions</th>
            <?php foreach ($price->getPriceMain() as $key => $item):?>


            <tr>
                <td class="info" style="width: 200px"><?=$item['specialty']?></td>
                <td class="info" style="width: 200px"><?=$item['price_first_time']?></td>
                <td class="info" style="width: 200px"><?=$item['price_after']?></td>
                <td class="success">
                    <form method="POST">
                        <input type="hidden" value="<?=$item['id']?>" name="id">

                        <input type="submit" value="Удалить" formaction="<?= $_SERVER['PHP_SELF']?>?action=deletepriceID">
                        <input type="submit" value="Редактировать" formaction="<?= $_SERVER['PHP_SELF']?>?action=changepriceID">

                    </form>
                </td>
                </tr>
            <?php endforeach; ?>
            </table>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>Specialty</th>
                    <th>Price1</th>
                    <th>Actions</th>
                    <?php foreach ($price->getPriceMainWithHome() as $key => $item):?>


                <tr>
                    <td class="info" style="width: 200px"><?=$item['specialty']?></td>
                    <td class="info" style="width: 200px"><?=$item['consulting_at_home']?></td>
                    <td class="success">
                        <form method="POST">
                            <input type="hidden" value="<?=$item['id']?>" name="id">

                            <input type="submit" value="Удалить" formaction="<?= $_SERVER['PHP_SELF']?>?action=deletepriceID">
                            <input type="submit" value="Редактировать" formaction="<?= $_SERVER['PHP_SELF']?>?action=changepriceID">

                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </nav>
    </div>
</div>
