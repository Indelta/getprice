<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт квартир. Комплексный подход, все работы строго по ГОСТам, оплата по факту.</title>
    <meta name="Description" content="Ремонт квартир под ключ в Минске. Заключение договора, гарантия, без предоплаты. 12 лет опыта в сфере ремонта и строительства. Гибкие цены.">
    <link href="img/favicon.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <script src='js/jquery-3.1.1.min.js'></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/less.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="js/js-form.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90181425-8', 'auto');
        ga('send', 'pageview');
        /* Accurate bounce rate by time */
        if (!document.referrer ||
            document.referrer.split('/')[2].indexOf(location.hostname) != 0)
            setTimeout(function(){ga('send', 'event', 'New Visitor', location.pathname);}, 15000);
    </script>
</head>
<body>
<header>
    <div class="container">
        <img src="img/logo.png" class="logo" alt="">
        <p class="description">Ремонт квартир</p>
        <a href="#call" class="fancy button">Заказать звонок</a>
        <a href="tel:+375291224225" class="tel">+375 (29)<span>122-42-25</span></a>
    </div>
    <div class="line"></div>
</header>
<div class="utp">
    <div class="container">
        <h1>Ремонт квартир «под ключ»</h1>
        <div class="garant">
            <ul>
                <li>•  Демократичная ценовая политика  </li>
                <li>•  5 лет гарантии на все виды работ </li>
                <li>•  Узкопрофильные специалисты со стажем от 4 лет</li>
            </ul>
        </div>
        <div class="getPrice">
            <form action="" method="POST" id="get-price-form">
                <h2>Посмотрите прайс-лист на все наши услуги</h2>
                <p>для перехода в прайс-лист, зарегистрируйтесь, пожалуйста, на сайте</p>
                <p class="green">Быстрая регистрация по номеру телефона</p>
                <img src="img/arrow.png" alt="" class="down-arrow">
                <p class="text">Введите Ваш номер телефона:</p>
                <input type="text" name="phone" placeholder="+375 (__) ___ __ __" required>
                <input type="hidden" name="type" value="Переход в прайс-лист">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_content" value="">
                <input type="submit" class="button" value="Перейти в прайс-лист">
                <img src="img/logo-excel.png" alt="" class="logo-excel">
            </form>
        </div>
        <img src="img/utpPeople.png" class="utpPeople" alt="">
    </div>
</div>
<div class="pluses" id="pluses">
    <a href="#project" class="fancy">
        <img src="img/stickerProject.png" class="stickerProject" alt="">
    </a>
    <div class="container">
        <div class="leader">
            Компания "Гетремонт" заслуженно является лидером рынка<br>
            в сфере ремонтных и отделочных работ уже более 10 лет.
        </div>
        <h2>
            Ремонт – это не Ваши хлопоты, a наша работа!
        </h2>
        <ul>
            <li>
                <img src="img/pluses/1.png" alt="">
                <p>
                    5 лет гарантии
                    на все виды работ
                </p>
            </li>
            <li>
                <img src="img/pluses/2.png" alt="">
                <p>
                    Официальный договор
                    с указанием сроков сдачи
                </p>
            </li>
            <li>
                <img src="img/pluses/3.png" alt="">
                <p>
                    Оплата работ
                    по факту
                </p>
            </li>
            <li>
                <img src="img/pluses/4.png" alt="">
                <p>
                    До 10% экономии на материалах
                    за счёт оптовой закупки
                </p>
            </li>
        </ul>
        <img src="img/pluses/instruments.png" class="instruments" alt="">
    </div>
</div>
<div class="rates">
    <div class="container">
        <div class="items">
            <div class="item">
                <h2 class="item-title green">Косметический ремонт</h2>
                <img src="img/rates/cosmeticheskii.jpg" alt="">
                <ul>
                    <li>Демонтаж старых покрытий</li>
                    <li>Шпатлевка под обои или обычная шпатлевка</li>
                    <li>Окраска потолка</li>
                    <li>Поклейка стен обоями</li>
                    <li>Электромонтажные работы</li>
                    <li>Укладка ламинаталинолеума/плитки</li>
                    <li>Вывоз мусора, уборка помещения</li>
                </ul>
                <div class="item-price">
                    <p class="price">Цена:&nbsp;&nbsp;<span>от 60 руб/м<sup>2</sup></span></p>
                    <a href="#raschet" class="button green fancy">Заказать точный расчет</a>
                </div>
            </div>
            <div class="item center">
                <h2 class="item-title blue">Капитальный ремонт</h2>
                <img src="img/rates/kapitalniy.jpg" alt="">
                <ul>
                    <li>Демонтаж старых покрытий</li>
                    <li>Выравнивание пола, стен, потолка</li>
                    <li>Шпатлевка стен и потолков</li>
                    <li>Монтаж натяжных потолков</li>
                    <li>Поклейка стен обоями</li>
                    <li>Устройство плитки, ламината</li>
                    <li>Электромонтажные работы</li>
                    <li>Замена сантехники</li>
                    <li>Декоративная штукатурка стен</li>
                    <li>Вывоз мусора, уборка помещения</li>
                </ul>
                <div class="item-price">
                    <p class="price">Цена:&nbsp;&nbsp;<span>от 100 руб/м<sup>2</sup></span></p>
                    <a href="#raschet" class="button blue fancy">Заказать точный расчет</a>
                </div>
            </div>
            <div class="item">
                <h2 class="item-title yellow">Элитный ремонт</h2>
                <img src="img/rates/elitniy.jpg" alt="">
                <ul>
                    <li>Демонтаж старых покрытий</li>
                    <li>Монтаж простых и сложных гипсокартоновых конструкций</li>
                    <li>Выравнивание пола, стен, потолка</li>
                    <li>Шпатлевка стен и потолков</li>
                    <li>Монтаж натяжных потолков</li>
                    <li>Поклейка стен обоями</li>
                    <li>Устройство плитки, ламината</li>
                    <li>Электромонтажные работы</li>
                    <li>Замена дверей и окон</li>
                    <li>Укладка напольной и настенной плитки</li>
                    <li>Декоративная штукатурка стен</li>
                    <li>Вывоз мусора, убока помещения</li>
                </ul>
                <div class="item-price">
                    <p class="price">Цена:&nbsp;&nbsp;<span>от 200 руб/м<sup>2</sup></span></p>
                    <a href="#raschet" class="button yellow fancy">Заказать точный расчет</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="calculator" id="calculator">
    <div class="container">
        <div class="block">
            <form action method="post" id="calculatorForm">
                <div class="slide slide1">
                    <div class="title">
                        <h2>
                            Узнайте предварительную стоимость ремонта
                            и получите <span>персональную скидку 5%</span>
                        </h2>
                    </div>
                    <h3>Где собиратесь делать ремонт?</h3>
                    <ul class="choose">
                        <li>
                            <label for="flatRemont">
                                <img src="img/calculator/where/flat.jpg" alt="">
                                <p>
                                    <input type="radio" id="flatRemont" name="gdeRemont" value="Квартира" checked>
                                    Квартира
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="houseRemont">
                                <img src="img/calculator/where/house.jpg" alt="">
                                <p>
                                    <input type="radio" id="houseRemont" name="gdeRemont" value="Дом/коттедж">
                                    Дом/коттедж
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="ofisRemont">
                                <img src="img/calculator/where/ofis.jpg" alt="">
                                <p>
                                    <input type="radio" id="ofisRemont" name="gdeRemont" value="Офис">
                                    Офис
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="otherRemont">
                                <img src="img/calculator/where/other.jpg" alt="">
                                <p>
                                    <input type="radio" id="otherRemont" name="gdeRemont" value="Другое">
                                    Другое
                                </p>
                            </label>
                        </li>
                    </ul>
                    <div class="navigation">
                        <p class="next button">Далее</p>
                    </div>
                    <nav>
                        <ul>
                            <li class="active">
                                1
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3
                            </li>
                            <li>
                                4
                            </li>
                            <li>
                                5
                            </li>
                            <li>
                                <img src="img/calculator/present.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="slide slide2" style="display: none">
                    <div class="title">
                        <h2>
                            Узнайте предварительную стоимость ремонта
                            и получите <span>персональную скидку 5%</span>
                        </h2>
                    </div>
                    <h3>У Вас уже есть дизайн-проект?</h3>
                    <ul class="choose">
                        <li>
                            <label for="yesProject">
                                <img src="img/calculator/ifProject/yes.jpg" alt="">
                                <p>
                                    <input type="radio" id="yesProject" name="ifProject" value="Да" checked>
                                    Да
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="noProject">
                                <img src="img/calculator/ifProject/no.jpg" alt="">
                                <p>
                                    <input type="radio" id="noProject" name="ifProject" value="Нет">
                                    Нет
                                </p>
                            </label>
                        </li>
                    </ul>
                    <div class="navigation">
                        <p class="next button">Далее</p>
                        <p class="prev button">Назад</p>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                1
                            </li>
                            <li class="active">
                                2
                            </li>
                            <li>
                                3
                            </li>
                            <li>
                                4
                            </li>
                            <li>
                                5
                            </li>
                            <li>
                                <img src="img/calculator/present.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="slide slide3" style="display: none">
                    <div class="title">
                        <h2>
                            Узнайте предварительную стоимость ремонта
                            и получите <span>персональную скидку 5%</span>
                        </h2>
                    </div>
                    <h3>Укажите площадь помещения</h3>
                    <div class="selectArea">
                        <input type="text" name="square" id="square"> м2
                        <div class="slider" id="slider"></div>
                        <div class="sliderMinMax">
                            <p class="min"> 10 м2 </p>
                            <p class="max"> >200 м2</p>
                            <p class="center"> 100 м2 </p>
                        </div>
                    </div>
                    <div class="navigation">
                        <p class="next button">Далее</p>
                        <p class="prev button">Назад</p>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                1
                            </li>
                            <li>
                                2
                            </li>
                            <li class="active">
                                3
                            </li>
                            <li>
                                4
                            </li>
                            <li>
                                5
                            </li>
                            <li>
                                <img src="img/calculator/present.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="slide slide4" style="display: none">
                    <div class="title">
                        <h2>
                            Узнайте предварительную стоимость ремонта
                            и получите <span>персональную скидку 5%</span>
                        </h2>
                    </div>
                    <h3>Укажите  тип помещения</h3>
                    <ul class="choose">
                        <li>
                            <label for="novostroyka">
                                <img src="img/calculator/pomType/novostroyka.jpg" alt="">
                                <p>
                                    <input type="radio" id="novostroyka" name="pomType" value="Новостройка" checked>
                                    Новостройка
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="vtorichka">
                                <img src="img/calculator/pomType/vtorichka.jpg" alt="">
                                <p>
                                    <input type="radio" id="vtorichka" name="pomType" value="Вторичное жильё">
                                    Вторичное жильё
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="otherType">
                                <img src="img/calculator/pomType/otherType.jpg" alt="">
                                <p>
                                    <input type="radio" id="otherType" name="pomType" value="Другое" checked>
                                    Другое
                                </p>
                            </label>
                        </li>
                    </ul>
                    <div class="navigation">
                        <p class="next button">Далее</p>
                        <p class="prev button">Назад</p>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                1
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3
                            </li>
                            <li class="active">
                                4
                            </li>
                            <li>
                                5
                            </li>
                            <li>
                                <img src="img/calculator/present.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="slide slide5" style="display: none">
                    <div class="title">
                        <h2>
                            Узнайте предварительную стоимость ремонта
                            и получите <span>персональную скидку 5%</span>
                        </h2>
                    </div>
                    <h3>Необходимость перепланировки</h3>
                    <ul class="choose">
                        <li>
                            <label for="pereplanYes">
                                <img src="img/calculator/ifPereplan/yes.jpg" alt="">
                                <p>
                                    <input type="radio" id="pereplanYes" name="ifPereplan" value="Да" checked>
                                    Да
                                </p>
                            </label>
                        </li>
                        <li>
                            <label for="pereplanNo">
                                <img src="img/calculator/ifPereplan/no.jpg" alt="">
                                <p>
                                    <input type="radio" id="pereplanNo" name="ifPereplan" value="Нет">
                                    Нет
                                </p>
                            </label>
                        </li>
                    </ul>
                    <div class="navigation">
                        <p class="next button">Далее</p>
                        <p class="prev button">Назад</p>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                1
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3
                            </li>
                            <li>
                                4
                            </li>
                            <li class="active">
                                5
                            </li>
                            <li>
                                <img src="img/calculator/present.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="slide slide6" style="display: none">
                    <div class="ramka">
                        <h3>Спасибо за ваши ответы! </h3>
                        <div class="description">
                            Вы сэкономили время менеджера и заработали персональную скидку
                            на услуги компании Гетремонт 5%!
                        </div>
                        <div class="forma">
                            <p>
                                Для закрепления за Вами скидки,
                                оставьте свой номер телефона.
                            </p>
                            <input type="text" name="name" placeholder="Ваше имя">
                            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
                            <input type="hidden" name="type" value="Калькулятор">
                            <input type="hidden" name="utm_term" value="">
                            <input type="hidden" name="utm_source" value="">
                            <input type="hidden" name="utm_medium" value="">
                            <input type="hidden" name="utm_campaign" value="">
                            <input type="hidden" name="utm_content" value="">
                            <input type="submit" value="Получить скидку" class="button">
                        </div>
                    </div>
                    <nav>
                        <p class="prev button">Назад</p>
                        <ul>
                            <li>
                                1
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3
                            </li>
                            <li>
                                4
                            </li>
                            <li>
                                5
                            </li>
                            <li class="active">
                                <img src="img/calculator/presentActive.png" alt="">
                            </li>
                        </ul>
                    </nav>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="spec-predlog">
    <div class="contaienr">
        <h2>Специальное предложение <br>для владельцев новостроек!</h2>
        <div class="plashka">
            <img src="img/spec-predlog/logo.png" alt="">
            <form action="" method="POST" id="spec-predlog-form">
                <p class="text">Выберите свой жилой комплекс</p>
                <select name="gk-komplex" id="">
                    <option value="D3">D3</option>
                    <option value="Vogue">Vogue</option>
                    <option value="MinskWorld">MinskWorld</option>
                    <option value="Аквамарин">Аквамарин</option>
                    <option value="Аркадия">Аркадия</option>
                    <option value="Браславский">Браславский</option>
                    <option value="Брестский">Брестский</option>
                    <option value="Вивальди">Вивальди</option>
                    <option value="Гранд Хаус">Гранд Хаус</option>
                    <option value="Грушевский пасад">Грушевский пасад</option>
                    <option value="Дружба">Дружба</option>
                    <option value="Карамель">Карамель</option>
                    <option value="Лазурит">Лазурит</option>
                    <option value="Лира">Лира</option>
                    <option value="Мармелад">Мармелад</option>
                    <option value="Маяк Минска">Маяк Минска</option>
                    <option value="Мегаполис">Мегаполис</option>
                    <option value="Микеланджело">Микеланджело</option>
                    <option value="Набережный">Набережный</option>
                    <option value="Новая Боровая">Новая Боровая</option>
                    <option value="Новвая слобода">Новвая слобода</option>
                    <option value="Олимпик Парк">Олимпик Парк</option>
                    <option value="Озерцо">Озерцо</option>
                    <option value="Парк Челюскинцев">Парк Челюскинцев</option>
                    <option value="Престижино ">Престижино</option>
                    <option value="Променад">Променад</option>
                    <option value"Радужный">Радужный</option>
                    <option value="Разинский">Разинский</option>
                    <option value="Рахманинов">Рахманинов</option>
                    <option value="Славянский квартал">Славянский квартал</option>
                    <option value="Сухаревский квартал">Сухаревский квартал</option>
                    <option value="Уручский">Уручский</option>
                    <option value="Другой">Другой</option>
                </select>
                <p class="text">Введите Ваше имя:</p>
                <input type="text" name="name" placeholder="Ваше имя">
                <p class="text">Введите Ваш номер телефона:</p>
                <input type="text" name="phone" placeholder="+375 (__) ___ __ __">
                <input type="hidden" name="type" value="Специальное предложение">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_content" value="">
                <input type="submit" class="button" value="Получить специальное предложение">
            </form>
        </div>
    </div>
</div>
<div class="wedo" id="wedo">
    <div class="container">
        <h2>Мы знаем, как сделать любой ремонт быстро и качественно. </h2>
        <div class="description">А чтобы у вас не болела голова, мы:</div>
        <ul>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/1.png" alt="">
                </div>
                <div class="text">
                    Точно рассчитаем смету и пропишем стоимость работ в договоре
                </div>
            </li>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/2.png" alt="">
                </div>
                <div class="text">
                    Спланируем и согласуем с Вами все этапы ремонта
                </div>
            </li>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/3.png" alt="">
                </div>
                <div class="text">
                    Бесплатно проведём все подготовительные работы
                </div>
            </li>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/4.png" alt="">
                </div>
                <div class="text">
                    Согласуем график оплаты в несколько этапов и только по факту
                    выполненных работ
                </div>
            </li>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/5.png" alt="">
                </div>
                <div class="text">
                    Закупим материалы по оптовым ценам и доставим их на объект
                </div>
            </li>
            <li>
                <div class="imgBlock">
                    <img src="img/wedo/6.png" alt="">
                </div>
                <div class="text">
                    Выполним все работы согласно ГОСТу и в прописанные по договору сроки
                </div>
            </li>
        </ul>
        <div class="brand">
            <img src="img/grafitoWall.png" alt="">
        </div>
        <img src="img/wedoLeftMan.png" alt="" class="wedoLeftMan">
        <img src="img/wedoRightMan.png" alt="" class="wedoRightMan">
    </div>
</div>
<div class="freeZamer" id="freeZamer">
    <img src="img/metr.jpg" class="metr" alt="">
    <div class="container">
        <img src="img/planka.png" class="planka" alt="">
        <h2>
            Сделайте первый шаг к ремонту своей мечты!<br>
            Закажите бесплатный замер и составление сметы!
        </h2>
        <form action method="post" id="freeZamerForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
            <input type="hidden" name="type" value="Бесплатный замер">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" class="button" value="Заказать замер">
        </form>
    </div>
    <img src="img/metr.jpg" class="metr metrBottom" alt="">
</div>
<div class="reviews">
    <img src="img/reviews/shpatel.png" alt="" class="shpatel">
    <div class="container">
        <h2>Наши последние объекты</h2>
        <div class="owl-carousel reviewsCarousel">
            <div class="item">
                <img src="img/reviews/1.jpg" class="photo" alt="">
                <div class="description">
                    <div class="title">
                        <p class="adres">
                            Ул. Мястровская, 24, ремонт в новостройке общей площадью 82 м2
                        </p>
                        <p class="long">
                            2,5 месяца от момента заявки, до сдачи проекта
                        </p>
                    </div>
                    <div class="works">
                        Перечень работ: штукатурка стен, многоуровневые потолки, шпатлевка стен и потолка, облицовка плиткой, облицовка декоративным кирпичом, поклейка обоев, укладка ламината, проведение всех электромонтажных работ, установка сантехники.
                    </div>
                    <form action method="post" class="reviewsForm">
                        <div class="formName">
                            Быстрый расчёт стоимости ремонта
                        </div>
                        <p class="howFill">
                            Укажите метраж помещения, м2
                        </p>
                        <input type="text" name="square" placeholder="36 м2">
                        <input type="text" name="phone" placeholder="Ваш телефон" required>
                        <input type="hidden" name="type" value="Быстрый расчёт стоимости ремонта">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="submit" value="Рассчитать стоимость" class="button">
                    </form>
                </div>
            </div>
            <div class="item">
                <img src="img/reviews/2.jpg" class="photo" alt="">
                <div class="description">
                    <div class="title">
                        <p class="adres">
                            Ул. Германавская, 9, ремонт в новостройке общей площадью 46 м2
                        </p>
                        <p class="long">
                            1,5 месяца от момента заявки, до сдачи проекта
                        </p>
                    </div>
                    <div class="works">
                        Перечень работ: штукатурка стен, многоуровневые потолки, шпатлевка стен и потолка, облицовка плиткой, облицовка декоративным кирпичом, поклейка обоев, укладка ламината, проведение всех электромонтажных работ, установка сантехники.
                    </div>
                    <form action method="post" class="reviewsForm">
                        <div class="formName">
                            Быстрый расчёт стоимости ремонта
                        </div>
                        <p class="howFill">
                            Укажите метраж помещения, м2
                        </p>
                        <input type="text" name="square" placeholder="36 м2">
                        <input type="text" name="phone" placeholder="Ваш телефон" required>
                        <input type="hidden" name="type" value="Быстрый расчёт стоимости ремонта">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="submit" value="Рассчитать стоимость" class="button">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="podryadChoose">
    <img src="img/kraska.png" alt="" class="kraska">
    <div class="container">
        <img src="img/podryadImg.jpg" alt="" class="photo">
        <div class="text">
            <h3>
                Выбор подрядчика для ремонта — ответственное дело.
            </h3>
            <div class="description">
                За 2017 год мы исправили ошибки и завершили ремонты на 17 объектах после недобросовестных исполнителей. Поэтому мы не предлагаем Вам верить отзывам из интернета, а приглашаем Вас приехать на любой из наших текущих объектов, посмотреть, пообщаться с владельцем квартиры и только после этого принимать решение.
            </div>
            <form action method="post" id="podryadForm">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" placeholder="+375(**)***-**-**" required>
                <input type="hidden" name="type" value="Выбор подрядчика для ремонта">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_content" value="">
                <input type="submit" class="button" value="Посмотреть работу вживую">
            </form>
        </div>
    </div>
</div>
<div class="howwork">
    <div class="container">
        <h2>Как мы работаем</h2>
        <div class="block">
            <nav>
                <div class="stepNav selected" id="step1">
                    <p class="num">1</p>
                    <p class="name">Выезд на объект</p>
                </div>
                <div class="stepNav" id="step2">
                    <p class="num">2</p>
                    <p class="name">Заключение договора</p>
                </div>
                <div class="stepNav" id="step3">
                    <p class="num">3</p>
                    <p class="name">Закупка материалов</p>
                </div>
                <div class="stepNav" id="step4">
                    <p class="num">4</p>
                    <p class="name">Выполнение работ</p>
                </div>
                <div class="stepNav" id="step5">
                    <p class="num">5</p>
                    <p class="name">Сдача/приём работ</p>
                </div>
            </nav>
            <div class="content">
                <div class="step step1 selected">
                    <p>
                        Знакомство с объектом и заказчиками, осмотр объекта, составление ориентировочной сметы.
                    </p>
                    <img src="img/howwork/1.jpg" alt="">
                </div>
                <div class="step step2">
                    <p>
                        После подписания договора мы предоставляем помощь дизайнера в планировке квартиры. Определяем необходимые виды работ и их объемы для получения рационального подхода в финансовых затратах для заказчика.	Составление точной сметы на все виды работ.
                    </p>
                    <img src="img/howwork/2.jpg" alt="">
                </div>
                <div class="step step3">
                    <p>
                        Закупка материалов осуществляется по самым низким оптовым ценам от поставщиков и доставляется на объект на нашем транспорте.
                    </p>
                    <img src="img/howwork/3.jpg" alt="">
                </div>
                <div class="step step4">
                    <p>
                        Составление плана выполнения работ, позволяющего не только существенно сократить сроки ремонта, но и дающего план оплаты для заказчика.
                        Все виды работ выполняют узкоспециализированые мастера с большим опытом работы и профессиональным инструментом.
                        А все возникающие вопросы оперативно решает руководитель объекта.
                    </p>
                    <img src="img/howwork/4.jpg" alt="">
                </div>
                <div class="step step5">
                    <p>
                        После проведения всех работ, мы выкупим у Вас и вывезем все оставшиеся после ремонта материалы. По Вашему желанию мы проведём финальную чистовую уборку после ремонта.
                    </p>
                    <img src="img/howwork/5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="moreQuestions">
    <div class="container">
        <img src="img/ingener.jpg" class="ingener" alt="">
        <h2>У вас остались вопросы? </h2>
        <div class="description">
            Получите бесплатную
            консультацию ведущего иженера!
        </div>
        <div class="zvonok">
            <a href="#call" class="fancy">
                <img src="img/call.png" alt="">
            </a>
            <p class="text">
                Для этого позвоните нам по телефону
                <a href="tel:+375291825639" class="tel">+375 (29) 122-42-25</a>
                Или закажите обратный звонок на сайте.
                <a href="#call" class="button fancy">Заказать звонок</a>
            </p>
            <!-- <p class="text">
                Для этого закажите обратный звонок на сайте <br>и наш специалист свяжется с Вами в ближайшее время
                <a href="#call" class="button fancy">Заказать звонок</a>
            </p> -->
        </div>
    </div>
</div>
<div class="map">
    <div class="container">
        <div class="line">
            <img src="img/map.png" class="map" alt="">
            <p>Наш офис: г. Минск, ул. Каменногорская, 47, офис 25, второй этаж</p>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A80e8bf9065ef1325ae8519689680e40289d16007d299925ce2695c1de2fa9793&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=false"></script>
</div>
<footer>
    <div class="container">
        <img src="img/logo.png" class="logo" alt="">
        <p class="description">Ремонт квартир</p>
        <a href="#call" class="fancy button">Заказать звонок</a>
        <a href="tel:+375291825639" class="tel">+375 (29)<span>122-42-25</span></a>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <p class="unp">УНП: 191770575</p>
        <a href="http://www.deltaplan.by/" target="_blank">Разработано Deltaplan.by</a>
    </div>
</div>
<div id="call" style="display: none">
    <img src="img/ModalImg.jpg" alt="" class="ModalImg">
    <div class="form">
        <h2>
            Оставьте свой номер, и мы свяжемся с Вами в ближайшее время
        </h2>
        <form action method="POST" id="callForm" class="call">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" required placeholder="Ваше телефон"ё>
            <input type="hidden" name="type" value="Заказать звонок">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать звонок" class="button">
        </form>
    </div>
</div>
<div id="project" style="display: none">
    <img src="img/ModalProject.jpg" alt="" class="ModalProject">
    <div class="form">
        <h2>
            Оставьте свой номер, и мы свяжемся с Вами в ближайшее время
        </h2>
        <form action method="POST" id="projectForm" class="call" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" required placeholder="Ваш телефон">
            <input type="text" name="email" placeholder="Ваш e-mail">
            <input type="file" name="file" id="file_v" accept="image/*,application/msword,application/vnd.ms-excel,application/vnd.ms-powerpoint,text/plain,application/pdf">
            <input type="hidden" name="type" value="Готовый проект">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Получить расчёт" class="button">
        </form>
    </div>
</div>
<div id="raschet" style="display:none;">
    <img src="img/ModalImg.jpg" alt="" class="ModalImg">
    <div class="form">
        <h2>
            Оставьте свой номер, и мы свяжемся с Вами в ближайшее время
        </h2>
        <form action method="POST" id="raschet-form" class="call">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" required placeholder="Ваше телефон"ё>
            <input type="hidden" name="type" value="Заказать точный расчет">
            <input type="hidden" name="typeRemont" value="">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать точный расчет" class="button">
        </form>
    </div>
</div>
<script>
    new WOW().init();
</script>
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
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45142335 = new Ya.Metrika({
                    id:45142335,
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
<noscript><div><img src="https://mc.yandex.ru/watch/45142335" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>