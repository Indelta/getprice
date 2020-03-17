<?php require_once 'config.php';?>
<?php $phone = '<a href="tel:+375293357092" class="tel">+375 (29) <span>3357092</span></a>' ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Продажа кондиционеров напрямую от импортёра. Доставка по Минской области</title>
        <meta name="description" content="Кондиционеры для офиса и дома. Лучшие цены. Бесплатная доставка. Расширенная гарантия 5 лет. Более 300 моделей на складе.">
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
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-19"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-90181425-19');
            /* Accurate bounce rate by time */
            setTimeout(function() {
                gtag('event', location.pathname, {
                    'event_category': 'Новый посетитель'
                });
            }, 15000);
        </script>
    </head>

    <body>
    <!-- Rating@Mail.ru counter -->
    <script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3038267", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
    (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
    </script><noscript><div>
    <img src="//top-fwz1.mail.ru/counter?id=3038267;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
    </div></noscript>
    <!-- //Rating@Mail.ru counter -->
        <div id="kalkulator">
            <div class="stickerCall">
                <div class="circlephone" style="transform-origin: center;"> </div>
                <div class="circle-fill" style="transform-origin: center;"> </div>
                <div class="img-circle" style="transform-origin: center;">
                    <div class="img-circleblock" style="transform-origin: center;"> </div>
                </div>
            </div>
            <div class="callWind">
                <div class="close"> <img src="img/sticker/whiteCross.png" alt=""> </div>
                <div class="title"> <img src="img/sticker/callTrubka.png" alt="">
                    <p> Мы вам перезвоним! </p>
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
                    <input type="submit" value="Заказать звонок"> </form>
                <div class="ourself"> Или перезвоните нам сами
                    <?echo $phone?>
                </div>
            </div>
            <form action method="post" id="kalkulatorForm">
                <!-- Главная страница -->
                <div class="screen" id="screen1">
                    <header>
                        <div class="container">
                            <div class="left">
                                <img src="img/logo.png" alt="" class="logo">
                                <p class="sitename"> Продажа и установка кондиционеров в Беларуси <br> Цены от первого импортёра.</p>
                            </div>
                            <div class="right">
                                <div class="contacts">
                                    <?php echo $phone?>
                                    <a href="mailto:aqua@bestklimat.by">aqua@bestklimat.by</a>
                                </div>
                                <div class="btn">
                                    <a href="#call" class="fancy button">Заказать звонок</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="utp">
                        <div class="container">
                            <?php  
                            $key_get = $_GET["utm_term"];
                            quotemeta($key_get);
                            $myquery = "SELECT * FROM `utp_metki_tury` WHERE `key` LIKE '$key_get' ORDER BY `id`";
                            $result = $connect->query($myquery);                    
                            $mass = $result->fetch_array(MYSQLI_ASSOC);                    
                            $str=$mass['str'];                    
                            $h1=$mass['h1'];                    
                            if (empty($str)) {
                                $str='Подберите свой кондиционер по лучшей цене!';                        $h1='Кондиционеры мировых брендов напрямую от импортёра';
                            }                    
                            echo '<div class="description">'.$str.'</div><h1>'.$h1.'</h1>';                    
                            ?>
                                <div class="startQuest">
                                    <p class="answer"> Ответьте на <span>5 простых вопросов</span> и получите скидку или ценный подарок.
                                        <br> Вы экономите время менеджера - мы экономим Ваши деньги! </p>
                                    <p class="button"> Подобрать кондиционер </p>
                                </div>
                        </div>
                        <div class="pluses">
                            <div class="container">
                                <div class="plus"> <img src="img/screen1/1.png" alt="">
                                    <p> Расширенная гарантия по договору - 5 лет </p>
                                </div>
                                <div class="plus"> <img src="img/screen1/2.png" alt="">
                                    <p> Самый большой выбор проверенных брендов </p>
                                </div>
                                <div class="plus"> <img src="img/screen1/3.png" alt="">
                                    <p> Профессиональный монтаж и обслуживание </p>
                                </div>
                                <div class="plus"> <img src="img/screen1/4.png" alt="">
                                    <p> Карта рассрочки «ХАЛВА» </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="container">
                            <p class="unp">ООО "БЭСТКЛИМАТ", УНП 192663929</p>
                            <p class="name"><a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a></p>
                        </div>
                    </footer>
                </div>
                <!-- Куда вы хотите установить кондиционер? -->
                <div class="screen" style="display: none" id="screen2">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="active">
                                                <p>1</p>
                                            </li>
                                            <li>
                                                <p>2</p>
                                            </li>
                                            <li>
                                                <p>3</p>
                                            </li>
                                            <li>
                                                <p>4</p>
                                            </li>
                                            <li>
                                                <p>5</p>
                                            </li>
                                            <li>
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>Куда Вы хотите установить кондиционер?</h2>
                                        <ul class="chooseWithPhoto">
                                            <li>
                                                <label for="flat"> <img src="img/screen2/flat(1).jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="where" value="В квартиру" id="flat"> В квартиру </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="house"> <img src="img/screen2/house(1).jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="where" value="В частный дом" id="house"> В частный дом </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="office"> <img src="img/screen2/office(1).jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="where" value="В офис" id="office"> В офис </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="commercial">
                                                    <img src="img/screen2/commercial.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="where" value="В торговое помещение" id="commercial">
                                                        В торговое помещение
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="nota"> <img src="img/iconLamp.png" alt="" class="icon">
                                            <p> В зависимости от типа помещения выбираются характеристики системы кондиционирования.
                                                <br> Такой подход позволяет нашим клиентам выбирать самые подходящие в каждой конкретной ситуации
                                                <br> кондиционеры, не переплачивая за ненужные функции. </p>
                                        </div>
                                    </div>
                                    <div class="nextBottomBlock">
                                        <div class="cont">
                                            <p class="button prev">Назад</p>
                                            <p class="button next">Далее</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Укажите метраж помещения, в котором предполагается работа кондиционера -->
                <div class="screen" style="display: none" id="screen3">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="active">
                                                <p>2</p>
                                            </li>
                                            <li>
                                                <p>3</p>
                                            </li>
                                            <li>
                                                <p>4</p>
                                            </li>
                                            <li>
                                                <p>5</p>
                                            </li>
                                            <li>
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>Укажите метраж помещения, в котором<br> предполагается работа кондиционера</h2>
                                        <div class="chooseWithoutPhoto">
                                            <div class="col">
                                                <div class="line">
                                                    <input type="radio" name="size" value="До 25 м2" id="size25">
                                                    <label for="size25">До 25 м2</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="size" value="26-50 м2" id="size2650">
                                                    <label for="size2650">26-50 м2</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="size" value="51-80 м2" id="size5180">
                                                    <label for="size5180">51-80 м2</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="line">
                                                    <input type="radio" name="size" value="80-130 м2" id="size80130">
                                                    <label for="size80130">80-130 м2</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="size" value="Более 130 м2" id="size130more">
                                                    <label for="size130more">Более 130 м2</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="size" value="Не знаю" id="sizedn">
                                                    <label for="sizedn">Не знаю</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nota"> <img src="img/screen3/phone.png" alt="" class="icon">
                                            <p>Если Вы сомневаетесь в выборе ответа, получите бесплатную консультацию инженера
                                                <br> или пригласите замерщика прямо сейчас. Просто оставьте свой номер телефона</p> <a href="#call" class="fancy button2">Получить консультацию</a> </div>
                                    </div>
                                    <div class="nextBottomBlock">
                                        <div class="cont">
                                            <p class="button prev">Назад</p>
                                            <p class="button next">Далее</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Выберите тип кондиционера -->
                <div class="screen" style="display: none" id="screen4">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="done">
                                                <p>2</p>
                                            </li>
                                            <li class="active">
                                                <p>3</p>
                                            </li>
                                            <li>
                                                <p>4</p>
                                            </li>
                                            <li>
                                                <p>5</p>
                                            </li>
                                            <li>
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>Выберите тип кондиционера, <br>если уже определились с этим критерием</h2>
                                        <ul class="chooseWithPhoto officeChoose">
                                            <li>
                                                <label for="mobile"> <img src="img/screen4/office/mobilnui.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Мобильный кондиционер" id="mobile">
                                                        <p>Мобильного типа</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="kasset"> <img src="img/screen4/office/kasset.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Кассетного типа" id="kasset">
                                                        <p>Кассетного типа</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="potolok"> <img src="img/screen4/office/potolok.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Потолочного типа" id="potolok">
                                                        <p>Потолочного типа</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="split"> <img src="img/screen4/office/split_systema.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Настенная сплит система" id="split">
                                                        <p>Настенного типа</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="dntypeofis"> <img src="img/screen4/office/dn.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Другое/Не знаю" id="dntypeofis">
                                                        <p>Другое/Не знаю</p>
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                        <ul class="chooseWithPhoto flatChoose">
                                            <li>
                                                <label for="nasten"> <img src="img/screen4/house/nasten.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Настенного типа" id="nasten"> Настенного типа </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="okon"> <img src="img/screen4/house/okon.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Оконного типа" id="okon"> Оконного типа <span>(моноблочный вид)</span> </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="napol"> <img src="img/screen4/house/napol.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Напольного типа" id="napol"> Напольного типа <span>(моноблочный вид)</span> </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="dntypeflat"> <img src="img/screen4/house/dn.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="radio" name="typecond" value="Другое/Не знаю" id="dntypeflat"> Другое/Не знаю </div>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="nota"> <img src="img/iconLamp.png" alt="" class="icon">
                                            <p> Получите профессиональную консультацию инженера для выбора типа кондиционера! <a href="#call" class="fancy button2">Получить консультацию</a> </p>
                                        </div>
                                    </div>
                                    <div class="nextBottomBlock">
                                        <div class="cont">
                                            <p class="button prev">Назад</p>
                                            <p class="button next">Далее</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Укажите приемлемый для вас бюджет на покупку -->
                <div class="screen" style="display: none" id="screen5">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="done">
                                                <p>2</p>
                                            </li>
                                            <li class="done">
                                                <p>3</p>
                                            </li>
                                            <li class="active">
                                                <p>4</p>
                                            </li>
                                            <li>
                                                <p>5</p>
                                            </li>
                                            <li>
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>Укажите приемлемый для Вас бюджет на покупку</h2>
                                        <div class="chooseWithoutPhoto">
                                            <div class="col">
                                                <div class="line">
                                                    <input type="radio" name="price" value="Эконом до 550 BYN" id="price500">
                                                    <label for="price500">Эконом до 550 BYN</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="price" value="Классик до 800 BYN" id="price800">
                                                    <label for="price800">Классик до 800 BYN</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="line">
                                                    <input type="radio" name="price" value="Премиум до 1600 BYN" id="price1600">
                                                    <label for="price1600">Премиум до 1600 BYN</label>
                                                </div>
                                                <div class="line">
                                                    <input type="radio" name="price" value="Другое/не знаю" id="pricedn">
                                                    <label for="pricedn">Другое/не знаю</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nota"> <img src="img/screen5/halva.png" alt="" class="img">
                                            <p> У нас можно расплачиваться картой рассрочки Халва!
                                                <br> Комфорт сегодня – оплата потом 
                                                <a href="#call" class="fancy button2">Заказать в рассрочку</a> 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="nextBottomBlock">
                                        <div class="cont">
                                            <p class="button prev">Назад</p>
                                            <p class="button next">Далее</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Выберите дополнительные параметры -->
                <div class="screen" style="display: none" id="screen6">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="done">
                                                <p>2</p>
                                            </li>
                                            <li class="done">
                                                <p>3</p>
                                            </li>
                                            <li class="done">
                                                <p>4</p>
                                            </li>
                                            <li class="active">
                                                <p>5</p>
                                            </li>
                                            <li>
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>                                Осталось совсем немного!<br>                                Выберите дополнительные параметры.                            </h2>
                                        <ul class="chooseWithPhoto">
                                            <li>
                                                <label for="installation"> <img src="img/screen6/installation.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="checkbox" name="additional[]" value="Нужна установка" id="installation">
                                                        <p>Нужна установка</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="efficiency"> <img src="img/screen6/efficiency.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="checkbox" name="additional[]" value="Повышенный класс энергоэффективности" id="efficiency">
                                                        <p>Повышенный класс энергоэффективности</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="noise"> <img src="img/screen6/noise.jpg" alt="">
                                                    <div class="choose">
                                                        <input type="checkbox" name="additional[]" value="Минимум шума при работе" id="noise">
                                                        <p>Минимум шума при работе</p>
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="nota">
                                            <p> Выберите название бренда, если у Вас есть предпочтения: </p>
                                            <select name="model" id="model">
                                                <option value="Выберите бренд" disabled selected>Выберите бренд</option>
                                                <option value="Oasis">Oasis</option>
                                                <option value="Komatsu">Komatsu</option>
                                                <option value="Electrolux">Electrolux</option>
                                                <option value="Cooper&hunter">Cooper&hunter</option>
                                                <option value="Gree">Gree</option>
                                                <option value="Mdv">Mdv</option>
                                                <option value="lessar">lessar</option>
                                                <option value="Mitsubusi">Mitsubusi</option>
                                                <option value="Daikin">Daikin</option>
                                                <option value="Panasonic">Panasonic</option>
                                                <option value="Toshiba">Toshiba</option>
                                                <option value="Energolux">Energolux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="nextBottomBlock">
                                        <div class="cont">
                                            <p class="button prev">Назад</p>
                                            <p class="button next">Далее</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Вы выбрали -->
                <div class="screen" style="display: none" id="screen7">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="done">
                                                <p>2</p>
                                            </li>
                                            <li class="done">
                                                <p>3</p>
                                            </li>
                                            <li class="done">
                                                <p>4</p>
                                            </li>
                                            <li class="done">
                                                <p>5</p>
                                            </li>
                                            <li class="active">
                                                <p>6</p>
                                            </li>
                                            <li>
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="next button2">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>Вы выбрали</h2>
                                        <ul>
                                            <li>
                                                <p class="pre"> <img src="img/screen7/arrow.png" alt=""> 1 </p>
                                                <p class="content"> Кондиционер <span class="fullWhere"></span> </p>
                                            </li>
                                            <li>
                                                <p class="pre"> <img src="img/screen7/arrow.png" alt=""> 2 </p>
                                                <p class="content"> Помещение <span class="fullSize"></span> </p>
                                            </li>
                                            <li>
                                                <p class="pre"> <img src="img/screen7/arrow.png" alt=""> 3 </p>
                                                <p class="content"> Кондиционер <span class="fullTypecond"></span> </p>
                                            </li>
                                            <li>
                                                <p class="pre"> <img src="img/screen7/arrow.png" alt=""> 4 </p>
                                                <p class="content"> <span class="fullPrice"></span> </p>
                                            </li>
                                            <li>
                                                <p class="pre"> <img src="img/screen7/arrow.png" alt=""> 5 </p>
                                                <p class="content"> Дополнительно: <span class="fullAdditional"></span> </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="progressBar">
                                        <div class="linebar">
                                            <div class="bar"></div>
                                        </div>
                                        <p class="text">Идёт поиск вариантов...</p>
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
                                <?include "templates/stepheader.php"?>
                                    <nav class="navigation">
                                        <div class="prev button2">
                                            <p> Предыдущий шаг </p>
                                        </div>
                                        <ul class="steps">
                                            <li class="done">
                                                <p>1</p>
                                            </li>
                                            <li class="done">
                                                <p>2</p>
                                            </li>
                                            <li class="done">
                                                <p>3</p>
                                            </li>
                                            <li class="done">
                                                <p>4</p>
                                            </li>
                                            <li class="done">
                                                <p>5</p>
                                            </li>
                                            <li class="done">
                                                <p>6</p>
                                            </li>
                                            <li class="active">
                                                <p>7</p>
                                            </li>
                                        </ul>
                                        <div class="button2 nextOpacity">
                                            <p> Следующий шаг </p>
                                        </div>
                                    </nav>
                                    <div class="quest">
                                        <h2>                                Поздравляем!                            </h2>
                                        <div class="variants"> В наличии <span class="num">12</span> моделей, соответствующих Вашим параметрам </div>
                                        <div class="description"> При покупке кондиционера Вы получаете дополнительную скидку до 15% от импортёра </div>
                                        <div class="leaveContacts"> Для закрепления скидки за Вашим номером, оставьте свои контакты </div>
                                        <div class="backtoQuest"> ‹ Вернуться к вопросам </div>
                                        <div class="inputsArea">
                                            <input type="text" name="name" id="name" placeholder="Ваше имя">
                                            <input type="text" name="phone" id="phone" placeholder="Ваш телефон *">
                                            <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                                            <input type="hidden" name="type" value="Калькулятор">
                                            <input type="hidden" name="utm_term" value="">
                                            <input type="hidden" name="utm_source" value="">
                                            <input type="hidden" name="utm_medium" value="">
                                            <input type="hidden" name="utm_campaign" value="">
                                            <input type="hidden" name="utm_content" value="">
                                            <input type="submit" class="button" value="получить скидку"> </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ThankYou -->
                <div class="screen" style="display: none" id="thankyou">
                    <div class="tabletview">
                        <div class="container">
                            <div class="plashka">
                                <div class="questLast">
                                    <h2>                                Спасибо!                            </h2>
                                    <div class="nota"> В ближайшее время с Вами свяжется менеджер БестКлимат, расскажет о результате подбора и уточнит стоимость кондиционера. </div>
                                    <div class="closeThankYou"> ‹ Вернуться на главную страницу </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Thank You -->
            <div id="call" style="display: none">
                <form action method="post" id="zvonokForm">
                    <h2>                Закажите обратный звонок                и в ближайшее время                мы Вам перезвоним            </h2>
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="text" name="phone" placeholder="Ваш телефон" required>
                    <input type="hidden" name="type" value="Заказ звонка">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="Заказать звонок" class="button"> </form>
            </div>
            <?    $utm_term = $_GET["utm_term"];    quotemeta($utm_term);    $utm_source = $_GET["utm_source"];    quotemeta($utm_source);    $utm_medium = $_GET["utm_medium"];    quotemeta($utm_medium);    $utm_campaign = $_GET["utm_campaign"];    quotemeta($utm_campaign);    $utm_content = $_GET["utm_content"];    quotemeta($utm_content);    echo '    <script>        $("input[name=utm_term]").val("'.$utm_term.'");        $("input[name=utm_source]").val("'.$utm_source.'");        $("input[name=utm_medium]").val("'.$utm_medium.'");        $("input[name=utm_campaign]").val("'.$utm_campaign.'");        $("input[name=utm_content]").val("'.$utm_content.'");    </script>    ';    ?>
        </div>
        <div class="showAllBlocks"></div>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter47611696 = new Ya.Metrika({
                            id: 47611696,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {}
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function() {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/47611696" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </body>

</html>