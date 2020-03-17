<?php
header("Content-type: text/html; charset=utf-8");

$posName = $_POST['posName'];
$posPhone = $_POST['posPhone'];
$posPhone = preg_replace("/[^0-9]/", '', $posPhone);
$width = $_POST['width'];
$type = $_POST['type'];
$retail = [
    'api_hash' => 'WPBfPpdXdlmdandbS2yt4PNoPzc5lR23',
    'api_url' => 'https://teplica-da2.retailcrm.ru/',
    'site_id' => 'teplica-da-ru'
];

//deltaplanirovanie@gmail.com, belteplica@gmail.com
$to = "deltaplanirovanie@gmail.com, dev@deltaplan.by, deltaplan.dev@gmail.com, manager.deltaplan@gmail.com, belteplica@gmail.com";
$mes = "Телефон: $posPhone
<br>Имя: $posName
<br>Форма: $type
<br>Длина теплицы: $width";

$sub = '=?utf-8?B?' . base64_encode('Заявка с Belteplicy.ru') . '?=';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: belteplicy.ru\r\n";
if (mail($to, $sub, $mes, $headers)) {
    include 'leads.php';
    echo "1";
}

require_once 'api/lib/RetailCrm/Http/Client.php';
require_once 'api/lib/RetailCrm/Response/ApiResponse.php';
require_once 'api/lib/RetailCrm/Exception/CurlException.php';
require_once 'api/lib/RetailCrm/Exception/InvalidJsonException.php';
require_once 'api/lib/RetailCrm/ApiClient.php';
$api = new \RetailCrm\ApiClient($retail['api_url'], $retail['api_hash'], $retail['site_id']);
$send_data =
    array(
        'countryIso' => 'RU',
        'firstName' => (isset($_POST['posName'])?$_POST['posName']:'Client'),
        'phone' => (isset($_POST['posPhone'])?$_POST['posPhone']:'Client'),
        'customerComment' => (isset($_POST['type'])?'Форма: '.$_POST['type']:'').PHP_EOL.
            (isset($_POST['width'])?'Длина теплицы: '.$_POST['width']:''),
        'orderType' => 'eshop-individual',
        'orderMethod' => 'lend',
        'status' => 'new',
        'source'=>array('source'=>'belteplicy.ru','campaign'=>'site')
    );
$api->ordersCreate($send_data);