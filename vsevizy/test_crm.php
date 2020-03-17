<?php
$url2 = 'http://crm.deltaplan.by/getlead/';
    
$params = array(
    'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
   'id_user' => '15', // id клиента из CRM у аккаунта
   'utm_medium' => 'test term',
   'utm_source' => 'test source',
   'utm_compaign' => 'test campaign',
   'utm_term' => 'test term',
   'utm_content' => 'test content',
   'message' => "Имя: test\nТестовое сообщение",
   'form_name' => 'Test',
   'phone' => '111111111111',
);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    //заполняем таблицу google
    $output = curl_exec($ch);
    curl_close($ch);
    
    // Отправка в new crm
    
    
    echo $output;

?>