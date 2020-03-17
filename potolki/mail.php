<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/potolki/";

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
if(!empty($_POST['imageCount'])) {
    $imageCount = $_POST['imageCount'];
    $mes .= "<p>Номер картинки: $imageCount</p>";
}
if(!empty($_POST['square'])) {
    $square = $_POST['square'];
    $mes.= "<p>Площадь: $square</p>";
}
if($_POST['type']=='Калькулятор'){

    if(!empty($_POST['tip'])) {
        $tip = $_POST['tip'];
        $mes.= "<p>Вид натяжного потолка: $tip</p>";
    }
    if(!empty($_POST['rooms'])) {
        $rooms = $_POST['rooms'];
        $mes.= "<p>Количество комнат: $rooms</p>";
    }
    if(!empty($_POST['square'])) {
        $square = $_POST['square'];
        $mes.= "<p>Площадь: $square</p>";
    }
    if(!empty($_POST['svet'])) {
        $svet = $_POST['svet'];
        $mes.= "<p>Освещение: $svet</p>";
    }
    if(!empty($_POST['bonus'])) {
        $bonus = $_POST['bonus'];
        $mes.= "<p>Бонус: $bonus</p>";
    }
    if(!empty($_POST['sale'])) {
        $sale = $_POST['sale'];
        $mes .= "<p>Скидка: $sale BYN</p>";
    }
    if(!empty($_POST['linkmethod'])) {
        $linkmethod = $_POST['linkmethod'];
        $mes.= "<p>Способ связи: $linkmethod</p>";
    }
}

//marina.potolky24@gmail.com, lptkachev@gmail.com
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, marina.potolky24@gmail.com, lptkachev@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/potolki') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/potolki\r\n";


    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "$sub", "$mes", "$headers")) {
            include 'leads.php';
            //375292642424
            sms($_POST['phone'], '375292642424');
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
            'message'   => "Заявка getprice.by/potolki/\nТелефон: $phone",
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