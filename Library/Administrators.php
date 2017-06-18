<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 01.05.2017
 * Time: 2:59
 */
class Administrators extends DataBase
{
    public function getAdministrators()
    {
        $query = "SELECT id, name, specialty, link_foto, description FROM administrators";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }
    public function createNewAdministrator($name, $spec,  $desc, $foto)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query="INSERT INTO administrators ( name, specialty, description, link_foto) VALUES ('$name', '$spec', '$desc', '$foto')";
        if($result= parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function deleteAdministratorByID($id)
    {
        $query = "DELETE FROM administrators WHERE id='$id'";
        if($result=parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function saveAdministrator($name, $spec,  $desc, $foto, $id)
    {
        $desc  = $this->db->real_escape_string($desc);
        $query="UPDATE administrators SET name='$name', specialty='$spec', description='$desc', link_foto='$foto' WHERE id='$id'";
        if($result= parent::saveDB($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}