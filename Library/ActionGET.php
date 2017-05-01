<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 19:03
 */
class ActionGET extends DataBase
{

    protected $directions;
    protected $doctors;
    protected $functional_diagn;
    protected $lab_meth;
    protected $form;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->directions = new Directions($db);
        $this->doctors = new Doctors($db);
        $this->form = new Form();
    }

    /**
     * Проверяем просто наличие или отсутствие GET запроса
     */
    public function getReqByGet()
    {
        $id = filter_input(INPUT_GET, 'id');
        if (!$id) {
            return FALSE;
        }
        return TRUE;
    }

    /**
     * @return bool|mixed
     * Проверяем GET запрос на странице направлений
     * Возвращаем массив с выбранным направлением
     */
    public function getGET()
    {

        $res = $this->directions->getDirections();

        $id = filter_input(INPUT_GET, 'id');
        foreach ($res as $key => $value) {
            if ($id == $value['name_of_direction']) {
                $id = $res[$key];
                return $id;
            }
        }
        $id = $this->directions->getMainPage();
        return $id;


    }

    /**
     * @param $id
     * Функция по обработке ГЕТ запроса от докторов
     * Возвращает массив с выбранным доктором
     */
    public function getGetDoctors($id)
    {

    }

    /**
     * @return bool|mixed
     * Проверяем GET запрос на главной странице
     * Возвращаем подгружаемый файл
     */
    public function getMain()
    {

        $id = filter_input(INPUT_GET, 'page');

        if (!$id) {
            return 'main.php';
        } else if ($id == 'directions') {
            return 'pages/directions.php';
        } else if ($id == 'diagnostics') {
            return 'pages/diagnostics.php';
        } else if ($id == 'doctors') {
            return 'pages/doctors.php';
        } else if ($id == 'blog') {
            return 'pages/blog.php';
        } else if ($id == 'functional_diagnostic') {
            return 'pages/functional_diagnostic.php';
        }else if ($id == 'laboratory_diagnostic') {
            return 'pages/laboratory_diagnostic.php';
        }else if ($id == 'leaders') {
            return 'pages/leaders.php';
        }else if ($id == 'ultrasound_investigation') {
            return 'pages/ultrasound_investigation.php';
        }else if ($id == 'about') {
            return 'pages/about.php';
        }else if ($id == 'ravin') {
            return 'pages/ravin.php';
        }else if ($id == 'articles') {
            return 'pages/articles.php';
        }else if ($id == 'equipment') {
            return 'pages/equipment.php';
        }else if($id == 'callform'){
            //Обработка формы
            $res = $this->form->getForm();
            return 'pages/'.$res['get'].'.php';
//            var_dump($res);



        }



        return FALSE;

    }


}
































