<div>
    <script>
        $(document).ready(function () {
            $("#form_phone").inputmask("+3(999)9999999");
        });
    </script>
    <div class="directions_header">
        <p>Функциональная диагностика</p>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu" id="func_menu">
                    <div class="doctor_info">
                        <ul style="list-style-type: none; padding-left: 0;  text-align: left;">
                            <li class="hvr-grow-shadow"><a href="index.php?page=ultrasound_investigation"
                                                           class="directions_button">УЗИ</a></li>
                            <li class="hvr-grow-shadow"><a href="index.php?page=laboratory_diagnostic"
                                                           class="directions_button">Лабораторная диагностика</a></li>
                            <li class="hvr-grow-shadow"><a href="index.php?page=functional_diagnostic"
                                                           class="directions_button">Функциональная диагностика</a></li>
                            <li class="hvr-grow-shadow"><a href="index.php?page=equipment"
                                                           class="directions_button">Оборудование</a></li>
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
                                        <input id='form_phone' type="text" class="form-control" id="phone" name="personPhone"
                                               placeholder="Телефон" required>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <!--                                    <label for="comment">Comment:</label>-->
                                        <textarea class="form-control" rows="5" id="comment"  placeholder="Сообщение" required></textarea>
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


<!--                        <script>-->
<!--                            jQuery(function ($) {-->
<!--                                var footer = $('.footer');-->
<!--                                var offset = footer.offset().top;-->
<!--                                // alert (offset);-->
<!--                                var lub_lenth = offset - 800;-->
<!--                                // var lub_lenth = 44000;-->
<!--                                $(window).scroll(function  () {-->
<!--                                    if ($(this).scrollTop() > 150) {-->
<!--                                        $('#func_menu').addClass('fixed');-->
<!--                                        if ($(this).scrollTop() > lub_lenth) {-->
<!--                                            $('#func_menu').removeClass('fixed');-->
<!--                                        }-->
<!--                                    }-->
<!--                                    else if ($(this).scrollTop() < 150) {-->
<!--                                        $('#func_menu').removeClass('fixed');-->
<!--                                    }-->
<!--                                });-->
<!--                            });-->
<!--                        </script>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-doc">
                <nav>
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
<!--                    <img src="img/diractions/dr.jpg" class="" width="100%">-->
                    <!-- Это начало вывода прайса по УЗИ диагностике-->
<!--                    <h4 class="diractions_title"><b>Функциональная диагностика в нашей клинике</b></h4>-->
                    <?php
                    include "slider3.php";
                    ?>
<!--                    <table class="table table_price">-->
<!--                        <tbody>-->
<!---->
<!--                        <tr>-->
<!--                            <th style="margin-top: 20px; text-align: center; width:90%;">Название процедуры<br> <small>функциональной диагностики</small></th>-->
<!--                            <th style="width: 80px;">Цена,<small> грн </small></th>-->
<!--                        </tr>-->
                    <h4 class="diractions_title"><b>Перечень диагностических исследований, проводимых в нашей клинике </b></h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Название метода</th>
                            <th style="width: 80px;">Цена, грн</th>
                        </tr>
                        <!-- олучаем выборку из массива-->
                        <?php foreach ($usi->getPriceForFD() as $key => $value): ?>
                        <tr>
                            <td><?= $value['name_of_method_fd'] ?></td>
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
