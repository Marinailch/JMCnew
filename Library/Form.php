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
            filter_input(INPUT_POST, 'personName'),
            filter_input(INPUT_POST, 'personPhone'),
            filter_input(INPUT_POST, 'personDate'),
            filter_input(INPUT_POST, 'personDoctor'),
        );
        return $data;
    }
}