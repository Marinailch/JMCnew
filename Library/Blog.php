<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 29.04.2017
 * Time: 16:11
 */
class Blog extends DataBase
{
    public function getFullBlogItems()
    {
        $query = "SELECT * FROM blog ORDER BY created_at ASC LIMIT 5";
        if($result = parent::arrayRes($query)){
        return $result;
        }else{
            return FALSE;
        }
    }
}