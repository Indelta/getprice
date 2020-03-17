<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/555potolki/";

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
if(!empty($_POST['square'])) {
    $square = $_POST['square'];
    $mes.= "<p>Площадь: $square</p>";
}
if($_POST['type']=='Калькулятор'){

    if(!empty($_POST['material'])) {
        $material = $_POST['material'];
        $mes.= "<p>Материал натяжного потолка: $material</p>";
    }
    if(!empty($_POST['vid'])) {
        $vid = $_POST['vid'];
        $mes .= "<p>Вид натяжного потолка: $vid</p>";
    }
    if(!empty($_POST['square'])) {
        $square = $_POST['square'];
        $mes.= "<p>Площадь: $square</p>";
    }
    if(!empty($_POST['angle-count'])) {
        $angle_count = $_POST['angle-count'];
        $mes.= "<p>Количество углов: $angle_count</p>";
    }
    if(!empty($_POST['svet'])) {
        $svet = $_POST['svet'];
        $mes .= "<p>Освещение: $svet</p>";
    }
    if(!empty($_POST['dop-trubi'])) {
        $trubi = $_POST['dop-trubi'];
        $mes .= "<p>Трубы: $trubi</p>";
    }
    if(!empty($_POST['dop-vytazhki'])) {
        $vytazhki = $_POST['dop-vytazhki'];
        $mes .= "<p>Вытяжки: $vytazhki</p>";
    }
    if(!empty($_POST['dop-karniz'])) {
        $karniz = $_POST['dop-karniz'];
        $mes .= "<p>Встроенный каниз: $karniz</p>";
    }
    if(!empty($_POST['dop-potolok'])) {
        $potolok = $_POST['dop-potolok'];
        $mes .= "<p>Многоуровневый потолок: $potolok</p>";
    }

}

if($_POST['type']=='Получить промокод') {
    if(!empty($_POST['promokey'])) {
        $promokey = $_POST['promokey'];
        $mes .= "<p>Промокод: $promokey</p>";
    }
}

//behome16@gmail.com
    $to = "dev@deltaplan.by, deltastream.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, behome16@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/555potolki') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Getprice.by/555potolki\r\n";


    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "$sub", "$mes", "$headers")) {
            include 'leads.php';
            //375336746682
            sms($_POST['phone'], '375336747231');
            
            if($_POST['type']=='Получить промокод') {
                sms_promo($_POST['promokey'], $_POST['phone']);
                
            }
            echo ".";
        }
    }
function sms_promo($promo, $number) {
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Ваш промокод: $promo. В ближайшее время с вами свяжется наш специалист для консультации по условиям акции.",
            'sender'    => 'GetPrice.by'
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
function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/555potolki\nТелефон: $phone",
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