<?php

    require 'amo-int/Amo.php';

    date_default_timezone_set('Europe/Moscow');

    function get_size () {
        $width = isset($_POST['width']) ? preg_replace("/[^0-9]/", "", $_POST['width']) : 0;
        $deep = isset($_POST['deep']) ? preg_replace("/[^0-9]/", "", $_POST['deep']) : 0;
        $height = isset($_POST['height']) ? preg_replace("/[^0-9]/", "", $_POST['height']) : 0;
        return "$width x $height x $deep";
    }

    $name = isset($_POST['name']) ? $_POST['name'] : "Аноним";
    $phone = isset($_POST['phone']) ? preg_replace("/[^0-9]/", '', $_POST['phone']) : 0;
    $place = isset($_POST['shkafPlace']) ? $_POST['shkafPlace'] : "не определено";
    $type = isset($_POST['shkafType']) ? $_POST['shkafType'] : "Не определено";
    $forma = isset($_POST['type']) ? $_POST['type'] : "Не определено";
    $width = isset($_POST['width']) ? preg_replace("/[^0-9]/", '', $_POST['width']) : 0;
    $deep = isset($_POST['deep']) ? preg_replace("/[^0-9]/", '', $_POST['deep']) : 0;
    $height = isset($_POST['height']) ? preg_replace("/[^0-9]/", '',$_POST['height']) : 0;
    $size = get_size();
    $otdely  = isset($_POST['otdely']) ? $_POST['otdely'] : "Не определено";
    $cover  = isset($_POST['ZshkafCover']) ? $_POST['ZshkafCover'] : "";
    $promokey = isset($_POST['promokey']) ? $_POST['promokey'] : "";
    $karta = isset($_POST['karta']) ? $_POST['karta'] : "";
    $forma = isset($_POST['type']) ? $_POST['type'] : "Не определено";
    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : "";
    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : "";
    $utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : "";
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : "";
    $utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : "";

    // Отправка заявки в AMO CRM

    $modernAmo = new AMO();
    if ($modernAmo->auth("t.gurov@mail.ru", "4c8f8ddfbeb17a7fda4a2541203660da", "modernhouse")) {
        $amoMes = "Куда ставить шкаф-купе: $place \n\r";
        $amoMes .= "Тип шкафа: $type \n\r";
        $amoMes .= "Размер шкафа: $size \n\r";
        $amoMes .= "Количество отделов в шкафу: $otdely \n\r";
        $amoMes .= "Внешняя отделка: $cover \n\r";

        $leads = array(
            array(
                'name'=>'Заявка с сайта getprice.by',
                'tags' => 'getprice.by/shkaf-kupe',
                'responsible_user_id' => 1352320, 
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

        $modernAmo->add_leads($leads);
        $modernAmo->add_contact($contact);
        $modernAmo->log_out();
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
        'entry.632843955' => $place,
        'entry.1252547784' => $type,
        'entry.285145855' => $width,
        'entry.392566444' => $deep,
        'entry.1156651970' => $height,
        'entry.1622871799' => $cover,
        'entry.1273169976' => $forma,
        'entry.1608802520' => $otdely,
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
        Куда: $place \n
        Тип шкафа: $type \n
        Размер шкафа: (ВхШхГ) $height x $width x $deep \n
        Количество отделов: $otdely \n
        Внешняя отделка: $cover \n
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
        'form_name' => $forma, // не должна содержать сочетание символов "phone"
        'phone' => $phone, //+375299465533
    );

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url_crm);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    $output = curl_exec($curl);
    curl_close($curl);
?>