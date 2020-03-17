<?php
date_default_timezone_set('Europe/Moscow');

// формируем запись в клиентскую таблицу google

$url = "https://docs.google.com/forms/d/e/1FAIpQLScw0p0f7_kpjyC2OCR2u9hthGAw-4g8McJQebADDaJ6bqh_dg/formResponse";
$post_data = array (
    'entry.1313266675' => date("d.m.Y"),
    'entry.734848435' => date("G:i"),
    "entry.984245700" => $phone,
    "entry.1772939423" => $email,
    "entry.631106556" => $name,
    "entry.858361713" => $type,
    "entry.292128626" => $kitchen_type,
    "entry.114269016" => $size,
    "entry.455530945" => $length,
    "entry.869195003" => $width,
    "entry.479642215" => $forma,
    "entry.1149107109" => $style,
    "entry.160706062" => $metro,
    'entry.1228936132' => $_POST['utm_term'],
    'entry.642133937' => $_POST['utm_source'],
    'entry.669719095' => $_POST['utm_medium'],
    'entry.945348599' => $_POST['utm_campaign'],
    'entry.1873974572' => $_POST['utm_content'],
);



// с помощью CURL заносим данные в клиентскую таблицу google

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// указываем, что у нас POST запрос

curl_setopt($ch, CURLOPT_POST, 1);

// добавляем переменные

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

//заполняем таблицу google

$output = curl_exec($ch);

$url2 = 'http://crm.deltaplan.by/getlead/';

$params = array(
    'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
   'id_user' => '40', // id клиента из CRM у аккаунта
   'utm_medium' => $_POST["utm_medium"],
   'utm_source' => $_POST["utm_source"],
   'utm_compaign' => $_POST["utm_campaign"],
   'utm_term' => $_POST["utm_term"],
   'utm_content' => $_POST["utm_content"],
   'message' => $crmMes,
   'form_name' => $_POST['type'],
   'phone' => preg_replace("/[^0-9]/", '', $_POST['phone']),
);



    
    curl_setopt($ch, CURLOPT_URL, $url2);
    // добавляем переменные
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    //заполняем таблицу google
    $result = curl_exec($ch);
    curl_close($ch);

curl_close($ch);

return $post_data;