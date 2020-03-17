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
$backurl = "http://www.getprice.by/kuhni/";

$name = $_POST['name'];
$phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
$forma = $_POST['type'];
$tip = $_POST['kuhType'];
$razmer = preg_replace("/[^0-9]/", '',$_POST['kuhSize']);
$style = $_POST['kuhStyle'];
$price = $_POST['price'];
$easyeay = $_POST['easyeay'];
$oplata = $_POST['oplata'];
$tehnika  = stripslashes($_POST['vstrTehnika']);

    $mes = "
        <p>Имя: $name</p>
        <p>Имя: $name</p>
        <p>Телефон: $phone</p>
        <p>Тип кухни: $tip</p>
        <p>Размер помещения: $razmer</p>
        <p>Стиль кухни: $style</p>
        <p>Бюджет: $price</p>
        <p>Способ оплаты: $oplata</p>
        <p>Способ связи: $easyeay</p>
        <p>Отправлено из формы : $forma</p>
    ";

    //
    $to = "dev@deltaplan.by, deltaplanirovanie@gmail.com, deltaplan.dev@gmail.com"; //
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/kuhni') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/kuhni\r\n";

    if ($phone == '') {
        echo "<script>document.location='index.php?error=1';</script>";
    } else {
        if (mail("$to", $sub, "$mes", "$headers")) {
            include 'leads.php';
//            echo ".";
        }
    }

//function sms($phone, $number)
//{
//    $url = "http://cp.websms.by";
//    $timeout = 5;
//    $func = 'msg_send_bulk';
//
//    $package = array(
//        array(
//            'recipient' => $number,
//            'message'   => "Заявка getprice.by/kuhni\nТелефон: $phone",
//            'sender'    => 'DeltaPlanBY'
//        ),
//    );
//
//    $rawData = json_encode($package);
//    $ch = curl_init();
//
////задаем параметры CURL
//    curl_setopt_array($ch, array(
//        CURLOPT_URL            => $url,
//        CURLOPT_FAILONERROR    => 1,
//        CURLOPT_RETURNTRANSFER => 1,
//        CURLOPT_TIMEOUT        => $timeout,
//        CURLOPT_CONNECTTIMEOUT => 0,
//        CURLOPT_POST           => 1,
//        CURLOPT_POSTFIELDS     => array(
//            'r'        => 'api/' . $func,
//            'user'     => 'deltaplanirovanie@gmail.com',
//            'apikey'   => '0UmzxrSo9x',
//            'messages' => $rawData)
//    ));
//
//    $result = curl_exec($ch);
//
//    if ($result) {
//        $__BOM = pack('CCC', 239, 187, 191);
//        while (0 === strpos($result, $__BOM)) $result = substr($result, 3);
//        $result = json_decode($result);
//    } else {
//        echo 'Ошибка доступа к сервису !';
//    }
//
//    curl_close($ch);
//}

//CRM
error_reporting(-1);
ini_set("display_errors", 1);
$root=__DIR__.DIRECTORY_SEPARATOR;
require $root.'/AMO/prepare.php'; #Здесь будут производиться подготовительные действия, объявления функций и т.д.
require $root.'/AMO/auth.php'; #Здесь будет происходить авторизация пользователя
require $root.'/AMO/account_current.php'; #Здесь мы будем получать информацию об аккаунте
require $root.'/AMO/fields_info.php'; #Получим информацию о полях
require $root.'/AMO/contacts_list.php'; #Получим информацию о контактах
require $root.'/AMO/leads_add.php'; #Здесь будет происходить добавление сделки
require $root.'/AMO/contact_add.php'; #Здесь будет происходить добавление контакта
?>