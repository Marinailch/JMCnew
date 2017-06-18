<div class="container container_nav">
    <div class="row">
        <nav id="main">
            Page FD
<!--            --><?php //var_dump($usi->getPriceForFD())?>

            <!--  Создание нового блока -->
            <h3>Создание нового прайса без выезда на дом</h3>
            <form method="POST">
                <table class="table table-bordered table-hover">
                    <tr class="warning">
                        <th>name_of_method</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td class="info" style="width: 200px"><input type="text" name="name_of_method_fd"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price"></td>
                        <td>
                            <select class="form-control" id="diractions_select" name="name_of_fd"
                                    onmousedown="if(this.options.length>5){this.size=5;}"
                                    onchange="this.blur()" onblur="this.size=0;">
                                <option style="color: lightgray">Выберите метод</option>
                                <?php foreach ($usi->getMethodsFD() as $key => $value):?>
                                    <option class="nnn"
                                            value="<?= $value['id'] ?>"><?= $value['name_of_fd'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>


                        <td class="success">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createFDprice">
                        </td>
                    </tr>
                </table>
            </form>

            <!--  Редактирование основного блока  -->
            <h4>Редактирование основного прайса без выезда на дом</h4>
            <table class="table table-bordered table-hover">
                <tr class="warning">
                    <th>name_of_method</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <?php foreach ($usi->getPriceForFD() as $key => $item): ?>
                <tr>
                    <form method="POST">
                        <td class="info" style="width: 200px"><input type="text" name="name_of_method_fd"
                                                                     value="<?= $item['name_of_method_fd'] ?>"></td>
                        <td class="info" style="width: 200px"><input type="text" name="price"
                                                                     value="<?= $item['price'] ?>"></td>
                        <td class="success">

                            <input type="hidden" value="<?= $item['id'] ?>" name="priceID">

                            <input type="submit" value="Удалить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceFD">
                            <input type="submit" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceFD">
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </table>



        </nav>
    </div>
</div>
