<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 23:00
 */
class Laboratory extends DataBase
{
    public function insertIntoLab($test, $bio, $res, $term, $price)
    {
        $query = "INSERT INTO methods VALUES(NULL, $test, $price, 1, $bio, $term, $res)";
        $result = $this->db->query($query);
        if ($result){
            return TRUE;
        }
        return FALSE;
    }
}