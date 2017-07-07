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
     * @return bool|mixed
     * Проверяем GET запрос на главной странице
     * Возвращаем подгружаемый файл
     */

        public function getMain($id=NULL)
    {
        if($id==NULL) {
            $id = filter_input(INPUT_GET, 'page');
        }
        if (!$id) {
            return array('pages/main.php', 'Главная страница');
        } else if ($id == 'directions') {
            return array('pages/directions.php','Направления');
        } else if ($id == 'diagnostics') {
            return array('pages/diagnostics.php', 'Диагностика');
        } else if ($id == 'doctors') {
            return array('pages/doctors.php', 'Наш коллектив');
        } else if ($id == 'blog') {
            return array('pages/blog.php', 'Блог');
        } else if ($id == 'functional_diagnostic') {
            return array('pages/functional_diagnostic.php', 'Функциональная Диагностика');
        }else if ($id == 'laboratory_diagnostic') {
            return array('pages/laboratory_diagnostic.php', 'Лабораторная Диагностика');
        }else if ($id == 'leaders') {
            return array('pages/leaders.php', 'Администрация');
        }else if ($id == 'ultrasound_investigation') {
            return array('pages/ultrasound_investigation.php', 'УЗИ');
        }else if ($id == 'about') {
            return array('pages/about.php', 'О нас');
        }else if ($id == 'ravin') {
            return array('pages/ravin.php', 'Равин');
        }else if ($id == 'articles') {
            return array('pages/articles.php', 'Статьи');
        }else if ($id == 'equipment') {
            return array('pages/equipment.php', 'Оборудование');
        }else if($id == 'callform'){
            //Обработка формы
            $data = $this->getDataFromForm();
            if($this->form->getForm($data)) {
                $x = 'pages/' . $data['get'] . '.php';
                return array($x, $x);
                return array('pages/' . $data['get'] . '.php');
                  return $this->getMain($data['get']);
            }else{
                return FALSE;
            }
        }else{
            return array('pages/404.php', 'Ошибка обращения');
        }

    }

    public function getDataFromForm()
    {
        $data = array(
            'name' => filter_input(INPUT_POST, 'personName'),
            'phone' => filter_input(INPUT_POST, 'personPhone'),
            'date' => filter_input(INPUT_POST, 'personDate'),
            'doctor' => filter_input(INPUT_POST, 'personDoctor'),
            'message' => filter_input(INPUT_POST, 'personMessage'),
            'get' => filter_input(INPUT_POST, 'personGET'),
        );
        $res = $this->directions->getDirections();
        foreach ($res as $key => $value) {
            if ($data['doctor'] == $value['id']) {
                $data['doctor'] = $value['name_of_direction'];
                break;
            }
        }
        return $data;
    }

}
































