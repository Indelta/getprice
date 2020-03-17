<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSe65Aj7U75NgllNdBTt6-fFpyOXm_3ELdK8huI95fO9wjC-mg/formResponse";
$post_data = array (
    'entry.1944048070' => date("d.m.Y"),
    'entry.571373582' => date("G:i"),
    'entry.2001211706' => $type,
    "entry.1956567272" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.1538267592" => $name,
    "entry.40650585" => $cel,
    "entry.685303774" => $prevViza,
    "entry.828846558" => $peopleCount,
    "entry.1074465994" => $quickly,
    "entry.217894597" => $vizaType,
    'entry.570534017' => $_POST['utm_term'],
    'entry.429112708' => $_POST['utm_source'],
    'entry.1368901157' => $_POST['utm_medium'],
    'entry.1955604753' => $_POST['utm_campaign'],
    "entry.873311717" => $_POST['utm_content']
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

// Отправка в new crm

$url2 = 'http://crm.deltaplan.by/getlead/';

$params = array(
    'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
   'id_user' => '15', // id клиента из CRM у аккаунта
   'utm_medium' => $_POST["utm_medium"],
   'utm_source' => $_POST["utm_source"],
   'utm_compaign' => $_POST["utm_campaign"],
   'utm_term' => $_POST["utm_term"],
   'utm_content' => $_POST["utm_content"],
   'message' => $crmMes,
   'form_name' => $type,
   'phone' => preg_replace("/[^0-9]/", '', $_POST['phone']),
);

    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch2, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $params);
    //заполняем таблицу google
    $result = curl_exec($ch2);
    curl_close($ch2);
    
    // Отправка в new crm

// echo $result;