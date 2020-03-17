<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/vodonagrev/";

$mes = "";
$crm_mes = "";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes.= "<p>Имя: $name</p>";
    $crm_mes .= "Имя: $name\n";
}

if(!empty($_POST['phone'])){
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $mes.= "<p>Телефон: $phone</p>";
}

if(!empty($_POST['type'])){
    $type = $_POST['type'];
    $mes.= "<p>Отправлено из формы: $type</p>";
}

if($_POST['type'] == 'Калькулятор') {
    if(!empty($_POST['place'])) {
        $place = $_POST['place'];
        $mes .= "<p>Куда установить водонагреватель: $place</p>";
        $crm_mes .= "Куда установить водонагреватель: $place\n";
    }
    
    if(!empty($_POST['vodozabor-dont-know'])) {
        $vodozabor = $_POST['vodozabor-dont-know'];
        $mes .= "<p>Количество точек водозабора: $vodozabor</p>";
        $crm_mes .= "Количество точек водозабора: $vodozabor\n";
    }
    else {
        if(!empty($_POST['vodozabor'])) {
            $vodozabor = $_POST['vodozabor'];
            $mes .= "<p>Количество точек водозабора: $vodozabor</p>";
            $crm_mes .= "Количество точек водозабора: $vodozabor\n";
        }
    }
    if(!empty($_POST['people-count'])) {
        $people_count = $_POST['people-count'];
        $mes .= "<p>Количество человек: $people_count</p>";
        $crm_mes .= "Количество человек: $people_count\n";
    }
    
    if(!empty($_POST['amount-none'])) {
        $mes .= "<p>Обьем бака: не знаю</p>";
        $crm_mes .= "Обьем бака: не знаю\n";
    }
    else {
        if(!empty($_POST['amount-min'])) {
            $amount_min = $_POST['amount-min'];
            $mes .= "<p>Минимальный объем бака: $amount_min</p>";
            $crm_mes .= "Минимальный объем бака: $amount_min\n";
        }
        if(!empty($_POST['amount-max'])) {
            $amount_max = $_POST['amount-max'];
            $mes .= "<p>Максимальный объем бака: $amount_max</p>";
            $crm_mes .= "Максимальный объем бака: $amount_max\n";
        }
    }
    
    if(!empty($_POST['installType'])) {
        $install_type = $_POST['installType'];
        $mes .= "<p>Тип установки: $install_type</p>";
        $crm_mes .= "Тип установки: $install_type\n";
    }
    
    if(!empty($_POST['indication'])) {
        $indication = $_POST['indication'];
        $mes .= "<p>Индикация нагрева: $indication</p>";
        $crm_mes .= "Индикация нагрева: $indication\n";
    }
    if(!empty($_POST['podvodka'])) {
        $podvodka = $_POST['podvodka'];
        $mes .= "<p>Подводка: $podvodka</p>";
        $crm_mes .= "Подводка: $podvodka\n";
    }
    if(!empty($_POST['compact'])) {
        $compact = $_POST['compact'];
        $mes .= "<p>Компактные размеры: $compact</p>";
        $crm_mes .= "Компактные размеры: $compact\n";
    }
    if(!empty($_POST['zaschyta'])) {
        $zaschyta = $_POST['zaschyta'];
        $mes .= "<p>Защита от перегрева: $zaschyta</p>";
        $crm_mes .= "Защита от перегрева: $zaschyta\n";
    }
}


//getvodonagrev@gmail.com - включить перед запуском
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, getvodonagrev@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/vodonagrev') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/vodonagrev\r\n";


    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "$sub", "$mes", "$headers")) {
            include 'leads.php';
            //375292642424
            sms($_POST['phone'], '375293357092');
            // include './leads.php';
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