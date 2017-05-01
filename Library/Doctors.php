<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 14:22
 */
class Doctors extends DataBase
{
    public function getDoctorsByDirection($id)
    {
        $query = "SELECT name_of_doctor, link_foto_doctor, expirience_of_work, specialty_of_doctor, science_degree, short_descr, full_descr, active FROM doctors, directions WHERE direction_id=directions.id and direction_id = '$id'";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getDoctorsShort()
    {
        $query = "SELECT id, name_of_doctor, link_foto_doctor, expirience_of_work,specialty_of_doctor, science_degree, short_descr  FROM doctors WHERE active IS NOT NULL";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }






}