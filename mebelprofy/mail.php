<?php

    error_reporting(E_ALL);
    ini_set('log_errors', 'On');
    ini_set('error_log', 'php_errors.log');

    function getCheck() {
        $checkFile = fopen("isShum.txt", "r");
        $bul = fgets($checkFile);
        fclose($checkFile);
        return $bul;
    }

    function changeCheck($str) {
        $checkFile = fopen("isShum.txt", "w");
        fwrite($checkFile, $str);
        fclose($checkFile);
    }

    $name = isset($_POST['name']) ? $_POST['name'] : "Аноним";
    $place = isset($_POST['shkafPlace']) ? $_POST['shkafPlace'] : "не определено";
    $type = isset($_POST['shkafType']) ? $_POST['shkafType'] : "Не определено";
    $forma = isset($_POST['type']) ? $_POST['type'] : "Не определено";
    $width = isset($_POST['width']) ? preg_replace("/[^0-9]/", '', $_POST['width']) : 0;
    $deep = isset($_POST['deep']) ? preg_replace("/[^0-9]/", '', $_POST['deep']) : 0;
    $height = isset($_POST['height']) ? preg_replace("/[^0-9]/", '',$_POST['height']) : 0;
    $otdely  = isset($_POST['otdely']) ? $_POST['otdely'] : "Не определено";
    $cover  = isset($_POST['ZshkafCover']) ? $_POST['ZshkafCover'] : "";
    $promokey = isset($_POST['promokey']) ? $_POST['promokey'] : "";
    $karta = isset($_POST['karta']) ? $_POST['karta'] : "";

    $phone = isset($_POST['phone']) ? preg_replace("/[^0-9]/", '', $_POST['phone']) : 0;
    $forma = isset($_POST['type']) ? $_POST['type'] : "Не определено";

    if ($phone == 0) exit ("Error! Phone is a required field");
    else {

        $mes = "<p>Имя: $name</p>";
        $mes .= "<p>Телефон: $phone</p>";
        $mes .= "<p>Куда : $place</p>";
        $mes .= "<p>Тип шкафа : $type</p>";
        $mes .= "<p>Размер шкафа : ширина $width, глубина $deep, высота $height</p>";
        $mes .= "<p>Конфигурация шкафа : $otdely</p>";
        $mes .= "<p>Внешняя отделка : $cover</p>";
        $mes .= "<p>Отправлено из формы : $forma</p>";
        if ($promokey) $mes .= "<p>Промокод : $promokey</p>";
        if ($karta) $mes .= "<p>Карта рассрочки: $karta</p>";

        $isShum = getCheck();

        if ($isShum == "true") {
            $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com, ingatkch@gmail.com";
            $sub = "=?utf-8?B?" . base64_encode("Заявка с Getprice.by/mebelprofy") . '?=';
            $headers = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: getprice.by/mebelprofy\r\n";

            $mes .= "<p>Shumilov</p>";
            changeCheck("false");

            include 'shum-leads.php';
            mail("$to", "$sub", "$mes", "$headers");
            sms($_POST['phone'], '375296486172');
            
        }
        else {
            $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com, getprice.shkafy@gmail.com";
            $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/shkaf-kupe') . '?=';
            $headers = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: getprice.by/shkaf-kupe\r\n";
            $mes .= "<p>Modern House</p>";
            changeCheck("true");

            mail("$to", "$sub", "$mes", "$headers");
            sms($_POST['phone'], '375447077474');
            include 'shkaf-kupe-leads.php';
        }
    }

    
    $crm_mes = "
        Имя: $name\n
        Куда: $place\n
        Тип шкафа: $type\n
        Размер шкафа: ширина $width, глубина $deep, высота $height\n
        Конфигурация шкафа: $otdely\n
        Внешняя отделка: $cover\n
        Промокод: $promokey\n
        Карта рассрочки: $karta\n
    ";

    
    function sms($phone, $number) {
        $url = "http://cp.websms.by";
        $timeout = 5;
        $func = 'msg_send_bulk';

        $package = array(
            array(
                'recipient' => $number,
                'message'   => "Заявка getprice.by/shkaf-kupe/\nТелефон: $phone",
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