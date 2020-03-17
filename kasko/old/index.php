<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Окна ПВХ в Минске</title>
    <meta name="description"
          content="Производство и продажа пластиковых окон. Профиль REHAU, самые низкие цены, выгодные условия рассрочки.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90181425-4', 'auto');
        ga('send', 'pageview');
        /* Accurate bounce rate by time */
        if (!document.referrer ||
            document.referrer.split('/')[2].indexOf(location.hostname) != 0)
            setTimeout(function(){ga('send', 'event', 'New Visitor', location.pathname);}, 15000);

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
                Мы вам перезвоним!
            </p>
        </div>
        <form action="" method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
            <input type="hidden" name="type" value="Заказ звонка">
            <input type="submit" value="Заказать звонок">
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <a href="tel:+375447077474">+375 (33) 382-99-61</a>
        </div>
    </div>
    <form action="mail.php" method="post" onsubmit="" id="kalkulatorForm">
        <div class="screen" id="screen1">
            <header>
                <div class="container">
                    <a href="tel:+375333829961" class="tel"><img src="img/mts.png" alt="">+375 (33) <span>382-99-61</span></a>
                    <img src="img/logo.png" alt="">
                    Производство и продажа окон ПВХ в Минске и Минском районе
                    <a href="tel:+375291884393" class="mobtel" style="display: none"><img src="img/velcom.png" alt="">+375 (33) 382-99-61</a>
                </div>
            </header>
            <div class="container">
                    <div class="startPlashka">
                        <div class="centerSide">
                            <?php
                            $key_get = $_GET["utm_content"];
                            quotemeta($key_get);
                            $myquery = "SELECT * FROM `utp_metki_shkaf` WHERE `key` LIKE '$key_get' ORDER BY `id`";
                            $result = $connect->query($myquery);
                            $mass = $result->fetch_array(MYSQLI_ASSOC);
                            $str1=$mass['str1'];
                            $str2=$mass['str2'];
                            if (empty($str1)) {
                                $str1='Хотите установить новые окна?';
                                $str2='Закажите окна ПВХ напрямую с фабрики!';
                            }
                            echo '<p class="question">'.$str1.'</p>';
                            echo '<h1>'.$str2.'</h1>';
                            ?>
                        </div>
                        <div class="rightSide">
                            <div class="sticker">
                                <p class="title">Ответьте на 7 вопросов и получите <span>скидку 25%</span></p>
                                <p class="description">Вы экономите время менеджера - мы экономим Ваши деньги!</p>
                            </div>
                        </div>
                        <div class="startQuest">
<!--                            <div class="pulse"></div>-->
                            <p>
                                Рассчитать стоимость окон
                            </p>
                        </div>
                        <p class="steps">
                            Всего за <span>7 простых шагов</span>
                        </p>
                        <div class="carousel">
                            <div class="owl-carousel">
                                <div>
                                    <img src="img/slider/1.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/2.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/3.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/4.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/5.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/6.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/7.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/8.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/9.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/10.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/11.png" alt="">
                                </div>
                                <div>
                                    <img src="img/slider/12.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="zayKolvo">
                            <p class="unp">
                                ЧП Геометрия тепла УНП 192161505
                            </p>
                            <p>
                                сегодня обработано
                                <span>
                    <?php
                    $myquery = "SELECT * FROM `NumberZayavok` WHERE `sitename` LIKE 'nashi-okna' ORDER BY `id`";
                    $result = $connect->query($myquery);
                    $mass = $result->fetch_array(MYSQLI_ASSOC);
                    $number=$mass['number'];
                    $thisday = date("j");
                    $oldday = $mass['date'];
                    if($thisday!=$oldday){
                        $query2 = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `date` =  '$thisday' WHERE  `NumberZayavok`.`sitename` LIKE 'nashi-okna'";
                        $number = 20;
                        $connect->query($query2);
                    }
                    echo $number;
                    $number++;
                    $query = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `number` =  '$number' WHERE  `NumberZayavok`.`sitename` LIKE 'nashi-okna'";
                    $connect->query($query);
                    ?>
                    </span>
                                заявок
                            </p>
                            <p class="unpmob" style="display: none">
                                ЧП «Евростиль-проект», УНП 190999766
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Где менять окна -->
        <div class="screen" style="display: none" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
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
                                <li id="step8">
                                    <p>7</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Где будем ставить окна?
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="gorod">
                                        <p class="imgBlock gorod"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="gorod" value="В городской квартире" checked>
                                            Городская квартира
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="zagorod">
                                        <p class="imgBlock zagorod"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="zagorod" value="В загородном доме">
                                            Загородный дом
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="kommerch">
                                        <p class="imgBlock kommerch"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="kommerch" value="В коммерческом помещении">
                                            Коммерческое помещение
                                        </p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="shag">Шаг 1</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Куда установить окна -->
        <div class="screen" style="display: none" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <ul class="steps">
                                <li class="done" id="step2">
                                    <p>1</p>
                                </li>
                                <li class="active" id="step3">
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
                                <li id="step8">
                                    <p>7</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Куда вы хотите установить окна?
                        </p>
                        <div class="description">
                            От места установки зависят технические характеристики окон<br>
                            (количество камер в профиле, толщина стеклопакета, специальная фурнитура)
                        </div>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="zhilaya">
                                        <p class="imgBlock zhilaya"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPlace[]" id="zhilaya" value="В жилую комнату">
                                            Жилая комната
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="kuhnya">
                                        <p class="imgBlock kuhnya"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPlace[]" id="kuhnya" value="На кухню">
                                            Кухня
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="balkon">
                                        <p class="imgBlock balkon"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPlace[]" id="balkon" value="На балкон или лоджию">
                                            Балкон или лоджия
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="hozpom">
                                        <p class="imgBlock hozpom"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPlace[]" id="hozpom" value="В хозяйственное помещение">
                                            Хозяйственное помещение
                                        </p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="shag">Шаг 2</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Особенности квартиры -->
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                            <img src="img/next.png" alt="">
                        </p>
                        <p class="prev mobNav" style="display: none">
                            <img src="img/prev.png" alt="">
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            <img src="img/prev.png" alt="">
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                            <img src="img/next.png" alt="">
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
                            <li id="step8">
                                <p>7</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Уточните особенности квартиры
                        </p>
                        <div class="quest">
                            <div class="hometype">
                                <div class="name">Тип дома</div>
                                <ul>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="panel" value="Панельный">
                                        <label for="panel">Панельный</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="karkas" value="Каркасный">
                                        <label for="karkas">Каркасный</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="kirpich" value="Кирпичный">
                                        <label for="kirpich">Кирпичный</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="drugoe" value="Другое/не знаю">
                                        <label for="drugoe">Другое/не знаю</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="flatPodrobnosti">
                                <div class="uglFlat">
                                    <div class="name">Угловая квартира</div>
                                    <ul>
                                        <li>
                                            <input type="radio" name="uglFlat" id="nougl" value="Не угловая">
                                            <label for="nougl">Нет</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="uglFlat" id="ugl" value="Угловая">
                                            <label for="ugl">Да</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="windowView">
                                    <div class="name">Куда выходят окна</div>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="WwindowView[]" id="streetView" value="На улицу">
                                            <label for="streetView">На улицу</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="WwindowView[]" id="insideView" value="Во двор">
                                            <label for="insideView">Во двор</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flatEtazh">
                                <div class="name">На каком этаже Ваша квартира</div>
                                <div class="rightPart">
                                    <p>этаж</p>
                                    <input type="text" name="flatEtazh">
                                </div>
                                <div class="slider"></div>
                                <img src="img/etazhi.png" alt="">
                            </div>
                        </div>
                        <div class="sticker">
                            <img src="img/consultant.png" alt="">
                            <p>
                                По этим параметрам опытный консультант подберёт необходимый уровень звуко-
                                и теплоизоляции, фурнитуру
                                и комплектацию окон.
                            </p>
                        </div>
                        <div class="shag">Шаг 3</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Тип и количество окон -->
        <div class="screen" style="display: none" id="screen5">
            <img src="img/stickerWindownum.png" alt="" class="sticker stickerWindownum">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            Следующий шаг
                            <img src="img/next.png" alt="">
                        </p>
                        <p class="prev mobNav" style="display: none">
                            <img src="img/prev.png" alt="">
                            Предыдущий шаг
                        </p>
                        <p class="prev">
                            <img src="img/prev.png" alt="">
                            Предыдущий шаг
                        </p>
                        <p class="next">
                            Следующий шаг
                            <img src="img/next.png" alt="">
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
                            <li id="step8">
                                <p>7</p>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="plashka">
                    <div class="container">
                        <p class="question">
                            Выберите тип и количество окон
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <div class="title">
                                        Одностворчатое окно
                                        с одной поворотно-откидной
                                        створкой
                                    </div>
                                    <img src="img/window1.jpg" alt="">
                                    <div class="num">
                                        <div class="minus">
                                            −
                                        </div>
                                        <div class="plus">
                                            +
                                        </div>
                                        <div class="number">
                                            <input type="text" value="0" name="window1">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        Двустворчатое окно
                                        с одной поворотно-откидной
                                        створкой
                                    </div>
                                    <img src="img/window2.jpg" alt="">
                                    <div class="num">
                                        <div class="minus">
                                            −
                                        </div>
                                        <div class="plus">
                                            +
                                        </div>
                                        <div class="number">
                                            <input type="text" value="0" name="window2">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        Трехстворчатое окно
                                        с одной поворотно-откидной
                                        створкой
                                    </div>
                                    <img src="img/window3.jpg" alt="">
                                    <div class="num">
                                        <div class="minus">
                                            −
                                        </div>
                                        <div class="plus">
                                            +
                                        </div>
                                        <div class="number">
                                            <input type="text" value="0" name="window3">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        Балконная дверь
                                        двустворчатая
                                        с одним открыванием
                                    </div>
                                    <img src="img/window4.jpg" alt="">
                                    <div class="num">
                                        <div class="minus">
                                            −
                                        </div>
                                        <div class="plus">
                                            +
                                        </div>
                                        <div class="number">
                                            <input type="text" value="0" name="window4">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shag">Шаг 4</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Профиль рамы -->
        <div class="screen" style="display: none" id="screen6">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <ul class="steps">
                                <li class="done" id="step2">
                                    <p>1</p>
                                </li>
                                <li class="done" id="step3">
                                    <p>2</p>
                                </li>
                                <li class="done" id="step4">
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
                                <li id="step8">
                                    <p>7</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Выберите профиль рамы
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="rehau">
                                        <p class="imgBlock rehau"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowProfil[]" id="rehau" value="REHAU">
                                            Rehau
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="KBE">
                                        <p class="imgBlock KBE"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowProfil[]" id="KBE" value="KBE">
                                            KBE
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="BRUSBOX">
                                        <p class="imgBlock BRUSBOX"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowProfil[]" id="BRUSBOX" value="BRUSBOX">
                                            Brusbox
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="Salamander">
                                        <p class="imgBlock Salamander"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowProfil[]" id="Salamander" value="Salamander">
                                            Salamander
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="drugoyProfil">
                                        <p class="imgBlock drugoyProfil"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowProfil[]" id="drugoyProfil" value="Другая марка">
                                            Другая марка
                                        </p>
                                    </label>
                                </li>
                            </ul>
                            <div class="consult">
                                ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ ПО МАРКАМ ПРОФИЛЯ
                            </div>
                        </div>
                        <div class="shag">Шаг 5</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Дополнительная комплектация -->
        <div class="screen" style="display: none" id="screen7">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <ul class="steps">
                                <li class="done" id="step2">
                                    <p>1</p>
                                </li>
                                <li class="done" id="step3">
                                    <p>2</p>
                                </li>
                                <li class="done" id="step4">
                                    <p>3</p>
                                </li>
                                <li class="done" id="step5">
                                    <p>4</p>
                                </li>
                                <li class="done" id="step6">
                                    <p>5</p>
                                </li>
                                <li class="active" id="step7">
                                    <p>6</p>
                                </li>
                                <li id="step8">
                                    <p>7</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Дополнительная комплектация окна
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="otkosy">
                                        <p class="imgBlock otkosy"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowDopkomplekt[]" id="otkosy" value="Откосы" checked>
                                            Откосы
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="otlivy">
                                        <p class="imgBlock otlivy"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowDopkomplekt[]" id="otlivy" value="Отливы" checked>
                                            Отливы
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="podokonnik">
                                        <p class="imgBlock podokonnik"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowDopkomplekt[]" id="podokonnik" value="Подоконник" checked>
                                            Подоконники
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="zamok">
                                        <p class="imgBlock zamok"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowDopkomplekt[]" id="zamok" value="Ручки с замком" checked>
                                            Ручки с замком
                                        </p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="shag">Шаг 6</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Подарки от фабрики -->
        <div class="screen" style="display: none" id="screen8">
            <img src="img/stickerRassr.png" alt="" class="stickerRassr">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <ul class="steps">
                                <li class="done" id="step2">
                                    <p>1</p>
                                </li>
                                <li class="done" id="step3">
                                    <p>2</p>
                                </li>
                                <li class="done" id="step4">
                                    <p>3</p>
                                </li>
                                <li class="done" id="step5">
                                    <p>4</p>
                                </li>
                                <li class="done" id="step6">
                                    <p>5</p>
                                </li>
                                <li class="done" id="step7">
                                    <p>6</p>
                                </li>
                                <li class="active" id="step8">
                                    <p>7</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Ура! Осталось совсем немного!<br>
                            Выберите  подарки от фабрики <span>(максимум 3)</span>
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="rassrochka">
                                        <p class="imgBlock rassrochka"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="rassrochka" value="Фирменная рассрочка под 0%">
                                            Фирменная рассрочка под 0%
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="moskit">
                                        <p class="imgBlock moskit"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="moskit" value="Москитная сетка в подарок">
                                            Москитная сетка в подарок
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="dust">
                                        <p class="imgBlock dust"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="dust" value="Уплотнитель против грязи">
                                            Уплотнитель против грязи
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="termometr">
                                        <p class="imgBlock termometr"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="termometr" value="Термометр">
                                            Термометр
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="uhod">
                                        <p class="imgBlock uhod"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="uhod" value="Средства по уходу за окнами">
                                            Средства по уходу за окнами
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="energo">
                                        <p class="imgBlock energo"></p>
                                        <p>
                                            <input type="checkbox" name="WwindowPodarki[]" id="energo" value="Энергосберегающее стекло по цене обычного">
                                            Энергосберегающее стекло по цене обычного
                                        </p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="shag">Шаг 7</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Узнать стоимость окон</p></div>
            </div>
        </div>
        <!-- Процесс подбора окна и расчёта стоимости -->
        <div class="screen" style="display: none"  id="screen9">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Процесс подбора окна и расчёта стоимости
                        </p>
                        <div class="quest">
                            <div class="cssload-container">
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                            </div>
                            <div class="animatedText">
                                <p class="first">
                                    Оценка необходимого уровня теплоизоляции...
                                </p>
                                <p class="second" style="display: none">
                                    Просчёт вариантов конфигураций окон ПВХ...
                                </p>
                                <p class="third" style="display: none">
                                    Просчёт дополнительных параметров...
                                </p>
                                <p class="last" style="display: none">
                                    Готово!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Форма -->
        <div class="screen" style="display: none"  id="screen10">
            <div class="container">
                <div class="plashka">
                    <p class="question">
                        Поздравляем! Ваша персональная скидка составляет <span>25%</span>
                    </p>
                    <div class="quest">
                        <label for="phone">Для  закрепления скидки за Вашим номером телефона и получения стоимости со скидкой, введите Ваши данные</label>
                        <div class="name">
                            <img src="img/man.png" alt="">
                            <input type="text" name="name" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="phone">
                            <img src="img/phone.png" alt="">
                            <input type="text" name="phone" id="phone" placeholder="+375 (**) ***-**-**">
                            <p class="alert" style="display: none;">Введите корректный номер телефона</p>

                        </div>
                        <div class="vnimanie">Внимание! Срок действия акции ограничен! </div>
                    </div>
                    <div class="itogBtn">
                        <input type="hidden" name="type" value="Калькулятор">
                        <input type="button" value="Узнать стоимость со скидкой!">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43956349 = new Ya.Metrika({
                    id:43956349,
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
<noscript><div><img src="https://mc.yandex.ru/watch/43956349" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>