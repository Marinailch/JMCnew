<div class="container container_nav">
    <div class="row">
        <nav id="main">
<!--            --><?php //var_dump($usi->getPriceForFD())?>

            <!--  Создание нового блока -->
            <h4>Создание нового прайса функциоанлной диагностики</h4>
            <form method="POST">
                <table class="table">

                    <tr>
                        <td class=""  style="width: 50%; border-top: none; height: 35px;"><input  style="height: 35px; width: 100%;" type="text" name="name_of_method_fd" placeholder=" Название метода"></td>
                        <td class=""  style="width: 10%; border-top: none; height: 35px;"><input style="height: 35px;   width: 100%;" type="text" name="price" placeholder=" Цена, грн"></td>
                        <td style="border-top: none">
                            <select style="min-height: 35px; " class="form-control" id="diractions_select" name="name_of_fd"  onmousedown="if(this.options.length>5){this.size=5;}" onchange="this.blur()" onblur="this.size=0;" >
                                <option style="color: lightgray;">Выберите метод</option>
                                <?php foreach ($usi->getMethodsFD() as $key => $value):?>
                                    <option class="nnn" value="<?= $value['id'] ?>"><?= $value['name_of_fd'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>


                        <td class="" style="border-top: none">
                            <input  class="btn btn-primary bt_del" type="submit" value="Сохранить"  formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createFDprice">
                        </td>
                    </tr>
                </table>
            </form>

            <!--  Редактирование основного блока  -->
            <h4>Редактирование основного прайса функциоанлной диагностики</h4>
            <table class="table ">
                    <?php foreach ($usi->getPriceForFD() as $key => $item): ?>
                    <form method="POST">
                        <td class="" style="width: 69%; border: none"> <input style="width: 100%; height: 35px;" type="text" name="name_of_method_fd"   value="<?= $item['name_of_method_fd'] ?>"></td>
                        <td class="" style="width: 10%; border: none"> <input style="width: 100%; height: 35px;" type="text" name="price"               value="<?= $item['price'] ?>"></td>
                        <td class="" style="border: none">
                            <input type="button" class="btn btn-danger bt_del" data-toggle="modal" data-target="#cf<?= $item['id'] ?>" value="Удалить"       style="" >
                            <input type="submit" class="btn btn-primary bt_del" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceFD"  style="">
                            <input type="hidden" value="<?= $item['id'] ?>" name="priceID">
<!--                            <input  class="btn btn-primary bt_del" type="submit" value="Удалить"    formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deletepriceFD">-->
<!--                            <input  class="btn btn-primary bt_del" type="submit" value="Сохранить"  formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=savepriceFD">-->
                        </td>

                        <!--модальное окно -->
                        <!-- Modal -->
                        <div class="modal fade" id="cf<?= $item['id'] ?>" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="width: 500px; height: 250px; margin: 0 auto;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><b>Внимание!</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Данные будут удалены без возможности восстановления.</p>
                                        <p>Вы уверены, что хотите удалить эту информацию?</p>
                                    </div>
                                    <div class="modal-footer">

                                        <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceFD" >
                                        <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--модальное окно end -->





                    </form>
                </tr>



                <?php endforeach; ?>
            </table>





        </nav>
    </div>
</div>
