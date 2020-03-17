<?php $phone = "<a href='tel:+79214483463' class='tel'>+7 (921) <span>448 34 43</span></a>";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кухни по индивидуальным проектам</title>
    <meta name="Description" content="Кухни по индивидуальным проектам">
    <link href="img/favicon.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" href="css/media.less">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <script src='js/jquery-3.1.1.min.js'></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/less.min.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css">
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/js-form.js"></script>
    <script src="js/script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124422607-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-124422607-7');
        /* Accurate bounce rate by time */
        setTimeout(function(){
            gtag('event', location.pathname, {
            'event_category': 'Новый посетитель'
            });
        }, 15000);
    </script>
</head>
<body>
<div id="backbutton" class="backbutton" style="display: none;"></div>
<header>
    <div class="header">
        <div class="container">
            <img src="img/log1.png" alt="" class="logo">
            <a href="#call" class="button fancy">Быстрый ответ на любой вопрос</a>
            <?php echo $phone;?>
            <div class="sitename">
                Кухни собственного производства <br>в Санкт-Петербурге
            </div>
        </div>
    </div>
    <div class="utp">
        <div class="container">
            <h1>Скидка 18% от фабрики</h1>
            <div class="description">
               Теперь работаем напрямую без дилеров! 
            </div>
            <div class="blocks">
                <div class="block">
                    <p class="num">1</p>
                    <p class="title">Собственная сеть салонов</p>
                    <p class="text">
                        У нас есть собственная сеть фирменных салонов в торговых центрах Питера, расположенных рядом с метро
                    </p>
                    <a href="#salon" class="button fancy"><span>Ближайший салон</span></a>
                </div>
                <div class="block">
                    <p class="num">2</p>
                    <p class="title">Лучшая коллекция 2018</p>
                    <p class="text">оцените самые популярные коллекции кухонь 2018</p>
                    <a href="#catalog" class="anchor button"><span>Каталог</span></a>
                </div>
                <div class="block">
                    <p class="num">3</p>
                    <p class="title">Дизайн-проект онлайн за 30 минут</p>
                    <p class="text">
                        Хотите получить проект Вашей кухни за полчаса, не выходя из дома и абсолютно бесплатно?
                    </p>
                    <a href="#getDesign" class="button fancy"><span>Получить дизайн-проект</span></a>
                </div>
            </div>
            <a href="#call" class="sticker fancy">
                <img src="img/utpSticker.png" alt="">
            </a>
        </div>
    </div>
</header>
<div class="kalkulator" id="kalkulator">
    <div class="container">
        <div class="plashka">
            <form action method="post" id="kalkulatorForm">
            <div class="step1 step" >
                <h2>Калькулятор расчёта цены</h2>
                <div class="planka">
                    ответьте на 5 вопросов получите дизайн-проект за 30 минут
                    с окончательной ценой от дизайнера-технолога фабрики
                </div>
                <img src="img/kalkulator/step1/sticker.png" alt="" class="sticker">
                <p class="start button next">Начать</p>
                <div class="pluses">
                    <div class="plus">
                        Самые короткие сроки <br>всего 14 дней
                    </div>
                    <div class="plus">
                       Работаем напрямую без дилеров
                    </div>
                    <div class="plus">
                        Двойной контроль качества.<br>
                        Менее 1% ошибок и рекламаций
                    </div>
                    <div class="plus">
                        Кухни только собственного производства
                    </div>
                </div>
            </div>
            <div class="step2 step" style="display: none">
                <div class="facts">
                    <h3>Факты о Вашей новой кухне</h3>
                    <ul>
                        <li>Кухни производятся только на автоматических линиях производств</li>
                        <li>Инженер-технолог рационально использует материалы и фурнитуру по технически-оптимизированным проектам</li>
                        <li>Поэтому Ваша кухня на 18% лучше по цене по сравнению с обычными кухнями под заказ.</li>
                    </ul>
                </div>
                <div class="choose">
                    <h2>Какой стиль кухни Вам ближе:</h2>
                    <ul>
                        <li>
                            <label for="provans">
                                <img src="img/kalkulator/step2/1.jpg" alt="">
                                <div class="chooseArea">
                                    <input type="radio" id="provans" name="style" value="Лёгкая классика и прованс">
                                    <p class="text">
                                        Легкая классика и прованс
                                    </p>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label for="minimalizm">
                                <img src="img/kalkulator/step2/2.jpg" alt="">
                                <div class="chooseArea">
                                    <input type="radio" id="minimalizm" name="style" value="Минимализм модерн">
                                    <p class="text">
                                        Минимализм и модерн
                                    </p>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label for="skandinav">
                                <img src="img/kalkulator/step2/3.jpg" alt="">
                                <div class="chooseArea">
                                    <input type="radio" id="skandinav" name="style" value="Скандинавский стиль">
                                    <p class="text">
                                        Скандинавский стиль
                                    </p>
                                </div>
                            </label>
                        </li>
                        <li>
                            <label for="dnstyle">
                                <img src="img/kalkulator/step2/4.jpg" alt="">
                                <div class="chooseArea">
                                    <input type="radio" id="dnstyle" name="style" value="Пока не знаю">
                                    <p class="text">
                                        Пока не знаю
                                    </p>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <p class="next button">далее</p>
                    <p class="prev">‹ назад</p>
                </div>
            </div>
            <div class="step3 step" style="display: none">
                <div class="facts">
                    <h3>Факты о Вашей новой кухне</h3>
                    <ul>
                        <li>Кухни производятся только на автоматических линиях производств</li>
                        <li>Инженер-технолог рационально использует материалы и фурнитуру по технически-оптимизированным проектам</li>
                        <li>Поэтому Ваша кухня на 18% лучше по цене по сравнению с обычными кухнями под заказ.</li>
                    </ul>
                </div>
                <div class="choose">
                    <h2>Укажите для расчета какой у Вас размер помещения (кухни):</h2>
                    <img src="img/kalkulator/step3/img.jpg" alt="">
                    <div class="sliders">
                        <div class="line">
                            длина кухни <input type="text" name="length" value="6" id="lengthValue"> м
                            <div class="sliderArea">
                                <div id="length"></div>
                                <div class="minmax">
                                    <p class="min">1</p>
                                    <p class="max">20</p>
                                </div>
                            </div>
                        </div>
                        <div class="line">
                            ширина кухни <input type="text" name="width" value="4" id="widthValue"> м
                            <div class="sliderArea">
                                <div id="width"></div>
                                <div class="minmax">
                                    <p class="min">1</p>
                                    <p class="max">20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="next button">далее</p>
                    <p class="prev">‹ назад</p>
                </div>
            </div>
            <div class="step4 step" style="display: none">
                <div class="facts">
                    <h3>Факты о Вашей новой кухне</h3>
                    <ul>
                        <li>Кухни производятся только на автоматических линиях производств</li>
                        <li>Инженер-технолог рационально использует материалы и фурнитуру по технически-оптимизированным проектам</li>
                        <li>Поэтому Ваша кухня на 18% лучше по цене по сравнению с обычными кухнями под заказ.</li>
                    </ul>
                </div>
                <div class="choose">
                    <h2>Подскажите форму Вашей кухни:</h2>
                    <ul class="chooseOutside">
                        <li>
                            <div class="images">
                                <img src="img/kalkulator/step4/pryam.jpg" alt="" style="display: block" class="pryam">
                                <img src="img/kalkulator/step4/ugol.jpg" alt="" style="display: none" class="ugol">
                                <img src="img/kalkulator/step4/pobraz.jpg" alt="" style="display: none" class="pobraz">
                                <img src="img/kalkulator/step4/ostrov.jpg" alt="" style="display: none" class="ostrov">
                                <img src="img/kalkulator/step4/dvuhriad.jpg" alt="" style="display: none" class="dvuhriad">
                            </div>
                            <ul class="chooseInside">
                                <li>
                                    <label for="pryam">
                                        <div class="chooseArea">
                                            <input type="radio" id="pryam" name="forma" value="Прямая">
                                            <p class="text">
                                                прямая
                                            </p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="ugol">
                                        <div class="chooseArea">
                                            <input type="radio" id="ugol" name="forma" value="Угловая">
                                            <p class="text">
                                                угловая
                                            </p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="pobraz">
                                        <div class="chooseArea">
                                            <input type="radio" id="pobraz" name="forma" value="П-образная">
                                            <p class="text">
                                                П-образная
                                            </p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="ostrov">
                                        <div class="chooseArea">
                                            <input type="radio" id="ostrov" name="forma" value="Островная">
                                            <p class="text">
                                                островная
                                            </p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <label for="dvuhriad">
                                        <div class="chooseArea">
                                            <input type="radio" id="dvuhriad" name="forma" value="Двухрядная">
                                            <p class="text">
                                                двухрядная
                                            </p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <label for="dnforma">
                                <img src="img/kalkulator/step4/dnforma.jpg" alt="">
                                <div class="chooseArea">
                                    <input type="radio" id="dnforma" name="forma" value="Не выбрано">
                                    <p class="text">
                                        Пока не знаю,
                                        посоветуйте
                                    </p>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <p class="next button">далее</p>
                    <p class="prev">‹ назад</p>
                </div>
            </div>
            <div class="step5 step" style="display: none">
                <div class="facts">
                    <h3>Факты о Вашей новой кухне</h3>
                    <ul>
                        <li>Кухни производятся только на автоматических линиях производств</li>
                        <li>Инженер-технолог рационально использует материалы и фурнитуру по технически-оптимизированным проектам</li>
                        <li>Поэтому Ваша кухня на 18% лучше по цене по сравнению с обычными кухнями под заказ.</li>
                    </ul>
                </div>
                <div class="choose">
                    <h2>Спасибо за Ваши ответы, теперь дело за нами!</h2>
                    <div class="content">
                        <img src="img/kalkulator/step5/chaynik.png" alt="">
                        <div class="text">
                            <p>
                                Мы не дарим скидки и подарки что-бы «заставить Вас купить». Мы делаем качественные кухни по отличной цене! Сейчас Вы это проверите.
                            </p>
                            <p>
                                Укажите телефон для связи дизайнера-технолога и в течении 30 минут Вы получите индивидуальный дизайн-проект с конкретной окончательной ценой.
                            </p>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input">
                            <p>Имя</p>
                            <input type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="input">
                            <p>Телефон</p>
                            <input type="text" name="phone" placeholder="+375(**)***-**-**">
                        </div>
                        <div class="input">
                            <p>Электронный адрес для отправки дизайн-проекта</p>
                            <input type="text" name="email" placeholder="Ваш e-mail">
                        </div>
                    </div>
                    <input type="hidden" name="type" value="Калькулятор">
                    <input type="hidden" name="utm_term" value="remont">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="получить цены" class="button">
                    <p class="prev">‹ назад</p>
                </div>
            </div>
            <div class="step thankYouStep" style="display: none">
                <div class="planka">
                    <h2>Спасибо! </h2>
                    <div class="text">
                        В течение 30 минут Вы получите дизайн-проект с конкретной окончательной ценой.
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="catalog" id="catalog">
    <div class="container">
        <h2>Каталог коллекций 2018:</h2>
        <div class="line"></div>
        <div class="collection leftCollection modulCollection">
            <h3>Коллекция «Скандик»</h3>
            <div class="description">
                Коллекция «Скандик» — это уникальное сочетание скандинавской сдержанности и теплоты домашнего очага. Лаконичные формы и фактуры натурального дерева создают неповторимый интерьер данного стиля. При этом основой при построении этих кухонь — является функциональность. Продуманность расположения всех шкафчиков, ящичков и техники – всё для того, что бы приготовление любимых блюд превратилось в настоящее удовольствие.
            </div>
            <div class="aboutPart">
                <img src="img/catalog/modul/sticker.png" alt="" class="sticker">
                <a href="img/catalog/skandik/1_large.jpg" class="fancy" data-fancybox="skandik">
                    <img src="img/catalog/skandik/1_large.jpg" alt="">
                </a>
                <div class="about">
                    <div class="colors">
                        <p class="title">Варианты цветов</p>
                        <ul>
                            <li>
                                <img src="img/catalog/skandik/color1.jpg" alt="" />
                                <p>Бардолино натуральный</p>
                            </li>
                            <li>
                                <img src="img/catalog/skandik/color2.jpg" alt="" />
                                <p>Дуб Давос трюфель</p>
                            </li>
                            <li>
                                <img src="img/catalog/skandik/color3.jpg" alt="" />
                                <p>Дуб Давос натуральный</p>
                            </li>
                            <li>
                                <img src="img/catalog/skandik/color4.jpg" alt="" />
                                <p>Дуб Сорано черно-коричневый</p>
                            </li>
                            <li>
                                <img src="img/catalog/skandik/color5.jpg" alt="" />
                                <p>Файнлайн крем</p>
                            </li>
                            <li>
                                <img src="img/catalog/skandik/color6.jpg" alt="" />
                                <p>Белый премиум</p>
                            </li>
                        </ul>
                        <a class="catalog-download fancy" href="#getPrice">
                            <img src="img/pdf-icon.png" alt="" />
                            Скачать каталог
                        </a>
                    </div>
                </div>
            </div>
            <div class="formPart">
                <div class="photos">
                    <a href="img/catalog/skandik/2_large.jpg" class="fancy" data-fancybox="skandik">
                        <img src="img/catalog/skandik/2.jpg" alt="">
                    </a>
                    <a href="img/catalog/skandik/3_large.jpg" class="fancy" data-fancybox="skandik">
                        <img src="img/catalog/skandik/3.jpg" alt="">
                    </a>
                    <a href="img/catalog/skandik/4_large.jpg" class="fancy" data-fancybox="skandik">
                        <img src="img/catalog/skandik/4.jpg" alt="">
                    </a>
                </div>
                <form action="" method="post" class="catalogForm">
                    <div class="title">
                        Просчитать цену под Ваши размеры <span>за 30 минут</span>
                    </div>
                    <input type="text" name="phone" placeholder="введите Ваш телефон">
                    <input type="hidden" name="type" value="Заказ из каталога Скандик">
                    <input type="hidden" name="utm_term" value="remont">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" class="button" value="Быстрый расчёт">
                </form>
            </div>
        </div>
        <div class="collection rightCollection milanCollection">
            <h3>Коллекция «Fresh»</h3>
            <div class="description">
                 Если вам захотелось взлететь над повседневностью и наполнить свежестью каждый ваш день — то эта коллекция для вас. Сочные цвета выполненные в 3D-глянце – вот что делает эту коллекцию уникальной и ультрасовременной. Сочетание стекла и пластика, современных форм и продуманного светового оформления создадут неповторимый интерьер вашей кухни и подчеркнут вашу яркую индивидуальность.
            </div>
            <div class="aboutPart">
                <img src="img/catalog/milan/sticker.png" alt="" class="sticker">
                <a href="img/catalog/fresh/1_large.jpg" class="fancy" data-fancybox="milan">
                    <img src="img/catalog/fresh/1_large.jpg" alt="">
                </a>
                <div class="about">
                    <div class="colors">
                        <p class="title">Варианты цветов</p>
                        <ul>
                            <li>
                                <img src="img/catalog/fresh/color1.jpg" alt="">
                                <p>Дуб Кендал коньяк</p>
                            </li>
                            <li>
                                <img src="img/catalog/fresh/color2.jpg" alt="">
                                <p>Дуб Термо черно-коричневый</p>
                            </li>
                            <li>
                                <img src="img/catalog/fresh/color3.jpg" alt="">
                                <p>Серый камень</p>
                            </li>
                            <li>
                                <img src="img/catalog/fresh/color4.jpg" alt="">
                                <p>Кашемир Серый</p>
                            </li>
                            <li>
                                <img src="img/catalog/fresh/color5.jpg" alt="">
                                <p>Белый платиновый</p>
                            </li>
                            <li>
                                <img src="img/catalog/fresh/color6.jpg" alt="">
                                <p>Голубой горизонт</p>
                            </li>
                        </ul>
                        <a class="catalog-download fancy" href="#getPrice">
                            <img src="img/pdf-icon.png" alt="" />
                            Скачать каталог
                        </a>
                    </div>
                </div>
            </div>
            <div class="formPart">
                <div class="photos">
                    <a href="img/catalog/fresh/2_large.jpg" class="fancy" data-fancybox="milan">
                        <img src="img/catalog/fresh/2.jpg" alt="">
                    </a>
                    <a href="img/catalog/fresh/3_large.jpg" class="fancy" data-fancybox="milan">
                        <img src="img/catalog/fresh/3.jpg" alt="">
                    </a>
                    <a href="img/catalog/fresh/4_large.jpg" class="fancy" data-fancybox="milan">
                        <img src="img/catalog/fresh/4.jpg" alt="">
                    </a>
                </div>
                <form action="" method="post" class="catalogForm">
                    <div class="title">
                        Просчитать эту кухню под Ваши размеры <span>за 30 минут</span>
                    </div>
                    <input type="text" name="phone" placeholder="введите Ваш телефон">
                    <input type="hidden" name="type" value="Заказ из каталога Милан">
                    <input type="hidden" name="utm_term" value="remont">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" class="button" value="быстрый расчёт">
                </form>
            </div>
        </div>
        <div class="collection leftCollection woodCollection">
            <h3>Коллекция «Классик»</h3>
            <div class="description">
                Какие бы веяние моды не бушевали за окном, «Классика» всегда будет оставаться классикой. Её очарование не подвластно времени. Столешница с фактурой натурального камня, великолепные ручки с фарфоровыми вставками, витринные шкафы со стильными решетками, придают вашей кухне особенную элегантность. А патинированные фасады с имитацией древесины в сочетании с изящными декоративными элементами, подчёркивают в ней невероятную торжественность.
            </div>
            <div class="aboutPart">
                <a href="img/catalog/classic/1_large.jpg" class="fancy" data-fancybox="wood">
                    <img src="img/catalog/classic/1_large.jpg" alt="">
                </a>
                <div class="about">
                    <div class="colors">
                        <p class="title">Варианты цветов</p>
                        <ul>
                            <li>
                                <img src="img/catalog/classic/color1.jpg" alt="">
                                <p>Береза майнау</p>
                            </li>
                            <li>
                                <img src="img/catalog/classic/color2.jpg" alt="">
                                <p>Вишня Локарно</p>
                            </li>
                            <li>
                                <img src="img/catalog/classic/color3.jpg" alt="">
                                <p>Груша Линдау</p>
                            </li>
                            <li>
                                <img src="img/catalog/classic/color4.jpg" alt="">
                                <p>Сосна Касцина</p>
                            </li>
                            <li>
                                <img src="img/catalog/classic/color5.jpg" alt="">
                                <p>Бук Кантри натуральный</p>
                            </li>
                            <li>
                                <img src="img/catalog/classic/color6.jpg" alt="">
                                <p>Орех Дижон натуральный</p>
                            </li>
                        </ul>
                        <a class="catalog-download fancy" href="#getPrice">
                            <img src="img/pdf-icon.png" alt="" />
                            Скачать каталог
                        </a>
                    </div>
                </div>
            </div>
            <div class="formPart">
                <div class="photos">
                    <a href="img/catalog/classic/2_large.jpg" class="fancy" data-fancybox="wood">
                        <img src="img/catalog/classic/2.jpg" alt="">
                    </a>
                    <a href="img/catalog/classic/3_large.jpg" class="fancy" data-fancybox="wood">
                        <img src="img/catalog/classic/3.jpg" alt="">
                    </a>
                    <a href="img/catalog/classic/4_large.jpg" class="fancy" data-fancybox="wood">
                        <img src="img/catalog/classic/4.jpg" alt="">
                    </a>
                </div>
                <form action="" method="post" class="catalogForm">
                    <div class="title">
                        Просчитать эту кухню под Ваши размеры <span>за 30 минут</span>
                    </div>
                    <input type="text" name="phone" placeholder="введите Ваш телефон">
                    <input type="hidden" name="type" value="Заказ из каталога Вуд|Винчестер">
                    <input type="hidden" name="utm_term" value="remont">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" class="button" value="быстрый расчёт">
                </form>
            </div>
        </div>
        <div id="notFound" class="notFound">
            <form action="" id="notFound-form">
                <div class="title">
                    <h2>Не нашли нужную кухню?</h2>
                    <h3>Получите полный каталог кухонь 2018</h3>
                </div>
                <div class="inputs">
                    <input type="text" name="phone" placeholder="Ваш телефон">
                    <input type="text" name="email" placeholder="Ваш e-mail">
                    <input type="hidden" name="type" value="Не нашли нужную модель">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="Получить" class="button">
                </div>
            </form>
            <div class="thankYou-link" style="display:none;">
                <h2>Спасибо!</h2>
                <p>Ссылка для скачивания файла</p>
                <a href="/DUET_catalog.pdf" target="_blank">http://getmeprice.ru/kuhni/DUET_catalog.pdf</a>
            </div>
        </div>
        <div id="skidki" class="skidki">
            <div class="title">
                <h3>Новая кухня – новая жизнь! </h3>
                <p class="description">Скидки на бытовую технику!</p>
            </div>
            <div class="content">
                <p>Скидка 25% на технику для кухни всем клиентам!</p>
                <p>Более 800 позиций техники для кухни от Bosch, Hansa, Electrolux, WeissGauff.</p>
            </div>
            <form action method="post" id="skidkaForm">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" placeholder="Ваш телефон">
                <input type="hidden" name="type" value="Скидки на технику">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_content" value="">
                <input type="submit" class="button" value="получить купон на скидку">
            </form>
        </div>
        <div id="rassrochka" class="rassrochka">
            <div class="left">
                <div class="title">
                    Собственная рассрочка на 3 месяца.<br>
                    Заказывайте сегодня,
                    платите потом!
                </div>
                <div class="description">
                    <!-- <img src="img/rassrochka/rassrochkaSticker.png" alt="" class="sticker"> -->
                    <form action method="post" id="rassrochkaForm">
                        <input type="text" name="name" placeholder="Ваше имя">
                        <input type="text" name="phone" placeholder="Ваш телефон">
                        <input type="hidden" name="type" value="Рассрочка">
                        <input type="hidden" name="utm_term" value="remont">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="submit" class="button" value="заказать в рассрочку">
                    </form>
                </div>
            </div>
            
        </div>
        <div class="footer">
            <div class="left">
                <p class="title">
                    Простой путь к новой кухне за 14 дней
                </p>
                <p class="text">
                    Телефон отдела розничных продаж: <?php echo $phone;?>
                </p>
            </div>
            <a href="#call" class="fancy button">Заказать звонок</a>
        </div>
        <div class="copyright">
            <p class="unp">ИНН 7814653393</p>
            <p class="deltaplan">
                <a href="http://www.deltaplan.by/" target="_blank">Разработка и продвижение сайта DELTAPLAN.BY</a>
            </p>
        </div>
    </div>
</div>

<div id="call" style="display: none">
    <form action method="POST" id="callForm">
        <div class="title">
            Закажите обратный звонок
            и в ближайшее время
            мы Вам перезвоним
        </div>
        <div class="planka">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+7(***)***-**-**">
            <input type="hidden" name="type" value="Заказать звонок">
            <input type="hidden" name="utm_term" value="remont">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Заказать звонок" class="button">
        </div>
    </form>
</div>
<div id="salon" style="display:none;">
    <form id="salon-form">
        <div class="title">
            Выберите ближайший к Вам салон
        </div>
        <div class="planka">
            <select name="metro">
                <option value="метро Ладожская">Метро Ладожская</option>
                <option value="метро Комендантский проспект">Метро Комендантский проспект</option>
                <option value="метро Звездная">Метро Звездная</option>
                <option value="г. Всеволожск">г. Всеволожск</option>
            </select>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Ваш телефон">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Связаться с салоном" class="button">
        </div>
    </form>
</div>
<div id="getPrice" style="display:none;">
    <form action="" id="getPrice-form">
        <div class="title">Получите полный каталог кухонь 2018</div>
        <div class="planka">
            <input type="text" name="name" placeholder="Введите Ваше имя">
            <input type="text" name="phone" placeholder="Введите Ваш телефон">
            <input type="hidden" name="type" value="Скачать каталог">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" class="button" value="Скачать каталог">
        </div>
    </form>
    <div class="thankYou with-link" style="display:none;">
        <h2>Спасибо</h2>
        <p>Ссылка для скачивания файла</p>
        <a href="/DUET_catalog.pdf" target="_blank">http://getmeprice.ru/kuhni/DUET_catalog.pdf</a>
    </div>
</div>
<div id="getDesign" style="display:none;">
    <form id="getDesign-form" action="">
        <div class="title">Дизайн-проект онлайн <br>за 30 минут</div>
        <div class="planka">
            <div class="label">
                <span>Стиль кухни:</span>
                <select name="style">
                    <option value="Легкая классика и прованс">Легкая классика и прованс</option>
                    <option value="Минимализм и модерн">Минимализм и модерн</option>
                    <option value="Скандинавский стиль">Скандинавский стиль</option>
                    <option value="Другой">Другой</option>
                </select>
            </div>
            <label>
                <span>Размер кухни:</span>
                <input type="text" name="razmer" placeholder="Например 6х4">
            </label>
            <p>Для уточнения деталей мы свяжемся с Вами по телефону</p>
            <input type="text" name="phone" placeholder="Ваш телефон">
            <input type="hidden" name="type" value="Заказать дизайн-проект">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" class="button" value="Заказать дизайн-проект">
        </div>
    </form>
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51139589 = new Ya.Metrika({
                    id:51139589,
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
<noscript><div><img src="https://mc.yandex.ru/watch/51139589" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>