<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 25.03.2017
 * Time: 23:49
 */

class DataBase
{
    protected $db;

    public function __construct($db)
    {
        $this->db = new mysqli(
            $db['host'],
            $db['user'],
            $db['pass'],
            $db['name']
        );
        if($this->db->query('SET NAMES UTF8')){
            if($this->db->query('set character_set_server=UTF8')){
                return TRUE;
            }
        }
        return FALSE;
    }


    public function arrayRes($query)
    {
        $result = $this->db->query($query);
        if($result){
            $catalog = array();
            while($new_item = $result->fetch_assoc()){
                $catalog[] = $new_item;
            }
            return $catalog;
        }
        return FALSE;
    }

}


