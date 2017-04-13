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
    public function getPricesDirectionsByID($id){
        $query = "SELECT specialty, price_first_time, price_after FROM directions as d, specialty_price as p WHERE d.id=p.direction_id AND p.consulting_at_home IS NULL AND d.id=$id";
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

    public function getPricesHomeDirectionsByID($id){
        $query = "SELECT specialty, consulting_at_home FROM directions as d, specialty_price as p WHERE d.id=p.direction_id AND p.consulting_at_home IS NOT NULL AND d.id=$id";
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