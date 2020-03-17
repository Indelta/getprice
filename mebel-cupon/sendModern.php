<?php

    require 'amo-int/Amo.php';

    $name = "Новый лид";
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $where = isset($_POST['where']) ? $_POST['where'] : "";
    $type = isset($_POST['type']) ? $_POST['type'] : "";
    $design = isset($_POST['design']) ? $_POST['design'] : "";
    $srok = isset($_POST['srok']) ? $_POST['srok'] : "";
    $formType = isset($_POST['formType']) ? $_POST['formType'] : "";

    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : "";
    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : "";
    $utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : "";
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : "";
    $utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : "";

    $amo = new AMO();
    if ($amo->auth("t.gurov@mail.ru", "4c8f8ddfbeb17a7fda4a2541203660da", "modernhouse")) {
        $amoMes = "Куда ставить шкаф-купе: $where \n\r";
        $amoMes .= "Тип шкафа: $type \n\r";
        $amoMes .= "Внешняя отделка: $design \n\r";

        $leads = array(
            array(
                'name'=>'Заявка с сайта getprice.by',
                'tags' => 'getprice.by/shkaf-kupe', 
                'custom_fields'=>array(
                    array(
                        'id' => 302911, // id заявка с сайта
                        'values' => array(
                            array('value' => $amoMes)
                        )
                    ),
                    array(
                        'id'=>344805, 
                        'values' => array(
                            array('value' => 870575)
                        )
                    )
                )
            ),
        );
        $contact = array(
            'name'=>$name,
            'tags'=>'getprice.by/shkaf-kupe',
			'custom_fields'=>array(
                array (
                    'id' => 245043,
                    'values' => array (
                        array (
                            'value' => $phone,
                            'enum' => "WORK"
                        )
                    )
                )    
            ),
        );

        $amo->add_leads($leads);
        $amo->add_contact($contact);
        $amo->log_out();
    }
    else throw new Exception("Error AMO authentication");

    //Отправляем заявку в Google Sheets

    $url = "https://docs.google.com/forms/d/e/1FAIpQLSf8XYw9OE0WqU36d-NrAU3i6ZvrHDP85Tu10_wazg5wthVhFg/formResponse";

    //Формирование массива в гугл форму, добавление параметров по id полей

    $post_data = array (
        'entry.1774269992' => date("d.m.Y"),
        'entry.3632969' => date("G:i"),
        'entry.1632915873' => $phone,
        'entry.760746198' => $name,
        'entry.632843955' => $where,
        'entry.1252547784' => $type,
        'entry.1622871799' => $design,
        'entry.1273169976' => $formType,
        'entry.18593326' => $utm_term,
        'entry.478257641' => $utm_source,
        'entry.570179335' => $utm_medium,
        'entry.1093807390' => $utm_campaign,
        'entry.648643971' => $utm_content
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    $output = curl_exec($ch);
    curl_close($ch);


    // отправляем заявку в Deltaplan CRM

    $url_crm = 'http://crm.deltaplan.by/getlead/';
    $crm_mes = "
        Имя: $name \n
        Куда: $where \n
        Тип шкафа: $type \n
        Внешняя отделка: $design \n
    ";
    $params = array(
        'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
        'id_user' => '31', // id клиента из CRM у аккаунта
        'utm_medium' => $utm_medium,
        'utm_source' => $utm_source,
        'utm_compaign' => $utm_campaign,
        'utm_term' => $utm_term,
        'utm_content' => $utm_content,
        'message' => $crm_mes,
        'form_name' => $formType, // не должна содержать сочетание символов "phone"
        'phone' => $phone, //+375299465533
    );

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url_crm);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    $output = curl_exec($curl);
    curl_close($curl);


    // отправка письма на почту
    $mes = "<p>Телефон: $phone</p>";
    $mes .= "<p>Куда ставить шкаф: $where</p>";
    $mes .= "<p>Тип шкафа: $type</p>";
    $mes .= "<p>Внешний вид: $design</p>";
    $mes .= "<p>Желательный срок изготовления: $srok</p>";
    $mes .= "<p>Отправлено из формы: $formType</p>";
    $mes .= "<p>Modern House</p>";

    $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com, getprice.shkafy@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/mebel-cupon') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/mebel-cupon\r\n";

    mail("$to", "$sub", "$mes", "$headers");
    sms($_POST['phone'], '375447077474');


    function sms($phone, $number) {
        $url = "http://cp.websms.by";
        $timeout = 5;
        $func = 'msg_send_bulk';

        $package = array(
            array(
                'recipient' => $number,
                'message'   => "Заявка getprice.by/mebel-cupon/\nТелефон: $phone",
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