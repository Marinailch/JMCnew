<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 14:29
 */
class Directions extends DataBase
{
    public function getDirections(){
        $query = "SELECT id, name_of_direction, link_foto_direction, description_direction FROM directions";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }

            return $catalogs;

        }
            return false;

    }

    public function getMainPage(){
        $query = "SELECT main_pages.foto_main, main_pages.descr_main FROM main_pages,directions WHERE main_pages.id=directions.main_id AND main_id=1 limit 1";
        $result = $this->db->query($query);
        if ($result) {
            $catalogs=array();
            while ($new_item = $result->fetch_assoc()) {
                $catalogs[]=$new_item;
            }

            return $catalogs;

        }
            return false;

    }



}