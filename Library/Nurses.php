<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 01.05.2017
 * Time: 2:48
 */
class Nurses extends DataBase
{
    public function getNurses()
    {
        $query = "SELECT id, name, specialty, link_foto, description FROM nurses";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }
    public function createNewNurse($name, $spec, $desc, $foto)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query="INSERT INTO nurses ( name, specialty, description, link_foto) VALUES ('$name', '$spec', '$desc', '$foto')";
        if($result= parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function deleteNurseByID($id)
    {
        $query = "DELETE FROM nurses WHERE id='$id'";
        if($result=parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function saveNurse($name, $spec, $desc, $foto, $id)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query="UPDATE nurses SET name='$name', specialty='$spec', description='$desc', link_foto='$foto' WHERE id='$id'";
        if($result= parent::saveDB($query)){
            return TRUE;
        }else{
            echo 'NO!';
        }
    }

}