<?php //require_once 'config.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подбор туров из Минска и Москвы. Все туроператоры, честные цены и качественный отдых.</title>
    <meta name="description"
          content="Отдых в Египте, Доминикане, Вьетнаме, Тайланде по лучшим ценам! Горящие туры и раннее бронирование: Турция, Болгария, Греция, Испания.">
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
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="chosen/chosen.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-15"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-90181425-15');  /* Accurate bounce rate by time */setTimeout(function(){gtag('event', location.pathname, {  'event_category': 'Новый посетитель'});}, 15000);</script>
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
            <input type="hidden" name="type" value="Мы Вам перезвоним">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="submit" value="Заказать звонок">
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <a href="tel:+375296070837">+375 (29) 6070837</a>
        </div>
    </div>
    <form action method="post" id="kalkulatorForm">
        <!-- Главная страница -->
        <div class="screen"   id="screen1">
            <header>
                <div class="container">
                    <img src="img/logo.png" alt="" class="logo">
                    <p class="sitename">
                        Туристические услуги в Минске. Подбор туров и горящие путёвки
                    </p>
                    <a href="tel:+375296070837" class="tel">+375 (29) <span>6070837</span></a>
                    <a href="#call" class="fancy button">Заказать звонок</a>
                </div>
            </header>
            <div class="utp">
                <div class="container">
                    <img src="img/utpIcon.png" alt="">
                    <?php
                    //$key_get = $_GET["utm_term"];
                    //quotemeta($key_get);
                    //$myquery = "SELECT * FROM `utp_metki_tury` WHERE `key` LIKE '$key_get' ORDER BY `id`";
                    //$result = $connect->query($myquery);
                    //$mass = $result->fetch_array(MYSQLI_ASSOC);
                    //$str=$mass['str'];
                    //if (empty($str)) {
                        $str='Вы устали сравнивать цены на туры?';
                    //}
                    echo '<h1>'.$str.'</h1>';
                    ?>
                    <p class="answer">
                        Ответьте на <span>5 простых вопросов</span> и получите профессиональный подбор тура<br>
                        от ведущего специалиста Туризм.by!
                    </p>
                    <div class="startQuest">
                        <!--<div class="pulse"></div>-->
                        <p class="button">
                            Подобрать тур
                        </p>
                    </div>
                </div>
            </div>
            <div class="operators">
                <div class="container">
                    <img src="img/slider/pegas.png" alt="">
                    <img src="img/slider/tez.png" alt="">
                    <img src="img/slider/coral.png" alt="">
                    <img src="img/slider/biblio.png" alt="">
                    <img src="img/slider/anex.png" alt="">
                    <img src="img/slider/mouzenidis.png" alt="">
                    <img src="img/slider/danko.png" alt="">
                </div>
            </div>
            <footer>
                <div class="container">
                    <p class="name">ООО "ТуризмБай"</p>
                    <p class="unp">УНП 191378426</p>
                </div>
            </footer>
        </div>
        <!-- Каким составом вы едете отдыхать? -->
        <div class="screen" style="display: none" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>Каким составом вы едете отдыхать?</h2>
                            <ul>
                                <li>
                                    <label for="woman">
                                        <p class="name">Женщина</p>
                                        <p class="img">
                                            <img src="img/sostav/woman.png" alt="">
                                        </p>
                                        <div class="inputBlock">
                                            <p class="minus calcButton">-</p>
                                            <p class="plus calcButton">+</p>
                                            <input type="text" id="woman" name="woman" value="1">
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="man">
                                        <p class="name">Мужчина</p>
                                        <p class="img">
                                            <img src="img/sostav/man.png" alt="">
                                        </p>
                                        <div class="inputBlock">
                                            <p class="minus calcButton">-</p>
                                            <p class="plus calcButton">+</p>
                                            <input type="text" id="man" name="man" value="1">
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="child">
                                        <p class="name">Ребёнок</p>
                                        <p class="img">
                                            <img src="img/sostav/child.png" alt="">
                                        </p>
                                        <div class="inputBlock">
                                            <p class="minus calcButton">-</p>
                                            <p class="plus calcButton">+</p>
                                            <input type="text" id="child" name="child" value="0">
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="infant">
                                        <p class="name">Ребёнок до 2-х лет</p>
                                        <p class="img">
                                            <img src="img/sostav/infant.png" alt="">
                                        </p>
                                        <div class="inputBlock">
                                            <p class="minus calcButton">-</p>
                                            <p class="plus calcButton">+</p>
                                            <input type="text" id="infant" name="infant" value="0">
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
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
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>Расскажите нам о своих предпочтениях</h2>
                            <ul>
                                <li>
                                    <label for="plyazh">
                                        <p class="img">
                                            <img src="img/predp/plyazh.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="Отдых на пляже" id="plyazh" checked>
                                            Отдых на пляже
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="activny">
                                        <p class="img">
                                            <img src="img/predp/activny.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="Активный отдых и спорт" id="activny">
                                            Активный отдых и спорт
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="history">
                                        <p class="img">
                                            <img src="img/predp/history.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="История и архитектура" id="history">
                                            История и архитектура
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="restorans">
                                        <p class="img">
                                            <img src="img/predp/restorans.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="Клубы и рестораны" id="restorans">
                                            Клубы и рестораны
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="childactivity">
                                        <p class="img">
                                            <img src="img/predp/childactivity.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="Развлечения для детей" id="childactivity">
                                            Развлечения для детей
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="romantic">
                                        <p class="img">
                                            <img src="img/predp/romantic.png" alt="">
                                        </p>
                                        <div class="choose">
                                            <input type="checkbox" name="predp[]" value="Романтическое путешествие" id="romantic">
                                            Романтическое путешествие
                                        </div>
                                    </label>
                                </li>
                            </ul>
                            <div class="countryLine">
                                Уже выбрали страну? Укажите её!
                                <select name="country">
                                    <option value="Не выбрано">Выберите страну</option>
                                    <option value="Абхазия" class="popularCountries">Абхазия (Грузия)</option>
                                    <option value="Азербайджан" class="popularCountries">Азербайджан</option>
                                    <option value="Албания" class="popularCountries">Албания</option>
                                    <option value="Болгария" class="popularCountries">Болгария</option>
                                    <option value="Вьетнам" class="popularCountries">Вьетнам</option>
                                    <option value="Греция" class="popularCountries">Греция</option>
                                    <option value="Грузия" class="popularCountries">Грузия</option>
                                    <option value="Доминикана" class="popularCountries">Доминикана</option>
                                    <option value="Египет" class="popularCountries">Египет</option>
                                    <option value="Израиль" class="popularCountries">Израиль</option>
                                    <option value="Индия" class="popularCountries">Индия</option>
                                    <option value="Индонезия" class="popularCountries">Индонезия</option>
                                    <option value="Иордания" class="popularCountries">Иордания</option>
                                    <option value="Испания" class="popularCountries">Испания</option>
                                    <option value="Италия" class="popularCountries">Италия</option>
                                    <option value="Кипр" class="popularCountries">Кипр</option>
                                    <option value="Китай" class="popularCountries">Китай</option>
                                    <option value="Куба" class="popularCountries">Куба</option>
                                    <option value="Литва" class="popularCountries">Литва</option>
                                    <option value="Мальдивы" class="popularCountries">Мальдивы</option>
                                    <option value="ОАЭ" class="popularCountries">ОАЭ</option>
                                    <option value="Польша" class="popularCountries">Польша</option>
                                    <option value="Португалия" class="popularCountries">Португалия</option>
                                    <option value="Россия" class="popularCountries">Россия</option>
                                    <option value="Румыния" class="popularCountries">Румыния</option>
                                    <option value="Тайланд" class="popularCountries">Тайланд</option>
                                    <option value="Тунис" class="popularCountries">Тунис</option>
                                    <option value="Турция" class="popularCountries">Турция</option>
                                    <option value="Франция" class="popularCountries">Франция</option>
                                    <option value="Хорватия" class="popularCountries">Хорватия</option>
                                    <option value="Черногория" class="popularCountries">Черногория</option>
                                    <option value="Шри-Ланка" class="popularCountries">Шри-Ланка</option>
                                    <option value="Австралия">Австралия</option>
                                    <option value="Австрия">Австрия</option>
                                    <option value="Андорра">Андорра</option>
                                    <option value="Армения">Армения</option>
                                    <option value="Бельгия">Бельгия</option>
                                    <option value="Бразилия">Бразилия</option>
                                    <option value="Ватикан">Ватикан</option>
                                    <option value="Великобритания">Великобритания</option>
                                    <option value="Венгрия">Венгрия</option>
                                    <option value="Германия">Германия</option>
                                    <option value="Гонконг">Гонконг</option>
                                    <option value="Дания">Дания</option>
                                    <option value="Ирландия">Ирландия</option>
                                    <option value="Исландия">Исландия</option>
                                    <option value="Камбоджа">Камбоджа</option>
                                    <option value="Катар">Катар</option>
                                    <option value="Кения">Кения</option>
                                    <option value="Кыргызстан">Кыргызстан</option>
                                    <option value="Латвия">Латвия</option>
                                    <option value="Лихтенштейн">Лихтенштейн</option>
                                    <option value="Люксембург">Люксембург</option>
                                    <option value="Маврикий">Маврикий</option>
                                    <option value="Македония">Македония</option>
                                    <option value="Мальта">Мальта</option>
                                    <option value="Мексика">Мексика</option>
                                    <option value="Монако">Монако</option>
                                    <option value="Нидерланды">Нидерланды</option>
                                    <option value="Норвегия">Норвегия</option>
                                    <option value="Сейшельские острова">Сейшельские острова</option>
                                    <option value="Сербия">Сербия</option>
                                    <option value="Сингапур">Сингапур</option>
                                    <option value="Словакия">Словакия</option>
                                    <option value="Словения">Словения</option>
                                    <option value="США">США</option>
                                    <option value="Тайвань">Тайвань</option>
                                    <option value="Танзания">Танзания</option>
                                    <option value="Украина">Украина</option>
                                    <option value="Финляндия">Финляндия</option>
                                    <option value="Чехия">Чехия</option>
                                    <option value="Чили">Чили</option>
                                    <option value="Швейцария">Швейцария</option>
                                    <option value="Швеция">Швеция</option>
                                    <option value="Эстония">Эстония</option>
                                    <option value="ЮАР">ЮАР</option>
                                    <option value="Япония">Япония</option>
                                </select>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
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
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <div class="bg">
                                <h2>Выберите вид тура или время отдыха</h2>
                                <div class="days">
                                    <p class="name">Количество ночей</p>
                                    <div class="inputBlock">
                                        <p class="minus calcButton">-</p>
                                        <p class="plus calcButton">+</p>
                                        <input type="text" id="days" name="days" value="7">
                                    </div>
                                </div>
                                <div class="dates">
                                    <p class="name">Даты вылета</p>
                                    <div class="line">
                                        <span>
                                             c <input type="text" id="from" name="from" placeholder="Вылет с">
                                        </span>
                                        по <input type="text" id="to" name="to" placeholder="Вылет по">
                                    </div>
                                </div>
                            </div>
                            <div class="morechoose">
                                <div class="title">Вы также можете выбрать:</div>
                                <div class="moreBlock">
                                    <input type="checkbox" name="morechoose[]" value="Горящие туры" id="hot">
                                    <label for="hot">
                                        <p class="name">Горящие туры</p>
                                        <p class="text">Отели и туроператоры заинтересованы в продаже «горящих», не выкупленных заранее путевок. Это помогает им избежать простоев и потери денег. Цены на такие предложения падают до себестоимости.</p>
                                    </label>
                                </div>
                                <div class="moreBlock">
                                    <input type="checkbox" name="morechoose[]" value="Раннее бронирование" id="early">
                                    <label for="early">
                                        <p class="name">Раннее бронирование</p>
                                        <p class="text">Акцией "Раннее бронирование" в Беларуси ежегодно пользуется более 80% туристов, планирующих свой летний отдых. Уже сейчас Вы можете выбрать и забронировать свой летний отдых по специальным ценам. </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
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
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>Выберите  класс отеля и тип размещения</h2>
                            <div class="chooseLine">
                                <div class="stars">
                                    <p class="name">Количество звёзд (min)</p>
                                    <div class="starsLine">
                                        <div class="star1">
                                            <label for="star1">
                                                <div class="img"></div>
                                                <p class="num">1</p>
                                            </label>
                                            <input type="radio" name="stars" value="1" id="star1" style="display:none;">
                                        </div>
                                        <div class="star2">
                                            <label for="star2">
                                                <div class="img"></div>
                                                <p class="num">2</p>
                                            </label>
                                            <input type="radio" name="stars" value="2" id="star2" style="display:none;">
                                        </div>
                                        <div class="star3">
                                            <label for="star3">
                                                <div class="img"></div>
                                                <p class="num">3</p>
                                            </label>
                                            <input type="radio" name="stars" value="3" id="star3" style="display:none;" checked>
                                        </div>
                                        <div class="star4">
                                            <label for="star4">
                                                <div class="img"></div>
                                                <p class="num">4</p>
                                            </label>
                                            <input type="radio" name="stars" value="4" id="star4" style="display:none;">
                                        </div>
                                        <div class="star5">
                                            <label for="star5">
                                                <div class="img"></div>
                                                <p class="num">5</p>
                                            </label>
                                            <input type="radio" name="stars" value="5" id="star5" style="display:none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="rooms">
                                    <p class="name">Количество номеров</p>
                                    <div class="inputBlock">
                                        <p class="minus calcButton">-</p>
                                        <p class="plus calcButton">+</p>
                                        <input type="text" id="rooms" name="rooms" value="1">
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <label for="ai">
                                        <img src="img/meal/AI.png" alt="">
                                        <div class="choose">
                                            <input type="checkbox" name="meal[]" value="Всё включено" id="ai">
                                            Всё включено
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="hb">
                                        <img src="img/meal/HB.png" alt="">
                                        <div class="choose">
                                            <input type="checkbox" name="meal[]" value="Завтрак и ужин" id="hb">
                                            Завтрак и ужин
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="bb">
                                        <img src="img/meal/BB.png" alt="">
                                        <div class="choose">
                                            <input type="checkbox" name="meal[]" value="Только завтраки" id="bb">
                                            Только завтраки
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="ro">
                                        <img src="img/meal/BO.png" alt="">
                                        <div class="choose">
                                            <input type="checkbox" name="meal[]" value="Только размещение" id="ro">
                                            Только размещение
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
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
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>Последние уточнения...</h2>
                            <div class="nota">
                                <p class="title">Укажите приемлемый для Вас бюджет</p>
                                <p class="text">
                                    Этот вопрос необходим, чтобы менеджер по туризму сразу смог подобрать стоимость тура, не выходящего за рамки Вашего бюджета. Например, отдых на море может быть в Турции или в Доминикане, в пятизвёздочном отеле с вылетом из Минска или в отеле три звезды с вылетом из Москвы.
                                    <span>Но мы подберём ЛУЧШИЙ ТУР именно ДЛЯ ВАС!</span>
                                </p>
                            </div>
                            <input type="text" name="budget" value="1000" id="budget">
                            <div class="valuta">
                                <label for="byn"><input type="radio" name="valuta" value="BYN" id="byn" checked> BYN</label>
                                <label for="euro"><input type="radio" name="valuta" value="euro" id="euro"> €</label>
                                <label for="usd"><input type="radio" name="valuta" value="usd" id="usd"> $</label>
                            </div>
                            <div class="slider">
                                <div id="slider"></div>
                                <div class="minmax">
                                    <p class="min">100</p>
                                    <p class="max">10 000</p>
                                </div>
                            </div>
                            <div class="dontknow">
                                <input type="checkbox" name="dontknowprice" id="dontknowprice"> <label for="dontknowprice">Пока не знаю</label>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
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
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>Вы ищете тур:</h2>
                            <ul>
                                <li>
                                    Для <span class="fullpeopleNum"></span> человек
                                </li>
                                <li>
                                    Предпочтения по отдыху: <span class="fullpredp"></span>
                                </li>
                                <li>
                                    Страна для отдыха: <span class="fullcountry"></span>
                                </li>
                                <li>
                                    Количество дней: <span class="fulldaysNum"></span>, с <span class="fullfromdate"></span> по <span class="fulltodate"></span>
                                </li>
                                <li>
                                    Минимальное количество звёзд отеля: <span class="fullstarsNum"></span>, количество номеров: <span class="fullroomsNum"></span>
                                </li>
                                <li>
                                    Питание на отдыхе: <span class="fullMeals"></span>
                                </li>
                                <li>
                                    Приемлемый бюджет: <span class="fullBudget"></span> <span class="fullValuta"></span>
                                </li>
                            </ul>
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
        </div>
        <!-- Форма -->
        <div class="screen" style="display: none" id="screen8">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <img src="img/logo2.png" alt="" class="logo">
                            <p class="sitename">Туристические услуги в Минске. Подбор туров и горящие путёвки</p>
                            <a href="#call" class="fancy button">Заказать звонок</a>
                            <a href="tel:+375296070837" class="tel">+375(29)6070837</a>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">
                                <p>
                                    Следующий шаг
                                </p>
                            </div>
                            <div class="prev button2">
                                <p>
                                    Предыдущий шаг
                                </p>
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
                        </nav>
                        <div class="quest">
                            <h2>
                                Последний шаг до отдыха Вашей мечты
                            </h2>
                            <div class="nota">
                                Оставьте свои контакты и получите бесплатную консультацию
                                и подбор тура от ведущего специалиста Туризм.by
                            </div>
                            <div class="stroka">
                                <input type="text" name="name" id="name" placeholder="Ваше имя">
                                <input type="text" name="phone" id="phone" placeholder="Ваш телефон *">
                                <input type="text" name="email" id="email" placeholder="Ваш E-mail">
                            </div>
                            <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                            <div class="stroka">
                                <textarea name="komments" id=komments"" cols="30" rows="5" placeholder="Дополнительные комментарии"></textarea>
                            </div>
                            <div class="itogBtn">
                                <input type="hidden" name="type" value="Калькулятор">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="submit" class="button" value="Подобрать тур">
                            </div>
                        </div>
                        <div class="nextBottomBlock"></div>
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
                            <h2>
                                Спасибо!
                            </h2>
                            <div class="nota">
                                В ближайшее время с Вами свяжется менеджер по туризму.<br>
                                Незабываемого Вам отдыха! :)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="call" style="display: none">
        <form action method="post" id="zvonokForm">
            <h2>
                Закажите обратный звонок
                и в ближайшее время
                мы Вам перезвоним
            </h2>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Ваш телефон" required>
            <input type="hidden" name="type" value="Заказ звонка">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="submit" value="Заказать звонок" class="button">
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
    echo '
    <script>
        $("input[name=utm_term]").val("'.$utm_term.'");
        $("input[name=utm_source]").val("'.$utm_source.'");
        $("input[name=utm_medium]").val("'.$utm_medium.'");
        $("input[name=utm_campaign]").val("'.$utm_campaign.'");
    </script>
    ';
    ?>
</div>
<div class="showAllBlocks"></div>
<!-- Yandex.Metrika counter --><script type="text/javascript" >    (function (d, w, c) {        (w[c] = w[c] || []).push(function() {            try {                w.yaCounter47087790 = new Ya.Metrika({                    id:47087790,                    clickmap:true,                    trackLinks:true,                    accurateTrackBounce:true,                    webvisor:true                });            } catch(e) { }        });        var n = d.getElementsByTagName("script")[0],            s = d.createElement("script"),            f = function () { n.parentNode.insertBefore(s, n); };        s.type = "text/javascript";        s.async = true;        s.src = "https://mc.yandex.ru/metrika/watch.js";        if (w.opera == "[object Opera]") {            d.addEventListener("DOMContentLoaded", f, false);        } else { f(); }    })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/47087790" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>