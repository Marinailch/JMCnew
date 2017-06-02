<div class="directions_header">
    <p>Наша команда</p>
</div>

<div class="container" id="doctors">

    <div class="row">

        <!-- Это карточка одного доктора-->


        <?php foreach ($doctors->getDoctorsShort() as $key => $value): ?>


                <!--    <a href="index.php?page=doctors&id=--><? //= $value['id'] ?><!--">-->
                <div class="col-sm-3 ">
                    <div class="doctor_card hvr-grow-shadow">
                        <img class="" src="img/doctors_foto/<?= $value['link_foto_doctor'] ?>">
                        <div class="doctor_info" style="margin-bottom: 20px">
                            <?php
                            // не удаляй этот код он мне нужен
                            $fio = $value['name_of_doctor'];
                            $fio_pieces = explode(" ", $fio);
                            ?>
                            <h5><?= $fio_pieces[0] ?></h5>
                            <h5><?= $fio_pieces[1] . " " . $fio_pieces[2] ?></h5>
                            <h6><?= $value['specialty_of_doctor'] ?></h6>
                            <h4><?= $value['science_degree'] ?></h4>
                        </div>
                    </div>
                </div>


        <? endforeach; ?>


    </div>

</div>

<div class="directions_header">
    <p>Администрация</p>
</div>
<div class="container" id="doctors">

    <div class="row">

        <!-- Это карточка одного администратора-->


        <?php foreach ($administrators->getAdministrators() as $key => $value): ?>


            <!--    <a href="index.php?page=doctors&id=--><? //= $value['id'] ?><!--">-->
            <div class="col-sm-3 ">
                <div class="doctor_card hvr-grow-shadow">
                    <img class="" src="img/doctors_foto/<?= $value['link_foto'] ?>">
                    <div class="doctor_info" style="margin-bottom: 20px">
                        <?php
                        // не удаляй этот код он мне нужен
                        $fio = $value['name'];
                        $fio_pieces = explode(" ", $fio);
                        ?>
                        <h5><?= $fio_pieces[0] ?></h5>
                        <h5><?= $fio_pieces[1] . " " . $fio_pieces[2] ?></h5>
                        <h6><?= $value['specialty'] ?></h6>
                    </div>
                </div>
            </div>


        <? endforeach; ?>


    </div>

</div>

<div class="directions_header">
    <p>Средний медицинский персонал</p>
</div>
<div class="container" id="doctors">

    <div class="row">

        <!-- Это карточка одного администратора-->


        <?php foreach ($nurses->getNurses() as $key => $value): ?>


                <!--    <a href="index.php?page=doctors&id=--><? //= $value['id'] ?><!--">-->
                <div class="col-sm-3 ">
                    <div class="doctor_card hvr-grow-shadow">
                        <img class="" src="img/doctors_foto/<?= $value['link_foto'] ?>">
                        <div class="doctor_info" style="margin-bottom: 20px">
                            <?php
                            // не удаляй этот код он мне нужен
                            $fio = $value['name'];
                            $fio_pieces = explode(" ", $fio);
                            ?>
                            <h5><?= $fio_pieces[0] ?></h5>
                            <h5><?= $fio_pieces[1] . " " . $fio_pieces[2] ?></h5>
                            <h6><?= $value['specialty'] ?></h6>
                        </div>
                    </div>
                </div>


        <? endforeach; ?>


    </div>

</div>
