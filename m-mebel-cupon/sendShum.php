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

    $typeId = 647286;
    $designId = 1064917;

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
        case 'Радиусный':
            $typeId = 1048907;
        default:
            $typeId = 647286;
    }

    switch ($design) {
        case 'ЛДСП':
            $designId = 1064917;
            break;
        case 'Зеркала и стекла':
            $designId = 1064919;
            break;
        case 'Пескоструйный рисунок':
            $designId = 1064921;
            break;
        case 'Фотопечать':
            $designId = 1064923;
            break;
        case 'Экокожа':
            $designId = 476147;
            break;
        case 'Лакобель или лакомат':
            $designId = 1064927;
            break;
        default: $designId = 1064917;
    }


    if ($amo->auth("shum-004@bk.ru", "3ebd6ba860208b087227fa696f071e93", "shumilov")) {
        $leads = array(
            array(
                'name'=>'Заявка с сайта getprice.by',
                'tags' => 'Deltaplan',
                'pipeline_id' => 2211367,
                'custom_fields'=>array(
                    array(
                        'id' => 280582, // тип шкафа
                        'values' => array(
                            array('value' => $typeId)
                        )
                    ),
                    array(
                        'id' => 476147, //внешний вид шкафа
                        'values' => array(
                            array('value' => $designId)
                        )
                    ),
                    array(
                        'id' => 476151,
                        'values' => array(
                            array('value' => $where)
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

        $amo->add_leads($leads);
        $amo->add_contact($contact);
        $amo->log_out();
    }

    else throw new Exception ('Error AMO authentication');



    // Отправляем данные в Google Sheets
    $url = "https://docs.google.com/forms/d/e/1FAIpQLSdNRyD16hJ7Se2ES7mwZjcdzFV7L151V2MI68oVuQeFsvD2-Q/formResponse";

    $post_data = array(
        'entry.636922748' => date("d.m.Y"),
        'entry.56622740' => date("G:i"),
        'entry.841510943' => $phone,
        'entry.1899580107' => $name,
        'entry.250100765' => $where,
        'entry.480655025' => $type,
        'entry.224469062' => $design,
        'entry.1972518652' => $formType,
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
        Куда: $where \n
        Тип шкафа: $type \n
        Внешняя отделка: $design \n
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
        'form_name' => $formType, // не должна содержать сочетание символов "phone"
        'phone' => $phone, //+375299465533
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url_crm);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

    $output = curl_exec($curl);
    curl_close($curl);

    // отправляем письмо на почту
    $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com, ingatkch@gmail.com";
    $sub = "=?utf-8?B?" . base64_encode("Заявка с Getprice.by/mebel-cupon") . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/mebel-cupon\r\n";

    $mes = "<p>Телефон: $phone</p>";
    $mes .= "<p>Куда ставить шкаф: $where</p>";
    $mes .= "<p>Тип шкафа: $type</p>";
    $mes .= "<p>Внешний вид: $design</p>";
    $mes .= "<p>Желательный срок изготовления: $srok</p>";
    $mes .= "<p>Отправлено из формы: $formType</p>";
    $mes .= "<p>Shumilov</p>";
    
    mail("$to", "$sub", "$mes", "$headers");
    sms($_POST['phone'], '375296486172');

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