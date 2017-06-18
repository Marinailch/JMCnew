<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.06.2017
 * Time: 19:45
 */
class Action extends DataBase
{

    protected $template_name = "./template/main_adm2.php";
    protected $laboratory;
    protected $blog;
    protected $doctors;
    protected $administrators;
    protected $nurses;
    protected $price;
    protected $directions;
    protected $usi;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->laboratory = new Laboratory($db);
        $this->blog = new Blog($db);
        $this->doctors = new Doctors($db);
        $this->administrators = new Administrators($db);
        $this->nurses = new Nurses($db);
        $this->price = new Price($db);
        $this->directions = new Directions($db);
        $this->usi = new FunctionalDiagnostic($db);
    }

    public static function getParam($status)
    {
        switch ($status) {
            case'':
                return;
        }
    }

    public function redirect($id = null)
    {
        if (!$id) {
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        header('Location:' . $_SERVER['PHP_SELF'] . $id);
    }
    /*
     * ***************************************************
     * БЛОК ПО ОБРАБОТКЕ ГЕТ ЗАПРОСОВ С АДМИНПАНЕЛИ САЙТА*
     * ***************************************************
     */

    public function mainpage()
    {
        $title = 'Main Page';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/main_adm2.php';
        $footer = './page/footer_adm.php';
        include_once $this->template_name;
    }

    public function functionaldiagn()
    {
        $title = 'Functional Diagnostic';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/fd.php';
        $footer = './page/footer_adm.php';
        $usi = $this->usi;
        $directions = $this->directions;
        include_once $this->template_name;
    }

    public function consultation()
    {
        $title = 'Consultation';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/consultation.php';
        $footer = './page/footer_adm.php';
        $price = $this->price;
        $directions = $this->directions;
        include_once $this->template_name;
    }

    public function ultra()
    {
        $title = 'UltraSoundInvestigation';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/uzi.php';
        $footer = './page/footer_adm.php';
        $usi = $this->usi;
        include_once $this->template_name;
    }

    public function laboratory()
    {
        $title = 'Laboratory';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/laboratory_diagnostic.php';
        $footer = './page/footer_adm.php';
        $laboratory = $this->laboratory;
        include_once $this->template_name;
    }

    public function blog()
    {
        $title = 'Blog';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/blog.php';
        $footer = './page/footer_adm.php';
        $blog = $this->blog;
        $data_blog = $this->blog->currentDate();
        include_once $this->template_name;
    }

    public function doctors()
    {
        $title = 'Doctors';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/doctors.php';
        $footer = './page/footer_adm.php';
        $doctors = $this->doctors;
        $directions = $this->directions;
        include_once $this->template_name;
    }
    public function administrators()
    {
        $title = 'Administrators';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/administrators.php';
        $footer = './page/footer_adm.php';
        $administrators = $this->administrators;
        $directions = $this->directions;
        include_once $this->template_name;
    }
    public function nurses()
    {
        $title = 'Nurses';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/nurses.php';
        $footer = './page/footer_adm.php';
        $nurses = $this->nurses;
        $directions = $this->directions;
        include_once $this->template_name;
    }


    public function doctor_card($id = null)
    {
        $id = filter_input(INPUT_GET, 'id');
        $status = filter_input(INPUT_GET, 'status');
        $title = 'Doctors';
        $header = "./page/header_adm.php";
        $layout_name = 'layouts/doctor_card.php';
        $footer = './page/footer_adm.php';
        $doctors = $this->doctors;
        $administrators = $this->administrators;
        $nurses = $this->nurses;
        include_once $this->template_name;
    }

    /*
     * ************************************************
     * БЛОК ПО РАБОТЕ С ПРАЙСАМИ ОСНОВНЫХ КОНСУЛЬТАЦИЙ*
     * ************************************************
     */
    public function savepriceID()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $price_first_time = filter_input(INPUT_POST, 'price_first_time');
        $price_after = filter_input(INPUT_POST, 'price_after');
        $priceID = filter_input(INPUT_POST, 'priceID');
        if ($this->price->savePrice($specialty, $price_first_time, $price_after, $priceID)) {
            $this->redirect('?page=consultation');
        } else {
            die('I cant ' . __LINE__);
        }
    }

    public function deletepriceID()
    {
        $priceID = filter_input(INPUT_POST, 'priceID');
        if ($this->price->deletePriceID($priceID)) {
            $this->redirect('?page=consultation');
        } else {
            die('I cant ' . __LINE__);
        }
    }

    public function createprice()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $price_first_time = filter_input(INPUT_POST, 'price_first_time');
        $price_after = filter_input(INPUT_POST, 'price_after');
        $directions = filter_input(INPUT_POST, 'direction');
        if ($this->price->createPrice($specialty, $price_first_time, $price_after, $directions)) {
            $this->redirect('?page=consultation');
        } else {
            die('I cant ' . __LINE__);
        }
    }

    public function savepriceHID()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $consulting_at_home = filter_input(INPUT_POST, 'consulting_at_home');
        $priceID = filter_input(INPUT_POST, 'priceID');
        if ($this->price->savePriceHome($specialty, $consulting_at_home, $priceID)) {
            $this->redirect('?page=consultation');
        } else {
            die('I cant ' . __LINE__);
        }
    }

    public function createpriceH()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $consulting_at_home = filter_input(INPUT_POST, 'consulting_at_home');
        $directions = filter_input(INPUT_POST, 'direction');
        if ($this->price->createPriceHome($specialty, $consulting_at_home, $directions)) {
            $this->redirect('?page=consultation');
        } else {
            die('I cant ' . __LINE__);
        }
    }

    /*
     * ******************************
     * БЛОК ПО РАБОТЕ С УЗИ ПРАЙСАМИ*
     * ******************************
     */
    public function createpriceUSI()
    {
        $name_of_method_fd = filter_input(INPUT_POST, 'name_of_method_fd');
        $price = filter_input(INPUT_POST, 'price');
        //Статическая переменная = 2 обозначающая УЗИ по умолчанию в БД
        $id = 2;
        if ($this->usi->createNewPrice($name_of_method_fd, $price, $id)) {
            $this->redirect('?page=ultra');
        } else {
            die('I cant' . __LINE__);
        }
    }

    public function deletepriceUSI()
    {
        $priceID = filter_input(INPUT_POST, 'priceID');
        if ($this->usi->deletePrice($priceID)) {
            $this->redirect('?page=ultra');
        } else {
            die('I cant' . __LINE__);
        }
    }

    public function savepriceUSI()
    {
        $name_of_method_fd = filter_input(INPUT_POST, 'name_of_method_fd');
        $price = filter_input(INPUT_POST, 'price');
        $id = filter_input(INPUT_POST, 'priceID');
        if ($this->usi->changePrice($name_of_method_fd, $price, $id)) {
            $this->redirect('?page=ultra');
        } else {
            die('I cant' . __LINE__);
        }
    }
    /*
     * *****************************************************
     * БЛОК ПО РАБОТЕ С ПРАЙСАМИ ФУНКЦИОНАЛЬНОЙ ДИАГНОСТИКИ*
     * *****************************************************
     */
    public function createFDprice()
    {
        $name_of_method_fd = filter_input(INPUT_POST, 'name_of_method_fd');
        $price = filter_input(INPUT_POST, 'price');
        $name_of_fd = filter_input(INPUT_POST, 'name_of_fd');
        if ($this->usi->createNewPrice($name_of_method_fd, $price, $name_of_fd)) {
            $this->redirect('?page=functionaldiagn');
        } else {
            die('I cant' . __LINE__);
        }
    }

    public function deletepriceFD()
    {
        $id = filter_input(INPUT_POST, 'priceID');
        if ($this->usi->deletePrice($id)) {
            $this->redirect('?page=functionaldiagn');
        } else {
            die('I cant' . __LINE__);
        }
    }

    public function savepriceFD()
    {
        $name_of_method_fd = filter_input(INPUT_POST, 'name_of_method_fd');
        $price = filter_input(INPUT_POST, 'price');
        $id = filter_input(INPUT_POST, 'priceID');
        if ($this->usi->changePrice($name_of_method_fd, $price, $id)) {
            $this->redirect('?page=functionaldiagn');
        } else {
            die('I cant' . __LINE__);
        }
    }
    /*
    * *******************************************
    * БЛОК ПО РАБОТЕ С ЛАБОРАТОРНОЙ ДИАГНОСТИКОЙ*
    * *******************************************
    */
    public function savelab()
    {
        $name = filter_input(INPUT_POST, 'name');
        $id = filter_input(INPUT_POST, 'priceID');
        $description = filter_input(INPUT_POST, 'description');
        if($this->laboratory->saveLab($name, $description, $id)){
            $this->redirect('?page=laboratory');
        }else{
            die('I cant' . __LINE__);
        }

    }
    public function createlabmethod()
    {
        $name = filter_input(INPUT_POST, 'name');
        $description = filter_input(INPUT_POST, 'description');
        if($this->laboratory->createLab($name, $description)){
            $this->redirect('?page=laboratory');
        }else{
            die('I cant' . __LINE__);
        }
    }
    public function deletelab()
    {
        $id = filter_input(INPUT_GET, 'id');
        if($this->laboratory->deleteLabMethod($id)){
            $this->redirect('?page=laboratory');
        }else{
            die('I cant' . __LINE__);
        }
    }
    /*
     * ***************************
     * БЛОК ПО РАБОТЕ С ДОКТОРАМИ*
     * ***************************
     */
    public function createDoctor()
    {
        /*
         **********************
         * Проверка на пустоту*
         * ********************
        */
        $name_of_doctor = filter_input(INPUT_POST, 'name_of_doctor');
        if($name_of_doctor == ''||$name_of_doctor ==NULL){
            $this->redirect('?page=doctors');
        }
        $expirience_of_work = filter_input(INPUT_POST, 'expirience_of_work');
        if($expirience_of_work == ''||$expirience_of_work ==NULL){
            $this->redirect('?page=doctors');
        }
        $specialty_of_doctor = filter_input(INPUT_POST, 'specialty_of_doctor');
        if($specialty_of_doctor == ''||$specialty_of_doctor ==NULL){
            $this->redirect('?page=doctors');
        }
        $science_degree = filter_input(INPUT_POST, 'science_degree');
        $short_descr = filter_input(INPUT_POST, 'short_descr');
        $full_descr = filter_input(INPUT_POST, 'full_descr');
        $direction_id = filter_input(INPUT_POST, 'direction_id');
        $active = filter_input(INPUT_POST, 'active');
        if($active == 1){
            $active = 1;
        }else{
            $active = 0;
        }
        /***********************************************
         * ПОЛУЧАЕМ ФОТО ВРАЧА ВЫБРАННОГО ПОЛЬЗОВАТЕЛЕМ*
         * И ЗАНОСИМ ЕГО В НЕОБХОДИМУЮ ДИРЕКТОРИЮ*******
         * *********************************************
         */
        $foto = $_FILES['foto'];
        if($foto['error']===4){
            $this->redirect('?page=doctors');
        }

        $types = array("image/jpeg",);
        if ($foto['error'] == UPLOAD_ERR_OK) {
            if (in_array($foto['type'], $types)) {
                if ($foto['size'] <= 3 * 1024 * 1024) {//Не более 3 мб
                    $file_name_parts = explode('.',$foto['name']);
                    $file_extension = array_pop($file_name_parts);
                    $file_base_name = implode('',$file_name_parts);
                    $file_name = md5($file_base_name.rand(1, getrandmax()));
                    $file_name.='.'.$file_extension;
                    $path = '../img/doctors_foto/' . $file_name;

                    if (move_uploaded_file($foto['tmp_name'], $path)) {
                        //Если фото загрузилось в нужную нам директорию - тут происходят дальнейшие действия )

                        if($this->doctors->createNewDoctor($name_of_doctor, $file_name, $expirience_of_work,
                            $specialty_of_doctor, $science_degree, $short_descr, $full_descr, $direction_id,
                            $active)){
                            $this->redirect('?page=doctors');
                        }else{
                            die('I cant add doctor'. __LINE__);
                        }

                        echo 'hiho';

                    } else {
                        $message = "problem with moving";
                    }
                } else {
                    $message = "file is too large";
                }
            } else {
                $message = "invalid type of file";
            }
        } else {
            $message = parent::errorMassage($foto['error']);
            if (!empty($message)) {
                echo $message;
            }
        }
        /************************************
         * КОНЕЦ БЛОКА ПОЛУЧЕНИЯ ФОТО ВРАЧА *
         * **********************************
         */
    }
    public function deleteDoctorCard()
    {
        $id = filter_input(INPUT_GET, 'id');
        if($this->doctors->deleteDoctor($id)){
            $this->redirect('?page=doctors');
        }else{
            die('I cant delete Doctor'. __LINE__);
        }
    }
    /*
     * **********************************
     * БЛОК ПО РАБОТЕ С АДМИНИСТРАТОРАМИ*
     * **********************************
     */
    public function createAdministrator()
    {
        $name = filter_input(INPUT_POST, 'name');
        if($name == ''||$name ==NULL){
            $this->redirect('?page=administrators');
        }
        $specialty = filter_input(INPUT_POST, 'specialty');
        if($specialty == ''||$specialty ==NULL){
            $this->redirect('?page=administrators');
        }
        $description = filter_input(INPUT_POST, 'description');
        if($description == ''||$description ==NULL){
            $this->redirect('?page=administrators');
        }
        $foto = $_FILES['foto'];
        if($foto['error']===4){
            $this->redirect('?page=administrators');
        }


        $types = array("image/jpeg",);
        if ($foto['error'] == UPLOAD_ERR_OK) {
            if (in_array($foto['type'], $types)) {
                if ($foto['size'] <= 3 * 1024 * 1024) {//Не более 3 мб
                    $file_name_parts = explode('.',$foto['name']);
                    $file_extension = array_pop($file_name_parts);
                    $file_base_name = implode('',$file_name_parts);
                    $file_name = md5($file_base_name.rand(1, getrandmax()));
                    $file_name.='.'.$file_extension;
                    $path = '../img/doctors_foto/' . $file_name;

                    if (move_uploaded_file($foto['tmp_name'], $path)) {
                        //Если фото загрузилось в нужную нам директорию - тут происходят дальнейшие действия )

                        if($this->administrators->createNewAdministrator($name, $specialty, $description, $file_name)){
                            $this->redirect('?page=administrators');
                        }else{
                            die('I cant add administrator'. __LINE__);
                        }

                        echo 'hiho';

                    } else {
                        $message = "problem with moving";
                    }
                } else {
                    $message = "file is too large";
                }
            } else {
                $message = "invalid type of file";
            }
        } else {
            $message = parent::errorMassage($foto['error']);
            if (!empty($message)) {
                echo $message;
            }
        }
    }
    public function deleteAdministrator()
    {
        $id = filter_input(INPUT_GET, 'id');
        if($this->administrators->deleteAdministratorByID($id)){
            $this->redirect('?page=administrators');
        }else{
            die('I cant delete Doctor'. __LINE__);
        }

    }

    /*
     * **************************************************
     * БЛОК ПО РАБОТЕ СО СРЕДНИМ МЕДИЦИНСКИМ ПЕРСОНАЛОМ *
     * **************************************************
     */
    public function createNurse()
    {
        $name = filter_input(INPUT_POST, 'name');
        if($name == ''||$name ==NULL){
            $this->redirect('?page=nurses');
        }
        $specialty = filter_input(INPUT_POST, 'specialty');
        if($specialty == ''||$specialty ==NULL){
            $this->redirect('?page=nurses');
        }
        $description = filter_input(INPUT_POST, 'description');
        if($description == ''||$description ==NULL){
            $this->redirect('?page=nurses');
        }
        $foto = $_FILES['foto'];
        if($foto['error']===4){
            $this->redirect('?page=nurses');
        }


        $types = array("image/jpeg",);
        if ($foto['error'] == UPLOAD_ERR_OK) {
            if (in_array($foto['type'], $types)) {
                if ($foto['size'] <= 3 * 1024 * 1024) {//Не более 3 мб
                    $file_name_parts = explode('.',$foto['name']);
                    $file_extension = array_pop($file_name_parts);
                    $file_base_name = implode('',$file_name_parts);
                    $file_name = md5($file_base_name.rand(1, getrandmax()));
                    $file_name.='.'.$file_extension;
                    $path = '../img/doctors_foto/' . $file_name;

                    if (move_uploaded_file($foto['tmp_name'], $path)) {
                        //Если фото загрузилось в нужную нам директорию - тут происходят дальнейшие действия )

                        if($this->nurses->createNewNurse($name, $specialty, $description, $file_name)){
                            $this->redirect('?page=nurses');
                        }else{
                            die('I cant add administrator'. __LINE__);
                        }

                        echo 'hiho';

                    } else {
                        $message = "problem with moving";
                    }
                } else {
                    $message = "file is too large";
                }
            } else {
                $message = "invalid type of file";
            }
        } else {
            $message = parent::errorMassage($foto['error']);
            if (!empty($message)) {
                echo $message;
            }
        }
    }
    public function deleteNurse()
    {
        $id = filter_input(INPUT_GET, 'id');
        if($this->nurses->deleteNurseByID($id)){
            $this->redirect('?page=nurses');
        }else{
            die('I cant delete Doctor'. __LINE__);
        }

    }










}



















