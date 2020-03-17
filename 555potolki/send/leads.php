<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSd0YL43xAMFTpmmF8kjeqIPx6JX12b8WfuTLJ7CTcJXz4K6YA/formResponse";
$post_data = array (
    'entry.92771618' => date("d.m.Y"),
    'entry.746246536' => date("G:i"),
    "entry.1141957371" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.356292226" => $_POST['name'],
    'entry.1016672627' => $_POST['type'],
    'entry.2048614909' => $_POST['material'],
    'entry.1284776643' => $_POST['vid'],
    'entry.92441520' => $_POST['square'],
    'entry.2093199608' => $_POST['angle-count'],
    'entry.527576807' => $_POST['svet'],
    'entry.1078031929' => $_POST['dop-trybi'],
    'entry.239102294' => $_POST['dop-vytazhki'],
    'entry.1923429705' => $_POST['dop-karniz'],
    'entry.1004772312' => $_POST['dop-potolok'],
    'entry.600594032' => $_POST['promokey'],
    'entry.1204013424' => $_POST['utm_term'],
    'entry.537481583' => $_POST['utm_source'],
    'entry.1388156246' => $_POST['utm_medium'],
    'entry.257709040' => $_POST['utm_campaign'],
    'entry.913424590' => $_POST['utm_content'],
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