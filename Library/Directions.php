<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 02.04.2017
 * Time: 14:29
 */
class Directions extends DataBase
{

    /**
     * @return array|bool
     * Получение всей информации о всех направлениях
     */
    public function getDirections()
    {
        $query = "SELECT id, name_of_direction, link_foto_direction, description_direction FROM directions";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    /**
     * @return array|bool
     * Функция вывода главной страницы для всех направлений
     */
    public function getMainPage(){
        $query = "SELECT main_pages.foto_main, main_pages.descr_main FROM main_pages,directions WHERE main_pages.id=directions.main_id AND main_id=1 limit 1";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }

    }
    /**
     * @param $id
     * @return array|bool
     * Функция по возврату консультаций с ценами и названием специалистов
     * без учета домашних консультаций
     */
    public function getPricesDirectionsByID($id){
        $query = "SELECT specialty, price_first_time, price_after FROM directions as d, specialty_price as p WHERE d.id=p.direction_id AND p.consulting_at_home IS NULL AND d.id=$id";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id
     * @return array|bool
     * Функция по возврату консультаций на дому с ценами и названием специалистов
     */
    public function getPricesHomeDirectionsByID($id){
        $query = "SELECT specialty, consulting_at_home FROM directions as d, specialty_price as p WHERE d.id=p.direction_id AND p.consulting_at_home IS NOT NULL AND d.id=$id";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getMethodsById($id){
        $query = "SELECT name_of_method_fd, price FROM directions as d, dir_methods_fd, methods_fd as m WHERE d.id=dir_methods_fd.dir_id AND dir_methods_fd.methods_fd_id=m.id AND d.id = $id";
        if($result = parent::arrayRes($query)){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function getTitleDirection($name)
    {
        //Переделать согласно выборке
        switch($name)
        {
            case 'Гинекология':           $title_direct="гинеколога";            break;
            case 'Хирургия':              $title_direct="хирурга";               break;
            case 'Педиатрия':             $title_direct="педиатра";              break;
            case 'Терапия':               $title_direct="терапевта";             break;
            case 'Диетология':            $title_direct="диетолога";             break;
            case 'Травматология':         $title_direct="травматолога";          break;
            case 'Мануальная%20терапия':  $title_direct="мануального терапевта"; break;
            case 'Массаж': return $title_direct="Массаж";
            case 'Урология':              $title_direct="уролога";               break;
            case 'Дерматология':          $title_direct="дерматолога";           break;
            case 'Косметология':          $title_direct="косметолога";           break;
            case 'Гастроэнтерология':     $title_direct="гастроэнтеролога";      break;
            case 'Эндокринология':        $title_direct="эндокринолога";         break;
            case 'Неврология':            $title_direct="невролога";             break;
            case 'Офтальмология':         $title_direct="офтальмолога";          break;
            case 'Пульмонология':         $title_direct="пульмонолога";          break;
            case 'Оторинолярингология':   $title_direct="оториноляринголога";    break;
            case 'Детская%20неврология':  $title_direct="детского невролога";    break;
            case 'Кардиология':           $title_direct="кардиолога";            break;
            case 'Проктология':           $title_direct="проктолога";            break;
            case 'Ревматология':          $title_direct="ревматолога";           break;
            case 'Сосудистая%20хирургия': $title_direct="сосудистого хирурга";   break;
            default: return $title_direct="Консультативный приём";
        }
        return 'Консультация '.$title_direct;
    }


}