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
        $query = "SELECT name, specialty, link_foto FROM administrators";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }
}