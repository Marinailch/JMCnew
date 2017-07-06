<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 26.04.2017
 * Time: 20:12
 */
class Form
{
    public function getForm(array $data)
    {
        $to = 'marina.o.ilch@gmail.com';
        $subject = 'ЗАПИСЬ НА ПРИЕМ В КЛИНИКУ JMC';
        $subject = '=?utf-8?B?'.base64_encode($subject).'?=';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
        if($data['doctor']==NULL){
            $data['doctor']='без указания доктора';
        }
        if($data['message']==NULL){
            $data['message']='Пациент не указывал никаких дополнительных данных';
        }
         $message = 'К Вам в клинику записался:' . $data['name'] . '<br>'
                . 'Контактный телефон: ' . $data['phone'] . '<br>'
                . 'Дата записи: ' . $data['date'] . '<br>'
                . 'Написал следующее: ' . $data['message']. '<br>'
                . 'По направлению: ' . $data['doctor'];

            mail($to, $subject, $message, $headers);

            return TRUE;
    }
}