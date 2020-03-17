<?php
/**
 * Created by PhpStorm.
 * User: Viktoryia Tsekhanovich
 * Date: 11.01.2017
 * Time: 10:17
 */

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/vsevizy/";

$mes = "";
$crmMes = "";
if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes.= "<p>Имя: $name</p>";
    $crmMes .= "Имя: $name\n";
}

if(!empty($_POST['phone'])){
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $mes.= "<p>Телефон: $phone</p>";
}

if(!empty($_POST['type'])){
    $type = $_POST['type'];
    $mes.= "<p>Отправлено из формы: $type</p>";
}

if($_POST['type']=='Калькулятор'){
    if(!empty($_POST['cel'])) {
        $cel = $_POST['cel'];
        $mes.= "<p>Цель поездки: $cel</p>";
        $crmMes = "Цель поездки: $cel\n";
    }
    if(!empty($_POST['prevViza'])) {
        $prevViza = $_POST['prevViza'];
        $mes.= "<p>Открывали ли ранее визы: $prevViza</p>";
        $crmMes .= "Открывали ли ранее визы: $prevViza\n";
    }
    if(!empty($_POST["peopleCount"])) {
        $peopleCount = $_POST["peopleCount"];
        $mes.= "<p>Сколько человек подает на визу: $peopleCount</p>";
        $crmMes .= "Сколько человек подает на визу: $peopleCount\n";
    }
    if(!empty($_POST["quickly"])) {
        $quickly = $_POST["quickly"];
        $mes.= "<p>Как срочно нужна виза: $quickly</p>";
        $crmMes .= "Как срочно нужна виза: $quickly\n";
    }
    if(!empty($_POST["vizaType"])) {
        $vizaType = $_POST["vizaType"];
        $mes.= "<p>Тип визы: $vizaType</p>";
        $crmMes .= "Тип визы: $vizaType\n";
    }
}

    // getviza2018@gmail.com 
    $to = "dev@deltaplan.by, deltastream.dev@gmail.com, deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com,contact@greenvisa.by";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/vsevizy') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/vsevizy\r\n";
    $headers .= "Bcc: $to\r\n";


    if (mail($to, "Заявка c Getprice.by/vsevizy", "$mes", "$headers")) {
        include 'leads.php';
        sms($_POST['phone'], '375293611334');
        echo ".";
    }


function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/vsevizy/\nТелефон: $phone",
            'sender'    => 'DeltaPlanBY'
        ),
    );

    $rawData = json_encode($package);
    $ch = curl_init();

//задаем параметры CURL
    curl_setopt_array($ch, array(
        CURLOPT_URL            => $url,
        CURLOPT_FAILONERROR    => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_TIMEOUT        => $timeout,
        CURLOPT_CONNECTTIMEOUT => 0,
        CURLOPT_POST           => 1,
        CURLOPT_POSTFIELDS     => array(
            'r'        => 'api/' . $func,
            'user'     => 'deltaplanirovanie@gmail.com',
            'apikey'   => '0UmzxrSo9x',
            'messages' => $rawData)
    ));

    $result = curl_exec($ch);

    if ($result) {
        $__BOM = pack('CCC', 239, 187, 191);
        while (0 === strpos($result, $__BOM)) $result = substr($result, 3);
        $result = json_decode($result);
    } else {
        echo 'Ошибка доступа к сервису !';
    }

    curl_close($ch);
}

exit;
?>