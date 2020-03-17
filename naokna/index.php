<?php //require_once 'config.php';?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Жалюзи и рольшторы в Минске</title>
    <meta name="description"
          content="Изготовление по индивидуальным параметрам. Рольшторы и жалюзи в Минске по лучшим ценам. Быстро. Качественно. Все цвета и материалы.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.knob.min.js"></script>
    <script src="chosen/chosen.jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i&amp;subset=cyrillic" rel="stylesheet">    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="chosen/chosen.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-17"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-90181425-17');  /* Accurate bounce rate by time */setTimeout(function(){gtag('event', location.pathname, {  'event_category': 'Новый посетитель'});}, 15000);</script>
</head>
<body>
<div id="kalkulator">
    <div class="stickerCall">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
    </div>
    <div class="callWind">
        <div class="close"><img src="img/sticker/whiteCross.png" alt=""></div>
        <div class="title">
            <img src="img/sticker/callTrubka.png" alt="">
            <p>Мы вам перезвоним!</p>
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
            <a href="tel:+375293609092">+375 (29) 6113870</a>
        </div>
    </div>
    <form action method="post" id="kalkulatorForm">
        <?php
            $key_get = isset($_GET["utm_term"]) ? $_GET["utm_term"] : "";
            quotemeta($key_get);
        if ($key_get=='jaluzi') {
            $sitename = 'Изготовление и продажа жалюзи в Минске';
            $h1='Ищете жалюзи по привлекательным ценам?';
            $fraza = 'жалюзи';
            echo '
            <script>
                $(document).ready(function() {
                    $("#zhaluzi").click();
                    $(".startQuest, #screen1 .utp .sticker").click(function () {
                        var hideScreen = $(this).closest(".screen");
                        var showScreen = $("#screen3");
                        runEffect(hideScreen, showScreen);
                        return false;
                    });
                });
            </script>
            ';
        } else if ($key_get=='rolshtori'){
            $sitename = 'Изготовление и продажа рольштор в Минске';
            $h1='Ищете стильные и практичные рольшторы?';
            $fraza = 'рольшторы';
            echo '
            <script>
              $(document).ready(function() {
                $("#rolshtori").click();
                $(".startQuest, #screen1 .utp .sticker").click(function () {
                    var hideScreen = $(this).closest(".screen");
                    var showScreen = $("#screen3");
                    runEffect(hideScreen, showScreen);
                    return false;
                });
              });
            </script>
            ';
        } else {
            $sitename = 'Рольшторы и жалюзи в Минске';
            $h1='Ищете жалюзи и рольшторы по привлекательным ценам?';
            $fraza = 'жалюзи и рольшторы';
            echo '
            <script>
              $(document).ready(function() {
                $(".startQuest, #screen1 .utp .sticker").click(function () {
                    var hideScreen = $(this).closest(".screen");
                    var showScreen = hideScreen.next();
                    runEffect(hideScreen, showScreen);
                    return false;
                });
              });
            </script>
            ';
        }
        ?>
        <!-- Главная страница -->

        <div class="screen" id="screen1">
            <header>
                <div class="container">
                    <div class="logoArea">
                        <a href="#call" class="fancy"><img src="img/sunlogo.png" alt="" class="logo"></a>
                        <p class="sitename">
                            <a href="#call" class="fancy"><?php echo $sitename ?></a>
                        </p>
                    </div>
                    <div class="phoneArea">
                        <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                        <a href="#call" class="fancy button">Заказать звонок</a>
                    </div>
                </div>
            </header>

            <div class="utp">
                <div class="container">
                    <div class="startPlanka">
                        <div class="obol">
                            <h1><?php echo $h1 ?></h1>
                            <p class="answer">
                                Подберём идеальные <?php echo $fraza ?> и подарим скидку!
                                Ответьте на 5 простых вопросов и получите скидку до 10%!
                            </p>
                        </div>
                    </div>
                    <div class="startQuest">
                        <p class="buttonStart">Подобрать</p>
                    </div>
                    <img src="img/screen1Sticker.png" alt="" class="sticker">
                </div>
            </div>
            <footer>
                <div class="container">
                    <p class="unp">ИП Дворянчиков Д.А., УНП 192678473</p>
                    <p class="deltaplan"><a href="http://www.deltaplan.by/" target="_blank">Разработка и продвижение сайта DELTAPLAN.BY</a></p>
                </div>
            </footer>
        </div>

        <!-- Жалюзи или рольшторы? -->

        <div class="screen" style="display: none;" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <div class="choosePart">
                                <h2>Жалюзи или рольшторы?</h2>
                                <ul>
                                    <li class="checked">
                                        <label for="zhaluzi">
                                            <img src="img/screen2/zhaluzi.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="zhaluzi" name="zhaluziilirolshtori" value="Жалюзи" checked>
                                                Жалюзи
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="rolshtori">
                                            <img src="img/screen2/rolshtori.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="rolshtori" name="zhaluziilirolshtori" value="Рольшторы">
                                                Рольшторы
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="hintPart">
                                <div class="podskazka">
                                    <div class="title">
                                        <img src="img/hintIco.png" alt="">
                                        Подсказка от Солнце.бел:
                                    </div>
                                    <div class="text">
                                        <p>
                                            Основные отличия рольштор и жалюзи — это технология открытия и материал изготовления.
                                        </p>
                                        <p>
                                            <span>Жалюзи</span> бывают горизонтальными (изготавливаются из пластика, алюминия, дерева, бамбука) и вертикальными (изготавливаются из пластика или материи)
                                        </p>

                                        <p>
                                            <span>Рольшторы</span> изготавливаются из полотна материи, пропитанного пыле- и влагоотталкивающими растворами. Рольшторы могут быть только горизонтальными. Большой выбор дизайнерских тканей и возможность фотопечати на полотне рольштор позволяет сделать их изюминкой любого интерьера.
                                        </p>
                                    </div>
                                    <div class="podsk">Выберите жалюзи или рольшторы<br> и посмотрите примеры наших работ</div>
                                </div>
                                <div class="carouselPart rolshtoriPart">
                                    <div class="rolshtoriCarousel owl-carousel">
                                        <div class="item"><img src="img/screen2/rolshtori/1.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/rolshtori/2.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/rolshtori/3.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/rolshtori/4.jpg" alt=""></div>
                                    </div>
                                    <div class="buttonPart">
                                        <a href="#call" class="fancy button">Узнать стоимость</a>
                                    </div>
                                </div>
                                <div class="carouselPart zhaluziPart">
                                    <div class="zhaluziCarousel owl-carousel">
                                        <div class="item"><img src="img/screen2/zhaluzi/1.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/zhaluzi/2.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/zhaluzi/3.jpg" alt=""></div>
                                        <div class="item"><img src="img/screen2/zhaluzi/4.jpg" alt=""></div>
                                    </div>
                                    <div class="buttonPart">
                                        <a href="#call" class="fancy button">Узнать стоимость</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Куда Вам нужны жалюзи или рольшторы? -->

        <div class="screen" style="display: none;" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>  
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <div class="zhaluziVybor">
                                <div class="choosePart">
                                    <h2>Куда Вам нужны жалюзи?</h2>
                                    <ul>
                                        <li>
                                            <label for="domoizhaluzi">
                                                <img src="img/screen3/zhaluzi/domoi.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="domoizhaluzi" name="kudazhaluzi" value="Домой">
                                                    Домой
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="vofiszhaluzi">
                                                <img src="img/screen3/zhaluzi/ofis.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="vofiszhaluzi" name="kudazhaluzi" value="В офис">
                                                    В офис <span>(хозяйственное помещение)</span>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hintPart">
                                    <div class="podskazka">
                                        <div class="title">
                                            <img src="img/hintIco.png" alt="">
                                            Подсказка от Солнце.бел:
                                        </div>
                                        <div class="text">
                                            <p>
                                                Для офисов или хозяйственных помещений чаще выбирают жалюзи из алюминия и пластика. Эти материалы неприхотливы в уходе, имеют демократичную стоимость.
                                            </p>
                                            <p>
                                                Деревянные или бамбуковые жалюзи идеально впишутся в классический интерьер квартиры или загородного дома.
                                            </p>
                                        </div>
                                        <div class="podsk">
                                            Выберите дом или офис и посмотрите примеры оформления окон в различных интерьерах.
                                        </div>
                                    </div>
                                    <div class="carouselPart domPart">
                                        <div class="domPartrolshtoriCarousel owl-carousel">
                                            <div class="item"><img src="img/screen3/zhaluzi/domoi/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/domoi/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/domoi/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/domoi/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                    <div class="carouselPart ofisPart">
                                        <div class="ofisPartzhaluziCarousel owl-carousel">
                                            <div class="item"><img src="img/screen3/zhaluzi/ofis/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/ofis/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/ofis/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/zhaluzi/ofis/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rolshtoriVybor" style="display: none">
                                <div class="choosePart">
                                    <h2>Куда  Вам нужны рольшторы?</h2>
                                    <ul>
                                        <li>
                                            <label for="domoirolshtori">
                                                <img src="img/screen3/rolshtori/domoi.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="domoirolshtori" name="kudarolshtori" value="Домой">
                                                    Домой
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="vofisrolshtori">
                                                <img src="img/screen3/rolshtori/ofis.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="vofisrolshtori" name="kudarolshtori" value="В офис">
                                                    В офис <span>(хозяйственное помещение)</span>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hintPart">
                                    <div class="podskazka">
                                        <div class="title">
                                            <img src="img/hintIco.png" alt="">
                                            Подсказка от Солнце.бел:
                                        </div>
                                        <div class="text">
                                            <p>
                                                Для офисов или хозяйственных помещений чаще выбирают рольшторы из однотонной, пропитанной пыле- и влагоустойчивыми составами материи. Такие рольшторы неприхотливы в уходе, имеют более стоимость.
                                            </p>
                                            <p>
                                                Рольшторы типа день-ночь или с фотопечатью идеально впишутся в интерьер любой квартиры или загородного дома.
                                            </p>
                                        </div>
                                        <div class="podsk">
                                            Выберите дом или офис и посмотрите примеры оформления окон в различных интерьерах.
                                        </div>
                                    </div>
                                    <div class="carouselPart domPart">
                                        <div class="domPartrolshtoriCarousel owl-carousel">
                                            <div class="item"><img src="img/screen3/rolshtori/domoi/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/domoi/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/domoi/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/domoi/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                    <div class="carouselPart ofisPart">
                                        <div class="ofisPartrolshtoriCarousel owl-carousel">
                                            <div class="item"><img src="img/screen3/rolshtori/ofis/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/ofis/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/ofis/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen3/rolshtori/ofis/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Выберите тип рольштор или жалюзи -->

        <div class="screen" style="display: none" id="screen4">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>         
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>  
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <div class="zhaluziVybor" style="display: none">
                                <div class="choosePart">
                                    <h2>Выберите тип жалюзи</h2>
                                    <ul>
                                        <li>
                                            <label for="verttypezhaluzi">
                                                <img src="img/screen4/zhaluzi/vert.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="verttypezhaluzi" name="typezhaluzi" value="Вертикальные">
                                                    Вертикальные жалюзи
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="horiztypezhaluzi">
                                                <img src="img/screen4/zhaluzi/horiz.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="horiztypezhaluzi" name="typezhaluzi" value="Горизонтальные">
                                                    Горизонтальные жалюзи
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hintPart">
                                    <div class="podskazka">
                                        <div class="title">
                                            <img src="img/hintIco.png" alt="">
                                            Подсказка от Солнце.бел:
                                        </div>
                                        <div class="text">
                                            <p>
                                                <span>Вертикальные жалюзи</span> отлично подойдут для использования в просторных помещениях или оформления французских окон.
                                            </p>
                                            <p>
                                                <span>Горизонтальные жалюзи</span> более компактные, крепятся на створки окна и позволяют использовать их для дополнительной изоляции от света совместно с классическими шторами и тюлем.
                                            </p>
                                        </div>
                                        <div class="podsk">
                                            Выберите тип жалюзи и посмотрите примеры оформления окон в различных интерьерах.
                                        </div>
                                    </div>
                                    <div class="carouselPart vertPart">
                                        <div class="vertPartzhaluziCarousel owl-carousel">
                                            <div class="item"><img src="img/screen4/zhaluzi/vert/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/vert/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/vert/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/vert/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                    <div class="carouselPart horizPart">
                                        <div class="horizPartzhaluziCarousel owl-carousel">
                                            <div class="item"><img src="img/screen4/zhaluzi/horiz/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/horiz/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/horiz/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/zhaluzi/horiz/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rolshtoriVybor">
                                <div class="choosePart">
                                    <h2>Выберите тип рольштор</h2>
                                    <ul>
                                        <li>
                                            <label for="svobtyperolshtori">
                                                <img src="img/screen4/rolshtori/svob.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="svobtyperolshtori" name="typerolshtori" value="Свободного свисания">
                                                    Свободного свисания
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="kasstyperolshtori">
                                                <img src="img/screen4/rolshtori/kass.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="kasstyperolshtori" name="typerolshtori" value="Кассетного типа">
                                                    Кассетного типа
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="dntyperolshtori">
                                                <img src="img/screen4/rolshtori/dn.jpg" alt="">
                                                <div class="inputArea">
                                                    <input type="radio" id="dntyperolshtori" name="typerolshtori" value="Системы день-ночь">
                                                    Системы день-ночь
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hintPart">
                                    <div class="podskazka">
                                        <div class="title">
                                            <img src="img/hintIco.png" alt="">
                                            Подсказка от Солнце.бел:
                                        </div>
                                        <div class="text">
                                            <p>
                                                <span>Свободного свисания:</span> самый простой вид рольштор. Крепятся на створку окна, полотно свободно перемещается вниз и вверх.
                                            </p>
                                            <p>
                                                <span>Кассетного типа:</span> полотно таких штор двигается вниз-вверх по направляющим.  Преимущество таких штор – полное отсутствие зазора между полотном и краем стекла, что обеспечивает полную изоляцию от света.
                                            </p>
                                            <p>
                                                <span>Системы день-ночь:</span> интересный вид рольштор, состоящий из двух полотен с полосами различной плотности. Такие рольшторы изысканно смотрятся в интерьере и позволяют регулировать количество света изменением зазора между полосами материи.
                                            </p>
                                        </div>
                                        <div class="podsk">
                                            Выберите тип рольштор и посмотрите примеры оформления окон в различных
                                        </div>
                                    </div>
                                    <div class="carouselPart svobPart">
                                        <div class="domPartrolshtoriCarousel owl-carousel">
                                            <div class="item"><img src="img/screen4/rolshtori/svob/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/svob/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/svob/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/svob/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                    <div class="carouselPart kassPart">
                                        <div class="ofisPartzhaluziCarousel owl-carousel">
                                            <div class="item"><img src="img/screen4/rolshtori/kass/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/kass/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/kass/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/kass/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                    <div class="carouselPart dnPart">
                                        <div class="ofisPartzhaluziCarousel owl-carousel">
                                            <div class="item"><img src="img/screen4/rolshtori/dn/1.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/dn/2.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/dn/3.jpg" alt=""></div>
                                            <div class="item"><img src="img/screen4/rolshtori/dn/4.jpg" alt=""></div>
                                        </div>
                                        <div class="buttonPart">
                                            <a href="#call" class="fancy button">Узнать стоимость</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Выберите материал жалюзи -->

        <div class="screen" style="display: none" id="screen4st2">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <div class="choosePart">
                                <h2>Выберите материал</h2>
                                <ul>
                                    <li class="derevo">
                                        <label for="derevomaterial">
                                            <img src="img/screen4st2/derevo.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="derevomaterial" name="material" value="Дерево или бамбук">
                                                Дерево или бамбук
                                            </div>
                                        </label>
                                    </li>
                                    <li class="materiya">
                                        <label for="materiyamaterial">
                                            <img src="img/screen4st2/materiya.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="materiyamaterial" name="material" value="Материя (ткань)">
                                                Материя (ткань)
                                            </div>
                                        </label>
                                    </li>
                                    <li class="alumini">
                                        <label for="aluminimaterial">
                                            <img src="img/screen4st2/alumini.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="aluminimaterial" name="material" value="Алюминий">
                                                Алюминий
                                            </div>
                                        </label>
                                    </li>
                                    <li class="plastic">
                                        <label for="plasticmaterial">
                                            <img src="img/screen4st2/plastic.jpg" alt="">
                                            <div class="inputArea">
                                                <input type="radio" id="plasticmaterial" name="material" value="Пластик">
                                                Пластик
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Укажите количество створок окон -->

        <div class="screen" style="display: none" id="screen5">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите количество створок окон</h2>
                            <div class="description">
                                Если Вы хотите установить <span class="vid">жалюзи</span> на несколько окон, укажите суммарное количество створок.
                            </div>
                            <div class="choosePart">
                                <div class="choose">
                                    <img src="img/screen5/minus.png" alt="" class="minus calcButton">
                                    <img src="img/screen5/plus.png" alt="" class="plus calcButton">
                                    <input type="text" name="stvorki" value="1" id="stvorki">
                                    <div class="text">Количество створок</div>
                                </div>
                            </div>
                            <div class="showPart">
                                <div class="item window1 active"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window2"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window3"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window4"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window5"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window6"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window7"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window8"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window9"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window10"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window11"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window12"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window13"><img src="img/screen5/window.png" alt=""></div>
                                <div class="item window14"><img src="img/screen5/window.png" alt=""></div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Укажите приблизительный  размер окна -->

        <div class="screen" style="display: none" id="screen6">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>     
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div>
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите приблизительный  размер окна</h2>
                            <div class="description">
                                <div class="rol">
                                    Для расчёта стоимости рольштор необходимо знать размер полотна, которое уйдёт на изготовление
                                </div>
                                <div class="zhal">
                                    Для расчёта стоимости жалюзи необходимо знать количество материала, который уйдёт на изготовление
                                </div>
                            </div>
                            <div class="choosePart">
                                <div class="windowPart">
                                    <div class="vertical">
                                        <div id="heightSlide"></div>
                                    </div>
                                    <div class="horizontal">
                                        <div id="widthSlide"></div>
                                    </div>
                                    <div class="minmaxvert">
                                        <p class="max">200 см</p>
                                        <p class="min">20 см</p>
                                    </div>
                                    <div class="minmaxhor">
                                        <p class="min">20 см</p>
                                        <p class="max">200 см</p>
                                    </div>
                                </div>
                                <div class="inputsPart">
                                    <div class="line">
                                        <span class="title">Ширина</span> <input type="text" id="width" name="width"> <span class="izm">см</span>
                                    </div>
                                    <div class="line">
                                        <span class="title">Высота</span> <input type="text" id="height" name="height"> <span class="izm">см</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hintPart">
                                <div class="planka">
                                    <div class="text">
                                        <div class="zhal" style="display: none">
                                            <p>Жалюзи изготавливаются под заказ по точным размерам Ваших окон.</p>
                                            <p>
                                                Поэтому перед заказом к Вам приедет профессиональный замерщик с образцами материалов и произведёт точные замеры с учётом материала.
                                            </p>
                                            <p>
                                                Вы можете заказать бесплатный выезд замерщика от Солнце.бел уже сейчас
                                            </p>
                                        </div>
                                        <div class="rol">
                                            <p>Рольшторы изготавливаются под заказ по точным размеров Ваших окон.</p>
                                            <p>
                                                Поэтому перед заказом к Вам приедет профессиональный замерщик с образцами материалов и произведёт точные замеры с учётом материала.
                                            </p>
                                            <p>
                                                Вы можете заказать бесплатный выезд замерщика от Солнце.бел уже сейчас
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#call" class="fancy button">Вызвать замерщика</a>
                                </div>
                            </div>
                        </div>
                        <div class="nextBottomBlock"><p class="button">Далее</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Агрегатор -->

        <!-- <div class="screen" style="display:none;" id="screen7">

            <div class="tabletview">

                <div class="container">

                    <div class="plashka">

                        <div class="header">

                            <img src="img/logoSmall.png" alt="" class="logo">

                            <p class="sitename"><?php echo $sitename ?></p>

                            <a href="#call" class="fancy button">Заказать звонок</a>

                            <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>

                        </div>

                        <nav class="navigation">

                            <div class="next button2">

                                Следующий шаг

                            </div>

                            <div class="prev button2">

                                Предыдущий шаг

                            </div>

                        </nav>

                        <div class="quest">

                            <div class="part selectPart">

                                <h3>Вы выбрали:</h3>

                                <div class="obol">

                                    <ul>

                                        <li>

                                            <span class="zhaluziilirolshtoriTEXT"></span> <span id="typezhaluziTEXT"></span>

                                        </li>

                                        <li>

                                            <span class="zhaluziilirolshtoriTEXT"></span> необходимы: <span id="kudazhaluziTEXT"></span>

                                        </li>

                                        <li class="zhaluziLi">

                                            Материал жалюзи: <span id="materialTEXT"></span>

                                        </li>

                                        <li>

                                            Количество створок окон: <span id="stvorkiTEXT"></span>

                                        </li>

                                        <li>

                                            Ширина окна: <span id="widthTEXT"></span>, высота окна: <span id="heightTEXT"></span>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="sticker">

                                <h3>Замер и установка бесплатно!</h3>

                                <a href="#call" class="fancy button">Заказать сейчас</a>

                            </div>

                        </div>

                        <div class="nextBottomBlock">

                            <p class="poiskText">Идёт поиск вариантов...</p>

                            <div class="schetchik">

                                <div class="schetchikObl">

                                    <p id="textMybar">

                                        10%

                                    </p>

                                    <div class="obol">

                                        <div id="myBar"></div>

                                    </div>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div> -->

        <!-- Форма -->

        <div class="screen" style="display: none" id="screen8">
            <div class="tabletview">
                <div class="container">
                    <div class="plashka">
                        <div class="header">
                            <div class="left">
                                <img src="img/sunlogo.png" alt="" class="logo">
                                <p class="sitename"><?php echo $sitename ?></p>
                            </div>
                            <div class="right">
                                <a href="tel:+375296113870" class="tel">+375 (29) <span>611-38-70</span></a>
                                <a href="#call" class="fancy button">Заказать звонок</a>
                            </div> 
                        </div>
                        <nav class="navigation">
                            <div class="next button2">Следующий шаг</div>
                            <div class="prev button2">Предыдущий шаг</div>
                        </nav>
                        <div class="quest">
                            <h2>Поздравляем!</h2>
                            <div class="nota">
                                Согласно выбранным Вами параметрам,
                                Вы получаете скидку 10%
                            </div>
                            <div class="planka">
                                <div class="text">
                                    Оставьте свои контакты для закрепления скидки за номером телефона*
                                </div>
                                <input type="text" name="name" placeholder="Ваше имя">
                                <input type="text" name="phone" placeholder="Ваш телефон *">
                                <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                                <div class="messengers">
                                    <p>Куда Вам удобнее выслать стоимость?</p>
                                    <div class="messenger">
                                        <img src="img/sms.png" alt="" class="icon">
                                        <p>SMS</p>
                                        <input type="radio" name="messenger" value="SMS" checked>
                                    </div>
                                    <div class="messenger">
                                        <img src="img/viber.png" alt="" class="icon">
                                        <p>Viber</p>
                                        <input type="radio" name="messenger" value="Viber">
                                    </div>
                                    <div class="messenger">
                                        <img src="img/whatsapp.png" alt="" class="icon">
                                        <p>WhatsApp</p>
                                        <input type="radio" name="messenger" value="WhatsApp">
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="Калькулятор">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <input type="submit" class="button" value="Получить скидку">
                                <p class="confidencial">
                                    *Гарантируем соблюдение политики конфиденциальности. Ваши данные не будут передаваться третьим лицам
                                </p>
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
                        <p class="return">< Вернуться на главную</p>
                        <div class="sticker">
                            <h2>Спасибо!</h2>
                            <div class="text">
                                В ближайшее время с Вами свяжется менеджер
                                для подтверждения скидки и уточнения
                                информации по заказу
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <a href="#choosePlease" class="fancy" style="display:none;" id="choosePleaseGo"></a>

    <div id="call" style="display: none">
        <form action method="post" id="zvonokForm" class="callClass">
            <h2>
                Закажите обратный звонок
                и в ближайшее время
                мы Вам перезвоним
            </h2>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Ваш телефон" required>
            <input type="hidden" name="type" value="Заказ звонка">
            <input type="hidden" name="type-img" value="">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать звонок" class="button">
        </form>
    </div>
    <div id="choosePlease" style="display: none;">Пожалуйста, выберите ответ</div>

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
</div>
<div class="showAllBlocks"></div>

<!-- Yandex.Metrika counter --><script type="text/javascript" >    (function (d, w, c) {        (w[c] = w[c] || []).push(function() {            try {                w.yaCounter47479579 = new Ya.Metrika({                    id:47479579,                    clickmap:true,                    trackLinks:true,                    accurateTrackBounce:true,                    webvisor:true                });            } catch(e) { }        });        var n = d.getElementsByTagName("script")[0],            s = d.createElement("script"),            f = function () { n.parentNode.insertBefore(s, n); };        s.type = "text/javascript";        s.async = true;        s.src = "https://mc.yandex.ru/metrika/watch.js";        if (w.opera == "[object Opera]") {            d.addEventListener("DOMContentLoaded", f, false);        } else { f(); }    })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/47479579" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

</body>
</html>