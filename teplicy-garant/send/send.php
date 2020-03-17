<?php
header("Content-type: text/html; charset=utf-8");

$posName = isset($_POST['posName']) ? $_POST['posName'] : "";
$posPhone = isset($_POST['posPhone']) ? $_POST['posPhone'] : "";
$posPhone = preg_replace("/[^0-9]/", '', $posPhone);
$width = $_POST['width'];
$type = $_POST['type'];
$what  = stripslashes($_POST['what']);
if(!empty($_POST['what'])) {
    foreach($_POST['what'] as $check) {
        $what .= $check .', ';
    }
}
$price = $_POST['price'];
$month = $_POST['month'];
$svyaz  = stripslashes($_POST['svyaz']);
if(!empty($_POST['svyaz'])) {
    foreach($_POST['svyaz'] as $check) {
        $svyaz .= $check .', ';
    }
}
$region = $_POST['region'];
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
<br>Длина теплицы: $width
<br>Бюджет: $price
<br>Месяц установки: $month
<br>Регион доставки: $region";
$crm_mes = "Имя: $posName\nДлина теплицы: $width\nБюджет: $price\nМесяц установки: $month\nРегион доставки: $region\n";
$sub = '=?utf-8?B?' . base64_encode('Заявка с Belteplicy.ru') . '?=';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: belteplicy.ru\r\n";

if ($posPhone == '') {
    //редирект назад с сообщением о ошибке валидации например так
    echo "<script>document.location='index.php?error=1';</script>";
} else{
    if (mail($to, $sub, $mes, $headers)) {
        include 'leads.php';
        echo "1";
    }
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
            (isset($_POST['width'])?'Длина теплицы: '.$_POST['width']:'').PHP_EOL.
            (isset($what)?'Что планируют выращивать: '.$what:'').PHP_EOL.
            (isset($price)?'Бюджет: '.$price:'').PHP_EOL.
            (isset($month)?'Месяц установки теплицы: '.$month:'').PHP_EOL.
            (isset($region)?'Регион доставки: '.$region:''),
        'orderType' => 'eshop-individual',
        'orderMethod' => 'lend',
        'status' => 'new',
        'source'=>array('source'=>'belteplicy.ru','campaign'=>'site')
    );
$api->ordersCreate($send_data);