<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 23:00
 */
class Laboratory extends DataBase
{

//    public function getLabMethods()
//    {
//        $query = "SELECT name_of_method, biomaterial, result, time_to_wait, price FROM methods";
//        $result = $this->db->query($query);
//        if ($result) {
//            $catalogs = array();
//            while ($new_item = $result->fetch_assoc()) {
//                $catalogs[] = $new_item;
//            }
//            return $catalogs;
//        }
//        return false;
//    }

//    public function insertIntoLab($test, $bio, $res, $term, $price)
//    {
//        $bio = $this->db->real_escape_string($bio);
//        $query = "INSERT INTO methods VALUES(NULL, '$test', $price, 4, '$bio', '$term', '$res')";
//        $result = $this->db->query($query);
//        if ($result) {
//            return true;
//        }
//        return false;
//    }

//    public function insertIntoLabFull($name, $descr)
//    {
//        $descr = $this->db->real_escape_string($descr);
//        $query = "INSERT INTO lab_full_methods VALUES(NULL, '$name', '$descr')";
//        $result = $this->db->query($query);
//        if ($result) {
//            return true;
//        }
//        return false;
//    }

    public function getAllMethods()
    {
        $query = "SELECT id, name, description FROM lab_full_methods";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function saveLab($name, $desc, $id)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query = "UPDATE lab_full_methods SET name='$name', description='$desc' WHERE id='$id'";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }
    public function createLab($name, $desc)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query = "INSERT INTO lab_full_methods (name, description) VALUES('$name', '$desc')";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }
    public function deleteLabMethod($id)
    {
        $query = "DELETE FROM lab_full_methods WHERE id='$id'";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }
}
















