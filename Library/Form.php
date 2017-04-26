<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.04.2017
 * Time: 20:12
 */
class Form
{
    public function getForm()
    {
        $data = array(
            'name' => filter_input(INPUT_POST, 'personName'),
            'phone' => filter_input(INPUT_POST, 'personPhone'),
            'date' => filter_input(INPUT_POST, 'personDate'),
            'doctor' => filter_input(INPUT_POST, 'personDoctor'),
            'get' => filter_input(INPUT_POST, 'personGET'),
        );
        return $data;
    }
}