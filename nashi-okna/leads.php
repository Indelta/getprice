<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSd4EPbSIiviyjOqarQWWDMeqLijiR2-Ez1h0qv0mp9BYm5GSA/formResponse";
$post_data = array (
    'entry.156590922' => date("d.m.Y"),
    'entry.2012493606' => date("G:i"),
    "entry.793326026" => $_POST['name'],
    'entry.1713654843' => $forma,
    "entry.393896943" => $phone,
    "entry.857990571" => $housePlace,
    "entry.779979923" => $windowPlace,
    "entry.908873516" => $homeConstruction,
    // "entry.1049960182" => $uglFlat,
    // "entry.195839144" => $windowView,
    "entry.1870547914" => "getprice.by/nashi-okna",
    "entry.213568236" => $flatEtazh,
    "entry.233214714" => $window1,
    "entry.1777427736" => $window2,
    "entry.2029911459" => $window3,
    "entry.1846180677" => $window4,
    "entry.129841597" => $windowProfil,
    "entry.1576969464" => $windowDopkomplekt,
    "entry.1803118665" => $_POST["sale"],
    "entry.2129323280" => $_POST["utm_term"],
    "entry.1495923274" => $_POST["utm_source"],
    "entry.1010353598" => $_POST["utm_medium"],
    "entry.1771558777" => $_POST["utm_campaign"],
    "entry.1393117239" => $_POST["utm_content"]
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