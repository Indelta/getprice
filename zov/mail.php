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
$backurl = "http://www.getprice.by/zov/";

$name = $_POST['name'];
$phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
$forma = $_POST['type'];
$tip = $_POST['kuhType'];
$razmer = preg_replace("/[^0-9]/", '',$_POST['kuhSize']);
$style = $_POST['kuhStyle'];
$fasad = $_POST['kuhFasad'];
$tehnika  = stripslashes($_POST['vstrTehnika']);

    $mes = "
        <p>Имя: $name</p>
        <p>Телефон: $phone</p>
        <p>Тип кухни: $tip</p>
        <p>Размер помещения: $razmer</p>
        <p>Стиль кухни: $style</p>
        <p>Материал фасадов: $fasad</p>
        <p>Отправлено из формы : $forma</p>
    ";

    //deltaplanirovanie@gmail.com, limezov2017@gmail.com
    $to = "dev@deltaplan.by, deltaplanirovanie@gmail.com, deltaplan.dev@gmail.com, limezov2017@gmail.com"; //
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Getprice.by/zov') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: getprice.by/zov\r\n";

    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else {
        if (mail("$to", "Заявка c Getprice.by/zov", "$mes", "$headers")) {
            sms($_POST['phone'], '375445917917');
            echo ".";
        }
    }




function sms($phone, $number)
{
    $url = "http://cp.websms.by";
    $timeout = 5;
    $func = 'msg_send_bulk';

    $package = array(
        array(
            'recipient' => $number,
            'message'   => "Заявка getprice.by/zov\nТелефон: $phone",
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
    <title>Кухни по индивидуальным проектам</title>
    <meta name="description"
          content="Кухни под заказ в Минске и Минском районе. Собственное производство. Бесплатный дизайн-проект. Гибкие цены.">
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
      (function(i,s,o,g,r,a,m){i[\"GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,\"script\",\"https://www.google-analytics.com/analytics.js\",\"ga\");
    
      ga(\"create\", \"UA-90181425-6\", \"auto\");
      ga(\"send\", \"pageview\");
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
            <div class="planka">
                <h1>Ваша заявка принята! </h1>
                <div class="description">
                    Спасибо, что выбрали нас!
                </div>
            </div>  
        </div>
    </div>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44451511 = new Ya.Metrika({
                    id:44451511,
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
<noscript><div><img src="https://mc.yandex.ru/watch/44451511" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
';
exit;
?>