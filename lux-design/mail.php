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

$crm_mes = "";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes="<p>Имя: $name</p>";
    $crm_mes .= "Имя: $name\n";
}
if(!empty($_POST['phone'])){
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $mes.="<p>Телефон: $phone</p>";
}

if(!empty($_POST['pomType'])){
    $tip = $_POST['pomType'];
    $mes.="<p>Тип помещения $tip</p>";
    $crm_mes .= "Тип помещения: $tip\n";
}

if(!empty($_POST['material'])){
    $material = $_POST['material'];
    $mes.="<p>Тип потолка: $material</p>";
    $crm_mes .= "тип потолка: $material\n";
}

if(!empty($_POST['square']) && $_POST['square']!=0){
    $square = $_POST['square'];
    $mes.="<p>Площадь помещения: $square  м2</p>";
    $crm_mes .= "площадь помещения: $square м2\n";
}

if(!empty($_POST['ugli'])){
    $ugli = $_POST['ugli'];
    $mes.="<p>Количество углов: $ugli</p>";
    $crm_mes .= "Количество углов: $ugli\n";
}

if(!empty($_POST['lustra']) && $_POST['lustra']!=0){
    $lustra = $_POST['lustra'];
    $mes.="<p>Количество люстр: $lustra</p>";
    $crm_mes .= "Количество лючтр: $lustra\n";
}

if(!empty($_POST['svetilniki']) && $_POST['svetilniki']!=0){
    $svetilniki = $_POST['svetilniki'];
    $mes.="<p>Количество встроенных точек освещения: $svetilniki</p>";
    $crm_mes .= "Количество встроенных точек освещения: $svetilniki\n";
}

if(!empty($_POST['truba']) && $_POST['truba']!=0){
    $truba = $_POST['truba'];
    $mes.="<p>Количество труб: $truba</p>";
    $crm_mes .= "Количество труб: $truba;";
}

if(!empty($_POST['vytyazhka']) && $_POST['vytyazhka']!=0){
    $vytyazhka = $_POST['vytyazhka'];
    $mes.="<p>Вытяжка: $vytyazhka</p>";
    $crm_mes .= "Вытяжка: $vytyazhka\n";
}

if(!empty($_POST['karniz']) && $_POST['karniz']!=0){
    $karniz = $_POST['karniz'];
    $mes.="<p>Карниз: $karniz</p>";
    $crm_mes .= "Карниз: $karniz\n";
}

if(!empty($_POST['mnogopotolok'])){
    $mnogopotolok = $_POST['mnogopotolok'];
    $mes.="<p>Количество уровней потолка: $mnogopotolok</p>";
    $crm_mes .= "Количество уровней потолка: $mnogopotolok\n";
}

$podarki  = stripslashes($_POST['podarki']);
if(!empty($_POST['podarki'])) {
    foreach($_POST['podarki'] as $check) {
        $podarki .= $check .', ';
    }
    $mes.="<p>Скидки и подарки: $podarki</p>";
    $crm_mes .= "Скидки и подарки: $podarki\n";
}

if(!empty($_POST['type'])){
    $forma = $_POST['type'];
    $mes.="<p>Отправлено из формы: $forma</p>";
}


    //deltaplanirovanie@gmail.com,  potolokdelta@gmail.com
    $to = "dev@deltaplan.by, deltaplanirovanie@gmail.com, deltaplan.dev@gmail.com, manager.deltaplan@gmail.com, potolokdelta@gmail.com"; //
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/lux-design') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/lux-design\r\n";

    if ($_POST['phone'] == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "Заявка c Getprice.by/lux-design", "$mes", "$headers")) {
            sms($_POST['phone'], '375293047536');
            include 'leads.php';
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
            'message'   => "Заявка getprice.by/lux-design\nТелефон: $phone",
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

?>