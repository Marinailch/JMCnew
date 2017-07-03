<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <!--  Создание нового блока для УЗИ -->
            <h4>Создание нового блока прайса УЗИ</h4>
            <form method="POST">
                <table class="table">

                    <tr>
                        <td class="" style="width: 70%; border-top: none; height: 35px;"><input  style="height: 35px; width: 100%;" type="text" name="name_of_method_fd" placeholder=" Название процедуры"></td>
                        <td class="" style="width: 17%; border-top: none; height: 35px;"><input style="height: 35px;width: 100%;"  type="text" name="price" placeholder=" Цена, грн"></td>

                        <td class="" style="height: 35px; border-top: none;">
                            <input   class="btn btn-primary bt_del" type="submit" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createpriceUSI">
                        </td>
                    </tr>
                </table>
            </form>


            <!--  Редактирование блока УЗИ -->
            <h4>Редактирование основного прайса УЗИ</h4>
            <table class="table ">
                <?php foreach ($usi->getPriceForUSI() as $key => $item): ?>
                    <form method="POST">
                        <td class="" style="width: 70%; border-top: none; height: 35px;"><input style="height: 35px; width: 100%;" type="text" name="name_of_method_fd"   value="<?= $item['name_of_method_fd'] ?>"></td>
                        <td class="" style="width: 10%; border-top: none; height: 35px;"> <input style="height: 35px; width: 100%;"type="text" name="price"                value="<?= $item['price'] ?>">            </td>

                        <td class="" style="height: 35px; border-top: none;">
                            <input type="button" class="btn btn-danger bt_del" data-toggle="modal" data-target="#cu<?= $item['id'] ?>" value="Удалить"    style="" >
                            <input type="submit" class="btn btn-primary bt_del" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceUSI"  style="">

                            <input type="hidden" value="<?= $item['id'] ?>" name="priceID">
<!--                            <input  type="submit" value="Удалить"  formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deletepriceUSI">-->
<!--                            <input  type="submit" value="Сохранить" formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=savepriceUSI">-->

                        </td>

                        <!--модальное окно -->
                        <!-- Modal -->
                        <div class="modal fade" id="cu<?= $item['id'] ?>" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content" style="width: 40%; height: 250px; margin: 0 auto;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><b>Внимание!</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Данные будут удалены без возможности восстановления.</p>
                                        <p>Вы уверены, что хотите удалить эту информацию?</p>
                                    </div>
                                    <div class="modal-footer">

                                        <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceUSI" >
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
