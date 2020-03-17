<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
// $url = "https://docs.google.com/forms/d/e/1FAIpQLScC56s9mnKdjnHtu8dJi7LCo9b6lGQT1cY94H1YqaP61hX5yg/formResponse";
// $post_data = array (
//     'entry.836842927' => date("d.m.Y"),
//     'entry.1376503411' => date("G:i"),
//     'entry.1084539564' => 'Заявка',
//     "entry.1394033584" => $_POST['phone'],
//     "entry.167968783" => $_POST['name'],
//     'entry.1151290911' => $_POST['email'],
// );
// таблица учета лидов с bazamasterov.by/remont

$url = "https://docs.google.com/forms/d/e/1FAIpQLScavPwsOlyCMK9bTHdARYLk3Cn_FLfddY0kw2y9YpjqRo2zYg/formResponse";
$post_data = array (
    'entry.836842927' => date("d.m.Y"),
    'entry.1376503411' => date("G:i"),
    "entry.1394033584" => $phone,
    "entry.167968783" => $name,
    "entry.1114192972" => $email,
    'entry.1151290911' => $_POST['type'],
    'entry.1500613065' => $_POST['utm_term'],
    'entry.1446484671' => $_POST['utm_source'],
    'entry.258298163' => $_POST['utm_medium'],
    'entry.1652320967' => $_POST['utm_campaign'],
    'entry.1471796266' => $_POST['utm_content'],
    'entry.1566352455' => $pomType,
    'entry.790304538' => $square,
    'entry.857449887' => $ifProject,
    'entry.1913579028' => $href,
    'entry.1566352455' => $gdeRemont,
    'entry.110618263' => $ifPereplan,
    'entry.1000300087' => $gk_komplex,
    'entry.196240136' => $typeRemont,
    'entry.912903685' => 'http://getprice.by/remont'
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