<?php
error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');

    $mes = "";
    $crm_mes = "";
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $mes.= "<p>Имя: $name</p>";
        $crm_mes .= "Имя: $name\r\n";
    }

    if(!empty($_POST['phone'])){
        $phone = $_POST['phone'];
        $phone = preg_replace("/[^0-9]/", '', $phone);
        $mes.="<p>Телефон: $phone</p>";
    }

    if(!empty($_POST['usluga'])){
        $usluga = $_POST['usluga'];
        $mes.="<p>Выбранная услуга: $usluga</p>";
        $crm_mes .= "Выбранная услуга: $usluga\r\n";
    }

    if(!empty($_POST['type'])){
        $type = $_POST['type'];
        $mes.="<p>Отправлено из формы: $type</p>";
    }

    //deltaplanirovanie@gmail.com, neonelektro2017@gmail.com
    $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, dekopam@mail.ru";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с getprice.by/elektro') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/elektro";
    $backurl = "http://getprice.by/elektro";

    if (mail("$to", "$sub", "$mes", "$headers")) {
        include 'lead.php';
        sms($_POST['phone'], '375447362151');
        echo "1";
    }


function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка с getprice.by/elektro\nТелефон: $phone",
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