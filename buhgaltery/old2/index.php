<?php //require_once 'config.php';?>
<?php
    $phone = '<a href="tel:+375445584321" class="tel">+375 (44) <span>558 43 21</span></a>';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Бухгалтерские услуги в Минске</title>
    <meta name="description"
          content="Профессиональные бухгалтерские услуги для бизнеса. Налоги. Зарплаты. Кадры. Документы.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/inputmask.js"></script>
    <script src="js/inputmask.phone.extensions.js"></script>
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
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90181425-25"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90181425-25');
        /* Accurate bounce rate by time */
        setTimeout(function(){
            gtag('event', location.pathname, {
                'event_category': 'Новый посетитель'
            });
        }, 15000);
    </script>
</head>
<body>
<a href="#ifClose" class="fancy" id="popupClosed"></a>
<div id="kalkulator-block">
    <!-- <div class="stickerCall">
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
            <input type="text" name="name" placeholder="Ваше имя" />
            <input type="text" name="phone" placeholder="+375(**)***-**-**" required />
            <input type="hidden" name="type" value="Мы Вам перезвоним" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_content" value="" />
            <input type="submit" value="Заказать звонок" />
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <?php //echo $phone;?>
        </div>
    </div> -->
    <div class="consultation-sticker">
        <a class="sticker fancy" href="#how40">
            Как сэкономить <span class="green">до <span>40%</span></span> на бух.услугах
        </a>
    </div>
    
        <!-- Главная страница -->
        <div class="screen" id="screen1">
            <?php include "templates/header.php";?>
            <div class="utp">
                <div class="container">
                    <div class="planka">
                        <h1>Бухгалтерское обслуживание <br/>малого и среднего бизнеса</h1>
                        <h2>Все риски застрахованы по договору</h2>
                        <!-- <div class="startQuest">
                            <p class="answer">
                                При заключении договора<br />консультация бухгалтера первой категории бесплатно!
                            </p>
                            <p class="button">
                                Рассчитать стоимость
                            </p>
                        </div> -->
                        <a href="#discount" class="sticker fancy">
                            <p>Бесплатная консультация</P>
                        </a>
                        <div class="startQuest">
                            <p class="button">Заказать</p>
                        </div>
                    </div>
                    <!-- <img src="img/redesign/woman.png" alt="" class="people" /> -->
                    <img src="img/redesign/buhwoman3.png" alt="" class="people" />
                </div>
                <div class="pluses">
                    <div class="container">
                        <div class="plus">
                            <img src="img/screen1/1-icon.png" alt="" />
                            <p>
                                Более 20 лет опыта работы в РБ. Только <br>бухгалтеры-профессионалы высшей категории
                            </p>
                        </div>
                        <div class="plus">
                            <img src="img/screen1/icon3.png" alt="" />
                            <p>Опыт прохождения <br>налоговых проверок</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="getprice">
                <div class="container">
                    <div class="plashka">
                        <div class="plashka-header">
                            <p>
                                Прейскурант обновлен <span><?php echo date('d.m.Y', strtotime("-3 days"));?></span>
                                <div class="refresh-img">
                                    <img src="img/redesign/refresh.svg" alt="">
                                </div>
                            </p>
                        </div>
                        <div class="plashka-body">
                            <h2>Посмотрите наш прейскурант цен</h2>
                            <h3>на бухгалтерские услуги</h3>
                            <form id="price-form" action="" method="POST">
                                <label>
                                    <p>Введите номер телефона</p>
                                    <input type="text" name="phone" placeholder="+375(__)___-__-__">
                                </label>
                                <input type="hidden" name="type" value="Скачать прайс-лист">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <label>
                                    <input type="submit" class="button" value="Скачать прайс-лист">
                                    <img src="img/redesign/download_pdf.png" class="icon" alt="">
                                </label>
                            </form>
                            <div class="link" style="display:none;">
                                <p>Ссылка на файл:</p>
                                <a href="Price_buhgaltery.pdf" target="_blank">Price_Buhgaltery.pdf</a>
                            </div>
                        </div>
                        <div class="plashka-footer">
                            <p>* ссылка с прайс-листом отправляется СМС сообщением на указанный номер телефона в течение 1 минуты и (или) открывается на сайте. После просмотра прайс-листа наш специалист может связаться с Вами для бесплатной консультации</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="getprice">
                <div class="container">
                    <img src="img/redesign/img2.png" alt="" class="right-img">
                    <h2>Получить уточненный прайс-лист <br>на услуги бухгалтерии</h2>
                    <div class="plashka">
                        Дополнительно вы получите бесплатное <br>консультационное обслуживание на 1 год
                    </div>
                    <form action="" method="post" id="getprice-form">
                        <div class="inputs">
                            <select name="sfera">
                                <option value="" disabled selected>Сфера деятельности</option>
                                <option value="Торговля (опт, розница)">Торговля (опт, розница)</option>
                                <option value="Производство">Производство</option>
                                <option value="АПК">АПК</option>
                                <option value="Услуги">Услуги</option>
                                <option value="Строительство">Строительство</option>
                                <option value="Несколько видов деятельности">Несколько видов деятельности</option>
                                <option value="Другая">Другая</option>
                            </select>
                            <input type="number" name="people" placeholder="Кол-во человек">
                            <input type="text" name="phone" placeholder="Телефон">
                            <input type="hidden" name="type" value="Получить уточненные расценки">
                            <input type="hidden" name="utm_term" value="">
                            <input type="hidden" name="utm_source" value="">
                            <input type="hidden" name="utm_medium" value="">
                            <input type="hidden" name="utm_campaign" value="">
                            <input type="hidden" name="utm_content" value="">
                        </div>
                        <input type="submit" class="button" value="Получить уточненные расценки">
                    </form>
                </div>
            </div> -->
            <!-- <div class="calculate" id="kalkulator">
                <div class="container">
                    <h2>
                        Отправьте заявку на расчет стоимости услуг для вашей компании<br />
                        и получите самое выгодное предложение в Минске!*
                    </h2>
                    <div class="info-block">
                        <p>
                            *Найдете предложение интересней? 
                            Расскажите нам и мы сделаем свое еще более привлекательным!
                        </p>
                    </div>
                    <div class="get-predlog">
                        <form action="" id="get-predlog-form">
                            <div class="inputs">
                                <input type="text" name="name" placeholder="Ваше имя">
                                <input type="text" name="phone" placeholder="Ваш телефон">
                                <input type="hidden" name="type" value="Получить предложение">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <input type="submit" class="button" value="Получить предложение">
                            </div>
                        </form>
                    </div> -->
                    <!--<div class="startQuest">
                        <p class="button">рассчитать стоимость</p>
                    </div> --> 
                <!-- </div>
            </div> -->
            <!-- преимущества -->
            <div class="advantages">
                <div class="container">
                    <div class="advant-list">
                        <div class="item">
                            <img src="img/screen1/advantages/4-icon.png" alt="" />
                            <p>Бесплатные консультации по юридическим аспектам ведения бухгалтерии каждому клиенту</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/advantages/2-icon.png" alt="" />
                            <p>Прозрачная система ценообразования и бесплатные дополнительные услуги</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/advantages/3-icon.png" alt="" />
                            <p>Ваша бухгалтерия будет работать без больничных, отпусков и ошибок</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- партнеры -->
            <div class="partners">
                <div class="container">
                    <h2>Нам уже доверили свой бизнес</h2>
                    <div class="slider owl-carousel owl-theme-default" id="partners-slider">
                        <div class="item">
                            <img src="img/screen1/partners/agro.jpg" alt="" />
                            <p>ООО &laquo;ПроМит Агро&raquo;</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/aksamit.jpg" alt="" />
                            <p>Частное предприятие «АксамитМебель»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/emount.jpg" alt="" />
                            <p>ООО «Эмаунт»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/mercuria.jpg" alt="" />
                            <p>Mercuria Eescti</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/okna.jpg" alt="" />
                            <p>ООО «Окна-Рамы»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/russki-les.jpg" alt="" />
                            <p>ООО «Русский лес»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/spartak.jpg" alt="" />
                            <p>ЧП &laquo;Спартакгаз&raquo;</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/sudba.jpg" alt="" />
                            <p>ООО «Моя судьба»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/temtei.jpg" alt="" />
                            <p>ООО «Темп-Тей»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/tradent.jpg" alt="" />
                            <p>ООО «ТрайднетАкадеми»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/varna.jpg" alt="" />
                            <p>ООО «Варна Инвест»</p>
                        </div>
                        <div class="item">
                            <img src="img/screen1/partners/zevs.jpg" alt="" />
                            <p>ООО СК &laquo;Зевс&raquo;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <form action method="post" id="kalkulatorForm">    
        <!-- Укажите сферу деятельности Вашей организации -->
        <div class="screen" id="screen2">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="active"><p>1</p></li>
                                <li><p>2</p></li>
                                <li><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <!--<li><p>6</p></li>
                                <li><p>7</p></li> -->
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите сферу деятельности Вашей организации</h2>
                                <ul>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Торговля" />
                                                Торговля (опт, розница)
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Услуги" />
                                                Услуги
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Производство" />
                                                Производство
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Строительство" />
                                                Cтроительство
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="sfera" value="АПК" />
                                            АПК
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Несколько видов деятельности" />
                                                Несколько видов деятельности
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <div class="choose">
                                                <input type="radio" name="sfera" value="Другая" />
                                                Другая
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            
                        </div>
                        <img src="img/screen2/people.png" alt="" class="people" />
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Выберите организационно-правовую форму Вашей организации -->
        <div class="screen" style="display: none" id="screen3">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="active"><p>2</p></li>
                                <li><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <!-- <li><p>6</p></li>
                                <li><p>7</p></li> -->
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>Выберите организационно-правовую форму Вашей организации:</h2>
                            <div class="wrapper">
                                <div class="pluses">
                                    <h3>Преимущества работы с профессиональной бухгалтерской компанией:</h3>
                                    <ul class="plusesList">
                                        <li>Вы не платите ФСЗН и отпускные штатного бухгалтера</li>
                                        <li>Ваша бухгалтерия работает 365 дней в году, без больничных и отпусков</li>
                                        <li>Вы экономите на организации рабочего места и бухгалтерском ПО</li>
                                        <li>При ошибке бухгалтера штраф платим мы (страхование ответственности)</li>
                                        <li>Стоимость таких услуг в 2-3 раза ниже средней зарплаты штатного бухгалтера</li>
                                    </ul>
                                </div>
                                <ul class="choose">
                                    <li>
                                        <label>
                                            <input type="radio" name="orgforma" value="ООО (ОДО)" />
                                            <span>ООО (ОДО)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="orgforma" value="ЧУП" />
                                            <span>ЧУП</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="orgforma" value="ОАО (АО, ЗАО)" />
                                            <span>ОАО (АО, ЗАО)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="orgforma" value="Иностранное предприятие или представительство" />
                                            <span>Иностранное предприятие или представительство</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="orgforma" value="Иная" />
                                            <span>Иная</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Укажите систему налогообложения Вашей компании -->
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="active"><p>3</p></li>
                                <li><p>4</p></li>
                                <li><p>5</p></li>
                                <!-- <li><p>6</p></li>
                                <li><p>7</p></li> -->
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите систему налогообложения Вашей компании</h2>
                            <div class="pluses">
                                <h3>В комплексное бухгалтерское обслуживание входят:</h3>
                                <ul class="plusesList">
                                    <li>Проверка и подготовка первичной документации</li>
                                    <li>Ведение бухгалтерского учёта</li>
                                    <li>Своевременное предоставление данных для их оплаты</li>
                                    <li>Подготовка и сдача отчётности</li>
                                    <li>Ведение клиент-банка</li>
                                    <li>Архивация и хранение документов</li>
                                    <li>Кадровое делопроизводство</li>
                                    <li>Участие в прохождении проверок</li>
                                    <li>Представление Ваших интересов в контролирующих органах</li>
                                    <li>Консультации</li>
                                </ul>
                            </div>
                            <ul class="choose">
                                <li>
                                    <label>
                                        <input type="radio" name="nalog" value="Упрощённая система налогообложения без НДС" />
                                        <span>Упрощённая система налогообложения без НДС</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="nalog" value="Упрощённая система налогообложения с НДС" />
                                        <span>Упрощённая система налогообложения с НДС</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="nalog" value="Общая система налогообложения" />
                                        <span>Общая система налогообложения</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="nalog" value="Ещё не определена/Другое" />
                                        <span>Ещё не определена/Другое</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <img src="img/screen4/people.png" alt="" class="people" />
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Есть ли у Вашей компании дополнительная отчетность?  -->
        <div class="screen" style="display: none" id="screen5">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="active"><p>4</p></li>
                                <li><p>5</p></li>
                                <!-- <li><p>6</p></li>
                                <li><p>7</p></li> -->
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>
                                Есть ли у Вашей компании дополнительная отчетность?<br />
                                Если да, то какая?
                            </h2>
                            <ul class="choose">
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Нет" />
                                        <span>Нет</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Налог на вмененный доход" />
                                        <span>Налог на вмененный доход</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Налог на доходы ИЮЛ" />
                                        <span>Налог на доходы ИЮЛ</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Прочая доп.отчетность" />
                                        <span>Прочая доп.отчетность</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Ежемесячная стат. отчетность" />
                                        <span>Ежемесячная стат. отчетность</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="otchetnost" value="Есть, но не знаю, какая" />
                                        <span>Есть, но не знаю, какая</span>
                                    </label>
                                </li>
                            </ul>
                            <!-- <div class="pluses">
                                 <a href="#call" class="fancy">
                                    <img src="img/screen5/icon.png" alt="" />
                                    <p>
                                        Сомневаетесь с ответом?<br />
                                        Получите бесплатную консультацию специалиста!
                                    </p>
                                </a> 
                            </div> -->
                        </div>
                        <img src="img/screen5/people.png" alt="" class="people" />
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Укажите количество сотрудников организации -->
        <!-- <div class="screen" style="display: none" id="screen6">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="active"><p>5</p></li>
                                <li><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите количество сотрудников организации</h2>
                            <div class="inputsLine">
                                <input type="text" name="people" id="people" />
                                <label for="people">человек</label>
                            </div>
                            <div class="sliderLine">
                                <div id="sliderPeople" class="slider"></div>
                                <div class="minmax">
                                    <p class="min">1</p>
                                    <p class="max">200</p>
                                </div>
                            </div>
                            <div class="pluses">
                                <img src="img/screen6/arr.png" alt="" />
                                <p>
                                    Постановка учётной политики организации и кадровые вопросы – бесплатно!<br />  Для численности до 5 человек
                                </p>
                            </div>
                        </div>
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Укажите приблизительное количество первичной документации в месяц -->
        <!-- <div class="screen" style="display: none" id="screen7">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="done"><p>5</p></li>
                                <li class="active"><p>6</p></li>
                                <li><p>7</p></li>
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>Укажите приблизительное количество первичной документации в месяц</h2>
                            <ul class="choose">
                                <li>
                                    <label>
                                        <input type="radio" name="documentsnum" value="До 20 документов" />
                                        <span>До 20 документов</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="documentsnum" value="20 - 50 документов" />
                                        <span>20 - 50 документов</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="documentsnum" value="50 - 100 документов" />
                                        <span>50 - 100 документов</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="documentsnum" value="Более 100 документов" />
                                        <span>Более 100 документов</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="documentsnum" value="Другое/не знаю" />
                                        <span>Другое/не знаю</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <?php include "templates/nextBlock.php";?>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Вы выбрали -->
        <!--<div class="screen" style="display: none" id="screen8">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="active"><p>5</p></li>
                                <li class="done"><p>6</p></li>
                                <li class="active"><p>7</p></li>
                            </ul>
                            <div class="next button2 nextOpacity">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="questCollector">
                            <div class="choosePlashka">
                                <div class="wrapper">
                                    <h2>Вы выбрали</h2>
                                    <ul>
                                        <li>
                                            <span class="color">• 1</span> Сфера деятельности: <span class="fullsfera"></span>
                                        </li>
                                        <li>
                                            <span class="color">• 2</span> <span class="fullorgforma"></span>
                                        </li>
                                        <li>
                                            <span class="color">• 3</span> <span class="fullnalog"></span>
                                        </li>
                                        <li>
                                            <span class="color">• 4</span> Дополнительная отчётность: <span class="fullotchetnost"></span>
                                        </li>
                                        <li>
                                            <span class="color">• 5</span> <span class="fullpeople"></span> сотрудников
                                        </li>
                                        <li>
                                            <span class="color">• 6</span> Количество первичной документации в месяц: <span class="fulldocumentsnum"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="progressBar">
                            <p class="text">Рассчитываем стоимость...</p>
                            <div class="linebar">
                                <div class="bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Форма -->
        <div class="screen" style="display: none" id="screen9">
            <div class="tabletview">
                <div class="container">
                    
                    <div class="plashka">
                        <nav class="navigation">
                            <div class="prev button2">
                                <p>Предыдущий шаг</p>
                            </div>
                            <ul class="steps">
                                <li class="done"><p>1</p></li>
                                <li class="done"><p>2</p></li>
                                <li class="done"><p>3</p></li>
                                <li class="done"><p>4</p></li>
                                <li class="active"><p>5</p></li>
                                <!-- <li class="done"><p>6</p></li>
                                <li class="active"><p>7</p></li> -->
                            </ul>
                            <div class="next button2">
                                <p>Следующий шаг</p>
                            </div>
                        </nav>
                        <div class="quest">
                            <h2>
                                Мы получили Вашу информацию и проведем расчет стоимости бухгалтерских услуг для Вашей компании
                            </h2>
<!--                            <div class="backtoQuest">-->
<!--                                ‹ Вернуться к вопросам-->
<!--                            </div>-->
                            <div class="inputsArea">
                                <input type="text" name="name" placeholder="Ваше имя" />
                                <input type="text" name="phone" placeholder="Ваш телефон *" />
                                <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                                <input type="hidden" name="type" value="Калькулятор" />
                                <input type="hidden" name="utm_term" value="" />
                                <input type="hidden" name="utm_source" value="" />
                                <input type="hidden" name="utm_medium" value="" />
                                <input type="hidden" name="utm_campaign" value="" />
                                <input type="hidden" name="utm_content" value="" />
                                <input type="submit" class="button" value="Получить расчёт стоимости" />
                            </div>
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
                        <nav class="navigation"></nav>
                        <div class="title">
                            Спасибо!
                        </div>
                        <div class="description">
                            В ближайшее время с Вами свяжется наш специалист!
                        </div>
                        <div class="line"></div>
                        <div class="backToQuest">
                            < вернуться на главную
                        </div>
                        <img src="img/thankyou/people.png" alt="" class="people" />
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="reviews">
        <div class="container">
            <h2>Что говорят о нас клиенты?</h2>
            <div class="content">
                <div class="review-slider owl-carousel">
                    <div class="item">
                        <img src="img/redesign/man1.jpg" alt="">
                        <p class="name">Сергей Федорчук</p>
                        <p class="company">директор ООО &laquo;Солвендо&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/redesign/man2.jpg" alt="">
                        <p class="name">Александр Божок</p>
                        <p class="company">директор ООО &laquo;Дилинг Гарант&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/redesign/man3.jpg" alt="">
                        <p class="name">Андрей Богачев</p>
                        <p class="company">директор предприятия &laquo;ТриАф-Строй&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/redesign/man4.jpg" alt="">
                        <p class="name">Юрий Окулевич</p>
                        <p class="company">директор группы предприятий &laquo;Атом&raquo;</p>
                    </div>
                </div>
                <div class="review-text">
                    <div class="item">
                        Всегда был сторонником штатного бухгалтера, ведь он рядом, как-то надежнее. Заказал экспресс-аудит, узнал много нового, а также сколько нужно доплатить в бюджет из-за некачественной работы сотрудника.<br>
                        Спасибо большое Екатерине, которая спокойно и в очень короткий срок исправила все вопросы, безболезненно и быстро провела переход учета с 1с7 на 1с8. <br>
                        Сейчас на все вопросы мы получаем ответы со ссылкой на законодательство, все мои идеи не воспринимаются в штыки и не режутся на корню фразой «это невозможно!», а дорабатываются, совершенствуются и внедряются в работу Екатериной. <br>
                        Глядя на бухгалтеров своих партнеров, всегда советую обратиться к Екатерине, т.к. сотрудничество с ней облегчает работу. <br>
                        Я был неправ и признаю это: бухгалтер должен быть не рядом, а на связи- это во-вторых, и безусловным профессионалом- это во-первых.
                    </div>
                    <div class="item" style="display:none;">
                        Долго искали бухгалтера, действительно разбирающегося в стройке, по совету обратились к Екатерине. Восстановила с нуля и бухучет, и налоги, и кадры. <br>
                        Прошла налоговую проверку без единого замечания, не то, что штрафа! Я вообще не знал, что такое возможно!<br>
                        Более того, нашла способы возврата НДС, хотя до этого инспекторы наотрез отказывались возвращать. <br>
                        Я не встречал ни одного бухгалтера, который бы так мастерски владел законодательной базой и приносил такую огромную и реальную пользу бизнесу. Браво!
                    </div>
                    <div class="item" style="display:none;">
                        От трёхлетней работы с AJOURE accounting только самые положительные впечатления. <br>
                        Надёжный партнер, который всегда оперативно и профессионально решит любые возникающие вопросы, поможет в трудную минуту, всегда войдет в положение клиента!
                    </div>
                    <div class="item" style="display:none;">
                        Отлаженные бизнес-процессы внутри компании- это такой же показатель успеха, как продажи и узнаваемый бренд. Я не хочу иметь штат неконтролируемых бухгалтеров, которые бездумно перебирают бумажки.<br>
                        Если вы планируете масштабировать и развивать свой бизнес, вам жизненно необходимо работать с Екатериной.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="unp">Частное унитарное предприятие по оказанию услуг &laquo;АЖУР эккаунтинг&raquo; УНП 191751792</p>
            <p class="name"><a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a></p>
        </div>
    </footer>
    <div id="call" style="display: none">
        <form action method="post" id="zvonokForm">
            <h2>
                Закажите обратный звонок
                и в ближайшее время
                мы Вам перезвоним
            </h2>
            <input type="text" name="name" placeholder="Ваше имя" />
            <input type="text" name="phone" placeholder="Ваш телефон" required />
            <input type="hidden" name="type" value="Заказ звонка" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_content" value="" />
            <input type="submit" value="Заказать звонок" class="button" />
        </form>
    </div>
    <div id="discount" style="display: none">
        <form action method="post" id="discountForm">
            <h2>
            Бесплатная консультация нашими специалистами с опытом прохождения налоговых проверок!
            </h2>
            <input type="text" name="name" placeholder="Ваше имя" />
            <input type="text" name="phone" placeholder="Ваш телефон" required />
            <input type="hidden" name="type" value="Заказать бесплатный аудит" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_content" value="" />
            <input type="submit" value="Заказать аудит" class="button" />
        </form>
    </div>
    <div id="how40" style="display: none;">
        <form method="post" id="how40form">
            <h2>Оставьте ваш телефон и мы расскажем как нужно сэкономить на оптимизации бух.услуг без рисков для бизнеса.</h2>
            <input type="text" name="phone" placeholder="Ваш телефон" required />
            <input type="hidden" name="type=" value="Как сэкономить 40% на бух.услугах?">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Получить консультацию" class="button">
        </form>
    </div>
    <div id="ifClose">
        <div class="form-block">
            <img src="img/girl-img.jpg" alt="" />
            <?php include_once 'change_action_date.php';?>
            <form action="" id="ifCloseForm">
                <h2>Не торопитесь уходить - у нас акция!</h2>
                <p>Оставьте заявку до 01.<?php print_r(date("m.Y", strtotime("+1 month", strtotime("m.Y"))));?> и получите в дополнение к основной услуге кадровый учёт бесплатно.</p>
                <input type="text" name="name" placeholder="Ваше имя" />
                <input type="text" name="phone" placeholder="Ваш телефон" required />
                <input type="hidden" name="type" value="Заказ звонка" />
                <input type="hidden" name="utm_term" value="" />
                <input type="hidden" name="utm_source" value="" />
                <input type="hidden" name="utm_medium" value="" />
                <input type="hidden" name="utm_campaign" value="" />
                <input type="hidden" name="utm_content" value="" />
                <button type="submit" class="button">Отправить</button>
            </form>
        </div>
    </div>
    <?php
    $utm_term = isset($_GET["utm_term"]) ? $_GET['utm_term'] : "";
    quotemeta($utm_term);
    $utm_source = isset($_GET["utm_source"]) ? $_GET['utm_source'] : "";
    quotemeta($utm_source);
    $utm_medium = isset($_GET["utm_medium"]) ? $_GET['utm_medium'] : "";
    quotemeta($utm_medium);
    $utm_campaign = isset($_GET["utm_campaign"]) ? $_GET['utm_campaign'] : "";
    quotemeta($utm_campaign);
    $utm_content = isset($_GET["utm_content"]) ? $_GET['utm_content'] : "";
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48813935 = new Ya.Metrika({
                    id:48813935,
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
<noscript><div><img src="https://mc.yandex.ru/watch/48813935" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>