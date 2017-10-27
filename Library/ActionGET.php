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
    protected $meta;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->directions = new Directions($db);
        $this->doctors = new Doctors($db);
        $this->form = new Form();
        $this->meta=new Meta($db);
    }

    /**
     * @param null $id
     * Попытка вызова и перезаписи редиректа
     */
    public function redirect($id = null)
    {
        if (!$id) {
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        header('Location:' . $_SERVER['PHP_SELF'] . '?page='.$id);
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
            return array('pages/main.php', $this->meta->getMetaItemByID(1));
        } else if ($id == 'directions') {
            return array('pages/directions.php',$this->meta->getMetaItemByID(2));
        } else if ($id == 'diagnostics') {
            return array('pages/diagnostics.php', $this->meta->getMetaItemByID(3));
        } else if ($id == 'doctors') {
            return array('pages/doctors.php', $this->meta->getMetaItemByID(4));
        } else if ($id == 'blog') {
            return array('pages/blog.php', $this->meta->getMetaItemByID(5));
        } else if ($id == 'functional_diagnostic') {
            return array('pages/functional_diagnostic.php', $this->meta->getMetaItemByID(6));
        }else if ($id == 'laboratory_diagnostic') {
            return array('pages/laboratory_diagnostic.php', $this->meta->getMetaItemByID(7));
        }else if ($id == 'leaders') {
            return array('pages/leaders.php', $this->meta->getMetaItemByID(8));
        }else if ($id == 'ultrasound_investigation') {
            return array('pages/ultrasound_investigation.php', $this->meta->getMetaItemByID(9));
        }else if ($id == 'about') {
            return array('pages/about.php', $this->meta->getMetaItemByID(10));
        }else if ($id == 'ravin') {
            return array('pages/ravin.php', $this->meta->getMetaItemByID(11));
        }else if ($id == 'articles') {
            return array('pages/articles.php', $this->meta->getMetaItemByID(12));
        }else if ($id == 'equipment') {
            return array('pages/equipment.php', $this->meta->getMetaItemByID(13));
        }else if($id == 'callform'){
            //Обработка формы
            //*************************************
            //УБРАТЬ РЕКУРСИВНЫЙ ОБХОД ГЕТ ЗАПРОСА*
            //*************************************
            $data = $this->getDataFromForm();
            if($this->form->getForm($data)) {
//                $x = 'pages/' . $data['get'] . '.php';
//                return array($x, $x);
//                return $this->getMain($data['get']);
                $this->redirect($data['get']);
            }else{
                return FALSE;
            }
            //*************************************
            //УБРАТЬ РЕКУРСИВНЫЙ ОБХОД ГЕТ ЗАПРОСА*
            //*************************************
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
































