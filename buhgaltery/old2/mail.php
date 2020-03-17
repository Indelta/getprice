<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');

$mes = "";
$crm_mes = "";

$name = "";
$phone = "";
$type = "";
$komments = "";
$sfera = "";
$orgforma = "";
$nalog = "";
$otchetnost = "";
$people = "";
$documentsnum = "";

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
    $komments.= "<p>Отправлено из формы: $type</p>";
}

if($_POST['type']=='Калькулятор'){

    if(!empty($_POST['sfera'])) {
        $sfera = $_POST['sfera'];
        $mes.= "<p>Сфера деятельности: $sfera</p>";
        $crm_mes .= "Сфера деятельности: $sfera\n";
    }

    if(!empty($_POST['orgforma'])) {
        $orgforma = $_POST['orgforma'];
        $mes.= "<p>Организационно-правовая форма: $orgforma</p>";
        $crm_mes .= "Организационно-правовая форма: $orgForma\n";
    }

    if(!empty($_POST['nalog'])) {
        $nalog = $_POST['nalog'];
        $mes.= "<p>Система налогообложения: $nalog</p>";
        $crm_mes .= "Система налогообложения: $nalog\n";
    }

    if(!empty($_POST['otchetnost'])) {
        $otchetnost = $_POST['otchetnost'];
        $mes.= "<p>Дополнительная отчетность: $otchetnost</p>";
        $crm_mes .= "Дополнительная отчетность: $otchetnost\n";
    }

    if(!empty($_POST['people'])) {
        $people = $_POST['people'];
        $mes.= "<p>Количество сотрудников: $people</p>";
        $crm_mes .= "Количество сотрудников: $people\n";
    }
}

//Info@ajoure.by
    $to = "dev@deltaplan.by, deltastream.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, Info@ajoure.by";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/buhgaltery') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/buhgaltery\r\n";


    if (mail("$to", "$sub", "$mes", "$headers")) {
        include 'leads.php';
        //sms($phone,'375445584321');
        echo ".";
    }
    require 'AMO/prepare.php';
    require 'AMO/auth.php';
    //require 'AMO/account_current.php';
    //require 'AMO/fields_info.php';
    //require 'AMO/contacts_list.php';
    require 'AMO/leads_add.php';
    require 'AMO/contact_add.php';

function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка Getprice.by/buhgaltery\nТелефон: $phone",
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