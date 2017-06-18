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
        $query = "SELECT doctors.id, name_of_doctor, link_foto_doctor, expirience_of_work, specialty_of_doctor, science_degree, short_descr, full_descr, active FROM doctors, directions WHERE direction_id=directions.id and direction_id = '$id' AND active!=0";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getDoctorsShort()
    {
        $query = "SELECT id, name_of_doctor, link_foto_doctor, expirience_of_work,specialty_of_doctor, science_degree, short_descr  FROM doctors WHERE active!=0";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getDoctorsShortFull()
    {
        $query = "SELECT id, name_of_doctor, link_foto_doctor, expirience_of_work,specialty_of_doctor, science_degree, short_descr, full_descr FROM doctors";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }


    public function createNewDoctor($name, $foto, $exp, $spec, $science, $short, $full, $dir_id, $active)
    {
        $full  = $this->db->real_escape_string($full);
        $query="INSERT INTO doctors (name_of_doctor, link_foto_doctor, expirience_of_work, specialty_of_doctor, science_degree, short_descr, full_descr, direction_id, active) VALUES ('$name', '$foto', '$exp', '$spec', '$science', '$short', '$full', '$dir_id', '$active')";
        if($result= parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function deleteDoctor($id)
    {
        $query = "DELETE FROM doctors WHERE id='$id'";
        if($result=parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function saveDoctorByID($name, $foto, $exp, $spec, $science, $short, $full, $dir_id, $active, $id)
    {
        $full  = $this->db->real_escape_string($full);
        $query="UPDATE doctors SET name_of_doctor='$name', link_foto_doctor='$foto', expirience_of_work='$exp', specialty_of_doctor='$spec', science_degree='$science', short_descr='$short', full_descr='$full', direction_id='$dir_id', active='$active' WHERE id='$id'";
        if($result=parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }






}