<?php
error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');

    $mes = "";
    $crm_mes = "";

    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $mes.= "<p>Имя: $name</p>";
        $crm_mes .= "Имя: $name\n\r";
    }

    if(!empty($_POST['phone'])){
        $phone = $_POST['phone'];
        $phone = preg_replace("/[^0-9]/", '', $phone);
        $mes.="<p>Телефон: $phone</p>";
    }
    if(!empty($_POST['email'])) {
        $email = $_POST['email'];
        $mes .= "<p>E-mail: $email</p>";
        $crm_mes .= "E-mail: $email\n\r";
    }
    if(!empty($_POST['metro'])) {
        $metro = $_POST['metro'];
        $mes .= "<p>Ближайший салон: $metro</p>";
        $crm_mes .= "Ближайший салон: $metro\n\r";
    }
    if(!empty($_POST['style'])) {
        $style = $_POST['style'];
        $mes .= "<p>Стиль кухни: $style</p>";
        $crm_mes .= "Стиль кухни: $style\n\r";
    }
    if(!empty($_POST['razmer'])) {
        $size = $_POST['razmer'];
        $mes .= "<p>Размер кухни: $size</p>";
        $crm_mes .= "Размер кухни: $size\n\r";
    }
    if(!empty($_POST['length'])) {
        $length = $_POST['length'];
        $mes .= "<p>Длина кухни: $length</p>";
        $crm_mes .= "Длина кухни: $length\n\r";
    }
    if(!empty($_POST['width'])) {
        $width = $_POST['width'];
        $mes .= "<p>Ширина кухни: $width</p>";
        $crm_mes .= "Ширина кухни: $width\n\r";
    }
    if(!empty($_POST['forma'])) {
        $forma = $_POST['forma'];
        $mes .= "<p>Форма кухни: $forma</p>";
        $crm_mes .= "Форма кухни: $forma\n\r";
    }
    if(!empty($_POST['type'])){
        $type = $_POST['type'];
        $mes.="<p>Отправлено из формы: $type</p>";
    }

    //proekt@kuhniduet.ru
    $to = "deltaplanirovanie@gmail.com, dev@deltaplan.by, deltaplan.dev@gmail.com, manager.deltaplan@gmail.com, proekt@kuhniduet.ru";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с getmeprice.ru/kuhni') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getmeprice.ru/kuhni\r\n";
    $backurl = "http://www.getmeprice.ru/kuhni/";


//    if (mail("$to", "Заявка с Getprice.by/kuhnimodul", "$mes", "$headers")) {
    if (mail("$to", $sub, "$mes", "$headers")) {
        //include 'leads.php';
//        sms($_POST['phone'], '79214483443');
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
            'message'   => "Заявка getprice.by/kuhnimodul\nТелефон: $phone",
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