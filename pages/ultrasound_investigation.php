
    <div>
        <div class="directions_header">
            <p>УЗИ диагностика</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="directions_menu">
                        <div class="doctor_info">
                            <ul style="list-style-type: none; padding-left: 0; margin-top: 50px; text-align: left;">
                                <li class="hvr-grow-shadow"><a href="index.php?page=ultrasound_investigation" class="directions_button">УЗИ</a></li>
                                <li class="hvr-grow-shadow"><a href="index.php?page=laboratory_diagnostic" class="directions_button">Лабораторная диагностика</a></li>
                                <li class="hvr-grow-shadow"><a href="index.php?page=functional_diagnostic" class="directions_button">Функциональная диагностика</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 text-doc">
                      <nav style="margin-top: 80px;">
                            <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                          <img src="img/diractions/dr.jpg" class="diractions_main_img">
                          <!-- Это начало вывода прайса по УЗИ диагностике-->
                          <h4 class="diractions_title"><b>Прайс на услуги УЗИ в нашей клинике</b></h4>
                          <table class="table">
                              <tbody>
                              <tr>
                                  <th>Название метода</th>
                                  <th style="width: 80px;">Цена</th>
                              </tr>
                              <!-- олучаем выборку из массива-->
                              <?php foreach ($usi->getPriceForUSI() as $key => $value):?>
                              <tr>
                                  <td><?= $value['name_of_method_fd']?></td>
                                  <td><?= $value['price'].' грн'?></td>
                              </tr>
                              </tbody>
                              <?php endforeach;?>
                          </table>
                          <!-- Это конец вывода прайса по УЗИ диагностике-->

                      </nav>
        </div>
</div>
</div>


