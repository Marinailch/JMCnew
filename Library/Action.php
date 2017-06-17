<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.06.2017
 * Time: 19:45
 */
class Action extends DataBase
{
    protected $template_name="./template/main_adm2.php";
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
        switch ($status)
        {
            case'': return ;
        }
    }
    public function redirect($id=NULL){
        if(!$id){
            header('Location:'.$_SERVER['PHP_SELF']);
        }
        header('Location:'.$_SERVER['PHP_SELF'].$id);
    }


    public function mainpage()
 {
     $title = 'Main Page';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/main_adm2.php';
     $footer = './page/footer_adm.php';
     include_once $this->template_name;
 }


 public function consultation()
 {
     $title = 'Consultation';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/consultation.php';
     $footer = './page/footer_adm.php';
     $price = $this->price;
     $directions = $this->directions;
     $b = $price;
     include_once $this->template_name;
 }

 public function ultra()
 {
     $title = 'UltraSoundInvestigation';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/uzi.php';
     $footer = './page/footer_adm.php';
     $usi = $this->usi;
     include_once $this->template_name;
 }

 public function laboratory()
 {
     $title = 'Laboratory';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/laboratory_diagnostic.php';
     $footer = './page/footer_adm.php';
     $res2 = $this->laboratory->getAllMethods();
     include_once $this->template_name;

 }

 public function blog()
 {
     $title = 'Blog';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/blog.php';
     $footer = './page/footer_adm.php';
     $blog = $this->blog;
     $data_blog = $this->blog->currentDate();
     include_once $this->template_name;
 }

 public function doctors()
 {
     $title = 'Doctors';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/doctors.php';
     $footer = './page/footer_adm.php';
     $doctors = $this->doctors;
     $administrators = $this->administrators;
     $nurses = $this->nurses;
     include_once $this->template_name;
 }

    public function doctor_card($id=NULL)
    {
        $id=filter_input(INPUT_GET, 'id');
        $status = filter_input(INPUT_GET, 'status');
        $title = 'Doctors';
        $header ="./page/header_adm.php";
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
        if($this->price->savePrice($specialty, $price_first_time, $price_after, $priceID)){
            $this->redirect('?page=consultation');
        }else{
            die('I cant '.__LINE__);
        }
    }
    public function deletepriceID()
    {
        $priceID = filter_input(INPUT_POST, 'priceID');
        if($this->price->deletePriceID($priceID)){
            $this->redirect('?page=consultation');
        }else{
            die('I cant '.__LINE__);
        }
    }

    public function createprice()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $price_first_time = filter_input(INPUT_POST, 'price_first_time');
        $price_after = filter_input(INPUT_POST, 'price_after');
        $directions = filter_input(INPUT_POST, 'direction');
        if($this->price->createPrice($specialty, $price_first_time, $price_after, $directions)){
            $this->redirect('?page=consultation');
        }else{
            die('I cant '.__LINE__);
        }
    }

    public function savepriceHID()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $consulting_at_home = filter_input(INPUT_POST, 'consulting_at_home');
        $priceID = filter_input(INPUT_POST, 'priceID');
        if($this->price->savePriceHome($specialty, $consulting_at_home, $priceID)){
            $this->redirect('?page=consultation');
        }else{
            die('I cant '.__LINE__);
        }
    }
    public function createpriceH()
    {
        $specialty = filter_input(INPUT_POST, 'specialty');
        $consulting_at_home = filter_input(INPUT_POST, 'consulting_at_home');
        $directions = filter_input(INPUT_POST, 'direction');
        if($this->price->createPriceHome($specialty,$consulting_at_home, $directions)){
            $this->redirect('?page=consultation');
        }else{
            die('I cant '.__LINE__);
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
        if($this->usi->createNewPrice($name_of_method_fd, $price, $id)){
            $this->redirect('?page=ultra');
        }else{
            die('I cant'.__LINE__);
        }
    }
    public function deletepriceUSI()
    {
        $priceID = filter_input(INPUT_POST, 'priceID');
        if($this->usi->deletePrice($priceID)){
            $this->redirect('?page=ultra');
        }else{
            die('I cant'.__LINE__);
        }
    }
    public function savepriceUSI()
    {
        $name_of_method_fd = filter_input(INPUT_POST, 'name_of_method_fd');
        $price = filter_input(INPUT_POST, 'price');
        $id =  filter_input(INPUT_POST, 'priceID');
        if($this->usi->changePrice($name_of_method_fd, $price, $id)){
            $this->redirect('?page=ultra');
        }else{
            die('I cant'.__LINE__);
        }
    }

}



















