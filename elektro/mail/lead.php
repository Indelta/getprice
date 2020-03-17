<?php

date_default_timezone_set('Europe/Moscow');

// формируем запись в клиентскую таблицу google

$url = "https://docs.google.com/forms/d/e/1FAIpQLSdtEmqyYlU0ZTKLzC0rwWcCpK5CBoe1-V3_0wenhI6LsbSgxQ/formResponse";
$post_data = array (
    'entry.1871172792' => date("d.m.Y"),
    'entry.1744459437' => date("G:i"),
    "entry.976014310" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.1521424108" => $_POST['name'],
    'entry.261450426' => $_POST['type'],
    'entry.35130749' => $_POST['usluga'],
    'entry.243298999' => $_POST['utm_term'],
    'entry.1850468753' => $_POST['utm_source'],
    'entry.158761986' => $_POST['utm_medium'],
    'entry.1217086441' => $_POST['utm_campaign'],
    'entry.1403989414' => $_POST['utm_content'],
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
curl_close($ch);

$url_crm = 'http://crm.deltaplan.by/getlead/';
    $params = array(
        'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
        'id_user' => '47', // id клиента из CRM у аккаунта
        'utm_medium' => $_POST["utm_medium"],
        'utm_source' => $_POST["utm_source"],
        'utm_compaign' => $_POST["utm_campaign"],
        'utm_term' => $_POST["utm_term"],
        'utm_content' => $_POST["utm_content"],
        'message' => $crm_mes,
        'form_name' => $_POST["type"], // не должна содержать сочетание символов "phone"
        'phone' => preg_replace("/[^0-9]/", '', $_POST['phone']), //+375299465533
    );
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url_crm);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch2, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $params);
    //заполняем таблицу google
    $output = curl_exec($ch2);
    curl_close($ch2);

?>