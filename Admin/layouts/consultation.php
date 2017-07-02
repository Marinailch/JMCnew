<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <?php
            //            var_dump($price->getPriceMainWithHome());
            ?>
            <!--  Создание нового блока -->
            <h3>Создание нового прайса без выезда на дом</h3>
            <form method="POST">
                <table class="table  ">
                    <tr class="1">
                        <th>Описание</th>
                        <th>Цена/1 посещение</th>
                        <th>Цена/последующие</th>
                        <th>Специальность</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="" style="width: 200px; border-top: none; height: 35px;"><input style="height: 35px;" type="text" name="specialty"></td>
                        <td class="" style="width: 200px; border-top: none; height: 35px;"><input style="height: 35px;" type="text" name="price_first_time"></td>
                        <td class="" style="width: 200px; border-top: none; height: 35px;"><input style="height: 35px;" type="text" name="price_after"></td>
                        <td style="border-top: none;">
                        <select class="form-control" id="diractions_select" style="min-height: 35px;" name="direction"
                                onmousedown="if(this.options.length>5){this.size=5;}"
                                onchange="this.blur()" onblur="this.size=0;" >
                            <option style="color: lightgray;" >Выберите категорию</option>
                            <?php $res = $directions->getDirections();
                            foreach ($res as $key => $value):?>
                                <option class="nnn"
                                        value="<?= $value['id'] ?>"><?= $value['name_of_direction'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        </td>


                        <td class="" style="border-top: none;">
                            <input type="submit" value="Сохранить" class="btn btn-primary bt_del"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createprice" >
                        </td>
                    </tr>
                </table>
            </form>
            <!--  Редактирование блока без выезда на дом -->
            <h4>Редактирование основного прайса без выезда на дом</h4>
            <table class="table  ">
                <tr class="">
<!--                    <th>Направления</th>-->
<!--                    <th>Цена/1 посещение</th>-->
<!--                    <th>Цена/последующие</th>-->
<!--                    <th>       </th>-->
                    <?php foreach ($price->getPriceMain() as $key => $item): ?>


                <tr>
                    <form method="POST">
                        <td class="" style="width: 50px; border-top: none" ><input type="text" class="diract_input" name="specialty"         value="<?= $item['specialty'] ?>">       </td>
                        <td class="" style="width: 50px; border-top: none"><input type="text" style="height: 35px;" class="" name="price_first_time"  value="<?= $item['price_first_time'] ?>"></td>
                        <td class="" style="width: 50px; border-top: none"><input type="text" style="height: 35px;" class="" name="price_after"       value="<?= $item['price_after'] ?>">     </td>
                        <td class="" style="border-top: none"">
                        <input type="button" class="btn btn-danger bt_del" data-toggle="modal" data-target="#cc<?= $item['id'] ?>" value="Удалить"    style="" >
                        <input type="submit" class="btn btn-primary bt_del" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceID"  style="">
                        <input style="border: none; background-color: aliceblue;" type="hidden" value="<?= $item['id'] ?>" name="priceID">
<!--                            <input type="submit" value="Сохранить" formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=savepriceID">-->
<!--                            <input type="submit" value="Удалить"   formaction="--><?//= $_SERVER['PHP_SELF'] ?><!--?page=deletepriceID">-->

                        </td>

                        <!--модальное окно -->
                        <!-- Modal -->
                        <div class="modal fade" id="cc<?= $item['id'] ?>" role="dialog">
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

                                        <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceID" >
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
            <!-- Создание блока с выездом на дом -->
            <h3>Создание нового прайса с выездом на дом</h3>
            <form method="POST">
                <table class="table ">
                    <tr class="">
                        <th>Название услуги</th>
                        <th>Цена, грн</th>
                        <th>Спациализация</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="" style="width: 50px; border-top: none" ><input type="text" name="specialty"></td>
                        <td class="" style="width: 50px; border-top: none" ><input type="text" name="consulting_at_home"></td>
                        <td style=" border-top: none; width: 255px;">
                            <select class="form-control" id="diractions_select" name="direction" style="min-height: 35px"
                                    onmousedown="if(this.options.length>5){this.size=5;}"
                                    onchange="this.blur()" onblur="this.size=0;">
                                <option style="color: lightgray">Выберите категорию</option>
                                <?php $res = $directions->getDirections();
                                foreach ($res as $key => $value):?>
                                    <option class="nnn"
                                            value="<?= $value['id'] ?>"><?= $value['name_of_direction'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style=" border-top: none">
                            <input type="submit" class="btn btn-primary bt_del" value="Сохранить"
                                   formaction="<?= $_SERVER['PHP_SELF'] ?>?page=createpriceH">
                        </td>
                    </tr>
                </table>
            </form>
            <!--  Редактирование блока с выездом на дом -->
            <h4>Редактирование основного прайса с выездом на дом</h4>
            <table class="table ">
                <tr class="">
<!--                    <th>Specialty</th>-->
<!--                    <th>Price1</th>-->
<!--                    <th>Actions</th>-->
                    <?php

                    foreach ($price->getPriceMainWithHome() as $key => $item): ?>


                <tr>
                    <form method="POST">
                    <td class="" style="width: 250px; border-top: none" >
                        <input  type="text" name="specialty" value="<?= $item['specialty'] ?>">
                    </td>
                    <td class="" style="width: 250px; border-top: none">
                        <input  type="text" name="consulting_at_home" value="<?= $item['consulting_at_home'] ?>">
                    </td>
                    <td style="border-top: none">

                        <input type="hidden" value="<?= $item['id'] ?>" name="priceID">

                       <input type="button" class="btn btn-danger bt_del" data-toggle="modal" data-target="#c<?= $item['id'] ?>" value="Удалить"    style="" >

                        <input type="submit" class="btn btn-primary bt_del" value="Сохранить"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=savepriceHID"  style="">


                    </td>


                </tr>
<!--модальное окно -->
                <!-- Modal -->
                <div class="modal fade" id="c<?= $item['id'] ?>" role="dialog">
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
                                <input type="submit"  class="btn btn-danger bt_del" value="Удалить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=deletepriceID" >
                                <input type="button" class="btn btn-default bt_del" data-dismiss="modal"  value="Закрыть">


                            </div>
                        </div>
                    </div>
                </div>


<!--модальное окно end -->

                </form>


                <?php
                endforeach;?>
            </table>
        </nav>
    </div>
</div>
