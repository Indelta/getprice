<?php //require_once 'config.php';?>

<?php

$phone = '<a href="tel:+375293357092" class="tel">+375(29)<span>335-70-92</span></a>';

$date = date("d.m.Y");

?>



<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Продажа водонагревателей напрямую от импортёра. Лучшие цены в РБ.</title>

    <meta name="description"

          content="Накопительные и проточные водонагреватели. Широкий выбор моделей. Бесплатная доставка по Беларуси.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/jquery-3.1.1.min.js"></script>

    <script src="js/jquery-ui.min.js"></script>

    <script src="js/jquery.ui.touch-punch.min.js"></script>

    <script src="js/jquery.maskedinput.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="chosen/chosen.jquery.min.js"></script>

    <script src="js/script.js"></script>

    <script src="js/url.min.js"></script>

    <!-- <link href="img/favicon.ico" rel="shortcut icon"> -->

    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="chosen/chosen.min.css">

    <link rel="stylesheet/less" href="css/style.less">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-26"></script>

    <script>  

        window.dataLayer = window.dataLayer || [];  

        function gtag(){dataLayer.push(arguments);}  

        gtag('js', new Date());  gtag('config', 'UA-90181425-26');  

        /* Accurate bounce rate by time */

        setTimeout(function(){gtag('event', location.pathname, {  'event_category': 'Новый посетитель'});}, 15000);

    </script>

</head>

<body>

<div class="showAllBlocks"></div>  

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

        <?php echo $phone;?>

    </div>

</div>



<div id="kalkulator">

    <form action="" method="POST" id="kalkulatorForm">

        <!-- главный экран -->

        <div class="screen">

            <?php include 'templates/header.php';?>

            <div class="utp" id="utp">

                <div class="container">

                    <h1>Водонагреватели по ценам импортёра</h1>

                    <div class="subtitle-block">

                        <p>Подберите оптимальный водонагреватель по вашим параметрам и получите эксклюзивную скидку 10% от импортера</p>

                        <span>Вы экономите время менеджера - мы экономим Ваши деньги!</span>

                        <a class="sticker fancy" href="#call">

                            <!-- <img src="img/utp/sticker3.png" alt=""> -->

                            <p>от <span>135</span> BYN</p>

                        </a>

                    </div>

                    <div class="button pulse-btn next-btn">Подобрать водонагреватель</div>

                    <div class="pluses">

                        <div class="item">

                            <div class="icon"><img src="img/utp/icon-1.png" alt=""></div>

                            <span>Самый большой выбор <br>брендов в Беларуси</span>

                        </div>

                        <div class="item">

                            <div class="icon"><img src="img/utp/icon-2.png" alt=""></div>

                            <span>Бесплатная <br> доставка по Минску</span>

                        </div>

                        <div class="item">

                            <div class="icon"><img src="img/utp/icon-3.png" alt=""></div>

                            <span>Гарантия лучшей <br>цены</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="logos">

                <div class="container">

                    <div class="logos-inner owl-carousel">

                        <div class="item"><img src="img/utp/ariston.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/ballu.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/hyundai.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/oasis.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/regent.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/timberk.jpg" alt=""></div>

                        <div class="item"><img src="img/utp/zanussi.jpg" alt=""></div>

                    </div>

                </div>

            </div>

            <div class="copyright">

                <div class="container">

                    <p class="unp">ООО "БЭСТКЛИМАТ", УНП 192663929</p>

                    <a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a>

                </div>

            </div>

        </div>

        <!-- куда установить водонагреватель -->

        <div id="screen1" class="screen" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <ul class="steps">

                            <li class="active">1</li>

                            <li>2</li>

                            <li>3</li>

                            <li>4</li>

                            <li>5</li>

                            <li>6</li>

                            <!-- <li>7</li> -->

                        </ul>

                        <div class="next">Следующий шаг</div>

                    </div>

                    <div class="plashka">

                        <p class="question">Куда вы хотите установить водонагреватель?</p>

                        <div class="answers">

                            <label for="kvartira" class="selected">

                                <p class="imgBlock">

                                    <img src="img/calculator/step1/kvartira.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="place" value="в квартиру" id="kvartira" checked>

                                    В квартиру

                                </p>

                            </label>

                            <label for="dom">

                                <p class="imgBlock">

                                    <img src="img/calculator/step1/dacha2.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="place" value="В частный дом" id="dom">

                                    В частный дом

                                </p>

                            </label>

                            <label for="dacha">

                                <p class="imgBlock">

                                    <img src="img/calculator/step1/chastnyi-dom.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="place" value="На дачу" id="dacha">

                                    На дачу

                                </p>

                            </label>

                            <label for="other-place">

                                <p class="imgBlock">

                                    <img src="img/calculator/step1/hz.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="place" value="не знаю" id="other-place">

                                    Не знаю

                                </p>

                            </label>

                        </div>

                        <div class="hint">

                            <p>

                                В зависимости от типа помещения выбираются характеристики системы водонагрева. 

                                Такой подход позволяет нашим клиентам выбирать самые подходящие в каждой конкретной 

                                ситуации водонагреватели, не переплачивая за ненужные функции. 

                            </p>

                        </div>

                        <div class="nav-buttons">

                            <div class="next-btn">далее</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- точки водозабора воды -->

        <div id="screen2" class="screen" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <div class="prev">Предыдущий шаг</div>

                        <ul class="steps">

                            <li class="active">1</li>

                            <li class="active">2</li>

                            <li>3</li>

                            <li>4</li>

                            <li>5</li>

                            <li>6</li>

                            <!-- <li>7</li> -->

                        </ul>

                        <div class="next">Следующий шаг</div>

                    </div>

                    <div class="plashka">

                        <p class="question">Укажите, пожалуйста, количество точек водозабора</p>

                        <p class="description">Например: 1 душ и 1 раковина на кухне, это 2 точки водозабора. 

                            Точка водозабора это любой кран, в который должна поступать вода из водонагревателя.

                        </p>

                        <div class="answers">

                            <p class="answers-title">Количество точек водозабора</p>

                            <div class="counter">

                                <span class="minus"> - </span>

                                <input type="text" name="vodozabor" value="1">

                                <span class="plus"> + </span>

                            </div>

                            <label for="vodozabor">

                                <input type="checkbox" name="vodozabor-dont-know" value="Не знаю" id="vodozabor"> Не знаю

                            </label>

                        </div>

                        <div class="hint">

                            <p>

                                От точек водозабора зависит тип водонагревателя и рекомендуемый объём накопительного

                                бака. Проточные водонагреватели рассчитаны на одну точку водозабора. 

                            </p>

                        </div>

                        <div class="nav-buttons">

                            <div class="prev-btn">Назад</div>

                            <div class="next-btn">далее</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- количество человек -->

        <div id="screen3" class="screen" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <div class="prev">Предыдущий шаг</div>

                        <ul class="steps">

                            <li class="active">1</li>

                            <li class="active">2</li>

                            <li class="active">3</li>

                            <li>4</li>

                            <li>5</li>

                            <li>6</li>

                            <!-- <li>7</li> -->

                        </ul>

                        <div class="next">Следующий шаг</div>

                    </div>

                    <div class="plashka">

                        <p class="question">Укажите количество человек, которые будут пользоваться <br>горячей водой ежедневно</p>

                        <div class="people-count">

                            <div class="counter-wrap">

                                <div class="counter">

                                    <span class="minus"> - </span>

                                    <input type="text" class="input-count" name="people-count" value="2">

                                    <span class="plus"> + </span>

                                </div>

                                <p class="counter-name">Человека</p>

                            </div>

                            <span><input type="radio" name="people-count" class="radio-dont-know" value="Не знаю"> Не знаю</span>

                        </div>

                        <p class="question">Выберите желаемый обьем бака водонагревателя</p>

                        <div class="amount">

                            <span class="amount-title">Обьем бака (литры)</span>

                            <label for="min-amount">от</label>

                            <input type="text" name="amount-min" value="5" id="min-amount">

                            <label for="max-amount">до</label>

                            <input type="text" name="amount-max" value="420" id="max-amount">

                            <input type="radio" name="amount-none"  value="Не знаю" id="amount-dont-know">

                            <label for="amount-dont-know">Не знаю</label>

                            <div class="slider" id="amount-slider"></div>

                        </div>

                        <div class="nav-buttons">

                            <div class="prev-btn">Назад</div>

                            <div class="next-btn">далее</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- тип установки водонагревателя -->

        <div id="screen4" class="screen" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <div class="prev">Предыдущий шаг</div>

                        <ul class="steps">

                            <li class="active">1</li>

                            <li class="active">2</li>

                            <li class="active">3</li>

                            <li class="active">4</li>

                            <li>5</li>

                            <li>6</li>

                            <!-- <li>7</li> -->

                        </ul>

                        <div class="next">Следующий шаг</div>

                    </div>

                    <div class="plashka">

                        <p class="question">Выберите тип установки водонагревателя</p>

                        <div class="answer">

                            <label for="nastenniy" class="selected">

                                <p class="imgBlock">

                                    <img src="img/calculator/step4/nastennui.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="installType" value="Настенный" id="nastenniy" checked>

                                    Настенный

                                </p>

                                <img class="desc-icon" src="img/calculator/step4/icon.jpg">

                                <p class="description">

                                    Водонагреватели с креплением на стену компактны и подходят для небольших помещений — в этом их основное достоинство. 

                                    К недостаткам подобной компактности можно отнести, то что у накопительных моделей объем бака при креплении на стену 

                                    составляет не более 100 литров. Впрочем, этого количества горячей воды при среднем потреблении достаточно для семьи 

                                    из трех-четырех человек.

                                </p>

                            </label>

                            <label for="napolniy">

                                <p class="imgBlock">

                                    <img src="img/calculator/step4/napolniu.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="installType" value="Напольный" id="napolniy">

                                    Напольный

                                </p>

                                <img class="desc-icon" src="img/calculator/step4/icon.jpg">

                                <p class="description">

                                    На полу обычно располагают накопительные нагреватели с баком от 115 литров и более. 

                                    Такие устройства объемнее своих настенных собратьев, зато позволяют обеспечить горячей 

                                    водой большую семью, проживающую в квартире или коттедже

                                </p>

                            </label>

                            <label for="type-dont-know">

                                <p class="imgBlock">

                                    <img src="img/calculator/step4/hz.jpg" alt="">

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="installType" value="Не знаю" id="type-dont-know">

                                    Не знаю

                                </p>

                            </label>

                        </div>

                        <div class="nav-buttons">

                            <div class="prev-btn">Назад</div>

                            <div class="next-btn lastQuest">далее</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- дополнительные параметры -->

        <!-- <div id="screen5" class="screen" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <div class="prev">Предыдущий шаг</div>

                        <ul class="steps">

                            <li class="active">1</li>

                            <li class="active">2</li>

                            <li class="active">3</li>

                            <li class="active">4</li>

                            <li class="active">5</li>

                            <li>6</li>

                            <li>7</li>

                        </ul>

                        <div class="next lastQuest">Следующий шаг</div>

                    </div>

                    <div class="plashka">

                        <p class="question">Выберите дополнительные параметры, <br>если вы уже определились с ними</p>

                        <div class="answer">

                            <div class="row">

                                <p class="flag">Индикация нагрева</p>

                                <p class="inputBlock">

                                    <input type="radio" name="indication" value="есть" id="dop-indication-t">

                                    <label for="dop-indication-t">есть</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="indication" value="Нет" id="dop-indication-f">

                                    <label for="dop-indication-f">Нет</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="indication" value="Не знаю" id="dop-indication-dn">

                                    <label for="dop-indication-dn">Не знаю</label>

                                </p>

                            </div>

                            <div class="row">

                                <p class="flag">Подводка</p>

                                <p class="inputBlock">

                                    <input type="radio" name="podvodka" value="верхняя" id="dop-podvodka-top">

                                    <label for="dop-podvodka-top">верхняя</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="podvodka" value="нижняя" id="dop-podvodka-bottom" checked>

                                    <label for="dop-podvodka-bottom">нижняя</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="podvodka" value="задняя/сбоку" id="dop-podvodka-back">

                                    <label for="dop-podvodka-back">задняя/сбоку</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="podvodka" value="не знаю" id="dop-podvodka-dn">

                                    <label for="dop-podvodka-dn">не знаю</label>

                                </p>

                            </div> -->

                            <!-- <div class="row">

                                <p class="flag">Компактные размеры</p>

                                <p class="inputBlock">

                                    <input type="radio" name="compact" value="есть" id="dop-compact-t">

                                    <label for="dop-compact-t">есть</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="compact" value="нет" id="dop-compact-b">

                                    <label for="dop-compact-b">нет</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="compact" value="не знаю" id="dop-compact-dn">

                                    <label for="dop-compact-dn">не знаю</label>

                                </p>

                            </div> -->

                            <!-- <div class="row">

                                <p class="flag">Защита от перегрева</p>

                                <p class="inputBlock">

                                    <input type="radio" name="zaschyta" value="да" id="dop-protect-t" checked>

                                    <label for="dop-protect-t">да</label>

                                </p>

                                <p class="inputBlock">

                                    <input type="radio" name="zaschyta" value="Не важно" id="dop-protect-f">

                                    <label for="dop-protect-f">не важно</label>

                                </p>

                            </div>

                        </div>

                        <div class="nav-buttons">

                            <div class="prev-btn">Назад</div>

                            <div class="next-btn lastQuest">далее</div>

                        </div>

                    </div>

                </div>

            </div>

        </div> -->

        <!-- вы выбрали -->

        <div class="screen" id="screen6" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="black-bg">

                    <div class="container">

                        <div class="navigation">

                            <div class="prev">Предыдущий шаг</div>

                            <ul class="steps">

                                <li class="active">1</li>

                                <li class="active">2</li>

                                <li class="active">3</li>

                                <li class="active">4</li>

                                <li class="active">5</li>

                                <li class="active">6</li>

                                <!-- <li>7</li> -->

                            </ul>

                            <div class="next">Следующий шаг</div>

                        </div>

                    </div>

                </div>

                <div class="container">

                    <div class="plashka">

                        <p class="question">Вы выбрали</p>

                        <ul class="final-list">

                            <li>Водонагреватель <span id="place-itog"></span></li>

                            <li>Количество точек водозабора: <span id="vodozabor-itog"></span></li>

                            <li>Для <span id="people-count-itog"></span> человек</li>

                            <li>Объем: <span id="amount-none-itog">от <span id="amount-min-itog"></span> до <span id="amount-max-itog"></span> литров</span></li>

                            <li>Тип установки: <span id="installType-itog"></span></li>

                            <!-- <li>Дополнительно: <span id="dop-parameters"></span></li> -->

                        </ul>

                    </div>

                </div>

                <div class="status-bar">

                    <div class="container">

                        <p class="text">Идет поиск вариантов...</p>

                        <div class="status-outer">

                            <div class="status-inner"><span class="persentage">0%</span></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="screen" id="screen7" style="display:none;">

            <?php include 'templates/header.php';?>

            <div class="tableview">

                <div class="container">

                    <div class="navigation">

                        <div class="prev">Предыдущий шаг</div>

                        <ul class="steps">

                            <li class="active">1</li>

                            <li class="active">2</li>

                            <li class="active">3</li>

                            <li class="active">4</li>

                            <li class="active">5</li>

                            <li class="active">6</li>

                            <li class="active">7</li>

                        </ul>

                    </div>

                    <div class="plashka">

                        <div class="final-form">

                            <p class="title">Поздравляем!</p>

                            <p class="subtitle">

                                <span>Вы получаете скидку 10% на любой водонагреватель!</span> 

                                Для закрепления скидки за вашим номером, пожалуйста, оставьте свои контакты

                            </p>

                            <div class="input-group">

                                <input type="text" name="name" placeholder="Имя">

                                <input type="text" name="phone" placeholder="Телефон">

                                <input type="hidden" name="type" value="Калькулятор">

                                <input type="hidden" name="utm_term" value="">

                                <input type="hidden" name="utm_source" value="">

                                <input type="hidden" name="utm_medium" value="">

                                <input type="hidden" name="utm_campaign" value="">

                                <input type="hidden" name="utm_content" value="">

                                <input type="submit" class="button" value="получить скидку">

                            </div>

                        </div>

                        <p class="back prev"> &lsaquo; <span>Вернуться к вопросам</span></p>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

<div id="thankyou" style="display:none;">

   <?php include 'templates/header.php';?>

   <div class="thankyou-wrap">

       <div class="thankyou-plashka">

            <img src="img/thank-you/icon.png" alt="">

            <p class="title">Спасибо!</p>

            <p class="subtitle">В ближайшее время с Вами свяжется менеджер</p>

       </div>

       <div class="backToMain"><big>&lsaquo;</big> Вернуться на главную страницу</div>

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

<?php

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

                w.yaCounter49403449 = new Ya.Metrika2({                    

                    id:49403449,                    

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

        s.src = "https://mc.yandex.ru/metrika/tag.js";        

        if (w.opera == "[object Opera]") {            

            d.addEventListener("DOMContentLoaded", f, false);        

        } else { f(); }    

    })(document, window, "yandex_metrika_callbacks2");

</script>

<noscript><div><img src="https://mc.yandex.ru/watch/49403449" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->

</body>

</html>