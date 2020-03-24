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
        $phone = "<a href='tel:+375296486172' class='tel'>+375 (29) 648-61-72</a>";
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
    <link rel="stylesheet" href="css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90181425-13');
        setTimeout(function(){
        gtag('event', location.pathname, {
        'event_category': 'Новый посетитель'
        });
        }, 15000);
    </script>
</head>
<body>
    <!-- Rating Mail.ru counter -->
    <script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3154721", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
    (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
    </script><noscript><div>
    <img src="https://top-fwz1.mail.ru/counter?id=3154721;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
    </div></noscript>
    <!-- //Rating Mail.ru counter -->
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
<!--    <img src="img/sticker/stickerCall.png" alt="" class="stickerCall">-->
    <div class="callWind">
        <div class="close">
            <img src="img/sticker/whiteCross.png" alt="" />
        </div>
        <div class="title">
            <img src="img/sticker/callTrubka.png" alt="" />
            <p>
                Мы вам перезвоним!
            </p>
        </div>
        <form action="" method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя" />
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required />
            <input type="hidden" name="type" value="Заказ звонка" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_content" value="" />
            <input type="submit" value="Заказать звонок" />
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <?php echo $phone;?>
        </div>
    </div>
    <div class="sticker_100">
        <a href="#promo-sale" class="fancy">
            <img src="img/sticker/sticker_100.png" alt="">
        </a>
    </div>
    <form id="kalkulatorForm">
        <div class="screen" id="screen1">
            
                <div class="container">
                    <header>
                        <img src="img/logo.png" alt="" class="logo" />
                        <p class="sitename">Шкафы-купе в Минске и Минской области (до 50 км)</p>
                        <a href="#call" class="fancy btn">Заказать звонок</a>
                        <?php echo $phone;?>
                    </header>
                    <div class="leftSide">
                        <p class="question">Ищете шкаф-купе по выгодной цене?</p>
                        <h1>
                            Лучшие цены на 
                            <span class="nextStep">шкафы-купе!</span> 
                            Бронируйте стоимость в BYN по старому курсу!
                        </h1>
                        <div class="startQuest">
                            <div class="pulse"></div>
                            <p class="btn">Рассчитать стоимость</p>
                            <p class="steps">Всего за <span>5</span> простых шагов</p>
                        </div>
                    </div>
                </div>
                <div class="rightSide">
                    <div class="sticker">
                        <p class="top">Ответьте на 5 вопросов</p>
                        <p class="title"><span class="left">и получите <br /><span class="icon">&rsaquo;</span> скидку</span> <span class="sale">15%</span></p>
                        <p class="bottom">Вы экономите время менеджера - <br />мы экономим Ваши деньги!</p>
                    </div>
                </div>
                <div class="footer">
                    <div class="container">
                        <div class="zayKolvo">
                            <p class="unp"><?php echo $unp;?></p>
                            <p>сегодня обработано<span>
                                <?php
                                $myquery = "SELECT * FROM `NumberZayavok` WHERE `sitename` LIKE 'inmebel' ORDER BY `id`";
                                $result = $connect->query($myquery);
                                $mass = $result->fetch_array(MYSQLI_ASSOC);
                                $number=$mass['number'];
                                $thisday = date("j");
                                $oldday = $mass['date'];
                                if($thisday!=$oldday){
                                    $query2 = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `date` =  '$thisday' WHERE  `NumberZayavok`.`sitename` LIKE 'inmebel'";
                                    $number = 20;
                                    $connect->query($query2);
                                }
                                echo $number;
                                $number++;
                                $query = "UPDATE  `retsolme_getprice`.`NumberZayavok` SET  `number` =  '$number' WHERE  `NumberZayavok`.`sitename` LIKE 'inmebel'";
                                $connect->query($query);
                                // echo "123";
                                ?>
                            </span>заявок</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="screen" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="prev">
                                <img src="img/prev.png" alt="" /><span>Предыдущий шаг</span>
                            </p>
                            <p class="next">
                                <span>Следующий шаг</span><img src="img/next.png" alt="" />
                            </p>
                            <ul class="steps">
                                <li class="active" id="step2"><p>1</p></li>
                                <li id="step3"><p>2</p></li>
                                <li id="step4"><p>3</p></li>
                                <li id="step5"><p>4</p></li>
                                <li id="step6"><p>5</p></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Куда вы хотите поставить шкаф-купе?
                        </p>
                        <div class="quest">
                            <div class="items">
                                <label for="prihozhaya" class="item">
                                    <p class="imgBlock"><img src="img/place/prihozhayaColor.jpg" alt="" /></p>
                                    <p><input type="radio" name="shkafPlace" id="prihozhaya" value="В прихожую" />Прихожая</p>
                                </label>
                                <label for="gostinaya" class="item">
                                    <p class="imgBlock"><img src="img/place/gostinayaColor.jpg" alt="" /></p>
                                    <p><input type="radio" name="shkafPlace" id="gostinaya" value="В гостиную" />Гостиная</p>
                                </label>
                                <label for="spalnya" class="item">
                                    <p class="imgBlock"><img src="img/place/spalnyaColor.jpg" alt="" /></p>
                                    <p><input type="radio" name="shkafPlace" id="spalnya" value="В спальню" />Спальня</p>
                                </label>
                                <label for="detskaya" class="item">
                                    <p class="imgBlock"><img src="img/place/detskayaColor.jpg" alt="" /></p>
                                    <p><input type="radio" name="shkafPlace" id="detskaya" value="В детскую" />Детская</p>
                                </label>
                                <label for="other" class="item">
                                    <p class="imgBlock"><img src="img/place/drugayaColor.jpg" alt="" /></p>
                                    <p>
                                        <input type="radio" name="shkafPlace" id="other" value="В другую комнату" />
                                        Другая комната
                                    </p>
                                </label>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="prev">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2"><p>1</p></li>
                            <li class="active" id="step3"><p>2</p></li>
                            <li id="step4"><p>3</p></li>
                            <li id="step5"><p>4</p></li>
                            <li id="step6"><p>5</p></li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Какой тип шкафа выберем?
                        </p>
                        <div class="quest">
                            <div class="items">
                                <label for="korpus" class="item">
                                    <p class="imgBlock selected">
                                        <img src="img/shkafType/korpusColor.png" alt="" />
                                    </p>
                                    <a href="#" class="toolTip">
                                        <input type="radio" name="shkafType" id="korpus" value="Корпусный" />
                                        Корпусный
                                    </a>
                                </label>
                                <label for="vstroenny" class="item">
                                    <p class="imgBlock">
                                        <img src="img/shkafType/vstroennyColor.png" alt="" />
                                    </p>
                                    <a href="#" class="toolTip">
                                        <input type="radio" name="shkafType" id="vstroenny" value="Встроенный" />
                                        Встроенный
                                    </a>
                                </label>
                                <label for="uglovoy" class="item">
                                    <p class="imgBlock">
                                        <img src="img/shkafType/uglovoyColor.png" alt="" />
                                    </p>
                                    <a href="#" class="toolTip">
                                        <input type="radio" name="shkafType" id="uglovoy" value="Угловой" />
                                        Угловой
                                    </a>
                                </label>
                            </div>     
                        </div>
                        <div class="dontKnow">
                            <label for="dontKnow">
                                <p class="pseudoBtn">
                                    Пока не знаю
                                </p>
                                <p class="hidden">
                                    <input type="radio" name="shkafType" id="dontKnow" value="Не выбрано" />
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen5">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="prev">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2"><p>1</p></li>
                            <li class="done" id="step3"><p>2</p></li>
                            <li id="step4" class="active"><p>3</p></li>
                            <li id="step5"><p>4</p></li>
                            <li id="step6"><p>5</p></li>
                        </ul>
                    </div>
                </nav>
                <div class="plashka">
                    <div class="container">
                        <p class="question">
                            Какого размера будет шкаф-купе?
                        </p>
                        <div class="quest">
                            <div class="deep">
                                <label for="deep">Глубина</label>
                                <input type="text" name="deep" id="deep" /> см
                                <div class="slider" id="sliderD"></div>
                                <div class="sliderMinMax">
                                    <p class="min">20 см</p>
                                    <p class="max">100 см</p>
                                </div>
                            </div>
                            <div class="questionPoyasnenie">
                                <p>
                                    Для расчёта стоимости Вы указываете ориентировочные размеры будущего шкафа.<br/>
                                    При заказе шкафа-купе, инженер-дизайнер бесплатно приедет к Вам домой и произведёт точные
                                    замеры!
                                </p>
                            </div>
                            <div class="height">
                                <label for="height">Высота</label>
                                <input type="text" name="height" id="height"/> см
                                <div class="slider" id="sliderH"></div>
                                <div class="sliderMinMax">
                                    <p class="min">120 см</p>
                                    <p class="max">400 см</p>
                                </div>
                            </div>
                            <div class="width">
                                <label for="width">Ширина</label>
                                <input type="text" name="width" id="width" /> см
                                <div class="slider" id="sliderW"></div>
                                <div class="sliderMinMax">
                                    <p class="min">60 см</p>
                                    <p class="max">1000 см</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen6">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="prev">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2"><p>1</p></li>
                            <li class="done" id="step3"><p>2</p></li>
                            <li id="step4" class="done"><p>3</p></li>
                            <li id="step5" class="active"><p>4</p></li>
                            <li id="step6"><p>5</p></li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">Выберите количество отделов в шкафу</p>
                        <div class="quest">
                            <label for="twootdel" class="item">
                                <p class="imgBlock twootdel"></p>
                                <p>
                                    <input type="radio" name="otdely" id="twootdel" value="Два отделения" />
                                    <span class="text">Два отделения</span>
                                </p>
                            </label>
                            <label for="threeotdel threeotdel" class="item">
                                <p class="imgBlock threeotdel"></p>
                                <p>
                                    <input type="radio" name="otdely" id="threeotdel" value="Три отделения" />
                                    <span class="text">Три отделения</span>
                                </p>
                            </label>
                            <label for="fourotdel" class="item">
                                <p class="imgBlock fourotdel"></p>
                                <p>
                                    <input type="radio" name="otdely" id="fourotdel" value="Четыре отделения" />
                                    <span class="text">Четыре отделения</span>
                                </p> 
                            </label>
                            <label for="dnotdel" class="item">
                                <p class="imgBlock dnotdel"></p>
                                <p>
                                    <input type="radio" name="otdely" id="dnotdel" value="Не знаю" />
                                    Не знаю
                                </p>
                            </label>
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
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <ul class="steps">
                            <li class="done" id="step2"><p>1</p></li>
                            <li class="done" id="step3"><p>2</p></li>
                            <li id="step4" class="done"><p>3</p></li>
                            <li id="step5" class="done"><p>4</p></li>
                            <li id="step6" class="active"><p>5</p></li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">Давайте выберем внешний вид шкафа</p>
                        <div class="quest">
                            <div class="items">
                                <label for="dsp" class="item">
                                    <div class="imgBlock">
                                        <img src="img/covers/dsp.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="dsp" value="ламинированное ДСП, ЛДСП" />
                                        ЛДСП
                                    </div>
                                </label>
                                <label for="zerkala" class="item with-sticker">
                                    <div class="imgBlock">
                                        <img src="img/covers/zerkala.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="zerkala" value="зеркала и стёкла" />
                                        Зеркала и стёкла
                                    </div>
                                    <img src="img/sticker/text.jpg" alt="" class="sticker">
                                </label>
                                <label for="peskostrui" class="item">
                                    <div class="imgBlock">
                                        <img src="img/covers/peskostrui.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="peskostrui" value="пескоструйный рисунок на зеркалах" />
                                        Пескоструйный рисунок на зеркалах
                                    </div>
                                </label>
                                <label for="fotopechat" class="item">
                                    <div class="imgBlock">
                                        <img src="img/covers/fotopechat.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="fotopechat" value="фотопечать" />
                                        Фотопечать
                                    </div>
                                </label>
                                <label for="rotang" class="item">
                                    <div class="imgBlock">
                                        <img src="img/covers/rotang.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="rotang" value="Ротанг или бамбук" />
                                        Ротанг или бамбук
                                    </div>
                                </label>
                                <label for="lakobel" class="item">
                                    <div class="imgBlock">
                                        <img src="img/covers/lakobel.jpg" alt="" />
                                    </div>
                                    <div>
                                        <input type="radio" name="ZshkafCover" id="lakobel" value="лакобель или лакомат" />
                                        Лакобель или лакомат
                                    </div>
                                </label>
                            </div>
                            <div class="dontKnow">
                                <label for="dontKnowCover" class="item">
                                    <p class="pseudoBtn">Пока не знаю</p>
                                    <p class="hidden">
                                        <input type="radio" name="ZshkafCover" id="dontKnowCover" value="Не выбрано" />
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen9">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <p class="prev mobNav" style="display: none">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="prev">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Вы выбрали шкаф-купе:
                        </p>
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
                                        <span class="w"></span> x <span class="h"></span> x <span class="b"></span>
                                    </p>
                                </li>
                                <li>
                                    <p class="vopr"> Конфигурация</p>
                                    <p class="otvetConfig"></p>
                                </li>
                                <li>
                                    <p class="vopr">Внешняя отделка</p>
                                    <p class="otvetOtdelka"></p>
                                </li>
                            </ul>
                        </div>
                        <div class="resultCount">
                            Всего найдено <span>390</span> конфигураций
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen8">
            <div class="tabletView">
                <nav class="navigation">
                    <div class="container">
                        <p class="next mobNav" style="display: none">
                            <span>Следующий шаг</span>
                            <img src="img/next.png" alt="" />
                        </p>
                        <p class="prev mobNav" style="display: none">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="prev">
                            <img src="img/prev.png" alt="" />
                            <span>Предыдущий шаг</span>
                        </p>
                        <p class="next">
                            <span>Узнать стоимость</span>
                            <img src="img/next.png" alt="" />
                        </p>
                    </div>
                </nav>
                <div class="container">
                    <div class="plashka"> 
                        <p class="question">
                            Вы ответили на все вопросы<br/>
                            и получаете дополнительные бонусы:
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <div class="coverImg doprasgarant"></div>
                                    <div>Расширенная гарантия до 5 лет</div>
                                </li>
                                <li>
                                    <div class="coverImg dopbelsplzamer"></div>
                                    <div>Бесплатный замер и установка</div>
                                </li>
                                <li>
                                    <div class="coverImg doprassrochka"></div>
                                    <div>Рассрочка от производителя или по картам рассрочки</div>
                                </li>
                                <li>
                                    <div class="coverImg dopshuflyadka"></div>
                                    <div>При заказе шкафа с шуфлядками, вторая шуфлядка в подарок</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        
        <div class="screen" style="display: none" id="screen10">
            <div class="container">
                <div class="plashka">
                    <p class="question">
                        Благодарим за ответы!
                    </p>
                    <p class="description">
                        Для Вас: расчет в BYN по старому курсу + Скидка 15%
                    </p>
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
<div id="call" style="display: none">
    <form action method="POST" id="zvonokForm">
        <div class="title">
            Закажите обратный звонок
            и в ближайшее время
            мы Вам перезвоним
        </div>
        <input type="text" name="name" placeholder="Ваше имя" />
        <input type="text" name="phone" required placeholder="+375(**)***-**-**" />
        <input type="hidden" name="type" value="Заказать звонок" />
        <input type="hidden" name="utm_term" value="remont" />
        <input type="hidden" name="utm_source" value="" />
        <input type="hidden" name="utm_medium" value="" />
        <input type="hidden" name="utm_campaign" value="" />
        <input type="hidden" name="utm_content" value="" />
        <input type="submit" value="Заказать звонок" class="button" />
    </form>
</div>
<div id="promo-sale" style="display: none">
    <form action method="POST" id="promo-sale-form">
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
<a href="#closed" id="popupClosed" class="fancy"></a>
<div id="closed" style="display:none;">
    <form action method="POST" id="closedForm">
        <div class="title">
            <h2>Нужна рассрочка?</h2>
            <p>Выбирай подходящую и узнай сумму платежа в месяц</p>
        </div>
        <div class="inputs">
            <label>
                <img src="img/cards/halva.jpg" alt="">
                <p>
                    <input type="radio" name="karta" value="Халва">
                    <span>"Халва"</span>
                </p>
            </label>
            <label>
                <img src="img/cards/magnit.jpg" alt="">
                <p>
                    <input type="radio" name="karta" value="Магнит">
                    <span>"Магнит"</span>
                </p>
            </label>
            <label>
                <img src="img/cards/karta_pokupok.jpg" alt="">
                <p>
                    <input type="radio" name="karta" value="Карта покупок">
                    <span>"Карта покупок"</span>
                </p>
            </label>
            <label>
                <img src="img/cards/sobstvennaia.jpg" alt="">
                <p>
                    <input type="radio" name="karta" value="Собственная рассрочка">
                    <span>Собственная рассрочка</span>
                </p>
            </label>
        </div>
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="phone" placeholder="Телефон">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" value="Рассчитать платеж" class="button">
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
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<!-- <script src="js/owl.carousel.min.js"></script> -->
<script src="js/script.js"></script>
<!-- <script src="js/url.min.js"></script> -->
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
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(45709953, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45709953" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>