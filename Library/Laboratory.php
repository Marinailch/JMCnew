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
        $query = "INSERT INTO methods VALUES(NULL, '$test', $price, 1, '$bio', '$term', '$res')";
        $result = $this->db->query($query);
        if ($result){
            return TRUE;
        }
        return FALSE;
    }
}
//INSERT INTO methods VALUES(NULL, 'bio', 120, 1, 'asdf', 1, 'kol');