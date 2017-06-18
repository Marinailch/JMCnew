<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <!--  Создание нового блока для УЗИ -->
            <h3>Создание нового блока прайса УЗИ</h3>
            <form method="POST">
                <table class="table table-bordered table-hover">
                    <tr class="warning">
                        <th>name_of_method_fd</th>
                        <th>Price1</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td class="info" style="width: 200px"><input type="text" name="name_of_method_fd"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price"></td>

                        <td class="success">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createpriceUSI">
                        </td>
                    </tr>
                </table>
            </form>


            <!--  Редактирование блока УЗИ -->
            <h4>Редактирование основного прайса УЗИ</h4>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>name_of_method_fd</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <?php foreach ($usi->getPriceForUSI() as $key => $item): ?>
                <tr>
                    <form method="POST">
                        <td class="info" style="width: 200px"><input type="text" name="name_of_method_fd"
                                                                     value="<?= $item['name_of_method_fd'] ?>"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price"
                                                                     value="<?= $item['price'] ?>"></td>

                        <td class="success">

                            <input type="hidden" value="<?= $item['id'] ?>" name="priceID">

                            <input type="submit" value="Удалить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceUSI">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceUSI">
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </table>



        </nav>
    </div>
</div>
