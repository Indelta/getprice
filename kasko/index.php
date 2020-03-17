<?php //require_once 'config.php';?>
<?php
$phone = '<a href="tel:+375291348251" class="tel">+375 29 134-82-51</a>';
$date = date("d.m.Y");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лучшие условия АвтоКаско в Беларуси на сегодня</title>
    <meta name="description"
          content="Ищете страхование автокаско? Калькулятор расчета стоимости онлайн у нас на сайте. Заходите и подберите лучшие условия для себя!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="chosen/chosen.jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <link href="img/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="chosen/chosen.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-21"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90181425-21');
        /* Accurate bounce rate by time */
        setTimeout(function(){
            gtag('event', location.pathname, {
                'event_category': 'Новый посетитель'
            });
        }, 15000);
    </script>
</head>
<body>
<div class="stickerCall">
    <div class="circlephone" style="transform-origin: center;">
    </div>
    <div class="circle-fill" style="transform-origin: center;">
    </div>
    <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;">
        </div>
    </div>
</div>
<div class="callWind">
    <div class="close">
        <img src="img/sticker/whiteCross.png" alt="">
    </div>
    <div class="title">
        <img src="img/sticker/callTrubka.png" alt="">
        <p>
            Мы вам перезвоним!
        </p>
    </div>
    <form action="" method="post" id="callForm">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
        <input type="hidden" name="type" value="Мы Вам перезвоним">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" value="Заказать звонок">
    </form>
    <div class="ourself">
        Или перезвоните нам сами
        <?echo $phone?>
    </div>
</div>
<header>
    <div class="container">
        <div class="logoArea">
            <img src="img/logo.png" alt="">
            <p class="sitename">Страхование автомобилей в Беларуси</p>
        </div>
        <?echo $phone?>
        <a href="#call" class="button fancy">Заказать звонок</a>
    </div>
</header>
<div class="utp">
    <div class="container">
        <h1>Подберите КАСКО Online<br> на нашем сайте </h1>
        <div class="description">
            и при заказе получите обязательную<br>
            страховку автомобиля в подарок*
        </div>
        <img src="img/utpImg.png" alt="" class="utpImg">
        <div class="hurry">
            Спешите! Осталось <span>8 подарков</span> из 50
        </div>
        <div class="pluses">
            <div class="item">
                <div class="icon">
                    <img src="img/utpIcon1.png" alt="">
                </div>
                <p>
                    Бесплатная доставка<br>
                    полиса за 1 день
                </p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/utpIcon2.png" alt="">
                </div>
                <p>
                    Стоимость каско<br>
                    от 1,5 руб в день
                </p>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="img/utpIcon3.png" alt="">
                </div>
                <p>
                    Выплаты по каско в течение<br>
                    10 рабочих дней
                </p>
            </div>
        </div>
    </div>
</div>
<div class="calculator" id="calculator">
    <div class="container">
        <h2>Подбор самых выгодных тарифов  Автокаско на <?echo $date?></h2>
        <div class="description">
            Подберите 3 варианта самых выгодных каско за 3 простых шага
        </div>
        <div class="kalkulatorBody">
            <form action method="post" id="kalkulatorForm">
                <div class="step1 step">
                    <h3>ШАГ 1: Заполните параметры автомобиля</h3>
                    <div class="inputs">
                        <div class="input">
                            <p>Введите марку автомобиля:</p>
                            <input type="text" name="marka" placeholder="Например: Ford">
                        </div>
                        <div class="input">
                            <p>Введите модель:</p>
                            <input type="text" name="model" placeholder="Например: Focus">
                        </div>
                        <div class="input">
                            <p>Введите год выпуска:</p>
                            <input type="text" name="year" placeholder="Например: 2009 г">
                        </div>
                    </div>
                    <nav>
                        <p class="next button">
                            Следующий шаг
                        </p>
                    </nav>
                </div>
                <div class="step2 step" style="display: none">
                    <h3>ШАГ 2: Заполните дополнительные параметры</h3>
                    <div class="inputs">
                        <div class="input">
                            <p>Введите стаж вождения:</p>
                            <input type="text" name="stazh" placeholder="Например: 4 года">
                        </div>
                        <div class="input">
                            <p>Введите Ваш регион:</p>
                            <input type="text" name="region" placeholder="Например: Минск">
                        </div>
                    </div>
                    <nav>
                        <p class="next button">
                            Следующий шаг
                        </p>
                        <p class="prev">
                            <img src="img/prevArrow.png" alt="">
                            Назад
                        </p>
                    </nav>
                </div>
                <div class="step3 step" style="display: none">
                    <h3>ШАГ 3: Выберите удобный способ получения лучших предложений по каско</h3>
                    <div class="linkmethod">
                        <div class="method viber">
                            <input type="radio" name="linkmethod" id="viber" value="Viber">
                            <label for="viber">Viber</label>
                        </div>
                        <div class="method telephone">
                            <input type="radio" name="linkmethod" id="telephone" value="Консультация по телефону">
                            <label for="telephone">Консультация по телефону</label>
                        </div>
                        <div class="method whatsapp">
                            <input type="radio" name="linkmethod" id="whatsapp" value="WhatsApp">
                            <label for="whatsapp">WhatsApp</label>
                        </div>
                    </div>
                    <div class="input">
                        <p>Введите Ваш номер телефона</p>
                        <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
                        <input type="hidden" name="type" value="Калькулятор">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                    </div>
                    <nav>
                        <input type="submit" class="button" value="Подобрать выгодные предложения по автокаско">
                        <p class="prev">
                            <img src="img/prevArrow.png" alt="">
                            Назад
                        </p>
                    </nav>
                </div>
            </form>
            <div class="step thankyou" style="display: none">
                <h3>Ваша заявка принята!</h3>
                <div class="text">
                    В ближайшее время с Вами свяжется специалист,
                    расскажет о результате подбора и проконсультирует по ценам.
                </div>
            </div>
        </div>
        <div class="action">
            <img src="img/actionImg.png" alt="" class="actionImg">
            *Условия акции уточняйте у менеджера<br>
            по телефону <?echo $phone?>
        </div>
    </div>
</div>
<div class="about" id="about">
    <div class="container">
        <h2>О нас в цифрах</h2>
        <div class="blocks">
            <div class="block">
                <div class="round"></div>
                <div class="num">
                    >750
                </div>
                <p class="text">
                    Клиентов пользуются нашим
                    сервисом ежедневно
                </p>
            </div>
            <div class="block">
                <div class="round"></div>
                <div class="num">
                    89.1%
                </div>
                <p class="text">
                    Клиентов обращаются к нам
                    по рекомендации
                </p>
            </div>
            <div class="block">
                <div class="round"></div>
                <div class="num">
                    9.8<span class="small"> из </span><span class="medium">10</span>
                </div>
                <p class="text">
                    Средняя оценка по отзывам
                    наших клиентов
                </p>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="logoArea">
            <img src="img/logo.png" alt="">
            <p class="sitename">Страхование автомобилей в Беларуси</p>
        </div>
        <div class="requisits">
            <p>УНП 100357923</p>
            <p>пр. Пушкина, 31А, пом. 26</p>
        </div>
        <div class="up">
            <img src="img/up.png" alt="">
            <p>Наверх</p>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a>
    </div>
</div>
<div id="call" style="display: none">
    <form action method="post" id="zvonokForm">
        <h2>
            Бесплатный звонок
        </h2>
        <div class="description">
            Заполните форму, и мы свяжемся с Вами
            в течение 30 минут
        </div>
        <div class="input">
            <p>Введите Ваше имя</p>
            <input type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="input">
            <p>Введите Ваш телефон</p>
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
        </div>
        <input type="hidden" name="type" value="Заказ звонка">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" value="Заказать звонок" class="button">
    </form>
</div>
<?php
$utm_term = isset($_GET["utm_term"]) ? $_GET["utm_term"] : "";
quotemeta($utm_term);
$utm_source = isset($_GET["utm_source"]) ? $_GET["utm_source"] : "";
quotemeta($utm_source);
$utm_medium = isset($_GET["utm_medium"]) ? $_GET["utm_medium"] : "";
quotemeta($utm_medium);
$utm_campaign = isset($_GET["utm_campaign"]) ? $_GET["utm_campaign"] : "";
quotemeta($utm_campaign);
$utm_content = isset($_GET["utm_content"]) ? $_GET["utm_content"] : "";
quotemeta($utm_content);
echo '
    <script>
        $("input[name=utm_term]").val("'.$utm_term.'");
        $("input[name=utm_source]").val("'.$utm_source.'");
        $("input[name=utm_medium]").val("'.$utm_medium.'");
        $("input[name=utm_campaign]").val("'.$utm_campaign.'");
        $("input[name=utm_content]").val("'.$utm_content.'");
    </script>
    ';
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48165869 = new Ya.Metrika({
                    id:48165869,
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
<noscript><div><img src="https://mc.yandex.ru/watch/48165869" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>