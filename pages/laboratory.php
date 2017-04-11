<?php
include_once 'Config/config.php';
include_once "header.php";

$foo = new Directions($db);
$res = $foo->getDirections();

$id = filter_input(INPUT_GET, 'id');
foreach ($res as $key=>$value){
    if ($id == $value['name_of_direction']){
        $id = $res[$key];
        break;
    }
}
// var_dump($id);

?>
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
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гематологические исследования </a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммуногематологические исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Коагулологические исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Биохимические исследования </a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Гормональные исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Иммунологические исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование мочи </a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Исследование кала </a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Микроскопические исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Цитологические исследования</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Дисбиотические состояния</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Диагностика инфекционных заболеваний </a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Паразитарные инфекции</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Урогенитальные инфекции</a></li>
                                <li class="hvr-grow-shadow"><a href="#" class="directions_button">Генетическая предрасположенность</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 text-doc">
                        <nav style="margin-top: 80px;">
                            <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                            
                            <h4><b>Гинекологическая панель анализов</b></h4>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции репродуктивной системы и мониторинг беременности</td>
                                    <td>1-5 дней</td>
                                    <td>220 грн</td>

                                </tr>
                                <tr>
                                    <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции репродуктивной системы и мониторинг беременности</td>
                                    <td>1-5 дней</td>
                                    <td>220 грн</td>
                                </tr>
                                <tr>
                                    <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции репродуктивной системы и мониторинг беременности</td>
                                    <td>1-5 дней</td>
                                    <td>220 грн</td>
                                </tr>
                                </tbody>
                            </table>




                        </nav>
                </div>
            </div>
        </div>
        </div>
     

<?php include "footer.php" ?>