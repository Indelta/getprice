<?php
    $to = "deltaplan.dev@gmail.com";
    $mes = "Данные с сайта без лимита";

    $sub = '=?utf-8?B?' . base64_encode("Test from LEADS_QUEUE") . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: LEADS_QUEUE\r\n";

    if(mail("$to", "$sub", "$mes", "$headers")) {
        echo 'Отправляем письмо и данные в таблицу сайта без лимита';
    }
    else {
        echo 'Ошибка! Письмо не отправлено с сайта без лимита';
    }  

?>