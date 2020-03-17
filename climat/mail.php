<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/climat/";

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

    if(!empty($_POST['where'])) {
        $where = $_POST['where'];
        $mes.= "<p>Куда вы хотите установить кондиционер: $where</p>";
    }

    if(!empty($_POST['size'])) {
        $size = $_POST['size'];
        $mes.= "<p>Метраж помещения: $size</p>";
    }

    if(!empty($_POST['typecond'])) {
        $typecond = $_POST['typecond'];
        $mes.= "<p>Тип кондиционера: $typecond</p>";
    }

    if(!empty($_POST['price'])) {
        $price = $_POST['price'];
        $mes.= "<p>Бюджет: $price</p>";
    }

    $additional  = stripslashes($_POST['additional']);
    if(!empty($_POST['additional'])) {
        foreach($_POST['additional'] as $check) {
            $additional .= $check .', ';
        }
    }
    $mes.= "<p>Дополнительно: $additional</p>";

    if(!empty($_POST['model'])) {
        $model = $_POST['model'];
        $mes.= "<p>Бренд: $model</p>";
    }
}

//aqua@bestklimat.by bestklimat22@tut.by
    $to = "dev@deltaplan.by, deltastream.dev@gmail.com, deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, aqua@bestklimat.by, bestklimat22@tut.by";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/climat') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/climat\r\n";


    if (mail("$to", "$sub", "$mes", "$headers")) {
        include 'leads.php';
        //sms($_POST['phone'], '375‎293495881');
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
            'message'   => "Заявка getprice.by/climat/\nТелефон: $phone",
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