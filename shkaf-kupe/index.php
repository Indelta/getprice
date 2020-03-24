<?php require_once 'config.php';?>
<?php
    function getCheck() {
        $checkFile = fopen("isShum.txt", "r");
        $bul = fgets($checkFile);
        fclose($checkFile);
        return $bul;
    }
    $isShum = getCheck();
    if ($isShum == "true") {
        $phone = "<a href='tel:+375296486173' class='tel'>+375 (29) 648-61-73</a>";
        $unp = "УНП 191171910";
    }  
    else {
        $phone = "<a href='tel:+375447077474' class='tel'>+375 (44) 707-74-74</a>";
        $unp = "Modern House, УНП 190925145";
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Расчёт стоимости шкафов-купе в Минске. Шкафы-купе от производителей. </title>
    <meta name="description"
          content="Шкафы-купе по индивидуальным проектам от производителей. Лучшие предложения у нас! Рассчитайте стоимость шкафа-купе в Минске за 7 минут.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="shortcut icon">
    <!-- <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script> -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        setTimeout(function(){
            gtag('event', location.pathname, {
            'event_category': 'Посещение без отказа',
        });
        }, 15000);
        gtag('config', 'UA-90181425-1');
    </script>
    <!-- Rating Mail.ru counter -->
    <script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3036807", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
    (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
    </script><noscript><div>
    <img src="https://top-fwz1.mail.ru/counter?id=3036807;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
    </div></noscript>
    <!-- //Rating Mail.ru counter -->
</head>
<body>
<div id="kalkulator">
    <div class="sticker_100">
        <a href="#promo-sale" class="fancy">
            <img src="img/sticker/sticker_100.png" alt="">
        </a>
    </div>
    <form id="kalkulatorForm">
        <div class="screen" id="screen1">
            <div class="container">
                <header>
                    <div class="left">
                        <img src="img/logo.png" alt=""/>
                        <span>Шкафы-купе в Минске и Минской области (до 50 км)</span>
                    </div>
                    <div class="right"><?php echo $phone;?></div>
                </header>
                <div class="content">
                    <div class="leftSide">
                        <p>Ищете шкаф-купе по выгодной цене?</p>
                        <h1>Найдем лучшие цены на 
                            <span class="yellow">шкафы-купе!</span>
                            <span class="mobile-hide">Бронируйте стоимость в BYN по старому курсу!</span>
                        </h1>
                    </div>
                    <div class="rightSide">
                        <div class="sticker next">
                            <p class="title">Ответьте на 6 вопросов и получите скидку до 15%!</p>
                            <p class="description">Вы экономите время менеджера - мы экономим Ваши деньги!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="startQuest">
                    <div class="pulse"></div>
                    <p class="next">Рассчитать стоимость</p>
                </div>
                <p class="steps">Всего за 6 простых шагов</p>
            </div>
            <div class="carousel">
                <div class="owl-carousel">
                    <div><img src="img/slider/1.jpg" alt=""></div>
                    <div><img src="img/slider/2.jpg" alt=""></div>
                    <div><img src="img/slider/3.jpg" alt=""></div>
                    <div><img src="img/slider/4.jpg" alt=""></div>
                    <div><img src="img/slider/5.jpg" alt=""></div>
                    <div><img src="img/slider/6.jpg" alt=""></div>
                    <div><img src="img/slider/7.jpg" alt=""></div>
                    <div><img src="img/slider/8.jpg" alt=""></div>
                    <div><img src="img/slider/9.jpg" alt=""></div>
                    <div><img src="img/slider/10.jpg" alt=""></div>
                    <div><img src="img/slider/11.jpg" alt=""></div>
                    <div><img src="img/slider/12.jpg" alt=""></div>
                    <div><img src="img/slider/13.jpg" alt=""></div>
                    <div><img src="img/slider/14.jpg" alt=""></div>
                    <div><img src="img/slider/15.jpg" alt=""></div>
                    <div><img src="img/slider/16.jpg" alt=""></div>
                    <div><img src="img/slider/17.jpg" alt=""></div>
                    <div><img src="img/slider/18.jpg" alt=""></div>
                    <div><img src="img/slider/19.jpg" alt=""></div>
                    <div><img src="img/slider/20.jpg" alt=""></div>
                    <div><img src="img/slider/21.jpg" alt=""></div>
                    <div><img src="img/slider/22.jpg" alt=""></div>
                    <div><img src="img/slider/23.jpg" alt=""></div>
                    <div><img src="img/slider/24.jpg" alt=""></div>
                    <div><img src="img/slider/25.jpg" alt=""></div>
                    <div><img src="img/slider/26.jpg" alt=""></div>
                    <div><img src="img/slider/27.jpg" alt=""></div>
                    <div><img src="img/slider/28.jpg" alt=""></div>
                    <div><img src="img/slider/29.jpg" alt=""></div>
                    <div><img src="img/slider/30.jpg" alt=""></div>
                    <div><img src="img/slider/31.jpg" alt=""></div>
                    <div><img src="img/slider/32.jpg" alt=""></div>
                    <div><img src="img/slider/33.jpg" alt=""></div>
                    <div><img src="img/slider/34.jpg" alt=""></div>
                    <div><img src="img/slider/35.jpg" alt=""></div>
                    <div><img src="img/slider/36.jpg" alt=""></div>
                    <div><img src="img/slider/37.jpg" alt=""></div>
                    <div><img src="img/slider/38.jpg" alt=""></div>
                    <div><img src="img/slider/39.jpg" alt=""></div>
                    <div><img src="img/slider/40.jpg" alt=""></div>
                    <div><img src="img/slider/41.jpg" alt=""></div>
                    <div><img src="img/slider/42.jpg" alt=""></div>
                    <div><img src="img/slider/43.jpg" alt=""></div>
                    <div><img src="img/slider/44.jpg" alt=""></div>
                    <div><img src="img/slider/45.jpg" alt=""></div>
                    <div><img src="img/slider/46.jpg" alt=""></div>
                    <div><img src="img/slider/47.jpg" alt=""></div>
                    <div><img src="img/slider/48.jpg" alt=""></div>
                    <div><img src="img/slider/49.jpg" alt=""></div>
                </div>
            </div>
            <div class="container">
                <div class="zayKolvo">
                    <p>сегодня обработано <span>

                <?php
                    $myquery = "SELECT * FROM `NumberZayavok` WHERE `sitename` LIKE 'shkaf-kupe' ORDER BY `id`";
                    $result = $connect->query($myquery);
                    $mass = $result->fetch_array(MYSQLI_ASSOC);
                    $number=$mass['number'];
                    $thisday = date("j");
                    $oldday = $mass['date'];
                    if($thisday!=$oldday){
                        $query2 = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `date` =  '$thisday' WHERE  `NumberZayavok`.`sitename` LIKE 'shkaf-kupe'";
                        // $number = 20;
                        $connect->query($query2);
                    }
                    echo $number;
                    $number++;
                    $query = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `number` =  '$number' WHERE  `NumberZayavok`.`sitename` LIKE 'shkaf-kupe'";
                    $connect->query($query);
                    // echo '123';
                ?>
                </span> заявок</p>
                    <p class="unp"><?php echo $unp; ?></p>
                </div>
            </div>
        </div>
        <div class="screen calcScreen" id="screen2" style="display:none;">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">Куда вы хотите поставить шкаф-купе?</p>
                        <div class="quest">
                            <div class="items">
                                <label class="item">
                                    <input type="radio" name="shkafPlace" value="В прихожую" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/place/prihozhayaColor.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Прихожая</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafPlace" value="В гостиную" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/place/gostinayaColor.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Гостиная</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafPlace" value="В спальню" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/place/spalnyaColor.jpg" alt="" />
                                        </div> 
                                    </div>
                                    <p class="name">Спальня</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafPlace" value="В детскую" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/place/detskayaColor.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Детская</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafPlace" value="В другую комнату" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/place/drugayaColor.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Другая комната</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="screen calcScreen" id="screen3" style="display:none;">
            <div class="tabletView">  
                <div class="container">
                    <div class="plashka">
                        <p class="question">Какой тип шкафа выберем?</p>
                        <div class="quest">
                            <div class="items">
                                <label class="item">
                                    <input type="radio" name="shkafType" value="Корпусный">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/shkafType/korpusColor.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Корпусный</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafType" value="Встроенный">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/shkafType/vstroennyColor.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Встроенный</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="shkafType" value="Угловой">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/shkafType/uglovoyColor.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Угловой</p>
                                </label>
                            </div>
                        </div>
                        <div class="dontKnow">
                            <label class="pseudoBtn">
                                <input type="radio" name="shkafType" value="Не выбрано" />
                                <span>Пока не знаю</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen calcScreen" id="screen4" style="display:none;">
            <div class="tabletView">
                <div class="plashka">
                    <div class="container">
                        <p class="question">Какого размера будет шкаф-купе?</p>
                        <div class="quest">
                            <div class="cols">
                                <div class="left">
                                    <div class="input-slider height">
                                        <p class="name">Высота</p>
                                        <input type="number" name="height" value="270">
                                        <span>см.</span>
                                        <div class="slider" id="sliderH"></div>
                                        <div class="min-max">
                                            <span class="min">120 см.</span>
                                            <span class="max">400 см.</span>
                                        </div>
                                    </div>
                                    <div class="input-slider width">
                                        <p class="name">Ширина</p>
                                        <input type="number" name="width" value="250">
                                        <span>см.</span>
                                        <div class="slider" id="sliderW"></div>
                                        <div class="min-max">
                                            <span class="min">60 см.</span>
                                            <span class="max">1000 см.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <img src="img/shkafRazmer.png" class="default" alt="">
                                    <img src="img/shkafRazmerDeep.png" class="deep" style="display:none" alt="">
                                    <img src="img/shkafRazmerHeight.png" class="height" style="display:none" alt="">
                                    <img src="img/shkafRazmerWidth.png" class="width" style="display:none" alt="">
                                </div>
                                <div class="right">
                                    <div class="input-slider deep">
                                        <p class="name">Глубина</p>
                                        <input type="number" name="deep" value="60">
                                        <span>см.</span>
                                        <div class="slider" id="sliderD"></div>
                                        <div class="min-max">
                                            <span class="min">20 см.</span>
                                            <span class="max">100 см.</span>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        Для расчёта стоимости Вы указываете ориентировочные размеры будущего шкафа. При заказе шкафа-купе, инженер-дизайнер бесплатно приедет к Вам домой и произведёт точные замеры!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn next">Далее</div>
            </div>
        </div>
        <div class="screen calcScreen" style="display: none" id="screen5">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">Выберите количество отделов в шкафу</p>
                        <div class="quest">
                            <div class="items">
                                <label class="item">
                                    <input type="radio" name="otdely" value="Два отделения">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/otdely/twootdel.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Два отделения</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="otdely" value="Три отделения">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/otdely/threeotdel.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Три отделения</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="otdely" value="Четыре отделения">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/otdely/fourotdel.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Четыре отделения</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="otdely" value="Не знаю">
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/otdely/dnotdel.png" alt="">
                                        </div>
                                    </div>
                                    <p class="name">Не знаю</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen calcScreen last" id="screen6" style="display:none;">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">Давайте выберем внешний вид шкафа</p>
                        <div class="quest">
                            <div class="items">
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="ЛДСП" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/dsp.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">ЛДСП</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="зеркала и стёкла" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/zerkala.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Зеркала и стёкла</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="пескоструйный рисунок на зеркалах" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/peskostrui.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Пескоструйный рисунок на зеркалах</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="фотопечать" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/fotopechat.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Фотопечать</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="экокожа" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/ekokozha.jpg" alt="" />
                                        </div> 
                                    </div>
                                    <p class="name">Экокожа</p>
                                </label>
                                <label class="item">
                                    <input type="radio" name="ZshkafCover" value="лакобель или лакомат" />
                                    <div class="img-block">
                                        <div class="img">
                                            <img src="img/covers/lakobel.jpg" alt="" />
                                        </div>
                                    </div>
                                    <p class="name">Лакобель или лакомат</p>
                                </label>
                            </div>
                            <div class="dontKnow">
                                <label class="btn">
                                    <input type="radio" name="ZshkafCover" value="Не выбрано" />
                                    <span>Пока не знаю</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="screen" style="display: none" id="screen7">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="prev">
                            <span class="angle">&#10092;</span>
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <span class="angle">&#10093;</span>
                        </p>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">Вы выбрали шкаф-купе:</p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <p class="vopr">Куда?</p>
                                    <p class="otvetKuda"></p>
                                </li>
                                <li>
                                    <p class="vopr">Тип</p>
                                    <p class="otvetTip"></p>
                                </li>
                                <li>
                                    <p class="vopr">Размеры</p>
                                    <p class="otvetRazmer">
                                        <span class="w"></span> x <span class="h"></span> x <span class="d"></span>
                                    </p>
                                </li>
                                <li class="desctop">
                                    <p class="vopr">Конфигурация</p>
                                    <p class="otvetConfig"></p>
                                </li>
                                <li class="mobile">
                                    <p class="vopr">Конфигурация</p>
                                    <p class="otvetConfig"></p>
                                </li>
                                <li>
                                    <p class="vopr">Внешняя отделка</p>
                                    <p class="otvetOtdelka"></p>
                                </li>
                            </ul>
                        </div>
                        <div class="resultCount">Всего найдено <span>390</span> конфигураций</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen calcScreen" style="display: none" id="screen8">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Вы ответили на все вопросы <br/>
                            и получаете дополнительные бонусы:
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <div class="coverImg doprassr"></div>
                                    <div>Оплата картами рассрочки</div>
                                </li>
                                <li>
                                    <div class="coverImg doprasgarant"></div>
                                    <div>Расширенная гарантия до 5 лет</div>
                                </li>
                                <li>
                                    <div class="coverImg dopbelsplzamer"></div>
                                    <div>Бесплатный замер и установка</div>
                                </li>
                                <li>
                                    <div class="coverImg dopshuflyadka"></div>
                                    <div>При заказе шкафа с шуфлядками, вторая шуфлядка в подарок</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btn next">Далее</div>
            </div>
        </div>

        <div class="screen" style="display: none" id="screen9">
            <div class="container">
                <div class="plashka">
                    <p class="question">Благодарим за ответы!</p>
                    <p class="description">Для Вас: расчет в BYN по старому курсу + Скидка 15%</p>
                    <div class="quest">
                        <label for="phone">Оставьте свой номер телефона и мы с вами свяжемся!</label>
                        <div class="name">
                            <img src="img/balloon.png" alt="" />
                            <input type="text" name="name" id="name" placeholder="Ваше имя" />
                        </div>
                        <div class="phone">
                            <img src="img/phone.png" alt="" />
                            <input type="text" name="phone" id="phone" placeholder="+375 (**) ***-**-**" />
                            <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                        </div>
                        <div class="vnimanie">Внимание! Срок предложения 3 дня!</div>
                    </div>
                    <div class="itogBtn">
                        <input type="hidden" name="type" value="Калькулятор" />
                        <input type="hidden" name="utm_term" value="" />
                        <input type="hidden" name="utm_source" value="" />
                        <input type="hidden" name="utm_medium" value="" />
                        <input type="hidden" name="utm_campaign" value="" />
                        <input type="hidden" name="utm_content" value="" />
                        <input type="submit" value="Узнать стоимость со скидкой!" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="promo-sale" style="display:none;">
    <form action method="POST" id="promoSaleForm">
        <div class="title">
            Оставьте заявку и получите промокод-скидку на 100 BYN
        </div>
        <input type="text" name="name" placeholder="Ваше имя" />
        <input type="text" name="phone" required placeholder="+375(**)***-**-**" />
        <input type="hidden" name="type" value="Промокод 100 BYN" />
        <input type="hidden" name="utm_term" value="remont" />
        <input type="hidden" name="utm_source" value="" />
        <input type="hidden" name="utm_medium" value="" />
        <input type="hidden" name="utm_campaign" value="" />
        <input type="hidden" name="utm_content" value="" />
        <input type="submit" value="Получить промокод" class="button" />
    </form>
</div>
<div class="thankYouPage" style="display:none">
    <div class="container">
        <h1>Спасибо!</h1>
        <div class="desciption">
            Через несколько минут мы свяжемся с Вами!
        </div>
        <div class="back">
            <a href="/">Вернуться на главную</a>
        </div>
    </div>
</div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/scriptNew.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(42046894, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            trackHash:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/42046894" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>