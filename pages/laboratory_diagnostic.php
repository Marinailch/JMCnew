<div>
    <div class="directions_header">
        <p>Лабораторная диагностика</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu">
                    <div class="doctor_info">
                        <ul style="list-style-type: none; padding-left: 0; margin-top: 50px; text-align: left;">
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гематологические
                                    исследования </a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммуногематологические
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Коагулологические
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Биохимические
                                    исследования </a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гормональные
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммунологические
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование мочи </a>
                            </li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование кала </a>
                            </li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Микроскопические
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Цитологические
                                    исследования</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Дисбиотические
                                    состояния</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Диагностика инфекционных
                                    заболеваний </a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Паразитарные инфекции</a>
                            </li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Урогенитальные
                                    инфекции</a></li>
                            <li class="hvr-grow-shadow"><a href="#" class="directions_button">Генетическая
                                    предрасположенность</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-doc">
                <nav style="margin-top: 80px;">
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->



                    <h4 class="diractions_title"><b>Лабораторные методы в нашей клинике</b></h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Название метода</th>
                            <th>Биоматериал</th>
                            <th>Результат</th>
                            <th>Срок</th>
                            <th>Цена</th>
                        </tr>
                        <!-- олучаем выборку из массива-->
                        <?php foreach ($laboratory->getLabMethods() as $key => $value): ?>
                        <tr>
                            <td><?= $value['name_of_method'] ?></td>
                            <td><?= $value['biomaterial']?></td>
                            <td><?= $value['result']?></td>
                            <td><?= $value['time_to_wait']?></td>
                            <td><?= $value['price']?></td>
                        </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>


                </nav>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>