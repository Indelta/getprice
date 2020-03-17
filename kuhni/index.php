<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кухни по индивидуальным проектам</title>
    <meta name="description"
          content="Кухни под заказ в Минске и Минском районе. Собственное производство. Бесплатный дизайн-проект. Гибкие цены.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-23"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90181425-23');
        /* Accurate bounce rate by time */
        setTimeout(function(){
            gtag('event', location.pathname, {
                'event_category': 'Новый посетитель'
            });
        }, 15000);
    </script>
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
                Мы Вам перезвоним!
            </p>
        </div>
        <form action="" method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
            <input type="hidden" name="type" value="Заказ звонка">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать звонок">
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <a href="tel:+375293755755">+375 (29) 375-57-55</a>
            <a href="tel:+375333313130">+375 (33) 331-31-30</a>
        </div>
    </div>
    <div id="consultation" style="display: none">
        <h2>
            Оставьте свои контакты и наш консультант<br>
            свяжется с Вами в ближайшее время
        </h2>
        <form action="" method="post" id="consultationForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
            <input type="hidden" name="type" value="Заказ консультации">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Отправить" class="button">
        </form>
    </div>
    <form action method="post" id="kalkulatorForm">
        <div class="screen" id="screen1">
            <header>
                <div class="container">
                    <img src="img/logo.png" class="logo" alt="">
                    <p class="sitename">Изготовление кухонь<br> под заказ в Минске</p>
                    <a href="#consultation" class="fancy button">Заказать звонок</a>
                    <div class="phones">
                        <a href="tel:+375293755755" class="tel">+375 (29) <span>375-57-55</span></a>
                        <a href="tel:+375333313130" class="tel">+375 (33) <span>331-31-30‬</span></a>
                    </div>
                </div>
            </header>
            <div class="tabletview">
                <div class="container">
                    <div class="utp">
                        <?php
                        $key_get = $_GET["utm_term"];
                        quotemeta($key_get);
                        $myquery = "SELECT * FROM `utp_metki_kuhni` WHERE `key` LIKE '$key_get' ORDER BY `id`";
                        $result = $connect->query($myquery);
                        $mass = $result->fetch_array(MYSQLI_ASSOC);
                        $str1=$mass['str1'];
                        $str2=$mass['str2'];
                        if (empty($str1)) {
                            $str1='Изготавливаем кухни из массива, шпона, акрила и МДФ';
                            $str2='по индивидуальному дизайну от <span>800 руб</span>.*';
                        }
                        echo '<h1>'.$str1.'</h1>';
                        echo '<p class="description">'.$str2.'</p>';
                        ?>
                        <div class="obol">
                            <p class="title">Ответьте на <span>5 простых вопросов</span> и мы рассчитаем<br> cтоимость кухни по Вашим параметрам</p>
                            <div class="startQuest button">
                                <p>
                                    Рассчитать стоимость кухни
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="nota">*стоимость за метр погонный</div>
                    <div class="pluses">
                        <div class="plus">
                            <img src="img/screen1/1.png" alt="">
                            <p>
                                Фирменная рассрочка<br> на кухню до 12 месяцев
                            </p>
                        </div>
                        <div class="plus">
                            <img src="img/screen1/2.png" alt="">
                            <p>
                                Рассрочка на 6 месяцев<br> по карте «Халва»
                            </p>
                        </div>
                        <div class="plus">
                            <img src="img/screen1/3.png" alt="">
                            <p>
                                Разработаем 3 бесплатных<br> дизайн-проекта кухни
                            </p>
                        </div>
                        <div class="plus">
                            <img src="img/screen1/4.png" alt="">
                            <p>
                                Салон кухонь в ТЦ «Некрасовский»<br> по адресу ул. Богдановича, 117
                            </p>
                        </div>
                    </div>
                    <div class="zayKolvo">
                        <p class="unp">
                            УНП 192494960
                        </p>
                        <p class="deltaplan">
                            <a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                            </p>
                            <p class="prev mobNav" style="display: none">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                            </p>
                            <ul class="steps">
                                <li class="active" id="step2">
                                    <p>1</p>
                                </li>
                                <li id="step3">
                                    <p>2</p>
                                </li>
                                <li id="step4">
                                    <p>3</p>
                                </li>
                                <li id="step5">
                                    <p>4</p>
                                </li>
                                <li id="step6">
                                    <p>5</p>
                                </li>
                                <li id="step7">
                                    <p>6</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Выберите тип <span>(форму)</span> будущей кухни
                        </p>
                        <div class="sticker">
                            <a href="#consultation" class="fancy">Подробнее</a>
                            <p class="zero">0%</p>
                            <p class="text">
                                Установим кухню<br> в рассрочку под
                            </p>
                        </div>
                        <div class="quest">
                            <div class="item">
                                <label for="lineynaya">
                                    <img src="img/types/lineynaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="lineynaya" value="Линейная" checked>
                                        Линейная
                                    </p>
                                </label>
                            </div>
                            <div class="item">
                                <label for="dvuhlineynaya">
                                    <img src="img/types/dvuhlineynaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="dvuhlineynaya" value="Двухлинейная">
                                        Двухлинейная
                                    </p>
                                </label>
                            </div>
                            <div class="item">
                                <label for="uglovaya">
                                    <img src="img/types/uglovaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="uglovaya" value="Угловая">
                                        Угловая
                                    </p>
                                </label>
                            </div>
                            <div class="item">
                                <label for="pobraznaya">
                                    <img src="img/types/pobraznaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="pobraznaya" value="П-образная">
                                        П-образная
                                    </p>
                                </label>
                            </div>
                            <div class="item">
                                <label for="gobraznaya">
                                    <img src="img/types/gobraznaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="gobraznaya" value="G-образная">
                                        G-образная
                                    </p>
                                </label>
                            </div>
                            <div class="item">
                                <label for="ostrovnaya">
                                    <img src="img/types/ostrovnaya.png" alt="">
                                    <p>
                                        <input type="radio" name="kuhType" id="ostrovnaya" value="Островная">
                                        Островная
                                    </p>
                                </label>
                            </div>
                        </div>
                        <p class="shag">Шаг 1</p>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                            </p>
                            <p class="prev mobNav" style="display: none">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                            </p>
                            <ul class="steps">
                                <li class="done" id="step2">
                                    <p>1</p>
                                </li>
                                <li  class="active" id="step3">
                                    <p>2</p>
                                </li>
                                <li id="step4">
                                    <p>3</p>
                                </li>
                                <li id="step5">
                                    <p>4</p>
                                </li>
                                <li id="step6">
                                    <p>5</p>
                                </li>
                                <li id="step7">
                                    <p>6</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Выберите размер помещения под кухню
                        </p>
                        <div class="quest">
                            <div class="razmerBlock">
                                <div class="input">
                                    <input type="text" name="kuhSize" value="14">
                                    <p>м<sup>2</sup></p>
                                </div>
                                <div id="razmerSlider"></div>
                                <div class="deleniya">
                                    <p class="left">
                                        <span>3</span> м<sup>2</sup>
                                    </p>
                                    <p class="center">
                                        <span>10</span> м<sup>2</sup>
                                    </p>
                                    <p class="right">
                                        <span>25</span> м<sup>2</sup>
                                    </p>
                                </div>
                            </div>
                            <div class="description">
                                <p>
                                    Мы изготавливаем кухни по индивидуальным проектам. Перед разработкой дизайн-проекта наш инженер-дизайнер приедет к Вам и произведёт точные замеры помещения под кухню.
                                </p>
                                <p>
                                    После чего мы <span>АБСОЛЮТНО БЕСПЛАТНО</span> подготовим индивидуальный проект кухни! Мы учтём все Ваши пожелания и особенности помещения (расположение розеток, коммуникаций под сантехнику, высоту потолков и многое другое)
                                </p>
                                <a href="#consultation" class="fancy button">
                                    Хочу бесплатный замер и консультацию
                                </a>
                            </div>
                            <div class="metrazh">
                                Метраж Вашей кухни
                            </div>
                        </div>
                        <div class="shag">Шаг 2</div>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                            
                        </p>
                        <p class="prev mobNav" style="display: none">
                            
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                            
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2">
                                <p>1</p>
                            </li>
                            <li class="done" id="step3">
                                <p>2</p>
                            </li>
                            <li class="active" id="step4">
                                <p>3</p>
                            </li>
                            <li id="step5">
                                <p>4</p>
                            </li>
                            <li id="step6">
                                <p>5</p>
                            </li>
                            <li id="step7">
                                <p>6</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <div class="questPart">
                            <p class="question">
                                Выберите стиль кухни
                            </p>
                            <div class="item classic">
                                <input type="radio" name="kuhStyle" id="classic" value="Классика">
                                <label for="classic">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="" class="up">
                                        Классика
                                    </p>
                                    <p class="text">
                                        Кухня, созданная в классическом стиле — это сбалансированное сочетание правильных форм с цветами, излучающими покой и основательность. Такая кухня отличается сдержанным достоинством, вкусом и респектабельностью. <strong>Всем клиентам дизайн-проект кухни бесплатно!</strong>
                                    </p>
                                </label>
                            </div>
                            <div class="item modern">
                                <input type="radio" name="kuhStyle" id="modern" value="Модерн">
                                <label for="modern">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="">
                                        Модерн
                                    </p>
                                    <p class="text">
                                        Этот стиль, как правило, предпочитают творческие люди. Модерну присущи яркие цвета в дизайне и оригинальные формы предметов интерьера. Кухня в этом стиле — это настроение в сочетании с функциональностью. <strong>Всем клиентам дизайн-проект кухни бесплатно!</strong>
                                    </p>
                                </label>
                            </div>
                            <div class="item minimalysm">
                                <input type="radio" name="kuhStyle" id="minimalysm" value="Минимализм">
                                <label for="minimalysm">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="">
                                        Минимализм
                                    </p>
                                    <p class="text">
                                        Минимализм — это простые, близкие к совершенству формы, пространственная свобода, мобильность, аскетизм цветовой палитры. Дизайн кухни в этом стиле — это максимальная функциональность при абсолютных формах и простых линиях кухни со сдержанным цветовым решением. <strong>Всем клиентам дизайн-проект кухни бесплатно!</strong>
                                    </p>
                                </label>
                            </div>
                            <div class="item neoclassic">
                                <input type="radio" name="kuhStyle" id="neoclassic" value="Неоклассика">
                                <label for="neoclassic">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="">
                                        Неоклассика
                                    </p>
                                    <p class="text">
                                        Неоклассический стиль соединил в себе лучшие элементы классицизма и современных стилей. Неоклассика в интерьере кухни сделает ее простотой и светлой в оформлении. <b>Всем клиентам дизайн-проект кухни бесплатно!</b></p>
                                </label>
                            </div>
                            <div class="item hiteck">
                                <input type="radio" name="kuhStyle" id="hiteck" value="Хай-тек">
                                <label for="hiteck">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="">
                                        Хай-тек
                                    </p>
                                    <p class="text">
                                        В кухнях этот стиль выражается преимущественно в стекло-металлических конструкциях и, как правило, монохромной гамме, активно используются технические новинки. Основной акцент приходится на функциональность, отсутствие пышного декора, геометрию. <strong>Всем клиентам дизайн-проект кухни бесплатно!</strong>
                                    </p>
                                </label>
                            </div>
                            <div class="item myself">
                                <input type="radio" name="kuhStyle" id="myself" value="Мой собственный" checked>
                                <label for="myself">
                                    <p class="title">
                                        <img src="img/arrDown.png" alt="">
                                        Мой собственный
                                    </p>
                                    <p class="text">
                                        Наш опытный дизайнер, превратит Ваши мечты и фантазии в дизайн-проект реальной кухни, а собственное производство изготовит кухню мечты специально для Вас! <strong>Всем клиентам дизайн-проект кухни бесплатно!</strong>
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="catalogPart">
<!--                            <div class="owl-carousel classic catalogCarousel">-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/classic/1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/classic/2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/classic/3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/classic/4.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/classic/5.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="owl-carousel modern catalogCarousel">-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/modern/1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/modern/2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/modern/3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/modern/4.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/modern/5.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="owl-carousel minimalysm catalogCarousel">-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/minimalysm/1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/minimalysm/2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/minimalysm/3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/minimalysm/4.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/minimalysm/5.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="owl-carousel hiteck catalogCarousel">-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/hiteck/1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/hiteck/2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/hiteck/3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/hiteck/4.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/hiteck/5.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="owl-carousel myself catalogCarousel">-->
<!--                                <div class="item">-->
<!--                                    <img src="img/catalog/myself/1.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="classic">
                                <img src="img/catalog/classic/massiv.jpg" alt="" class="massiv">
                            </div>
                            <div class="modern">
                                <img src="img/catalog/modern/massiv.jpg" alt="" class="massiv">
                                <img src="img/catalog/modern/acryl.jpg" alt="" class="acryl">
                                <img src="img/catalog/modern/mdf.jpg" alt="" class="mdf">
                            </div>
                            <div class="minimalysm">
                                <img src="img/catalog/minimalysm/acryl.jpg" alt="" class="acryl">
                                <img src="img/catalog/minimalysm/mdf.jpg" alt="" class="mdf">
                            </div>
                            <div class="hiteck">
                                <img src="img/catalog/hiteck/massiv.jpg" alt="" class="massiv">
                                <img src="img/catalog/hiteck/acryl.jpg" alt="" class="acryl">
                                <img src="img/catalog/hiteck/mdf.jpg" alt="" class="mdf">
                            </div>
                            <div class="neoclassic">
                                <img src="img/catalog/neoclassic/massiv.jpg" alt="" class="massiv">
                            </div>
                            <div class="myself">
                                <img src="img/catalog/myself/1.jpg" alt="">
                            </div>
                            <a href="#consultation" class="fancy button">
                                Узнать стоимость такой кухни
                            </a>
                        </div>
                        <div class="shag">Шаг 3</div>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
<!--        <div class="screen" style="display: none" id="screen5">-->
<!--            <div class="tabletView">-->
<!--                <nav class="navigation">-->
<!--                    <div class="container">-->
<!--                        <p class="next mobNav" style="display: none">-->
<!--                            Следующий шаг-->
<!--                        </p>-->
<!--                        <p class="prev mobNav" style="display: none">-->
<!--                            Предыдущий шаг-->
<!--                        </p>-->
<!--                        <p class="prev">-->
<!--                            Предыдущий шаг-->
<!--                        </p>-->
<!--                        <p class="next">-->
<!--                            Следующий шаг-->
<!--                        </p>-->
<!--                        <ul class="steps">-->
<!--                            <li class="done" id="step2">-->
<!--                                <p>1</p>-->
<!--                            </li>-->
<!--                            <li class="done" id="step3">-->
<!--                                <p>2</p>-->
<!--                            </li>-->
<!--                            <li id="step4" class="done">-->
<!--                                <p>3</p>-->
<!--                            </li>-->
<!--                            <li class="active" id="step5">-->
<!--                                <p>4</p>-->
<!--                            </li>-->
<!--                            <li id="step6">-->
<!--                                <p>5</p>-->
<!--                            </li>-->
<!--                            <li id="step7">-->
<!--                                <p>6</p>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </nav>-->
<!--                <div class="plashka">-->
<!--                    <div class="container">-->
<!--                        <p class="question">-->
<!--                            Выберите материал фасадов кухни-->
<!--                        </p>-->
<!--                        <div class="quest">-->
<!--                            <div class="inputs">-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="plastic" value="Пластик" checked>-->
<!--                                    <label for="plastic">Пластик</label>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="plenka" value="Плёнка">-->
<!--                                    <label for="plenka">Плёнка</label>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="mdf" value="Краска по МДФ">-->
<!--                                    <label for="mdf">Краска по МДФ</label>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="glass" value="Стекло">-->
<!--                                    <label for="glass">Стекло</label>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="massiv" value="Массив">-->
<!--                                    <label for="massiv">Массив</label>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <input type="radio" name="kuhFasad" id="otherfasad" value="Другое/не знаю">-->
<!--                                    <label for="otherfasad">Другое / не знаю</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="illustrations">-->
<!--                                <img src="img/fasad/plastic.jpg" alt="" class="plastic">-->
<!--                                <img src="img/fasad/plenka.jpg" alt="" class="plenka">-->
<!--                                <img src="img/fasad/mdf.jpg" alt="" class="mdf">-->
<!--                                <img src="img/fasad/glass.jpg" alt="" class="glass">-->
<!--                                <img src="img/fasad/massiv.jpg" alt="" class="massiv">-->
<!--                                <img src="img/fasad/otherfasad.jpg" alt="" class="otherfasad">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="shag">Шаг 4</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="openNextStep"><p class="button">Далее</p></div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="screen" style="display: none" id="screen5">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                        </p>
                        <p class="prev mobNav" style="display: none">
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2">
                                <p>1</p>
                            </li>
                            <li class="done" id="step3">
                                <p>2</p>
                            </li>
                            <li id="step4" class="done">
                                <p>3</p>
                            </li>
                            <li class="active" id="step5">
                                <p>4</p>
                            </li>
                            <li id="step6">
                                <p>5</p>
                            </li>
                            <li id="step7">
                                <p>6</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="plashka">
                    <div class="container">
                        <p class="question">
                            Выберите предполагаемый бюджет для кухни
                        </p>
                        <div class="quest">
                            <div class="inputs">
                                <div class="stolbec">
                                    <ul>
                                        <li>
                                            <input type="radio" name="price" value="до 3000 рублей" id="p3000">
                                            <label for="p3000">до <span>3000</span> рублей</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="price" value="до 4000 рублей" id="p4000">
                                            <label for="p4000">до <span>4000</span> рублей</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="price" value="до 6000 рублей" id="p6000">
                                            <label for="p6000">до <span>6000</span> рублей</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="stolbec">
                                    <ul>
                                        <li>
                                            <input type="radio" name="price" value="до 8000 рублей" id="p8000">
                                            <label for="p8000">до <span>8000</span> рублей</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="price" value="до 10000 рублей" id="p10000">
                                            <label for="p10000">до <span>10000</span> рублей</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="price" value="более 10000 рублей" id="p10000m">
                                            <label for="p10000m">более <span>10000</span> рублей</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shag">Шаг 4</div>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen5-2">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                        </p>
                        <p class="prev mobNav" style="display: none">
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2">
                                <p>1</p>
                            </li>
                            <li class="done" id="step3">
                                <p>2</p>
                            </li>
                            <li id="step4" class="done">
                                <p>3</p>
                            </li>
                            <li class="done" id="step5">
                                <p>4</p>
                            </li>
                            <li class="active" id="step6">
                                <p>5</p>
                            </li>
                            <li id="step7">
                                <p>6</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="plashka">
                    <div class="container">
                        <p class="question">
                            Выберите предпочтительный способ оплаты
                        </p>
                        <div class="quest">
                            <div class="inputs">
                                <ul>
                                    <li>
                                        <label>
                                            <img src="img/oplata/1.png" alt="">
                                            <div class="choose">
                                                <input type="radio" name="oplata" value="Оплата одним платежом">
                                                <p>Оплата одним платежом</p>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <img src="img/oplata/2.png" alt="">
                                            <div class="choose">
                                                <input type="radio" name="oplata" value="Оплата в 2 платежа">
                                                <p>Оплата<br> в 2 платежа</p>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <img src="img/oplata/3.png" alt="">
                                            <div class="choose">
                                                <input type="radio" name="oplata" value="В рассрочку до 12 месяцев">
                                                <p>В рассрочку до 12 месяцев</p>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <img src="img/oplata/4.png" alt="">
                                            <div class="choose">
                                                <input type="radio" name="oplata" value="В рассрочку по карте Халва (до 6 месяцев)">
                                                <p>В рассрочку по карте Халва (до 6 месяцев)</p>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="shag">Шаг 5</div>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
<!--        <div class="screen" style="display: none" id="screen6">-->
<!--            <div class="tabletView">-->
<!--                <nav class="navigation">-->
<!--                    <div class="container">-->
<!--                        <p class="next mobNav" style="display: none">-->
<!--                            Следующий шаг-->
<!--                            -->
<!--                        </p>-->
<!--                        <p class="prev mobNav" style="display: none">-->
<!--                            -->
<!--                            Предыдущий шаг-->
<!--                        </p>-->
<!--                        <p class="prev">-->
<!--                            -->
<!--                            Предыдущий шаг-->
<!--                        </p>-->
<!--                        <p class="next">-->
<!--                            Следующий шаг-->
<!--                            -->
<!--                        </p>-->
<!--                        <ul class="steps">-->
<!--                            <li class="done" id="step2">-->
<!--                                <p>1</p>-->
<!--                            </li>-->
<!--                            <li class="done" id="step3">-->
<!--                                <p>2</p>-->
<!--                            </li>-->
<!--                            <li id="step4" class="done">-->
<!--                                <p>3</p>-->
<!--                            </li>-->
<!--                            <li id="step5" class="done">-->
<!--                                <p>4</p>-->
<!--                            </li>-->
<!--                            <li id="step6" class="active">-->
<!--                                <p>5</p>-->
<!--                            </li>-->
<!--                            <li id="step7">-->
<!--                                <p>6</p>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </nav>-->
<!--                <div class="container">-->
<!--                    <div class="plashka">-->
<!--                        <p class="question">-->
<!--                            Выберите встраиваемую технику-->
<!--                        </p>-->
<!--                        <div class="quest">-->
<!--                            <div class="item">-->
<!--                                <label for="holodilnik">-->
<!--                                    <div class="imgBlock holodilnik"></div>-->
<!--                                    <input type="checkbox" id="holodilnik" name="vstrTehnika[]" value="Холодильник">-->
<!--                                    <p>Холодильник</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="varpanel">-->
<!--                                    <div class="imgBlock varpanel"></div>-->
<!--                                    <input type="checkbox" id="varpanel" name="vstrTehnika[]" value="Варочная панель">-->
<!--                                    <p>Варочная панель</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="duhovka">-->
<!--                                    <div class="imgBlock duhovka"></div>-->
<!--                                    <input type="checkbox" id="duhovka" name="vstrTehnika[]" value="Духовой шкаф">-->
<!--                                    <p>Духовой шкаф</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="mikrovolnovka">-->
<!--                                    <div class="imgBlock mikrovolnovka"></div>-->
<!--                                    <input type="checkbox" id="mikrovolnovka" name="vstrTehnika[]" value="Микроволновая печь">-->
<!--                                    <p>Микроволновая печь</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="posudomoyka">-->
<!--                                    <div class="imgBlock posudomoyka"></div>-->
<!--                                    <input type="checkbox" id="posudomoyka" name="vstrTehnika[]" value="Посудомоечная машина">-->
<!--                                    <p>Посудомоечная машина</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="stiralka">-->
<!--                                    <div class="imgBlock stiralka"></div>-->
<!--                                    <input type="checkbox" id="stiralka" name="vstrTehnika[]" value="Стиральная машина">-->
<!--                                    <p>Стиральная машина</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="vytyazhka">-->
<!--                                    <div class="imgBlock vytyazhka"></div>-->
<!--                                    <input type="checkbox" id="vytyazhka" name="vstrTehnika[]" value="Вытяжка">-->
<!--                                    <p>Вытяжка</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <label for="othertehnika">-->
<!--                                    <div class="imgBlock othertehnika"></div>-->
<!--                                    <input type="checkbox" id="othertehnika" name="vstrTehnika[]" value="Другое / Не знаю">-->
<!--                                    <p>Другое / Не знаю</p>-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="shag">Шаг 5</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="openNextStep"><p class="button">Далее</p></div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="screen" style="display: none" id="screen7">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                            
                        </p>
                        <p class="prev mobNav" style="display: none">
                            
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                            
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2">
                                <p>1</p>
                            </li>
                            <li class="done" id="step3">
                                <p>2</p>
                            </li>
                            <li id="step4" class="done">
                                <p>3</p>
                            </li>
                            <li id="step5" class="done">
                                <p>4</p>
                            </li>
                            <li id="step6" class="done">
                                <p>5</p>
                            </li>
                            <li id="step7" class="active">
                                <p>6</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <div class="quest">
                            <p class="question">
                                Вы выбрали кухню:
                            </p>
                            <ul>
                                <li>
                                    <p class="vopr">
                                        Тип Вашей кухни
                                    </p>
                                    <p class="otvetTip">
                                    </p>
                                </li>
                                <li>
                                    <p class="vopr">
                                        В помещение размером
                                    </p>
                                    <p class="otvetRazmer">
                                        <span></span> м<sup>2</sup>
                                    </p>
                                </li>
                                <li>
                                    <p class="vopr">
                                        Стиль кухни
                                    </p>
                                    <p class="otvetStyle">
                                    </p>
                                </li>
                                <li>
                                    <p class="vopr">
                                        Бюджет
                                    </p>
                                    <p class="otvetPrice">
                                    </p>
                                </li>
                                <li>
                                    <p class="vopr">
                                        Способ оплаты
                                    </p>
                                    <p class="otvetOplata">
                                    </p>
                                </li>
<!--                                <li>-->
<!--                                    <p class="vopr">-->
<!--                                        Материал фасадов-->
<!--                                    </p>-->
<!--                                    <p class="otvetFasad">-->
<!--                                    </p>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <p class="vopr">-->
<!--                                        Встраиваемая техника-->
<!--                                    </p>-->
<!---->
<!--                                    <p class="otvetTehnika">-->
<!--                                    </p>-->
<!--                                </li>-->
                            </ul>
                        </div>
                        <div class="imgBlock"></div>
                        <div class="spravka">
                            В стоимость кухни всегда входит <span>вся фурнитура, доставка</span>, а также <span>бесплатный дизайн-проект</span>!<br>  Никаких дополнительных платежей!
                        </div>
                        <div class="shag">Шаг 6</div>
                    </div>
                </div>
                <div class="openNextStep"><p class="button">Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen8">
            <div class="container">
                <div class="plashka">
                    <div class="obertka">
                        <div class="blank">
                            <div class="quest">
                                <div class="title">
                                    Ваши параметры отправлены<br>
                                    на расчет стоимости <span>со скидкой до 30%</span>
                                </div>
                                <div class="getway">
                                    Для получения стоимости и бронирования скидки заполните данные
                                </div>
                                <div class="easyeay">
                                    <p>Выберите удобный способ связи:</p>
                                    <div class="chooses">
                                        <input type="radio" name="easyeay" value="по телефону" id="easyeayp">
                                        <label for="easyeayp"><img src="img/lastscreen/phone.png" alt=""> по телефону</label>
                                        <input type="radio" name="easyeay" value="Viber" id="easyeayv">
                                        <label for="easyeayv"><img src="img/lastscreen/viber.png" alt=""></label>
                                    </div>
                                </div>
<!--                                <div class="name">-->
<!--                                    <input type="text" name="name" id="name" placeholder="Ваше имя">-->
<!--                                </div>-->
                                <div class="phone">
                                    <p>Введите номер телефона:</p>
                                    <input type="text" name="phone" id="phone" placeholder="+375 (**) ***-**-**">
                                    <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                                </div>
                            </div>
                            <div class="itogBtn">
                                <input type="hidden" name="type" value="Калькулятор">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <input type="submit" class="button" value="Получить стоимость кухни со скидкой до 30%">
                            </div>
                            <div class="warning">
                                Внимание! До конца акции осталось 4 дня
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="showAllBlocks"></div>
<script>
    $(document).ready(function () {
        var key = '<?echo $key_get?>';
       if(key==='massiv'){
           $('body #screen4 .questPart .minimalysm').hide();
           $('#screen4 .catalogPart >div img').each(function (i,val) {
               if(!$(val).hasClass('massiv')){
                   $(val).hide();
               }
           });
       } else if (key==='akril'){
           $('body #screen4 .questPart .classic, body #screen4 .questPart .neoclassic').hide();
           $('#screen4 .catalogPart >div img').each(function (i,val) {
               if(!$(val).hasClass('acryl')){
                   $(val).hide();
               }
           });
       } else if (key==='mdf'){
            $('body #screen4 .questPart .classic, body #screen4 .questPart .neoclassic').hide();
            $('#screen4 .catalogPart >div img').each(function (i,val) {
                if(!$(val).hasClass('mdf')){
                    $(val).hide();
                }
            });
       }
        $('#screen4 .catalogPart .myself img').show();
    });
</script>
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
                w.yaCounter48483560 = new Ya.Metrika({
                    id:48483560,
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
<noscript><div><img src="https://mc.yandex.ru/watch/48483560" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>