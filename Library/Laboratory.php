<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 23:00
 */
class Laboratory extends DataBase
{
    public function getLabMethods()
    {
        $query = "SELECT name_of_method, biomaterial, result, time_to_wait, price FROM methods";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }

            return $catalogs;

        }
        return false;
    }




    public function insertIntoLab($test, $bio, $res, $term, $price)
    {
        $bio = $this->db->real_escape_string($bio);
        $query = "INSERT INTO methods VALUES(NULL, '$test', $price, 4, '$bio', '$term', '$res')";
        $result = $this->db->query($query);
        if ($result){
            return TRUE;
        }
        return FALSE;
    }

    public function insertIntoLabFull($name, $descr)
    {
        $descr = $this->db->real_escape_string($descr);
        $query = "INSERT INTO lab_full_methods VALUES(NULL, '$name', '$descr')";
        $result = $this->db->query($query);
        if ($result){
            return TRUE;
        }
        return FALSE;
    }

    public function getAllMethods()
    {
        $query = "SELECT name, description FROM lab_full_methods";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }

            return $catalogs;

        }
        return false;
    }
}
