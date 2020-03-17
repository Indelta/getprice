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
$backurl = "http://www.getprice.by/nashi-okna/";

$housePlace = $_POST['housePlace'];
$windowPlace  = stripslashes($_POST['WwindowPlace']);
if(!empty($_POST['WwindowPlace'])) {
    foreach($_POST['WwindowPlace'] as $check) {
        $windowPlace .= $check .', ';
    }
}
$homeConstruction = $_POST['homeConstruction'];
$uglFlat = $_POST['uglFlat'];
$windowView  = stripslashes($_POST['WwindowView']);
if(!empty($_POST['WwindowView'])) {
    foreach($_POST['WwindowView'] as $check) {
        $windowView .= $check .', ';
    }
}
$flatEtazh = preg_replace("/[^0-9]/", '',$_POST['flatEtazh']);
$phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
$forma = $_POST['type'];
$window1 = $_POST['window1'];
$window2 = $_POST['window2'];
$window3 = $_POST['window3'];
$window4 = $_POST['window4'];
$windowProfil = stripslashes($_POST['WwindowProfil']);
if(!empty($_POST['WwindowProfil'])) {
    foreach($_POST['WwindowProfil'] as $check) {
        $windowProfil .= $check .', ';
    }
}
$windowDopkomplekt = stripslashes($_POST['WwindowDopkomplekt']);
if(!empty($_POST['WwindowDopkomplekt'])) {
    foreach($_POST['WwindowDopkomplekt'] as $check) {
        $windowDopkomplekt .= $check .', ';
    }
}
$windowPodarki = stripslashes($_POST['WwindowPodarki']);
if(!empty($_POST['WwindowPodarki'])) {
    foreach($_POST['WwindowPodarki'] as $check) {
        $windowPodarki .= $check .', ';
    }
}
$name  = $_POST['name'];


    $mes = "
        <p>Имя: $name</p>
        <p>Телефон: $phone</p>
        <p>Где будут ставить окна: $housePlace</p>
        <p>В каком помещении будут ставить окна: $windowPlace</p>
        <p>Тип дома: $homeConstruction</p>
        <p>Тип квартиры: $uglFlat</p>
        <p>Окна выходят: $windowView</p>
        <p>Окна на этаже: $flatEtazh</p>
        <p>Одностворчатое окно с одной поворотно-откидной створкой: $window1</p>
        <p>Двустворчатое окно с одной поворотно-откидной створкой: $window2</p>
        <p>Трехстворчатое окно с одной поворотно-откидной створкой: $window3</p>
        <p>Балконная дверь двустворчатая с одним открыванием: $window4</p>
        <p>Выбраны профили: $windowProfil</p>
        <p>Дополнительная комплектация: $windowDopkomplekt</p>
        <p>Подарки от фабрики: $windowPodarki</p>
        <p>Отправлено из формы : $forma</p>
        
    ";

    //deltaplanirovanie@gmail.com, deltaplander@gmail.com, getprice.shkafy@gmail.com, getprice.shkafy@gmail.com
    $to = "dev@deltaplan.by, deltaplanirovanie@gmail.com, nashiokna2017@gmail.com"; //
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/nashi-okna') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/nashi-okna\r\n";


    if (mail("$to", "Заявка c Getprice.by/nashi-okna", "$mes", "$headers")) {
        sms($_POST['phone'], '375333829961');
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
            'message'   => "Заявка getprice.by/nashi-okna/\nТелефон: $phone",
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

// Выводим сообщение пользователю
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
<p></p>";

print ';
exit;
?>