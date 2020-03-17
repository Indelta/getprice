<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бухгалтерские и аудиторские услуги в Минске</title>
    <link href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
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
    <header>
        <div class="container">
            <div class="left">
                <div class="logo">
                    <img src="old2/img/logo.png" alt="">
                    <span>Бухгалтерские и аудиторские услуги в Минске</span>
                </div>
            </div>
            <div class="right">
                <a href="tel:+375445584321" class="tel"><span>+375 (44)</span> 558 43 21</a>
                <a href="#call" class="btn fancy">Заказать звонок</a>
            </div>
        </div>
    </header>
    <section id="utp">
        <div class="container">
            <div class="left">
                <h1>Бухгалтерское обслуживание малого и среднего бизнеса</h1>
                <p>Все риски застрахованы по договору</p>
                <a href="#call" class="fancy">
                    <div class="sticker">Бесплатная консультация</div>
                </a>
                <a href="#calculator" class="btn scrollTo">Заказать</a>
            </div>
            <div class="right">
                <h2>Высокий уровень</h2>
                <p>наших специалистов подтвержден:</p>
                <img src="img/folders.png" alt="">
            </div>
        </div>
        <div class="pluses">
            <div class="container">
                <div class="items">
                    <div class="item">
                        <img src="img/1-icon.png" alt="">
                        <span>Более 20 лет опыта ведения бизнеса в РБ. Только бухгалтеры профессионалы высшей категории</span>
                    </div>
                    <div class="item">
                        <img src="img/icon3.png" alt="">
                        <span>Опыт прохождения <br>налоговых проверок</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="calculator">
        <div class="container">
            <div class="blue-line">
                <p>Только до <span><?php echo (date('d.m.Y', strtotime("+3 days", strtotime(date("d.m.Y")))))?></span> скидка <span>100 BYN</span> на ведение бух.учета</p>
            </div>
            <h2>Быстрый online-расчет стоимости услуг для Вашей компании</h2>
            <form id="kalkulatorForm" action="" method="POST">
                <div class="calc">
                    <div class="sticker"><img src="img/sticker_100.png" alt=""></div>
                    <header>Для расчета стоимости введите данные в форму ниже</header>
                    <div class="step">
                        <p class="step-title">1. Выберите вид деятельности:</p>
                        <div class="radio-group">
                            <label class="active">
                                <input type="radio" name="sfera" value="Торговля (опт/розница)" checked>
                                <img src="img/1icon.jpg" alt="">
                                <p>Торговля (опт/розница)</p>
                            </label>
                            <label>
                                <input type="radio" name="sfera" value="Оказание услуг">
                                <img src="img/2icon.jpg" alt="">
                                <p>Оказание услуг</p>
                            </label>
                            <label>
                                <input type="radio" name="sfera" value="Производство">
                                <img src="img/3icon.jpg" alt="">
                                <p>Производство</p>
                            </label>
                            <label>
                                <input type="radio" name="sfera" value="IT">
                                <img src="img/4icon.jpg" alt="">
                                <p>IT</p>
                            </label>
                            <label>
                                <input type="radio" name="sfera" value="Строительство">
                                <img src="img/5icon.jpg" alt="">
                                <p>Строительство</p>
                            </label>
                            <label>
                                <input type="radio" name="sfera" value="Другое">
                                <img src="img/6icon.jpg" alt="">
                                <p>Другое</p>
                            </label>
                        </div>
                    </div>
                    <div class="step">
                        <p class="step-title">2. Выберите форму налогообложения:</p>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="nalog" value="УСН">
                                <p>УСН</p>
                            </label>
                            <label>
                                <input type="radio" name="nalog" value="УСН+НДС">
                                <p>УСН+НДС</p>
                            </label>
                            <label>
                                <input type="radio" name="nalog" value="Общая">
                                <p>Общая</p>
                            </label>
                            <label class="active">
                                <input type="radio" name="nalog" value="Единый налог" checked>
                                <p>Единый налог</p>
                            </label>
                        </div>
                    </div>
                    <div class="step">
                        <p class="step-title">3. Выберите форму собственности:</p>
                        <div class="radio-group">
                            <label class="active">
                                <input type="radio" name="orgforma" value="ИП" checked>
                                <p>ИП</p>
                            </label>
                            <label>
                                <input type="radio" name="orgforma" value="ЧТУП">
                                <p>ЧТУП</p>
                            </label>
                            <label>
                                <input type="radio" name="orgforma" value="ООО">
                                <p>ООО</p>
                            </label>
                            <label>
                                <input type="radio" name="orgforma" value="ОАО">
                                <p>ОАО</p>
                            </label>
                            <label>
                                <input type="radio" name="orgforma" value="ЗАО">
                                <p>ЗАО</p>
                            </label>
                            <label>
                                <input type="radio" name="orgforma" value="Иностранное предприятие">
                                <p>Иностраное предприятие</p>
                            </label>
                        </div>
                    </div>
                    <div class="step">
                        <p class="step-title">4. Выберите количество сотрудников:</p>
                        <div class="slider-container">
                            <div id="people-slider">
                                <span class="ui-bg"></span>
                            </div>
                            <input type="number" name="people-count" value="12">
                        </div>
                    </div>
                    <div class="step step-5">
                        <p class="step-title">5. Выберите удобный способ получения стоимости:</p>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="messenger" value="По телефону">
                                <img src="img/phone_icon.png" alt="">
                                <p>По телефону</p>
                            </label>
                            <label>
                                <input type="radio" name="messenger" value="WhatsApp">
                                <img src="img/whatts_icon.png" alt="">
                                <p>WhatsApp</p>
                            </label>
                            <label>
                                <input type="radio" name="messenger" value="Viber">
                                <img src="img/viber_icon.png" alt="">
                                <p>Viber</p>
                            </label>
                        </div>
                    </div>
                    <div class="step dark-step">
                        <div class="items">
                            <div class="item">
                                <label>
                                    <p>Введите номер телефона:</p>
                                    <input type="tel" name="phone" placeholder="+375 (**) ***-**-**">
                                </label>
                            </div>
                            <div class="item">
                                <input type="hidden" name="type" value="Калькулятор">
                                <input type="hidden" name="utm_term" value="">
                                <input type="hidden" name="utm_source" value="">
                                <input type="hidden" name="utm_medium" value="">
                                <input type="hidden" name="utm_campaign" value="">
                                <input type="hidden" name="utm_content" value="">
                                <input type="submit" value="Узнать стоимость услуг со скидкой 100 BYN" class="btn">
                                <p>Вы получите стоимость по выбранному способу связи в течение 20 минут</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <h2>Нам уже доверили свой бизнес</h2>
            <div class="slider owl-carousel owl-theme-default" id="partners-slider">
                <div class="item">
                    <img src="img/partners/agro.jpg" alt="" />
                    <p>ООО &laquo;ПроМит Агро&raquo;</p>
                </div>
                <div class="item">
                    <img src="img/partners/aksamit.jpg" alt="" />
                    <p>Частное предприятие «АксамитМебель»</p>
                </div>
                <div class="item">
                    <img src="img/partners/emount.jpg" alt="" />
                    <p>ООО «Эмаунт»</p>
                </div>
                <div class="item">
                    <img src="img/partners/mercuria.jpg" alt="" />
                    <p>Mercuria Eescti</p>
                </div>
                <div class="item">
                    <img src="img/partners/okna.jpg" alt="" />
                    <p>ООО «Окна-Рамы»</p>
                </div>
                <div class="item">
                    <img src="img/partners/russki-les.jpg" alt="" />
                    <p>ООО «Русский лес»</p>
                </div>
                <div class="item">
                    <img src="img/partners/spartak.jpg" alt="" />
                    <p>ЧП &laquo;Спартакгаз&raquo;</p>
                </div>
                <div class="item">
                    <img src="img/partners/sudba.jpg" alt="" />
                    <p>ООО «Моя судьба»</p>
                </div>
                <div class="item">
                    <img src="img/partners/temtei.jpg" alt="" />
                    <p>ООО «Темп-Тей»</p>
                </div>
                <div class="item">
                    <img src="img/partners/tradent.jpg" alt="" />
                    <p>ООО «ТрайднетАкадеми»</p>
                </div>
                <div class="item">
                    <img src="img/partners/varna.jpg" alt="" />
                    <p>ООО «Варна Инвест»</p>
                </div>
                <div class="item">
                    <img src="img/partners/zevs.jpg" alt="" />
                    <p>ООО СК &laquo;Зевс&raquo;</p>
                </div>
            </div>
        </div>
    </section>
    <section id="advantages">
        <div class="container">
            <div class="advant-list">
                <div class="item">
                    <img src="img/advantages/4-icon.png" alt="" />
                    <p>Бесплатные консультации по юридическим аспектам ведения бухгалтерии каждому клиенту</p>
                </div>
                <div class="item">
                    <img src="img/advantages/2-icon.png" alt="" />
                    <p>Прозрачная система ценообразования и бесплатные дополнительные услуги</p>
                </div>
                <div class="item">
                    <img src="img/advantages/3-icon.png" alt="" />
                    <p>Ваша бухгалтерия будет работать без больничных, отпусков и ошибок</p>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews">
        <div class="container">
            <h2>Что говорят о нас клиенты?</h2>
            <div class="content">
                <div class="review-slider owl-carousel">
                    <div class="item">
                        <img src="img/man1.jpg" alt="">
                        <p class="name">Сергей Федорчук</p>
                        <p class="company">директор ООО &laquo;Солвендо&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/man2.jpg" alt="">
                        <p class="name">Александр Божок</p>
                        <p class="company">директор ООО &laquo;Дилинг Гарант&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/man3.jpg" alt="">
                        <p class="name">Андрей Богачев</p>
                        <p class="company">директор предприятия &laquo;ТриАф-Строй&raquo;</p>
                    </div>
                    <div class="item">
                        <img src="img/man4.jpg" alt="">
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
                        От трёхлетней работы с компанией только самые положительные впечатления. <br>
                        Надёжный партнер, который всегда оперативно и профессионально решит любые возникающие вопросы, поможет в трудную минуту, всегда войдет в положение клиента!
                    </div>
                    <div class="item" style="display:none;">
                        Отлаженные бизнес-процессы внутри компании- это такой же показатель успеха, как продажи и узнаваемый бренд. Я не хочу иметь штат неконтролируемых бухгалтеров, которые бездумно перебирают бумажки.<br>
                        Если вы планируете масштабировать и развивать свой бизнес, вам жизненно необходимо работать с Екатериной.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p class="unp">УНП 191751792 г. Минск, ул. Грибоедова, 11, пн-пт 9:00 - 18:00</p>
            <p class="name"><a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN.BY</a></p>
        </div>
    </footer>
    <a href="#ifClose" class="fancy" id="popupClosed"></a>
    <div id="call" style="display: none">
        <form action method="post" id="zvonokForm">
            <h2>
                Закажите обратный звонок
                и в ближайшее время
                мы Вам перезвоним
            </h2>
            <input type="text" name="name" placeholder="Ваше имя" />
            <input type="tel" name="phone" placeholder="Ваш телефон" required />
            <input type="hidden" name="type" value="Заказ звонка" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_content" value="" />
            <input type="submit" value="Заказать звонок" class="btn" />
        </form>
    </div>
    
    <div id="ifClose">
        <div class="form-block">
            <img src="img/girl-img.jpg" alt="" />
            <form action="" id="ifCloseForm">
                <h2>Не торопитесь уходить - у нас акция!</h2>
                <p>Оставьте заявку до 01.<?php print_r(date("m.Y", strtotime("+1 month", strtotime("m.Y"))));?> и получите в дополнение к основной услуге кадровый учёт бесплатно.</p>
                <input type="text" name="name" placeholder="Ваше имя" />
                <input type="tel" name="phone" placeholder="Ваш телефон" required />
                <input type="hidden" name="type" value="Заказ звонка" />
                <input type="hidden" name="utm_term" value="" />
                <input type="hidden" name="utm_source" value="" />
                <input type="hidden" name="utm_medium" value="" />
                <input type="hidden" name="utm_campaign" value="" />
                <input type="hidden" name="utm_content" value="" />
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </div>
    <div id="thankyou" style="display:none">
        <h2>Спасибо!</h2>
        <h4>В ближайшее время с Вами свяжется специалист!</h4>
    </div>

    <a href="#thankyou" class="thankyou-trigger fancy"></a>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/inputmask.js"></script>
    <script src="js/inputmask.phone.extensions.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>

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
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/48813935" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>