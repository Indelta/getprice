<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/kasko/";

$mes = "";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes.= "<p>Имя: $name</p>";
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

    if(!empty($_POST['marka'])) {
        $marka = $_POST['marka'];
        $mes.= "<p>Марка автомобиля: $marka</p>";
    }
    if(!empty($_POST['model'])) {
        $model = $_POST['model'];
        $mes.= "<p>Модель автомобиля: $model</p>";
    }
    if(!empty($_POST['year'])) {
        $year = $_POST['year'];
        $mes.= "<p>Год выпуска: $year</p>";
    }
    if(!empty($_POST['stazh'])) {
        $stazh = $_POST['stazh'];
        $mes.= "<p>Стаж вождения: $stazh</p>";
    }
    if(!empty($_POST['region'])) {
        $region = $_POST['region'];
        $mes.= "<p>Регион: $region</p>";
    }
    if(!empty($_POST['linkmethod'])) {
        $linkmethod = $_POST['linkmethod'];
        $mes.= "<p>Способ связи: $linkmethod</p>";
    }
}

//1504090@mail.ru
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, 1504090@mail.ru";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/kasko') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/kasko\r\n";


    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "$sub", "$mes", "$headers")) {
            include 'leads.php';
            sms($_POST['phone'], '375291348251');
            echo ".";
        }
    }

function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/kasko/\nТелефон: $phone",
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