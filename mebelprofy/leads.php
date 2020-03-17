<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSf2fN0DDVNt-urYs0kdEqUGjr6Av90hau1Q8syavwqqZNZHRA/formResponse";
$post_data = array (
    'entry.836842927' => date("d.m.Y"),
    'entry.1376503411' => date("G:i"),
    'entry.1084539564' => 'Заявка',
    "entry.1394033584" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.167968783" => $_POST['name'],
    'entry.1151290911' => $_POST['type'],
    'entry.1500613065' => $_POST['utm_term'],
    'entry.1446484671' => $_POST['utm_source'],
    'entry.258298163' => $_POST['utm_medium'],
    'entry.1652320967' => $_POST['utm_campaign'],
    'entry.910041053' => $_POST['utm_content'],
    'entry.1070830543' => $place,
    'entry.547841064' => $type,
    'entry.2001093604' => $height,
    'entry.77076876' => $width,
    'entry.1300542464' => $deep,
    'entry.1493259769' => $konfig,
    'entry.1986555600' => $cover,
    'entry.234506183' => $dop
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
        'id_user' => '25', // id клиента из CRM у аккаунта
        'utm_medium' => $_POST["utm_medium"],
        'utm_source' => $_POST["utm_source"],
        'utm_compaign' => $_POST["utm_campaign"],
        'utm_term' => $_POST["utm_term"],
        'utm_content' => $_POST["utm_content"],
        'message' => $crm_mes,
        'form_name' => $forma, // не должна содержать сочетание символов "phone"
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