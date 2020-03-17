<?php $phone = "<a href='tel:375336747231' class='tel'><span>+375 (<b>33</b>) </span>674-72-31</a>";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>555Potolki</title>
    <meta name="Description" content="">
    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css"> 
    <link rel="stylesheet/less" href="css/style.less">
    <script src="js/less.min.js" ></script>
    <!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-27"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-90181425-27'); /* Accurate bounce rate by time */  setTimeout(function(){gtag('event', location.pathname, {  'event_category': 'Новый посетитель'});}, 15000);</script>
</head>
<body>
    <!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3062232", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3062232;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<?php include_once 'change_action_date.php';?>
    
    <div class="mobile-menu">
        <a class="gamburger" href="#">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <ul>
            <li><a href="#calc" class="openBlock">Расчет стоимости</a></li>
            <li><a href="#weTop" class="openBlock">О нас</a></li>
            <li><a href="#sale" class="openBlock">Скидки и акции</a></li>
            <li><a href="#examples" class="openBlock">Наши работы</a></li>
        </ul>   
    </div>
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
            <img src="img/sticker/whiteCross.png" alt=""/>
        </div>
        <div class="title">
            <img src="img/sticker/callTrubka.png" alt=""/>
            <p>
                Мы Вам перезвоним!
            </p>
        </div>
        <form action="" method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя"/>
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required/>
            <input type="hidden" name="type" value="Мы Вам перезвоним"/>
            <input type="hidden" name="utm_term" value=""/>
            <input type="hidden" name="utm_source" value=""/>
            <input type="hidden" name="utm_medium" value=""/>
            <input type="hidden" name="utm_campaign" value=""/>
            <input type="hidden" name="utm_content" value=""/>
            <input type="submit" value="Заказать звонок"/>
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <?echo $phone?>
        </div>
    </div>
    <div class="first-screen">
        <header id="header">
            <div class="container">
                <a href="#" class="logo">
                    <img src="img/1/logo.png" alt=""/>
                </a>
                <a href="#call" class="btn call-btn fancy">Заказать звонок</a>
                <?php echo $phone;?>
            </div>
        </header>
        <div id="utp">
            <div class="main-title">
                <h1>Натяжные потолки по цене производителя</h1>
                <p>Вы оплачиваете только стоимость монтажа и полотно</p>
            </div>
            <div class="container">
                <div class="white">
                    <p>Рассчитайте стоимость натяжного потолка на сайте и получите дополнительную скидку 20%.</p>
                    <a href="#" class="btn toCalc">Рассчитать стоимость</a>
                    <div class="pluses">
                        <div class="item item1">
                            <p>Рассрочка без переплат</p>
                        </div>
                        <div class="item item2">
                            <p>Гарантия на нашу работу</p>
                        </div>
                        <div class="item item3">
                            <p>Бесплатный замер и дизайн потолка</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="calc">
        <div class="container">
            <div class="kalkulator">
                <header>
                    <h3>Калькулятор расчета стоимости потолка</h3>
                    <p>Скидка на монтажные работы до 30%.</p>
                </header>
                <form action="" method="POST" id="calcForm">
                    <div class="step" id="step1">
                        <div class="step-title">
                            <span class="shag">Шаг 1</span>
                            <span>Выберите материал</span>
                            <a href="#call" class="fancy btn designer">Бесплатная консультация дизайнера</a>
                        </div>
                        <div class="items">
                            <label class="item">
                                <img src="img/calc/1/1.jpg" alt="">
                                <input type="radio" name="material" value="Тканевый">
                                <p class="item-name">Тканевый натяжной потолок</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/1/2.jpg" alt="">
                                <input type="radio" name="material" value="ПВХ">
                                <p class="item-name">ПВХ натяжной потолок</p>
                            </label>
                        </div>
                        <div class="buttons"></div>
                    </div>
                    <div class="step" id="step2" style="display:none;">
                        <div class="step-title">
                            <span class="shag">Шаг 2</span>
                            <span>Выберите вид</span>
                            <a href="#call" class="fancy btn designer">Бесплатная консультация дизайнера</a>
                        </div>
                        <div class="items">
                            <label class="item">
                                <img src="img/calc/2/matovui.jpg" alt="">
                                <input type="radio" name="vid" value="Матовый">
                                <p class="item-name">Матовый</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/2/glanets.jpg" alt="">
                                <input type="radio" name="vid" value="Глянцевый">
                                <p class="item-name">Глянцевый</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/2/metallic.jpg" alt="">
                                <input type="radio" name="vid" value="Металлик">
                                <p class="item-name">Металлик</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/2/photo.jpg" alt="">
                                <input type="radio" name="vid" value="Фотопечать">
                                <p class="item-name">Фотопечать</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/2/zvezdnoe.jpg" alt="">
                                <input type="radio" name="vaid" value="Звездное небо">
                                <p class="item-name">Звездное небо</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/2/drugoi.jpg" alt="">
                                <input type="radio" name="vid" value="Другой">
                                <p class="item-name">Другой</p>
                            </label>
                        </div>
                        <div class="buttons">
                            <span class="prev-btn"><&nbsp;&nbsp;Назад</span>
                        </div>
                    </div>
                    <div class="step" id="step3" style="display:none;">
                        <div class="step-title">
                            <span class="shag">Шаг 3</span>
                            <span>Укажите размеры и параметры комнаты</span>
                            <a href="#call" class="fancy btn designer">Бесплатная консультация дизайнера</a>
                        </div>
                        <div class="content">
                            <div class="inputs">
                                <div class="input-block">
                                    <span>Площадь</span>
                                    <input type="text" name="square" value="5">
                                    <span>м<sup>2</sup></span>
                                    <div id="calc-square-slider" class="slider"></div>
                                </div>
                                <div class="input-block">
                                    <span>Количество углов</span>
                                    <input type="text" name="angle-count" value="4">
                                    <div id="angle-slider" class="slider"></div>
                                </div>
                            </div>
                            <div class="banners">
                                <img src="img/calc/3/garantia.jpg" alt="">
                                <img src="img/calc/3/srok.jpg" alt="">
                                <img src="img/calc/3/zamer.jpg" alt="">
                            </div>
                        </div>
                        <div class="buttons">
                            <span class="prev-btn"><&nbsp;&nbsp;Назад</span>
                            <span class="btn next-btn">Далее</span>
                        </div>
                    </div>
                    <div class="step" id="step4" style="display:none;">
                        <div class="step-title">
                            <span class="shag">Шаг 4</span>
                            <span>Точки освещения</span>
                            <a href="#call" class="fancy btn designer">Бесплатная консультация дизайнера</a>
                        </div>
                        <div class="items">
                            <label class="item">
                                <img src="img/calc/4/new/1.jpg" alt="">
                                <input type="radio" name="svet" value="Установка только люстры">
                                <p class="item-name">Установка только<br> люстры</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/4/new/2.jpg" alt="">
                                <input type="radio" name="svet" value="Установка встроенных точек освещения">
                                <p class="item-name">Установка встроенных<br> точек освещения</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/4/new/3.jpg" alt="">
                                <input type="radio" name="svet" value="Встроенные точки освещения и люстра">
                                <p class="item-name">Встроенные точки<br> освещения и люстра</p>
                            </label>
                            <label class="item">
                                <img src="img/calc/4/new/4.jpg" alt="">
                                <input type="radio" name="svet" value="Без потолочного освещения">
                                <p class="item-name">Без потолочного<br> освещения</p>
                            </label>
                        </div>
                        <div class="buttons">
                            <span class="prev-btn"><&nbsp;&nbsp;Назад</span>
                        </div>
                    </div>
                    <div class="step" id="step5" style="display:none;">
                        <div class="step-title">
                            <span class="shag">Шаг 5</span>
                            <span>Дополнительные параметры</span>
                            <a href="#call" class="fancy btn designer">Бесплатная консультация дизайнера</a>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="item-img">
                                    <img src="img/calc/4/1.jpg" alt=""/>
                                </div>
                                <div class="label">
                                    <span>Трубы</span>
                                </div>
                                <div class="counter">
                                    <span class="minus">-</span>
                                    <input type="text" name="dop-trybi" value="1"/>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="img/calc/4/2.jpg" alt=""/>
                                </div>
                                <div class="label">
                                    <span>Вытяжки</span>
                                </div>
                                <div class="counter">
                                    <span class="minus">-</span>
                                    <input type="text" name="dop-vytazhki" value="1"/>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="img/calc/4/3.jpg" alt=""/>
                                </div>
                                <div class="label">
                                    <span>Встроенный карниз</span>
                                </div>
                                <div class="counter">
                                    <span class="minus">-</span>
                                    <input type="text" name="dop-karniz" value="1"/>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="img/calc/4/4.jpg" alt=""/>
                                </div>
                                <div class="label">
                                    <span>Многоуровневый <br/>потолок</span>
                                </div>
                                <div class="counter">
                                    <span class="minus">-</span>
                                    <input type="text" name="dop-potolok" value="1"/>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="items-mobile">
                            <div class="item">
                               <div class="item-title">
                                   <span>Трубы</span>
                               </div>
                                <div class="counter">
                                    <div class="minus"><span>-</span></div>
                                    <input type="text" name="dop-trybi" value="1">
                                    <div class="plus"><span>+</span></div>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="item-title">
                                   <span>Вытяжки</span>
                               </div>
                                <div class="counter">
                                    <div class="minus"><span>-</span></div>
                                    <input type="text" name="dop-vytazhki" value="1">
                                    <div class="plus"><span>+</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-title">
                                   <span>Встроенный карниз</span>
                               </div>
                                <div class="counter">
                                    <div class="minus"><span>-</span></div>
                                    <input type="text" name="dop-karniz" value="1">
                                    <div class="plus"><span>+</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-title">
                                   <span>Многоуровневый потолок</span>
                               </div>
                                <div class="counter">
                                    <div class="minus"><span>-</span></div>
                                    <input type="text" name="dop-зщещдщл" value="1">
                                    <div class="plus"><span>+</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <span class="prev-btn"><&nbsp;&nbsp;Назад</span>
                            <span class="btn next-btn">Далее</span>
                        </div>
                    </div>
                    <div class="step" id="step6" style="display:none;">
                        <div class="content">
                            <header><h3>Итак, Вы выбрали:</h3></header>
                            <div class="itog-list">
                                <div class="left-block">
                                    <ul class="itog">
                                        <li>Материал потолка: <span class="itog-material"></span></li>
                                        <li>Вид потолка: <span class="itog-vid"></span></li>
                                        <li>Площадь: <span class="itog-square"></span></li>
                                        <li>Количество углов: <span class="itog-angle-count"></span></li>
                                        <li>Свет: <span class="itog-svet"></span></li>
                                        <li>Дополнительно: <span class="itog-dop"></span></li>
                                    </ul>
                                </div>
                                <div class="right-block">
                                    <div class="progress-outer">
                                        <div id="progressBar">
                                            <span class="progress-count"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer>
                                <div class="plashka"><span>Идет поиск вариантов...</span></div>
                            </footer>
                        </div>
                    </div>
                    <div class="step" id="step7" style="display:none;">
                        <div class="fake-form">
                            <h2>Поздравляем!</h2>
                            <div class="padding-block">
                                <h3>Мы рассчитали стоимость Вашего натяжного потолка и размер персональной скидки</h3>
                                <p>Для закрепления скидки за Вашим номером введите Ваши данные</p>
                                <input type="text" name="name" placeholder="Ваше имя"/>
                                <input type="text" name="phone" placeholder="Ваш номер телефона"/>
                                <input type="hidden" name="type" value="Калькулятор"/>
                                <input type="hidden" name="utm_term" value=""/>
                                <input type="hidden" name="utm_source" value=""/>
                                <input type="hidden" name="utm_medium" value=""/>
                                <input type="hidden" name="utm_campaign" value=""/>
                                <input type="hidden" name="utm_content" value=""/>
                                <input type="submit" value="Узнать стоимость со скидкой" class="btn"/>
                            </div>
                        </div>
                        <div class="calc-thank-you" style="display:none;">
                            <h2>Спасибо за заявку!</h2>
                            <p>В ближайшее время мы свяжемся с Вами</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>      
    </div>
    <div id="weTop">
        <div class="container">
            <div class="pluses">
                <header><h2>Мы - лучшие <br/><span>на рынке натяжных потолков</span></h2></header>
                <div class="items">
                    <div class="item">
                        <h3>Более 25 лет</h3>
                        <p>опыта на рынке натяжных потолков в Беларуси</p>
                    </div>
                    <div class="item">
                        <h3>Лучшие цены</h3>
                        <p>на натяжные потолки из Европы</p>
                    </div>
                    <div class="item">
                        <h3>За 24 часа</h3>
                        <p>бесплатный замер и изготовление Вашего потолка</p>
                    </div>
                    <div class="item">
                        <h3>От 15 лет</h3>
                        <p>гарантия на полотно и монтаж</p>
                    </div>
                    <div class="item">
                        <h3>Более 50 лет</h3>
                        <p>срок службы наших потолков</p>
                    </div>
                    <div class="item">
                        <h3>Самый большой каталог</h3>
                        <p>полотен для натяжных потолков в Беларуси</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div id="sale">
        <div class="container">
            <h2>Скидки и Акции</h2>
            <div class="items">
                <div class="item">
                    <div class="header">
                        <p>Потолок на кухню в подарок!</p>
                    </div>
                    <div class="img"><img src="img/4/1img.jpg" alt=""/></div>
                    <div class="button">
                        <a href="#getPromo" class="btn fancy" data-promo="potolok2018">Получить промокод</a>
                    </div>
                    <p class="period">Акция действует до <span><?php change_action_date();?></span></p>
                </div>
                <div class="item">
                    <div class="header">
                        <p>Встроенные светильники в подарок!</p>
                    </div>
                    <div class="img"><img src="img/4/2img.jpg" alt=""/></div>
                    <div class="button">
                        <a href="#getPromo" class="btn fancy" data-promo="budetsvet2018">Получить промокод</a>
                    </div>
                    <p class="period">Акция действует до <span><?php change_action_date();?></span></p>
                </div>
                <div class="item">
                    <div class="header">
                        <p>Потолочный карниз в подарок!</p>
                    </div>
                    <div class="img"><img src="img/4/3img.jpg" alt=""/></div>
                    <div class="button">
                        <a href="#getPromo" class="btn fancy" data-promo="karnizz2018">Получить промокод</a>
                    </div>
                    <p class="period">Акция действует до <span><?php change_action_date();?></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="examples">
        <div class="container">
            <h2>Примеры наших работ</h2>
            <div class="slider-block">
                <div class="slider-inner">
                    <div class="slider owl-carousel">
                        <img src="img/5/photo.jpg" alt=""/>
                        <img src="img/5/photo2.jpg" alt=""/>
                        <img src="img/5/photo3.jpg" alt=""/>
                        <img src="img/5/photo4.jpg" alt=""/>
                        <img src="img/5/photo5.jpg" alt=""/>
                        <img src="img/5/photo6.jpg" alt=""/>
                        <img src="img/5/photo7.jpg" alt=""/>
                        <img src="img/5/photo8.jpg" alt=""/>
                        <img src="img/5/photo9.jpg" alt=""/>
                        <img src="img/5/photo10.jpg" alt=""/>
                        <img src="img/5/photo11.jpg" alt=""/>
                        <img src="img/5/photo12.jpg" alt=""/>
                        <img src="img/5/photo13.jpg" alt=""/>
                        <img src="img/5/photo14.jpg" alt=""/>
                    </div>
                </div>
                <div class="info">
                    <form action="" id="cost" method="POST">
                        <h3>Узнайте стоимость этого потолка <br/>для Вашей комнаты</h3>
                        <div class="input">
                            <p>Ваша комната</p>
                            <span><input type="text" name="square" value="12"/>м<sup>2</sup></span>
                        </div>
                        <div class="square-slider">
                            <span class="min">3</span>
                            <div class="square-slider-inner"></div>
                            <span class="max">50</span>
                        </div>
                        <p class="phone-label">Введите Ваш номер</p>
                        <input type="text" name="phone"/>
                        <input type="hidden" name="type" value="Узнать стоимость"/>
                        <input type="hidden" name="utm_term" value=""/>
                        <input type="hidden" name="utm_source" value=""/>
                        <input type="hidden" name="utm_medium" value=""/>
                        <input type="hidden" name="utm_campaign" value=""/>
                        <input type="hidden" name="utm_content" value=""/>
                        <input type="submit" class="btn" value="Узнать стоимость"/>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer id="footer">
        <div class="container">
            <div class="left-block">
                <img src="img/6/invert_logo.png" alt=""/>
            </div>
            <div href="#" class="toTop">
                <img src="img/6/up.png" alt=""/>
                Вверх
            </div>
            <div class="right-block">
                <?php echo $phone;?>
                <a href="#call" class="btn call-btn fancy">Заказать звонок</a>   
            </div>
        </div>
    </footer>
    <div id="copyright">
        <div class="container">
            <p class="unp">УНП691584558</p>
            <a href="http://deltaplan.by">Разработка и продвижение сайта DeltaStream</a>
        </div>
    </div>


    <div id="call" style="display:none;" class="vsplivashka">
        <form action="" method="POST" id="call-form">
            <h2>Заказать звонок</h2>
            <p class="description">Заполните форму и мы свяжемся с Вами в ближайшее время</p>
            <div class="input">
                <p>Введите Ваше имя</p>
                <input type="text" name="name" placeholder="Ваше имя"/>
            </div>
            <div class="input">
                <p>Введите Ваш телефон</p>
                <input type="text" name="phone" placeholder="+375(__)___-__-__"/>
            </div>
            <input type="hidden" name="type" value="Заказать звонок"/>
            <input type="hidden" name="utm_term" value=""/>
            <input type="hidden" name="utm_source" value=""/>
            <input type="hidden" name="utm_medium" value=""/>
            <input type="hidden" name="utm_campaign" value=""/>
            <input type="hidden" name="utm_content" value=""/>
            <input type="submit" class="btn" value="Заказать звонок"/>
        </form>
    </div>
    
    <div id="getPromo" style="display:none;" class="vsplivashka">
        <form action="" method="POST" id="getPromo-form">
            <h2></h2>
            <p>Для получения промокода и подробностей об условиях акции оставьте, пожалуйста, свой номер</p>
            <p><span>Внимание, промокод действителен в течение 10 дней!</span></p>
            <input type="text" name="phone" placeholder="+375(__)___-__-__"/>
            <input type="hidden" name="type" value="Получить промокод"/>
            <input type="hidden" name="utm_term" value=""/>
            <input type="hidden" name="utm_source" value=""/>
            <input type="hidden" name="utm_medium" value=""/>
            <input type="hidden" name="utm_campaign" value=""/>
            <input type="hidden" name="utm_content" value=""/>
            <input type="hidden" name="promokey" value=""/>
            <input type="submit" class="btn" value="Получить промокод"/>
        </form>
    </div>

    <div id="rassrochka" style="display:none;" class="vsplivashka">
        <form action="" method="POST" id="rassrochka-form">
            <h2>Узнать про рассрочку</h2>
            <p class="description">
                Заполните форму и мы свяжемся с Вами в ближайшее время, чтобы проконсультировать 
                по условиям рассрочки и ответить на все ваши вопросы
            </p>
            <div class="input">
                <p>Введите Ваше имя</p>
                <input type="text" name="name" placeholder="Ваше имя"/>
            </div>
            <div class="input">
                <p>Введите Ваш телефон</p>
                <input type="text" name="phone" placeholder="+375(__)___-__-__"/>
            </div>
            <input type="hidden" name="type" value="Узнать про рассрочку"/>
            <input type="hidden" name="utm_term" value=""/>
            <input type="hidden" name="utm_source" value=""/>
            <input type="hidden" name="utm_medium" value=""/>
            <input type="hidden" name="utm_campaign" value=""/>
            <input type="hidden" name="utm_content" value=""/>
            <input type="submit" class="btn" value="Узнать про рассрочку"/>
        </form>
    </div>
    

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/progressbar.min.js"></script>
    <script src="js/script.js"></script>

    <?php
        $utm_term = isset($_GET['utm_term']) ? $_GET["utm_term"] : "";
        quotemeta($utm_term);
        $utm_source = isset($_GET['utm_source']) ? $_GET["utm_source"] : "";
        quotemeta($utm_source);
        $utm_medium = isset($_GET["utm_medium"]) ? $_GET["utm_medium"] : "";
        quotemeta($utm_medium);
        $utm_campaign = isset($_GET['utm_campaign']) ? $_GET["utm_campaign"] : "";
        quotemeta($utm_campaign);
        $utm_content = isset($_GET['utm_content']) ? $_GET["utm_content"] : "";
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
                w.yaCounter50505745 = new Ya.Metrika({
                    id:50505745,
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
<noscript><div><img src="https://mc.yandex.ru/watch/50505745" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>