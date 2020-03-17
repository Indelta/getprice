<?php
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
// Меняем URL таблицы
$url = "https://docs.google.com/forms/d/e/1FAIpQLSeSYdfULpU0ivzRWpEU9d76Om4Uh66fqV5nkgs7Uz_hKp5PLg/formResponse";
//Формирование массива в гугл форму, добавление параметров по id полей
$post_data = array (
    'entry.900582561' => date("d.m.Y"),
    'entry.1253414489' => date("G:i"),
    'entry.1654369812' => $phone,
    'entry.713308916' => $name,
    'entry.716303865' => $tip,
    'entry.1970780515' => $material,
    'entry.749842264' => $square,
    'entry.826018254' => $ugli,
    'entry.1775332589' => $lustra,
    'entry.1798993269' => $svetilniki,
    'entry.152116212' => $truba,
    'entry.2106808960' => $vytyazhka,
    'entry.1398999172' => $karniz,
    'entry.2049882979' => $mnogopotolok,
    'entry.1197995295' => $podarki,
    'entry.1834070629' => $forma,
    'entry.1766240717' => $_POST['utm_term'],
    'entry.552626156' => $_POST['utm_source'],
    'entry.1376866543' => $_POST['utm_medium'],
    'entry.1610782173' => $_POST['utm_campaign'],
    'entry.1371584592' => $_POST['utm_content']
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
// return $post_data;

$url_crm = 'http://crm.deltaplan.by/getlead/';
    $params = array(
        'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
        'id_user' => '36', // id клиента из CRM у аккаунта
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