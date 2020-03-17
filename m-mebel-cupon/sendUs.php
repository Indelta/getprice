<?php

    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $review = isset($_POST['review']) ? $_POST['review'] : "";

    $mes = "<p>Номер телефона: $phone</p>";
    $mes .= "<p>Текст отзыва: $review</p>";

    $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Отзыв с Getprice.by/mebel-cupon') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/mebel-cupon\r\n";

    mail("$to", "$sub", "$mes", "$headers");

?>