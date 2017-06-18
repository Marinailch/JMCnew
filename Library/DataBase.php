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
    public function saveDB($query)
    {
        $result = $this->db->query($query);
        if($result){
            return true;
        }
        return false;
    }
    public function errorMassage($value)
    {
        switch ($value) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by extension";
                break;
            default:
                $message = "Unknown upload error";
                break;
        }
        return $message;
    }
}


