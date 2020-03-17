<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VseVizy - Визовая поддержка</title>
    <meta name="description" content="Визовая поддержка">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Ubuntu:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="js/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-28"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-90181425-28');  /* Accurate bounce rate by time */setTimeout(function(){gtag('event', location.pathname, {  'event_category': 'Новый посетитель'});}, 15000);</script>
</head>
<body>
<div id="kalkulator">
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
        <form method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Телефон" required>
            <input type="hidden" name="type" value="Мы Вам перезвоним">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="submit" value="Заказать звонок">
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <a href="tel:+375293611434">+375(29) 361 14 34</a>
        </div>
    </div>
    <form method="post" id="kalkulatorForm">
        <!-- Главная страница -->
        <div class="screen" id="screen1">
            <header>
                <div class="container">
                    <img src="img/utp/logo.jpg" alt="" class="logo">
                    <span class="sitename">
                        Оформление виз <br />в любую точку мира
                    </span>
                    <div class="right-block">
                        <a href="tel:+375293611434" class="tel"><img src="img/utp/icon3.jpg" alt="" />+375 29 <span>361 14 34</span></a>
                        <a href="#call" class="fancy button">Бесплатная консультация</a>
                    </div>
                    <!-- <div class="contacts">
                        <p class="adress">
                            <img src="img/utp/icon1.jpg" alt="" />
                            г. Минск, ул.Чичерина, 21-14
                        </p>
                        <p class="mail">
                            <img src="img/utp/icon2.jpg" alt="" />
                            <a href="mailto:contact@greenvisa.by">contact@greenvisa.by</a>
                        </p>
                    </div> -->
                </div>
            </header>
            <div class="utp">
                <div class="container">
                    <h1>Открытие виз в минске</h1>
                    <p class="answer">
                        Быстрое оформление документов, максимальный срок, любой тип, <span style="color:#82fb00;">скидка до 20%</span>
                    </p>
                    <div class="startQuest">
                        <p class="button">
                            Расчет стоимости и срока визы
                        </p>
                    </div>
                    <div class="pluses">
                        <div class="item">
                            <img src="img/utp/icon4.png" alt="" />
                            <p>Отслеживание паспорта после подачи</p>
                        </div>
                        <div class="item">
                            <img src="img/utp/icon4.png" alt="" />
                            <p>Оформление за несколько часов</p>
                        </div>
                        <div class="item">
                            <img src="img/utp/icon4.png" alt="" />
                            <p>Страховка выписывается на месте</p>
                        </div>
                        <div class="item">
                            <img src="img/utp/icon4.png" alt="" />
                            <p>У нас можете получить визу даже если где-то уже отказали</p>
                        </div>
                    </div>
                    <img src="img/utp/passport.png" alt="" class="passport" />
                </div>
            </div>
            <footer>
                <div class="green-block">
                    <div class="container">
                        <p class="unp">УНП 692060122</p>
                        <p class="name">ИП Колядко К.В. GreenVisa</p>
                    </div>
                </div>
            </footer>
        </div>
        <div class="screen" style="display: none" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 14 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="active"><p>1</p></li>
                                <li><p>2</p></li>
                                <li><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <p>Расчет стоимости и длительности вашей визы</p>
                            <h2>Цель вашей поездки?</h2>
                            <div class="items">
                                <label class="item">
                                    <img src="img/1/turism.jpg" alt="" />
                                    <input type="radio" name="cel" value="Туризм">
                                    <span>Туризм</span>
                                </label>
                                <label class="item">
                                    <img src="img/1/obuchenie.jpg" alt="" />
                                    <input type="radio" name="cel" value="Обучение">
                                    <span>Обучение</span>
                                </label>
                                <label class="item">
                                    <img src="img/1/pokupki.jpg" alt="" />
                                    <input type="radio" name="cel" value="Покупки">
                                    <span>Покупки</span>
                                </label>
                                <label class="item">
                                    <img src="img/1/drugoe.jpg" alt="" />
                                    <input type="radio" name="cel" value="Другое">
                                    <span>Другое</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Расскажите о своих предпочтениях -->
        <div class="screen" style="display: none" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="active"><p>2</p></li>
                                <li><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <p>Расчет стоимости и длительности вашей визы</p>
                            <h2>Открывали ли вы ранее визы?</h2>
                            <div class="items">
                                <label class="item">
                                    <img src="img/2/da_img.jpg" alt="" />
                                    <input type="radio" name="prevViza" value="Да" />
                                    <span>Да</span>
                                </label>
                                <label class="item">
                                    <img src="img/2/no_img.jpg" alt="" />
                                    <input type="radio" name="prevViza" value="Нет"/>
                                    <span>Нет</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Выберите вид тура или время отдыха -->
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="active"><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <p>Расчет стоимости и длительности вашей визы</p>
                            <h2>Сколько человек подает на визу?</h2>
                            <div class="items">
                                <label class="item">
                                    <img src="img/3/1img.jpg" alt="" />
                                    <input type="radio" name="peopleCount" value="Один человек">
                                    <span>1</span>
                                </label>
                                <label class="item">
                                    <img src="img/3/2img.jpg" alt="" />
                                    <input type="radio" name="peopleCount" value="Два человека">
                                    <span>2</span>
                                </label>
                                <label class="item">
                                    <img src="img/3/3img.jpg" alt="" />
                                    <input type="radio" name="peopleCount" value="Три человека">
                                    <span>3</span>
                                </label>
                                <label class="item">
                                    <img src="img/3/4img.jpg" alt="" />
                                    <input type="radio" name="peopleCount" value="4 и более человек">
                                    <span>4 и более</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Выберите  класс отеля и тип размещения -->
        <div class="screen" style="display: none" id="screen5">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                    <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="active"><p>4</p></li>
                                <li><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <p>Расчет стоимости и длительности вашей визы</p>
                            <h2>Как срочно нужна виза?</h2>
                            <div class="items">
                                <label class="item">
                                    <img src="img/4/den.jpg" alt="" />
                                    <input type="radio" name="quickly" value="В течение дня">
                                    <span>В течение дня</span>
                                </label>
                                <label class="item">
                                    <img src="img/4/nedelja.jpg" alt="" />
                                    <input type="radio" name="quickly" value="В течение недели">
                                    <span>В течение недели</span>
                                </label>
                                <label class="item">
                                    <img src="img/4/ne_srochno.jpg" alt="" />
                                    <input type="radio" name="quickly" value="Не срочно">
                                    <span>Не срочно</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Бюджет -->
        <div class="screen" style="display: none" id="screen6">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="active"><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <p>Расчет стоимости и длительности вашей визы</p>
                            <h2>Какой нужен тип визы?</h2>
                            <div class="items">
                                <label class="item">
                                    <img src="img/5/odnorazovaja.jpg" alt="" />
                                    <input type="radio" name="vizaType" value="Одноразовая">
                                    <span>Одноразовая</span>
                                </label>
                                <label class="item">
                                    <img src="img/5/multiviza.jpg" alt="" />
                                    <input type="radio" name="vizaType" value="Мультивиза">
                                    <span>Мультивиза</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Агрегатор -->
        <div class="screen" style="display: none" id="screen7">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="done"><p>5</p></li>
                                <li class="active"><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <div class="bg">
                                <div class="itog">
                                    <p id="itog-vizaType"></p>
                                    <p id="itog-peopleCount"></p>
                                    <p id="itog-quickly"></p>
                                    <p id="itog-cel"></p>
                                </div>
                            </div>
                            <div class="progressBar">
                                <div class="linebar">
                                    <div class="bar"></div>
                                </div>
                                <p class="text">Производим расчет возможности получения визы...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Форма -->
        <div class="screen" style="display: none" id="screen8">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/1/logo.jpg" alt="" class="logo">
                            <img src="img/1/flag.png" alt="" class="flags">
                            <a href="#call" class="fancy button">Бесплатная консультация</a>
                            <a href="tel:+375293611334" class="tel">+375 29 <span>361 13 34</span></a>
                        </div>
                        <nav class="navigation">
                            <div class="prev calc-nav">
                                <img src="img/1/arrow.jpg" alt="">
                                &nbsp;
                                <span>Предыдущий шаг</span>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="done"><p>5</p></li>
                                <li class="done"><p>6</p></li>
                                <li class="active"><p>7</p></li>
                            </ul>
                            <div class="next calc-nav">
                                <span>Следующий шаг</span>
                                &nbsp;
                                <img src="img/1/arrow.jpg" alt="">
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>
                                Поздравляем!
                            </h2>
                            <p>Вы получаете персональную скидку на визовое оформление в размере 20%!</p>
                            <div class="final-form">
                                <input type="text" name="name" placeholder="Имя">
                                <input type="text" name="phone" placeholder="Телефон">
                                <input type="hidden" name="type" value="Калькулятор">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <input type="submit" class="button" value="Получить скидку">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thank You -->
        <div class="screen" style="display: none" id="thankyou">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="questLast">
                            <img src="img/thankYouPage/logo.png" alt="">
                            <h2>
                                Спасибо!
                            </h2>
                            <div class="nota">
                                В ближайшее время с Вами свяжется менеджер.
                            </div>
                        </div>
                        <a class="goBack" href="#">&lsaquo;&nbsp;Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="call" style="display: none">
        <form method="post" id="zvonokForm">
            <img src="img/popup/img.jpg" alt="">
            <h2>Получите бесплатную консультацию</h2>
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="phone" placeholder="Телефон" required>
            <input type="hidden" name="type" value="Получить консультацию">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать визу" class="button">
        </form>
    </div>
</div>
<div class="showAllBlocks"></div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>
<?php
    $utm_term = isset($_GET["utm_term"]) ? $_GET["utm_term"] : "";
    quotemeta($utm_term);
    $utm_source = isset($_GET["utm_source"]) ? $_GET["utm_source"] : "";
    quotemeta($utm_source);
    $utm_medium = isset($_GET["utm_medium"]) ? $_GET["utm_medium"] : "";
    quotemeta($utm_medium);
    $utm_campaign = isset($_GET["utm_campaign"]) ? $_GET["utm_campign"] : "";
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
                w.yaCounter50525146 = new Ya.Metrika({
                    id:50525146,
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
<noscript><div><img src="https://mc.yandex.ru/watch/50525146" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>