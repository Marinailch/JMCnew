<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 22:21
 */
class Price extends DataBase
{

    public function getPriceMain(){
        $query = "SELECT id, specialty, price_first_time, price_after FROM specialty_price WHERE consulting_at_home IS NULL";
        $result = $this->db->query($query);
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }

    }

    public function getPriceMainWithHome(){
        $query = "SELECT id, specialty, consulting_at_home FROM specialty_price WHERE consulting_at_home IS NOT NULL";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function savePrice($spec, $priceF, $priceA, $id)
    {
        $query = "UPDATE specialty_price SET specialty='$spec', price_first_time='$priceF', price_after='$priceA' WHERE id='$id'";
        if ($result=parent::saveDB($query)){
            return TRUE;
        }
            return FALSE;
    }
    public function deletePriceID($id)
    {
        $query="DELETE FROM specialty_price WHERE id='$id'";
        if($result=parent::saveDB($query)){
            return TRUE;
        }
            return FALSE;
    }

    public function createPrice($spec, $priceF, $priceA, $direction)
    {
        $query = "INSERT INTO specialty_price (specialty, price_first_time, price_after, direction_id) VALUES ('$spec','$priceF', '$priceA', '$direction')";
        if($result=parent::saveDB($query)){
            return TRUE;
        }
        return FALSE;
    }
    public function savePriceHome($spec, $consult, $id)
    {
        $query = "UPDATE specialty_price SET specialty='$spec', consulting_at_home='$consult' WHERE id='$id'";
        if ($result=parent::saveDB($query)){
            return TRUE;
        }
        return FALSE;
    }
    public function createPriceHome($spec, $consult, $dir)
    {
        $query = "INSERT INTO specialty_price (specialty, consulting_at_home, direction_id) VALUES ('$spec','$consult', '$dir')";
        if($result=parent::saveDB($query)){
            return TRUE;
        }
        return FALSE;
    }

}