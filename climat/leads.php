<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */

date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSeDzeXpE8zdYC5wl0gJgl8qDzjp3ckt5PpfWCfgDroOLh9mBQ/formResponse";
$post_data = array (
    'entry.836842927' => date("d.m.Y"),
    'entry.1376503411' => date("G:i"),
    "entry.1394033584" => $phone,
    "entry.167968783" => $name,
    'entry.1151290911' => $_POST['type'],
    'entry.1500613065' => $_POST['utm_term'],
    'entry.1446484671' => $_POST['utm_source'],
    'entry.258298163' => $_POST['utm_medium'],
    'entry.1652320967' => $_POST['utm_campaign'],
    'entry.1471796266' => $_POST['utm_content'],
    'entry.1566352455' => $where,
    'entry.790304538' => $size,
    'entry.744737013' => $typecond,
    'entry.857449887' => $price,
    'entry.930736462' => $additional,
    'entry.784528796' => $model
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
return $post_data;