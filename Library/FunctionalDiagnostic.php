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
    public function getPriceForUSI()
    {
        $query = "SELECT id, name_of_method_fd, price FROM methods_fd WHERE func_diagn_id=2";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getMethodsFD()
    {
        $query="SELECT id, name_of_fd FROM functional_diagnostic WHERE id!=2";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getPriceForFD()
    {
        $query = "SELECT id, name_of_method_fd, price FROM methods_fd WHERE func_diagn_id!=2";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function createNewPrice($name, $price, $id)
    {
        $query = "INSERT INTO methods_fd (name_of_method_fd, price, func_diagn_id) VALUES ('$name', '$price', '$id')";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }

    public function deletePrice($id)
    {
        $query = "DELETE FROM methods_fd WHERE id='$id'";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }

    public function changePrice($name, $price, $id)
    {
        $query = "UPDATE methods_fd SET name_of_method_fd='$name', price='$price' WHERE id='$id'";
        if ($result = parent::saveDB($query)) {
            return true;
        }
        return false;
    }


}