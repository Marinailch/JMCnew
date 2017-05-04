<script>
    $(document).ready(function () {
        $("#form_phone").inputmask("+3(9999)9999999");
    });
</script>
<div>
    <div class="directions_header">
        <p>УЗИ диагностика</p>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu" id="uzi">

                    <div class="doctor_info">
                        <ul style="list-style-type: none; padding-left: 0; text-align: left;">
                            <li class="hvr-grow-shadow"><a href="index.php?page=ultrasound_investigation"
                                                           class="directions_button">УЗИ</a></li>
                            <li class="hvr-grow-shadow"><a href="index.php?page=laboratory_diagnostic"
                                                           class="directions_button">Лабораторная диагностика</a></li>
                            <li class="hvr-grow-shadow"><a href="index.php?page=functional_diagnostic"
                                                           class="directions_button">Функциональная диагностика</a></li>
                        </ul>


                        <div class="diraction_form" style="float:left;">
                            <h6>Запишитесь на приём!</h6>
                            <form class="form-horizontal" method="post"
                                  action="<?= $_SERVER['PHP_SELF'] ?>?page=callform">

                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="personName"
                                               placeholder="Ваше Имя" required>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="form_phone" name="personPhone"
                                               placeholder="Телефон" required>
                                        <input type="hidden" name="personGET" value="<?= $_GET['page'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="phone" name="personDate"
                                               placeholder="Дата" required>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                <div class="form-group">
<!--                                    <label for="comment">Comment:</label>-->
                                    <textarea class="form-control" rows="5" id="comment"  name="personMessage" placeholder="Сообщение" required></textarea>
                                </div>
                                    </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10" style="text-align: left; margin-left: 0;">
                                        <button type="submit" class="btn btn-default diraction_form_button">Записаться
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
<!--                    <iframe style="float: left; opacity: 0.7; margin-top: 30px"-->
<!--                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.7383043602792!2d35.05259248512187!3d48.463753358272605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x18ebb773c0daa282!2z0JzQtdC90L7RgNCw!5e0!3m2!1sru!2sru!4v1492686565832"-->
<!--                            width="250" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->


                </div>
            </div>
        </div>

        <div class="col-sm-8 text-doc">
            <nav>
                <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                <!--                    <img src="img/diractions/dr.jpg" class="" width="100%">-->
                <?php
                include "slider2.php";
                ?>
                <!-- Это начало вывода прайса по УЗИ диагностике-->
                <h4 class="diractions_title"><b>Перечень УЗИ, проводимых в нашей клинике</b></h4>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Название метода</th>
                        <th style="width: 80px;">Цена, грн</th>
                    </tr>
                    <!-- олучаем выборку из массива-->
                    <?php foreach ($usi->getPriceForUSI() as $key => $value): ?>
                    <tr>
                        <td><?= $value['name_of_method_fd'] ?></td>
<!--                        <td>--><?//= $value['price'] . ' грн' ?><!--</td>-->
                        <td><?= $value['price']?></td>
                    </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
               <!-- Это конец вывода прайса по УЗИ диагностике-->


            </nav>
        </div>
    </div>
</div>
</div>



