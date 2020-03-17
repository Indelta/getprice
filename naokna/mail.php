<?php


error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');


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
if(!empty($_POST['type-img'])){
    $type_img = $_POST['type-img'];
    $crmMes .= "Ссылка на картинку: $type_img";
}

if($_POST['type']=='Калькулятор'){
    $zhaluziilirolshtori = $_POST['zhaluziilirolshtori'];
    $mes.= "<p>Жалюзи или рольшторы?: $zhaluziilirolshtori</p>";
    $kudazhaluzi = $_POST['kudazhaluzi'] + $_POST['kudarolshtori'];
    $mes.= '<p>Куда?: '. $_POST['kudazhaluzi'].' '.$_POST['kudarolshtori'].'</p>';

    $typezhaluzi = $_POST['typerolshtori'] + $_POST['typezhaluzi'];
    $mes.= '<p>Тип: '. $_POST['typerolshtori'].' '.$_POST['typezhaluzi'].'</p>';

    $material = $_POST['material'];
    $mes.= "<p>Материал: $material</p>";

    $stvorki = $_POST['stvorki'];
    $mes.= "<p>Количество створок: $stvorki</p>";

    $width = $_POST['width'];
    $mes.= "<p>Ширина окна: $width</p>";

    $height = $_POST['height'];
    $mes.= "<p>Высота окна: $height</p>";

    if(!empty($_POST['messenger'])) {
        $messenger = $_POST['messenger'];
        $mes .= "<p>Удобней получить стоимость через $messenger</p>";
    }

}


    $to = "dev@deltaplan.by, deltastream.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, getprice.naokna@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/naokna') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/naokna\r\n";

    if (mail("$to", "Заявка c Getprice.by/naokna", "$mes", "$headers")) {
        sms($_POST['phone'], '375296113870');
        echo ".";
    }


function sms($phone, $number) {
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';
    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/naokna/\nТелефон: $phone",
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