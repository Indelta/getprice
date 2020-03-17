<?php require_once 'config.php';?>
<?
$phone = '<a href="tel:+375292642424" class="tel">+375 29 264-24-24</a>';
$date = date("d.m.Y");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Натяжные потолки в Минске: низкие цены, акции, скидки</title>
    <meta name="description"
          content="У нас Вы можете заказать натяжной потолок в рассрочку: матовый, глянцевый, сатиновый, двухуровневый, тканевый и др. Расчет стоимости по выгодным ценам на сайте.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="chosen/chosen.jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <!-- <link href="img/favicon.ico" rel="shortcut icon"> -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="chosen/chosen.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-24"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90181425-24');
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
            Мы Вам перезвоним!
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
        <img src="img/logo.png" alt="" class="logo">
        <p class="sitename">Натяжные потолки в Минске <br>и Минском районе</p>
        <a href="#call" class="button fancy">Заказать звонок</a>
        <?echo $phone?>
    </div>
</header>
<div class="utp" id="utp">
    <div class="container">
        <h1>
        <?php
            $term = $_GET["utm_term"];
            quotemeta($term);

            switch($term) {
                case "matovyi":
                    echo "Матовые натяжные потолки <br>по лучшей цене в Минске!";
                    break;
                case "dvuhurovnevyi":
                    echo "Двухуровневые натяжные потолки <br>по лучшей цене в Минске!";
                    break;
                case "rassrochka":
                    echo "Натяжные потолки в рассрочку <br>на 8 месяцев без переплат! ";
                    break;   
                case "skidki":
                    echo "Закажите натяжной потолок <br>по лучшей цене в Минске! ";
                    break;   
                case "photopechat":
                    echo "Лучшие цены <br>на натяжные потолки с фотопечатью!";
                    break;
                case "raschet":
                    echo "Рассчитывайте стоимость натяжного потолка и экономьте деньги!";
                    break;
                case "nedorogo":
                    echo "Честные цены <br>на натяжные потолки в Минске!";
                    break;
                case "svetodiodnyi":
                    echo "Лучшие цены на натяжные потолки <br>со светодиодной подсветкой!";
                    break;
                case "tkanevyi":
                    echo "Честные цены <br>на натяжные потолки в Минске!";
                    break;
                case "glyancevii":
                    echo "Глянцевые натяжные потолки <br>по лучшей цене в Минске!";
                    break;
                case "satinovii":
                    echo "Сатиновые натяжные потолки <br>по лучшей цене в Минске!";
                    break;
                case "nebo":
                    echo "Натяжной потолок \"Звёздное небо\" <br>по лучшей цене в Минске! ";
                    break;
                case "paryaschii":
                    echo "Сатиновые натяжные потолки <br>по лучшей цене в Минске!";
                    break;
                default: 
                    echo "Честные цены <br>на натяжные потолки в Минске! ";
                    break;                       
            }
        ?>
        </h1>
        <div class="subtitle-block">
            <p>Рассчитайте стоимость своего натяжного потолка на сайте <br><span>и получите скидку до 60 BYN</span></p>
        </div>

        <div class="pulse-btn">Рассчитать стоимость</div>
    </div>
    <div class="pluses-outer">
        <div class="container">
            <div class="pluses">
                <div class="item">
                    <div class="icon">
                        <img src="img/utp/1.png" alt="">
                    </div>
                    <p>
                        Монтаж потолка в<br>
                        течение 1-3 дней
                    </p>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/utp/2.png" alt="">
                    </div>
                    <p>
                        Рассрочка 0%<br>
                        на 8 месяцев
                    </p>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/utp/3.png" alt="">
                    </div>
                    <p>
                        Точная стоимость<br>
                        уже на замере
                    </p>
                </div>
                <!-- <div class="item">
                    <div class="icon">
                        <img src="img/utp/4.png" alt="">
                    </div>
                    <p>
                        Монтируем без<br>
                        пыли и грязи
                    </p>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="calculator" id="calculator">
    <div class="container">
        <h2>Вы экономите время менеджера - мы экономим Ваши деньги!</h2>
        <div class="kalkulatorBody" id="calculatorBody">
            <div class="calc-sticker">
                <span class="left">Ответьте на 6 вопросов и заработайте</span>
                <span class="right">&nbsp;персональную скидку до 60 рублей!</span>
            </div>
            <form action method="post" id="kalkulatorForm">
                <div class="step1 step">
                    <h3>ШАГ 1: Выберите вид натяжного потолка</h3>
                    <div class="inputs">
                        <div class="input">
                            <label for="vidMatovy">
                                <img src="img/calculator/step1/vidMatovy.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Матовый" id="vidMatovy">
                                    <p>Матовый</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidSatin">
                                <img src="img/calculator/step1/vidSatin.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Матовый" id="vidSatin">
                                    <p>Сатиновый</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidGlyanec">
                                <img src="img/calculator/step1/vidGlyanec.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Глянцевый" id="vidGlyanec">
                                    <p>Глянцевый</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidFotopechat">
                                <img src="img/calculator/step1/vidFotopechat.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="С фотопечатью" id="vidFotopechat">
                                    <p>С фотопечатью</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidMnogour">
                                <img src="img/calculator/step1/vidMnogour.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Многоуровневый" id="vidMnogour">
                                    <p>Многоуровневый</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidParyash">
                                <img src="img/calculator/step1/vidParyash.jpg" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Парящий" id="vidParyash">
                                    <p>Парящий</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="vidOperator">
                                <img src="img/calculator/step1/vidOperator.png" alt="">
                                <div>
                                    <input type="radio" name="tip" value="Нужна консультация" id="vidOperator">
                                    <p>Нужна консультация</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <nav>
                        <p class="next buttonNext">
                            Следующий шаг
                        </p>
                    </nav>
                </div>
                <div class="step2 step" style="display: none">
                    <h3>ШАГ 2: Выберите размеры помещения под натяжной потолок</h3>
                    <div class="input">
                        <label for="rooms">Выберите количество комнат</label>
                        <div class="block">
                            <p class="minus but"><img src="img/calculator/step2/minus.png" alt=""></p>
                            <input type="text" name="rooms" id="rooms" value="1">
                            <p class="plus but"><img src="img/calculator/step2/plus.png" alt=""></p>
                        </div>
                    </div>
                    <div class="input">
                        <label for="square">Введите площадь, м2</label>
                        <input type="text" name="square" id="square" placeholder="Например: 45 м2">
                    </div>
                    <nav>
                        <p class="prev buttonPrev">
                            Предыдущий шаг
                        </p>
                        <p class="next buttonNext">
                            Следующий шаг
                        </p>
                    </nav>
                </div>
                <div class="step3 step" style="display: none">
                    <h3>ШАГ 3: Укажите вид потолочного освещения</h3>
                    <div class="inputs">
                        <div class="input">
                            <label for="svetLustra">
                                <img src="img/calculator/step3/svetLustra.jpg" alt="">
                                <div>
                                    <input type="radio" name="svet" value="Люстра" id="svetLustra">
                                    <p>Люстра</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="svetSvetilniki">
                                <img src="img/calculator/step3/svetSvetilniki.jpg" alt="">
                                <div>
                                    <input type="radio" name="svet" value="Встроенные светильники" id="svetSvetilniki">
                                    <p>Встроенные светильники</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="svetPodsvetka">
                                <img src="img/calculator/step3/svetPodsvetka.jpg" alt="">
                                <div>
                                    <input type="radio" name="svet" value="Светодиодная подсветка" id="svetPodsvetka">
                                    <p>Светодиодная подсветка</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="svetOther">
                                <img src="img/calculator/step3/svetOther.jpg" alt="">
                                <div>
                                    <input type="radio" name="svet" value="Другое" id="svetOther">
                                    <p>Другое</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <nav>
                        <p class="prev buttonPrev">
                            Предыдущий шаг
                        </p>
                        <p class="next buttonNext">
                            Следующий шаг
                        </p>
                    </nav>
                </div>
                <div class="step4 step" style="display: none">
                    <h3>ШАГ 4: Выберите бонусы</h3>
                    <div class="inputs">
                        <div class="input">
                            <label for="dopRassrochka">
                                <img src="img/calculator/step4/dopRassrochka.jpg" alt="">
                                <div>
                                    <input type="radio" name="bonus" value="Рассрочка 0% до 8 месяцев" id="dopRassrochka">
                                    <p>Рассрочка 0% до 8 месяцев</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="dopKarniz">
                                <img src="img/calculator/step4/dopKarniz.jpg" alt="">
                                <div>
                                    <input type="radio" name="bonus" value="Карниз в подарок" id="dopKarniz">
                                    <p>Карниз в подарок</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="dopSvetilniki">
                                <img src="img/calculator/step4/dopSvetilniki.jpg" alt="">
                                <div>
                                    <input type="radio" name="bonus" value="Светильники в подарок" id="dopSvetilniki">
                                    <p>Светильники в подарок</p>
                                </div>
                            </label>
                        </div>
                        <div class="input">
                            <label for="dopSkidka">
                                <img src="img/calculator/step4/dopSkidka.jpg" alt="">
                                <div>
                                    <input type="radio" name="bonus" value="Скидка 5% новоселам и пенсинерам" id="dopSkidka">
                                    <p>Скидка 5% новоселам и пенсинерам</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <nav>
                        <p class="prev buttonPrev">
                            Предыдущий шаг
                        </p>
                        <p class="next buttonNext">
                            Следующий шаг
                        </p>
                    </nav>
                </div>
                <div class="step5 step" style="display: none">
                    <h3>Вы выбрали:</h3>
                    <ul>
                        <li>
                            Вид натяжного потолка: <span class="fullTip"></span>
                        </li>
                        <li>
                            Количество комнат: <span class="fullRooms"></span>
                        </li>
                        <li>
                            Площадь: <span class="fullSquare"></span>
                        </li>
                        <li>
                            Освещение: <span class="fullSvet"></span>
                        </li>
                        <li>
                            Бонус: <span class="fullBonus"></span>
                        </li>
                    </ul>
                    <div class="progressBar">
                        <p class="text">Идёт расчёт стоимости...</p>
                        <div class="linebar">
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
                <div class="step6 step" style="display: none">
                    <h3>
                        Поздравляем! Вы получаете скидку <span class="saleText"></span> BYN на установку нового натяжного потолка! 
                        Для закрепления скидки за Вашим номером, пожалуйста, оставьте свои контакты.
                    </h3>
                    <p class="howtext">
                        Как Вам удобно получить стоимость натяжного потолка?
                    </p>


<!--                    <div class="linkmethod">-->
<!--                        <div class="method telephone">-->
<!--                            <input type="radio" name="linkmethod" id="telephone" value="По телефону">-->
<!--                            <label for="telephone"><img src="img/calculator/step6/phone.png" alt=""> По телефону</label>-->
<!--                        </div>-->
<!--                        <div class="method viber">-->
<!--                            <input type="radio" name="linkmethod" id="viber" value="Viber">-->
<!--                            <label for="viber"><img src="img/calculator/step6/viber.png" alt=""> Viber</label>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="input">
                        <p>Введите Ваше имя</p>
                        <input type="text" name="name" placeholder="Ваше имя">
                        <p>Введите Ваш номер телефона</p>
                        <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
                        <input type="hidden" name="type" value="Калькулятор">
                        <input type="hidden" name="sale" value="">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="submit" class="buttonNext" value="Получить стоимость натяжного потолка">
                    </div>
                    <nav>
                        <p class="prevLast">< назад</p>
                    </nav>
                </div>
            </form>
            <div class="step thankyou" style="display: none">
                <h3>
                    Ваша заявка отправлена!<br>
                    Мы рассчитаем стоимость в течение 30 минут
                </h3>
            </div>
            <div class="sale-status">
                <div class="sale-title">Размер Вашей скидки: <p class="barText">0</p> BYN</div>
                <div class="sale-bar">
                    <div class="bar">
                        <div class="bar-inner"></div>
                    </div>
                    <span class="sale-min">0 BYN</span>
                    <span class="sale-max">60 BYN</span>
                </div>
            </div>
        </div>
        <!-- <div class="sale-status">
            <div class="sale-title">Размер Вашей скидки: <p class="barText">0</p> BYN</div>
            <div class="sale-bar">
                <div class="bar">
                    <div class="bar-inner"></div>
                </div>
                <span class="sale-min">0 BYN</span>
                <span class="sale-max">60 BYN</span>
            </div>
        </div> -->
    </div>
</div>
<div class="works" id="works">
    <div class="container">
        <h2>Выполненные работы за прошлый месяц</h2>
        <div class="owl-carousel">
            <div class="item">
                <img src="img/works/new-1.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="1">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-2.jpeg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="2">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-3.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="3">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-4.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="4">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-5.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="5">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-6.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="6">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-7.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="7">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-8.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="8">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-9.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="9">Узнать стоимость</a>
            </div>
            <div class="item">
                <img src="img/works/new-10.jpg" alt="">
                <a href="#findCost" class="fancy findCost button" data-count="10">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <img src="img/logo.png" alt="" class="logo">
        <p class="sitename">Натяжные потолки в Минске <br>и Минском районе</p>
        <a href="#call" class="button fancy pulse-btn">Заказать звонок</a>
        <?echo $phone?>
        <div class="up">
            <img src="img/arrUp.png" alt="">
            <p>наверх</p>
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
<div id="findCost" style="display: none;">
    <form action method="post" id="findCostForm">
        <h2>
            Узнать стоимость
        </h2>
        <div class="description">
            Узнайте стоимость такого потолка для вашей комнаты
        </div>
        <div class="input">
            <p>Введите площадь комнаты в м<sup>2</sup></p>
            <input type="text" name="square" placeholder="Например 15 м&sup2;">
        </div>
        <div class="input">
            <p>Оставьте свой номер телефона, для получения стоимости натяжного потолка со скидкой от getprice </p>
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
        </div>
        <input type="hidden" name="type" value="Узнать стоимость">
        <input type="hidden" name="imageCount" value="">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" value="Узнать стоимость" class="button">
    </form>
</div>
<?
$utm_term = $_GET["utm_term"];
quotemeta($utm_term);
$utm_source = $_GET["utm_source"];
quotemeta($utm_source);
$utm_medium = $_GET["utm_medium"];
quotemeta($utm_medium);
$utm_campaign = $_GET["utm_campaign"];
quotemeta($utm_campaign);
$utm_content = $_GET["utm_content"];
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
                w.yaCounter48628643 = new Ya.Metrika({
                    id:48628643,
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
<noscript><div><img src="https://mc.yandex.ru/watch/48628643" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>