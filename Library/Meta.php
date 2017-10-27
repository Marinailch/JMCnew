<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 29.04.2017
 * Time: 16:11
 */
class Meta extends DataBase {

    public function getMetaItems() {
        $query = "SELECT * FROM meta";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    public function getMetaItemByID($id) {
        $query = "SELECT  * FROM meta WHERE id='$id'";
        if ($result = parent::arrayRes($query)) {
            return $result[0];
        } else {
            return false;
        }
    }

    public function saveItemByID($title, $description, $keywords, $id) {
        $query = "UPDATE meta SET title= '$title',description= '$description',keywords= '$keywords' WHERE id='$id'";
        if (parent::saveDB($query)) {
            return true;
        } else {
            echo 'Cant change data in meta object' . __LINE__;
            return false;
        }
        
    }

}
