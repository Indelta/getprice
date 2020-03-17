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
        $phone = $_POST['phone'];
        $phone = preg_replace("/[^0-9]/", '', $phone);
        $mes.="<p>Телефон: $phone</p>";
    }

    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        $mes.= "<p>Email: $email</p>";
    }

    if(!empty($_POST['square'])){
        $square = $_POST['square'];
        $mes.="<p>Метраж помещения: $square</p>";
    }

    if(!empty($_POST['gdeRemont'])){
        $gdeRemont = $_POST['gdeRemont'];
        $mes.="<p>Где собиратесь делать ремонт: $gdeRemont</p>";
    }

    if(!empty($_POST['ifProject'])){
        $ifProject = $_POST['ifProject'];
        $mes.="<p>У Вас уже есть дизайн-проект: $ifProject</p>";
    }

    if(!empty($_POST['pomType'])){
        $pomType = $_POST['pomType'];
        $mes.="<p>Укажите тип помещения: $pomType</p>";
    }

    if(!empty($_POST['ifPereplan'])){
        $ifPereplan = $_POST['ifPereplan'];
        $mes.="<p>Необходимость перепланировки: $ifPereplan</p>";
    }

    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'];
        foreach ($blacklist as $item)
            if(preg_match("/$item\$/i", $_FILES['file']['name'])) exit;
        if ($size > 10240000) exit;
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/remont/files/".$_FILES["file"]["name"])){
            $mes.="
                <p>Файл успешно загружен на сервер</p>
                <p>Cсылка на файл: http://www.getprice.by/remont/files/".$_FILES['file']['name']."</p>
                ";
            $href = "http://www.getprice.by/remont/files/".$_FILES['file']['name'];
        } else {
            $mes.="<p>Ошибка! Не удалось загрузить файл на сервер!</p>";
        }

    }

    if(!empty($_POST['gk-komplex'])) {
        $gk_komplex = $_POST['gk-komplex'];
        $mes .= "<p>Жилой комплекс: $gk_komplex</p>";
    }
    if(!empty($_POST['typeRemont'])) {
        $typeRemont = $_POST['typeRemont'];
        $mes .= "<p>Тип ремонта: $typeRemont</p>";
    }
    if(!empty($_POST['type'])){
        $type = $_POST['type'];
        $mes.="<p>Отправлено из формы: $type</p>";
    }

    //remontgrafito@gmail.com,
    //bazamasterov2018@gmail.com
    $to = "deltaplanirovanie@gmail.com, dev@deltaplan.by, deltaplan.dev@gmail.com, manager.deltaplan@gmail.com, bazamasterov2018@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/remont') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From:  getprice.by/remont";

    if (mail("$to", "Заявка с Getprice.by/remont", "$mes", "$headers")) {
//        sms($_POST['phone'], '375291825639');
        include 'leads.php';
        echo "1";
    }


function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка с Getprice.by/remont\nТелефон: $phone",
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