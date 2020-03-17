<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLScxvhUR1fb-2ypVkjt7SmIhiRSJc13ZWYi0amDkD_JRMW1kTA/formResponse";
$post_data = array (
    'entry.1169506889' => date("d.m.Y"),
    'entry.1701868216' => date("G:i"),
    "entry.1311298428" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.907319724" => $_POST['name'],
    "entry.878653052" => $place,
    "entry.1440615853" => $rakovina,
    "entry.285834023" => $umivalnik,
    "entry.231388594" => $dush,
    "entry.909791007" => $vanna,
    "entry.39696529" => $vodozabor,
    "entry.1877584003" => $people_count,
    "entry.1996525780" => $amount_min,
    "entry.31995443" => $amount_max,
    "entry.1655838793" => $install_type,
    "entry.1668914038" => $indication,
    "entry.718590888" => $podvodka,
    "entry.1760789724" => $compact,
    "entry.427344839" => $zaschyta,
    'entry.1458006542' => $_POST['type'],
    'entry.1640191698' => $_POST['utm_term'],
    'entry.1857763816' => $_POST['utm_source'],
    'entry.296128389' => $_POST['utm_medium'],
    'entry.2095118650' => $_POST['utm_campaign'],
    'entry.1475513903' => $_POST['utm_content'],
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
        'id_user' => '34', // id клиента из CRM у аккаунта
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