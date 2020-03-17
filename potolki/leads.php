<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSfI714tgEKzzNnflTJJTcp2QwHOXGhyvAITGufNh4Qd3ao8Vg/formResponse";
$post_data = array (
    'entry.836842927' => date("d.m.Y"),
    'entry.1376503411' => date("G:i"),
    "entry.1394033584" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.167968783" => $_POST['name'],
    'entry.285415378' => $_POST['type'],
    'entry.1500613065' => $_POST['utm_term'],
    'entry.1446484671' => $_POST['utm_source'],
    'entry.258298163' => $_POST['utm_medium'],
    'entry.1652320967' => $_POST['utm_campaign'],
    'entry.910041053' => $_POST['utm_content'],
    'entry.1070830543' => $tip,
    'entry.547841064' => $rooms,
    'entry.2001093604' => $square,
    'entry.77076876' => $svet,
    'entry.1300542464' => $bonus,
    'entry.1493259769' => $linkmethod,
    "entry.330227906" => $sale,
    "entry.1905289107" => $imageCount
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