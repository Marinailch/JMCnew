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

    public function __construct($db)
    {
        parent::__construct($db);
        $this->laboratory = new Laboratory($db);
        $this->blog = new Blog($db);
        $this->doctors = new Doctors($db);
        $this->administrators = new Administrators($db);
        $this->nurses = new Nurses($db);
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
     include_once $this->template_name;
 }

 public function ultra()
 {
     $title = 'UltraSoundInvestigation';
     $header ="./page/header_adm.php";
     $layout_name = 'layouts/uzi.php';
     $footer = './page/footer_adm.php';
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



}