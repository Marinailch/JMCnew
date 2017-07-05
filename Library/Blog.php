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
        $query =
            "SELECT blog.id, blog.title, blog.short_description, blog.full_description, blog.created_at, blog_foto.link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND main_foto='y' ORDER BY created_at DESC ";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function getBlogItemsForMain()
    {
        $query =
            "SELECT blog.id, blog.title, blog.short_description,blog.created_at, link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND main_foto='y' ORDER BY created_at DESC LIMIT 3 ";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function getFullBlogItemByID($id)
    {
        $query =
            "SELECT * FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog_foto.main_foto='y' AND blog.id='$id'";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function getMainFoto($id)
    {
        $query =
            "SELECT link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog_foto.main_foto='y' AND blog.id='$id'";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOtherFotos($id)
    {
        $query =
            "SELECT link_foto FROM blog, blog_foto WHERE blog.id=blog_foto.blog_id AND blog_foto.main_foto='n' AND blog.id='$id'";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function currentDate()
    {
        $months = array(
            "1" => "Январь",
            "2" => "Февраль",
            "3" => "Март",
            "4" => "Апрель",
            "5" => "Май",
            "6" => "Июнь",
            "7" => "Июль",
            "8" => "Август",
            "9" => "Сентябрь",
            "10" => "Октябрь",
            "11" => "Ноябрь",
            "12" => "Декабрь",
        );
        $day = date("d");
        $mon = $months[date("n")];
        $year = date("Y");
        return $data_blog = " " . "$day" . " " . "$mon" . " " . "$year" . " ";
    }

    public function getDataFromDB($data)
    {
        $data_blog1 = explode("-", $data);
        switch ($data_blog1[1]) {
            case '01':
                $data_blog1[1] = "января";
                break;
            case '02':
                $data_blog1[1] = "февраля";
                break;
            case '03':
                $data_blog1[1] = "марта";
                break;
            case '04':
                $data_blog1[1] = "апреля";
                break;
            case '05':
                $data_blog1[1] = "мая";
                break;
            case '06':
                $data_blog1[1] = "июня";
                break;
            case '07':
                $data_blog1[1] = "июля";
                break;
            case '08':
                $data_blog1[1] = "августа";
                break;
            case '09':
                $data_blog1[1] = "сентября";
                break;
            case '10':
                $data_blog1[1] = "октября";
                break;
            case '11':
                $data_blog1[1] = "ноября";
                break;
            case '12':
                $data_blog1[1] = "декабря";
                break;
            default:
                $data_blog1[1] = "";
        }
        return $data_blog1[2] . " " . $data_blog1[1] . " " . $data_blog1[0];
    }

    public function insertIntoBlog($descr)
    {
        $descr = $this->db->real_escape_string($descr);
        $query = "UPDATE blog SET full_description= '$descr' WHERE blog.id=4";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        }
        return false;
    }

    public function createNewArticle($title, $short, $full, $date)
    {
        $full = $this->db->real_escape_string($full);
        $query =
            "INSERT INTO blog (title, short_description, full_description, created_at) VALUES ('$title','$short','$full','$date')";
        $result = $this->db->query($query);
        if ($result) {
            return $this->db->insert_id;
        }
        return false;
    }

    public function saveMainFoto($foto, $var, $dir_id)
    {
        $query = "INSERT INTO blog_foto (link_foto, main_foto, blog_id) VALUES ('$foto', '$var', '$dir_id')";
        if ($result = parent::saveDB($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function deletBlogItemByID($id)
    {
        $query = "DELETE FROM blog WHERE id='$id'";
        $query2 = "DELETE FROM blog_foto WHERE blog_id='$id'";
        if ($result = parent::saveDB($query2)) {
            if ($result = parent::saveDB($query)) {
                return true;
            } else {
                echo 'Cant delete additional foto';
            }
        } else {
            echo 'Cant delete main blog_item';
        }
        return false;
    }

    public function saveItemByID($title, $short_description, $full_description, $file_name, $id)
    {
        $full_description = $this->db->real_escape_string($full_description);
        $query = "INSERT INTO blog_foto (link_foto) VALUES('$file_name') WHERE blog_id='$id'";
        $query2 ="INSERT INTO blog (title, short_description, full_description) VALUES('$title', '$short_description', '$full_description') WHERE id='$id'";
        if ($result = parent::saveDB($query2)) {
            if ($result = parent::saveDB($query)) {
                return true;
            } else {
                echo 'Cant change main foto in blog object';
            }
        } else {
            echo 'Cant change data in blog main object';
        }
        return false;
    }
}













