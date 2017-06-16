<?php
$item = $doctor;
?>

<!--<div style="margin-top: 20px;">-->
<!--        --><?php //foreach($doctors as $key=>$value):?>
<!--            <img src="../img/doctors_foto/--><?//= $value['link_foto_doctor']?><!--" width="300px" height="200px" style="float:left; margin-right: 30px; " >-->
<!--            <p class="markh2b">--><?//= $value['name_of_doctor']?><!--</p>-->
<!--            <p class="markh4o">--><?//= $value['specialty_of_doctor']?><!--</p>-->
<!--            <p class="markh4b">--><?//= $value['science_degree']?><!--</p>-->
<!--            <p style="text-align:left;">--><?//= $value['expirience_of_work']?><!--</p>-->
<!--            <p style="text-align: justify;">--><?//= $value['full_descr']?><!--</p>-->
<!---->
<!--        --><?php //endforeach; ?>
<!---->
<!--    </div>-->



    <div class="container" >
    <div style=" margin-top: 30px; margin-bottom: 40px;">




        <form class="form-horizontal" method="POST" action="../index.php">

            <div class="row">
                <div class="col-md-5" >
                    <div style="margin-bottom: 20px;">
               <span class="btn btn-default btn-file batton_del_panel_lab" style="width: 20px;">
                   <img src="./img/rec.png" title="Редактировать" class="del_button" style="margin-right: -10px">
                   <input type="file">
                </span>
                        <img src="../../img/doctors_foto/1.jpg" width="100%" height="auto" style="float:left; margin-right: 35px; margin-bottom: 30px;  " >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>ФИО врача</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>категорию врача</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="Врач высшей категории">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>должность врача</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="Сосудистый хирург">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSuccess3">Добавить <br>краткое описание </label>
                        <div class="col-sm-8">
                            <textarea type="text" rows="10" cols="" name="name" class="form-control" value="Сосудистый хирург"></textarea>
                        </div>
                    </div>


                </div>
            </div>
            <h5 class="directions_header_adm">Добавить полное описание</h5>


            <textarea name="doctor_add"></textarea>
            <!-- Trying new action-->

            <input type="submit" class="form-horizontal" name="submit">
        </form>
        <script>
            CKEDITOR.replace('doctor_add');
        </script>


</div>
</div>
