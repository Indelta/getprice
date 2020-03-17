<?php
/**
 * Created by PhpStorm.
 * User: Viktoryia Tsekhanovich
 * Date: 11.01.2017
 * Time: 10:17
 */

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://www.getprice.by/nashi-okna/";
if(count($_POST)) {
    $housePlace = $_POST['housePlace'];
    $windowPlace  = stripslashes($_POST['WwindowPlace']);
    if(!empty($_POST['WwindowPlace'])) {
        foreach($_POST['WwindowPlace'] as $check) {
            $windowPlace .= $check .', ';
        }
    }
    $homeConstruction = $_POST['homeConstruction'];
    // $uglFlat = $_POST['uglFlat'];
    // $windowView  = stripslashes($_POST['WwindowView']);
    // if(!empty($_POST['WwindowView'])) {
    //     foreach($_POST['WwindowView'] as $check) {
    //         $windowView .= $check .', ';
    //     }
    // }
    $flatEtazh = preg_replace("/[^0-9]/", '',$_POST['flatEtazh']);
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $sale = $_POST['sale'];
    $forma = $_POST['type'];
    $window1 = $_POST['window1'];
    $window2 = $_POST['window2'];
    $window3 = $_POST['window3'];
    $window4 = $_POST['window4'];
    $windowProfil = stripslashes($_POST['WwindowProfil']);
    if(!empty($_POST['WwindowProfil'])) {
        foreach($_POST['WwindowProfil'] as $check) {
            $windowProfil .= $check .', ';
        }
    }
    $windowDopkomplekt = stripslashes($_POST['WwindowDopkomplekt']);
    if(!empty($_POST['WwindowDopkomplekt'])) {
        foreach($_POST['WwindowDopkomplekt'] as $check) {
            $windowDopkomplekt .= $check .', ';
        }
    }
    $windowPodarki = stripslashes($_POST['WwindowPodarki']);
    if(!empty($_POST['WwindowPodarki'])) {
        foreach($_POST['WwindowPodarki'] as $check) {
            $windowPodarki .= $check .', ';
        }
    }
    $name  = $_POST['name'];
    $mes = "
        <p>Имя: $name</p>
        <p>Телефон: $phone</p>
        <p>Где будут ставить окна: $housePlace</p>
        <p>В каком помещении будут ставить окна: $windowPlace</p>
        <p>Тип дома: $homeConstruction</p>".
    // <p>Тип квартиры: $uglFlat</p>
    // <p>Окна выходят: $windowView</p>
        "<p>Окна на этаже: $flatEtazh</p>
        <p>Одностворчатое окно с одной поворотно-откидной створкой: $window1</p>
        <p>Двустворчатое окно с одной поворотно-откидной створкой: $window2</p>
        <p>Трехстворчатое окно с одной поворотно-откидной створкой: $window3</p>
        <p>Балконная дверь двустворчатая с одним открыванием: $window4</p>
        <p>Выбраны профили: $windowProfil</p>
        <p>Дополнительная комплектация: $windowDopkomplekt</p>".
        // <p>Подарки от фабрики: $windowPodarki</p>
        "<p>Скидка : $sale</p>
        <p>Отправлено из формы : $forma</p>
        
    ";

        //deltaplanirovanie@gmail.com, deltaplander@gmail.com, getprice.shkafy@gmail.com, getprice.shkafy@gmail.com
        // nashiokna2018@gmail.com

        //почта клиента - nashiokna2017@gmail.com       - включить в список перед запуском
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com, deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, nashiokna2018@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/nashi-okna') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/nashi-okna\r\n";


    if (mail("$to", "Заявка c Getprice.by/nashi-okna", "$mes", "$headers")) {
        include 'leads.php';
        //375445030850
        sms($_POST['phone'], '375296033004');
        smsToUser($phone, $sale);
        // echo ".";
    }
}
else {
    echo 'error';
}

function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/nashi-okna/\nТелефон: $phone",
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

function smsToUser($userPhone, $sale) {
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $userPhone,
            'message'   => "Ваша скидка на окна от getprice.by составляет $sale BYN. \n 
                            Для использования скидки, при заказе окон, назовите оператору промокод - OKNAVLETO",
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


// Выводим сообщение пользователю
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
<p></p>";

print '
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Окна ПВХ в Минске</title>
    <meta name="description"
          content="Производство и продажа пластиковых окон. Профиль REHAU, самые низкие цены, выгодные условия рассрочки.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');
    
      ga(\'create\', \'UA-90181425-10\', \'auto\');
      ga(\'send\', \'pageview\');
      /* Accurate bounce rate by time */
    if (!document.referrer ||
          document.referrer.split(\'/\')[2].indexOf(location.hostname) != 0)
    setTimeout(function(){ga(\'send\', \'event\', \'New Visitor\', location.pathname);}, 15000);
    
    </script>
</head>
<style>
    body{
        display: table;
    }
    .thankYouPage{
        display: table-cell;
        width: 100%;
        height: 100%;
        text-align: center;
        vertical-align: middle;
    }
</style>
<body>
    <div class="thankYouPage">
        <div class="container">
            <h1>Ваша заявка принята! </h1>
            <div class="description">
                Спасибо, что выбрали нас!
            </div>
        </div>
    </div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45489756 = new Ya.Metrika({
                    id:45489756,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45489756" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

';
exit;
?>