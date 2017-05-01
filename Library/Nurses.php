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
        $query = "SELECT name, specialty, link_foto FROM nurses";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }
}