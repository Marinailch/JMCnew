<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <?php
            //            var_dump($price->getPriceMainWithHome());
            ?>
            <!--  Создание нового блока -->
            <h3>Создание нового прайса без выезда на дом</h3>
            <form method="POST">
                <table class="table table-bordered table-hover">
                    <tr class="warning">
                        <th>Specialty</th>
                        <th>Price1</th>
                        <th>Price2</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td class="info" style="width: 200px"><input type="text" name="specialty"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price_first_time"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price_after"></td>
                        <td class="success">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createprice">
                        </td>
                    </tr>
                </table>
            </form>
            <!--  Редактирование блока без выезда на дом -->
            <h4>Редактирование основного прайса без выезда на дом</h4>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>Specialty</th>
                    <th>Price1</th>
                    <th>Price2</th>
                    <th>Actions</th>
                    <?php foreach ($price->getPriceMain() as $key => $item): ?>


                <tr>
                    <form method="POST">
                        <td class="info" style="width: 200px"><input type="text" name="specialty"
                                                                     value="<?= $item['specialty'] ?>"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price_first_time"
                                                                     value="<?= $item['price_first_time'] ?>"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price_after"
                                                                     value="<?= $item['price_after'] ?>"></td>
                        <td class="success">

                            <input type="hidden" value="<?= $item['id'] ?>" name="priceID">

                            <input type="submit" value="Удалить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceID">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceID">
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </table>
            <!--  Редактирование блока с выездом на дом -->
            <h4>Редактирование основного прайса с выездом на дом</h4>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>Specialty</th>
                    <th>Price1</th>
                    <th>Actions</th>
                    <?php foreach ($price->getPriceMainWithHome() as $key => $item): ?>


                <tr>

                    <td class="info" style="width: 200px">
                        <input type="text" name="specialty" value="<?= $item['specialty'] ?>">
                    </td>
                    <td class="info" style="width: 200px">
                        <input type="text" name="consulting_at_home" value="<?= $item['consulting_at_home'] ?>">
                    </td>
                    <td class="success">

                        <input type="hidden" value="<?= $item['id'] ?>" name="id">

                        <input type="submit" value="Удалить"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceID">
                        <input type="submit" value="Сохранить"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceHID">
                    </td>
                    </form>

                </tr>
                <?php endforeach; ?>
            </table>
        </nav>
    </div>
</div>
