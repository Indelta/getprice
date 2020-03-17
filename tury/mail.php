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
$backurl = "http://www.getprice.by/tury/";

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

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $mes.= "<p>E-mail: $email</p>";
}

if(!empty($_POST['komments'])){
    $komments = $_POST['komments'];
    $mes.= "<p>Комментарии: $komments</p>";
}

if($_POST['type']=='Калькулятор'){
    $woman = $_POST['woman'];
    $man = $_POST['man'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];

    $mes.= "<p>Женщин: $woman, мужчин: $man, детей: $child, инфантов: $infant </p>";

    $predp  = stripslashes($_POST['predp']);
    if(!empty($_POST['predp'])) {
        foreach($_POST['predp'] as $check) {
            $predp .= $check .', ';
        }
    }
    $mes.= "<p>Предпочтения по отдыху: $predp</p>";

    $country = $_POST['country'];
    $mes.= "<p>Страна: $country</p>";

    $days = $_POST['days'];
    $mes.= "<p>Количество дней: $days</p>";

    $from = $_POST['from'];
    $to = $_POST['to'];
    $mes.= "<p>Вылет с: $from по $to</p>";

    $morechoose  = stripslashes($_POST['morechoose']);
    if(!empty($_POST['morechoose'])) {
        foreach($_POST['morechoose'] as $check) {
            $morechoose .= $check .', ';
        }
    }
    $mes.= "<p>Дополнительно выбрано: $morechoose</p>";

    $stars = $_POST['stars'];
    $mes.= "<p>Количество звёзд отеля (min): $stars</p>";

    $rooms = $_POST['rooms'];
    $mes.= "<p>Количество номеров: $rooms</p>";

    $meal  = stripslashes($_POST['meal']);
    if(!empty($_POST['meal'])) {
        foreach($_POST['meal'] as $check) {
            $meal .= $check .', ';
        }
    }
    $mes.= "<p>Питание: $meal</p>";

    $budget = $_POST['budget'];
    $valuta = $_POST['valuta'];
    $mes.= "<p>Бюджет: $budget $valuta</p>";

    if(!empty($_POST['dontknowprice'])){
        $mes.= "<p>БЮДЖЕТ ПОКА НЕ УТОЧНИЛИ</p>";
    }
}

//turgetprice@gmail.com
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/tury') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/tury\r\n";


    if (mail("$to", "Заявка c Getprice.by/tury", "$mes", "$headers")) {
        include 'leads.php';
//        sms($_POST['phone'], '375296070837');
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
            'message'   => "Заявка getprice.by/tury/\nТелефон: $phone",
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