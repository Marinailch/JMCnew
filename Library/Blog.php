<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 29.04.2017
 * Time: 16:11
 */
class Blog extends DataBase
{
    public function getBlogItems()
    {
        $query = "SELECT * FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND main_foto='y' ORDER BY created_at DESC LIMIT 5";
        if($result = parent::arrayRes($query)){
        return $result;
        }else{
            return FALSE;
        }
    }

    public function getFullBlogItemByID($id)
    {
        $query = "SELECT * FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog.id='$id'";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getMainFoto($id)
    {
        $query = "SELECT link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog_foto.main_foto='y' AND blog.id='$id'";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getOtherFotos($id)
    {
        $query = "SELECT link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog_foto.main_foto='n' AND blog.id='$id'";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function currentDate()
    {
        //                -----------способ 2-------------------------
        //                этот код определяет текущую дату
        ////      его можно заносить в бд вместе со статьёй
        $months = array(
            "1"=>"Январь",
            "2"=>"Февраль",
            "3"=>"Март",
            "4"=>"Апрель",
            "5"=>"Май",
            "6"=>"Июнь",
            "7"=>"Июль",
            "8"=>"Август",
            "9"=>"Сентябрь",
            "10"=>"Октябрь",
            "11"=>"Ноябрь",
            "12"=>"Декабрь",
        );
        $day = date("d");
        $mon = $months[date("n")];
        $year = date("Y");
        return $data_blog=" "."$day"." "."$mon"." "."$year"." ";
    }

    public function getDataFromDB($data)
    {
        $data_blog1 = explode("-", $data);
        switch($data_blog1[1])
        {
            case '01':          $data_blog1[1]="января";     break;
            case '02':          $data_blog1[1]="февраля";    break;
            case '03':          $data_blog1[1]="марта";       break;
            case '04':          $data_blog1[1]="апреля";     break;
            case '05':          $data_blog1[1]="мая";        break;
            case '06':          $data_blog1[1]="июня";       break;
            case '07':          $data_blog1[1]="июля";       break;
            case '08':          $data_blog1[1]="августа";     break;
            case '09':          $data_blog1[1]="сентября";   break;
            case '10':          $data_blog1[1]="октября";    break;
            case '11':          $data_blog1[1]="ноября";     break;
            case '12':          $data_blog1[1]="декабря";    break;
            default:            $data_blog1[1]="";
        }
        return $data_blog1[2]." ".$data_blog1[1]." ".$data_blog1[0];
    }

    public function insertIntoBlog($descr)
    {
        $descr = $this->db->real_escape_string($descr);
        $query = "INSERT INTO lab_full_methods VALUES(NULL, '$descr')";
        $result = $this->db->query($query);
        if ($result){
            return TRUE;
        }
        return FALSE;
    }
}