<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 17.04.2017
 * Time: 12:32
 */
class FunctionalDiagnostic extends DataBase
{

    /**
     * return array with a whole price for USI
     */
    public function getPriceForUSI(){
        $query = "SELECT name_of_method_fd, price FROM methods_fd WHERE func_diagn_id=2";
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

    public function getPriceForFD(){
        $query = "SELECT name_of_method_fd, price FROM methods_fd WHERE func_diagn_id!=2";
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