<?php

    require 'amo-int/Amo.php';

    function get_size () {
        $width = isset($_POST['width']) ? preg_replace("/[^0-9]/", "", $_POST['width']) : 0;
        $deep = isset($_POST['deep']) ? preg_replace("/[^0-9]/", "", $_POST['deep']) : 0;
        $height = isset($_POST['height']) ? preg_replace("/[^0-9]/", "", $_POST['height']) : 0;
        return "$width x $height x $deep";
    }

    $name = isset($_POST['name']) ? $_POST['name'] : "Аноним";
    $phone = isset($_POST['phone']) ? preg_replace("/[^0-9]/", "", $_POST['phone']) : 0;
    $place = isset($_POST['shkafPlace']) ? $_POST['shkafPlace'] : "Не определено";
    $type = isset($_POST['shkafType']) ? $_POST['shkafType'] : "Не определено";
    $otdely = isset($_POST['otdely']) ? $_POST['otdely'] : "Не определено";
    $cover = isset($_POST['ZshkafCover']) ? $_POST['ZshkafCover'] : "Не определено";
    $forma = isset($_POST['type']) ? $_POST['type'] : "Не определено";
    $size = get_size();
    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : "";
    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : "";
    $utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : "";
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : "";
    $utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : "";

    date_default_timezone_set('Europe/Moscow');

    // отправляем заявку в AMO CRM
    $shumAmo = new AMO();
    $typeId = 647286;
    $coverId = 1064917;
    switch ($type) {
        case 'Корпусный':
            $typeId = 1048901;
            break;
        case 'Встроенный':
            $typeId = 647286;
            break;
        case 'Угловой':
            $typeId = 1048903;
            break;
        default:
            $typeId = 647286;
    }

    switch ($cover) {
        case 'ламинированное ДСП, ЛДСП':
            $coverId = 1064917;
            break;
        case 'зеркала и стёкла':
            $coverId = 1064919;
            break;
        case 'пескоструйный рисунок на зеркалах':
            $coverId = 1064921;
            break;
        case 'фотопечать':
            $coverId = 1064923;
            break;
        case 'Ротанг или бамбук':
            $coverId = 1064925;
            break;
        case 'лакобель или лакомат':
            $coverId = 1064927;
            break;
        default: $coverId = 1064917;
    }

    if ($shumAmo->auth("shum-004@bk.ru", "3ebd6ba860208b087227fa696f071e93", "shumilov")) {
        $leads = array(
            array(
                'name'=>'Заявка с сайта getprice.by',
                'tags' => 'Deltaplan',
                'pipeline_id' => 2211367,
                'custom_fields'=>array(
                    array(
                        'id' => 251364, // размер шкафа
                        'values' => array(
                            array('value' => $size)
                        )
                    ),
                    array(
                        'id' => 280582, // тип шкафа
                        'values' => array(
                            array('value' => $typeId)
                        )
                    ),
                    array(
                        'id' => 476147, //внешний вид шкафа
                        'values' => array(
                            array('value' => $coverId)
                        )
                    ),
                    array(
                        'id' => 476151,
                        'values' => array(
                            array('value' => $place)
                        )
                    ),
                    array(
                        'id' => 476153,
                        'values' => array(
                            array('value' => $otdely)
                        )
                    ),
                    array(
                        'id'=>402608, // название сайта - Getprice.by
                        'values' => array(
                            array('value' => 1064913)
                        )
                    )
                )
            ),
        );

        $contact = array(
            'name' => $name,
            'tags' => "Дельтаплан",
            'custom_fields' => array(
                array(
                    'id' => 251230,
                    'values' => array(
                        array(
                            'value' => $phone,
                            'enum' => "WORK"
                        )
                    )
                )
            )
        );

        $shumAmo->add_leads($leads);
        $shumAmo->add_contact($contact);
        $shumAmo->log_out();
    }

    else throw new Exception ('Error AMO authentication');



    // Отправляем данные в Google Sheets
    $url = "https://docs.google.com/forms/d/e/1FAIpQLSdNRyD16hJ7Se2ES7mwZjcdzFV7L151V2MI68oVuQeFsvD2-Q/formResponse";

    $post_data = array(
        'entry.636922748' => date("d.m.Y"),
        'entry.56622740' => date("G:i"),
        'entry.841510943' => $phone,
        'entry.1899580107' => $name,
        'entry.250100765' => $place,
        'entry.480655025' => $type,
        'entry.1379288571' => $size,
        'entry.224469062' => $cover,
        'entry.1972518652' => $forma,
        'entry.333058728' => $otdely,
        'entry.2138227321' => $utm_term,
        'entry.1155736475' => $utm_source,
        'entry.403933923' => $utm_medium,
        'entry.1582223716' => $utm_campaign,
        'entry.1407597164' => $utm_content
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $output = curl_exec($ch);
    curl_close($ch);


    // Отправляем данные в Deltaplan CRM

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
        'id_user' => '94', // id клиента из CRM у аккаунта
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